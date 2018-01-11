<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artiste extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('artiste_model','Ion_auth_model'));
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->library('ion_auth');

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
    }


    public function index()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        } elseif ($this->ion_auth->is_admin()) { // remove this elseif if you want to enable this for non-admins
            $this->authrender('auth/edit_artiste');
        }
    }
    public function create()
    {

        $fileData = array();
        // File upload script
        $name = $_FILES["userfile"]["name"];
        $ext = end((explode(".", $name))); # extra () to prevent notice

        $config['upload_path']   = './uploads/artistes';
        $config['allowed_types'] = '|jpg|png|jpeg|PNG|JPEG|JPG|pdf';
        $config['max_size']      = 0;

        $config['upload_path']   = './uploads/artistes';
        $config['allowed_types'] = '|jpg|png|jpeg|PNG|JPEG|JPG|pdf';
        $config['max_size']      = 0;

        $this->load->library('upload', $config);
        $this->form_validation->set_rules('valeur', 'value', 'required');
        $this->form_validation->set_rules('name', 'name', 'required|min_length[2]');
        $this->form_validation->set_rules('texte', 'texte', 'required|min_length[2]');





        if ($this->form_validation->run() == true) {
            if ($this->upload->do_upload('userfile')) {
                $data = $this->upload->data(); // Get the file data
                $fileData[] = $data; // It's an array with many data
                // Interate throught the data to work with them
                foreach ($fileData as $file) {
                    $file_data = $file;
                }

                $this->db->insert('artiste', array(
                    // So you can work with the values, like:
                    'valeur' => $this->input->post('valeur', true),
                    'name' => $this->input->post('name', true), // TRUE is XSS protection
                    'texte' => $this->input->post('texte', true),
                    'file_name' => $file_data['file_name'],
                ));

                $this->session->set_flashdata('success', "<div class='alert alert-success' style='font-size: 20px;'>Succés.</div>");
                redirect('artiste');
            }
        } else {
            $this->session->set_flashdata('error', "<div class='alert alert-danger' style='font-size: 20px;'>Veuillez remplir toutes les cases.</div>");

            redirect('artiste');
        }
    }

    public function show_all()
    {
        $this->data["result"] = $this->artiste_model->get_where();
        $this->authrender('auth/show_artiste');
    }

    public function update($id)
    {
        //recup id
        // recup infos de la db
        $where = array(
            'id' => $id
        );
        $this->data["result"] = $this->artiste_model->get_where($where);
        $this->authrender('auth/update_post');
        // renvoyer post pré-rempli
    }

    // créer le post pré-rempli
    public function updated_post($id)
    {
        // recup info
        $name = $_POST['name'];
        $fonction = $_POST['fonction'];
        $gsm = $_POST['gsm'];
        $link = $_POST['link'];
        $id = $_POST['id_post'];
        // maj db, appel de la methode du model
        $this->artiste_model->update($name, $fonction, $gsm, $link, $id);
        // renvoyer message success
        $this->data["result"] = $this->equipe_model->get_where();
        $this->authrender('auth/show_all');
    }

    //suppression post
    public function delete($id)
    {
        // recup id entre paranthese dans la function
        // delete post
        $this->artiste_model->delete($id);
        // renvois message
        $this->authrender('auth/delete');
    }

    public function focus($id = false){ 
    // place en paramettre l'id
        //die(var_dump($id));
        if ($id===false) {
            $this->index();
            return;
        }
        $where = array("name" => urldecode($id));
        $this->data["result"] = $this->artiste_model->get_where($where);
        $this->renderblog('blog/artiste');
    }

    function slider(){
        $data = array();
        if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
            $filesCount = count($_FILES['userFiles']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = 'uploads/slider/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
            
            if(!empty($uploadData)){
                //Insert file information into the database
                $insert = $this->file->insert($uploadData);
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }
        //Get files data from database
        $data['files'] = $this->file->getRows();
        //Pass the files data to view
        $this->authrender('auth/edit_artiste');
    }
}

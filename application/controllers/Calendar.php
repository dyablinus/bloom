<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calendar extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('edit_model','Ion_auth_model'));
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
            $this->authrender('auth/calendar');
        }
    }
    public function create()
    {

        $fileData = array();
        // File upload script
        $name = $_FILES["userfile"]["name"];
        $ext = end((explode(".", $name))); # extra () to prevent notice

        $config['upload_path']   = './uploads/calendar/files';
        $config['allowed_types'] = '|jpg|png|jpeg|PNG|JPEG|JPG|pdf';
        $config['max_size']      = 0;

        $config['upload_path']   = './uploads/calendar/files';
        $config['allowed_types'] = '|jpg|png|jpeg|PNG|JPEG|JPG|pdf';
        $config['max_size']      = 0;

        $this->load->library('upload', $config);

        $this->form_validation->set_rules('title', 'Title', 'required|min_length[2]');
        $this->form_validation->set_rules('texte', 'texte', 'required|min_length[2]');




        if ($this->form_validation->run() == true) {
            if ($this->upload->do_upload('userfile')) {
                $data = $this->upload->data(); // Get the file data
                $fileData[] = $data; // It's an array with many data
                // Interate throught the data to work with them
                foreach ($fileData as $file) {
                    $file_data = $file;
                }

            if(!empty($start_date)) {
                $sd = DateTime::createFromFormat('d/m/Y H:i', $start_date);

            $start_date = formatDate ( $start_date, '/', '-', true, false );
            $sd = new DateTime($start_date);
            $start_date = $sd->format('Y-m-d H:i:s');

                $start_date_timestamp = $sd->getTimestamp();
            } else {
                $start_date = date("Y-m-d H:i:s", time());
                $start_date_timestamp = time();
            }

            if(!empty($end_date)) {
            
                
            $end_date = formatDate ( $end_date, '/', '-', true, true );
            $ed = new DateTime($end_date);
            
            $end_date = $ed->format('Y-m-d H:i:s');
            
            $end_date_timestamp = $ed->getTimestamp();

            } else {
                $end_date = date('Y-m-d H:i:s', time());
                $end_date_timestamp = time();
            }


                $this->db->insert('event', array(
                    // So you can work with the values, like:
                    'title' => $this->input->post('title', true), // TRUE is XSS protection
                    'texte' => $this->input->post('texte', true),
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'file_name' => $file_data['file_name'],
                ));

                $this->session->set_flashdata('success', "<div class='alert alert-success' style='font-size: 20px;'>Succès.</div>");
                redirect('calendar');
            }
        } else {
            $this->session->set_flashdata('error', "<div class='alert alert-danger' style='font-size: 20px;'>Veuillez remplir toutes les champs.</div>");

            redirect('calendar');
        }
    }

    public function show_all()
    {
        $this->data["result"] = $this->edit_model->get_where();
        $this->authrender('auth/show_all');
    }

    public function update($id)
    {
        //recup id
        // recup infos de la db
        $where = array(
            'id' => $id
        );
        $this->data["result"] = $this->edit_model->get_where($where);
        $this->authrender('auth/update_post');
        // renvoyer post pré-rempli
    }

    // créer le post pré-rempli
    public function updated_post($id)
    {
        // recup info
        $title = $_POST['title'];
        $texte = $_POST['texte'];
        $id = $_POST['id_post'];
        // maj db, appel de la methode du model
        $this->edit_model->update($title, $texte,$id);
        // renvoyer message success
        $this->data["result"] = $this->edit_model->get_where();
        $this->authrender('auth/show_all');
    }

    //suppression post
    public function delete($id)
    {
        // recup id entre paranthese dans la function
        // delete post
        $this->edit_model->delete($id);
        // renvois message
        $this->authrender('auth/delete');
    }

        public function draft()
    {
        if (!$this->ion_auth->logged_in()) {
        // redirect them to the login page
        redirect('auth/login', 'refresh');
        } elseif ($this->ion_auth->is_admin()) { // remove this elseif if you want to enable this for non-admins
        $this->data["result"] = $this->edit_model->get_where_draft();
        $this->authrender('auth/draft');
        }

    }

        public function save()
    {
        $fileData = array();
        // File upload script
        $name = $_FILES["userfile"]["name"];
        $ext = end((explode(".", $name))); # extra () to prevent notice

        $config['upload_path']   = './uploads/draft/files';
        $config['allowed_types'] = '|jpg|png|jpeg|PNG|JPEG|JPG|pdf';
        $config['max_size']      = 0;

        $config['upload_path']   = './uploads/draft/files';
        $config['allowed_types'] = '|jpg|png|jpeg|PNG|JPEG|JPG|pdf';
        $config['max_size']      = 0;

        $this->load->library('upload', $config);

        $this->form_validation->set_rules('valeur', 'value', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[2]');
        $this->form_validation->set_rules('texte', 'texte', 'required|min_length[2]');




        if ($this->form_validation->run() == true) {
            if ($this->upload->do_upload('userfile')) {
                $data = $this->upload->data(); // Get the file data
                $fileData[] = $data; // It's an array with many data
                // Interate throught the data to work with them
                foreach ($fileData as $file) {
                    $file_data = $file;
                }

                $this->db->insert('draft', array(
                    // So you can work with the values, like:
                    'valeur' => $this->input->post('valeur', true),
                    'title' => $this->input->post('title', true), // TRUE is XSS protection
                    'texte' => $this->input->post('texte', true),
                    'file_name' => $file_data['file_name'],
                ));

                $this->session->set_flashdata('success', "<div class='alert alert-success' style='font-size: 20px;'>Succès.</div>");
                redirect('edit');
            }
        } else {
            $this->session->set_flashdata('error', "<div class='alert alert-danger' style='font-size: 20px;'>Veuillez remplir toutes les champs.</div>");

            redirect('edit');
        }
    }

}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function index()
    {
        $this->render('/template/pages/home');
    }
    public function contact_post()
    {
        

        // récupérer les données
        $nom = $this->input->post('nom');
        $email = $this->input->post('email');
        $message = $this->input->post('message');

        // envoyer par email
        $data_msg = array(
                    "var" => "mavar",
                    "nom"=>$nom,
                    "email"=>$email,
                    "message"=>$message,
                    );
   
        $this->form_validation->set_rules('nom', 'Last name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('message', 'message', 'required');

        if ($this->form_validation->run() == false) {
                // redirect('/?validation=0&n='.$nom.'#section_register');
                redirect('/?validation=0&n='.$nom.'&c='.$nom.'&email='.$email.'&message='.$message.'#section_register');
        }

        // $this->load->library('email');
        $msg = $this->load->view("mail/index", $data_msg, true);


         // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     // En-têtes additionnels
        $headers .= 'From:BlanlTitle <contact@blanktilte.be>' . "\r\n";


        if (mail( 'contact@blanktilte.be', "Notification mail", $msg, $headers )) {
            redirect('/?mail=1#section_register');
        } else {
            redirect('/?mail=0#section_register');
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends MY_Controller
{

    public function index()
    {
        $this->renderblog('/blog/index');
    }



    public function contactprocess()
    {
        $errormsg = "";
        
        if (empty($_POST["fname"])) {
            $errormsg .= "Name required. ";
        } else {
            $fname = $_POST["fname"];
        }
        
        if (empty($_POST["email"])) {
            $errormsg .= "Email required. ";
        } else {
            $email = $_POST["email"];
        }
        
        
        if (empty($_POST["message"])) {
            $errormsg .= "Message required. ";
        } else {
            $message = $_POST["message"];
        }
        
        $success = '';
        if (!$errormsg) {
            //change receipent email and subject here
            $to = "contact@blanktitle.be";
            $subject = "Contact";
            //prepare email body
            $body_message = "";
            $body_message .= "Name: " . $fname ."\n";
            $body_message .= "email: " . $email ."\n";
            $body_message .= $message;
            
            $headers = 'From: '. $fname .' <'. $email .'>' . "\r\n" .
                        'Reply-To: ' . $email . "\r\n";
            
            $success = mail($to, $subject, $body_message, $headers);
        }
        
        if ($success) {
            echo "success";
        } else {
            echo "Something went wrong: ".$errormsg;
        }
    }
}

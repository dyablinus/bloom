<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Langchange extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->render('/template/pages/home');
    }
    public function change($lang_abbr)
    {
        $this->set_mylang($lang_abbr);
        redirect($_SERVER['HTTP_REFERER']);
    }
    protected function set_mylang($lang_abbr)
    {
        $this->tab_language = $this->config->item ( 'lang_uri_abbr' );
        if (in_array ( $lang_abbr, $this->config->item ( 'langArray' ) )) {
            $this->session->set_userdata('select_language', $lang_abbr);
            $this->current_language = $lang_abbr;
        }
    }
}

<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = "Museum Tengger | Login";
        $this->load->view('login', $data);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth');
    }
}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MOkapi extends CI_Controller
{
    public function index()
    {
        if($this->session->is_connected){
            $this->load->view('utilisateur/acceuil');
        }
        $this->load->view('header.php');
        $this->load->view('mokapi_home.php');
        $this->load->view('footer.php');
    }
}
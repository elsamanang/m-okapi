v<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UtilisateurModel');
    }
    public function form_inscription()
    {
        $this->load->view('header.php');
        $this->load->view('form_inscription.php');
        $this->load->view('footer.php');
    }
    public function nouvel_utilisateur(){
        $nomcomplet = $this->input->post('nomcomplet');
        $login = $this->input->post('login');
        $mdp = $this->input->post('mdp');
        $mdp_conf = $this->input->post('mdp_conf');
        $email = $this->input->post('email');
        if($mdp == $mdp_conf){
            $info= array(
                        'id'=> NULL,
                        'nomcomplet'=> $nomcomplet,
                        'login'=> $login,
                        'mdp'=> $mdp,
                        'email'=> $email,
                        'etat'=> FALSE

                    );
            $this->UtilisateurModel->creer_utilisateur($info);
            $lien = site_url();
            echo "inscription reussie <br> <a href='$lien'>acceuil</a>";
        }
        else{
            echo "Mot de passe non identique";
            $this->load->view('header.php');
            $this->load->view('form_inscription.php');
            $this->load->view('footer.php');
        }
    }
    public function connexion(){
        $login = $this->input->post('login');
        $mdp = $this->input->post('mdp');
        $d = array(
            'login' => $login,
            'mdp' => $mdp
        );
        
        $r = $this->UtilisateurModel->login($d);
        if(count($r) > 0){
            $user = $r[0];
            $d = array(
                'id' => $user->id,
                'nomcomplet' => $user->nomcomplet,
                'is_connected' => true
            );
            $this->session->set_userdata($d);
            $this->load->view('header.php');
            redirect('utilisateur/acceuil');
            $this->load->view('footer.php');
            
        }
        else{
            $error = array(
                'erreur'=> 'login ou mot de passe incorrect'
            );
            $this->session->set_flashdata($error);
            $this->load->view('header.php');
            $this->load->view('mokapi_home.php');
            $this->load->view('footer.php');
        }
    }
    public function acceuil(){
        if($this->session->is_connected){
            $this->load->view('header.php');
            $this->load->view('utilisateur/acceuil');
            $this->load->view('footer.php'); 
        }
        else{
            redirect();
            
        }
    }
    public function logout(){
        $this->session->unset_userdata('is_connected');
        redirect();
    }
}
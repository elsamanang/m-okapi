<?php
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
        $this->load->view('form_inscription.php');
    }
    public function form_authentification(){
        $this->load->view('form_authentification.php');
    }
    public function nouvel_utilisateur(){
        $nomcomplet = $this->input->post('nomcomplet');
        $login = $this->input->post('login');
        $mdp = $this->input->post('mdp');
        $mdp_conf = $this->input->post('mdp_conf');
        $email = $this->input->post('email');
        if($mdp == $mdp_conf){
            if(strlen($login) == 8){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('email', '"le mail est invalide"', 'trim|required|min_length[5]|max_length[20]|alpha dash|encode_php_tags|xss_clean');
                if(a){
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
                

            }
            else{
                echo "le mot de passe doit avoir au moins 8 caracteres";
                $this->load->view('form_inscription.php');
            }
        }
        else{
            echo "Mot de passe non identique";
            $this->load->view('form_inscription.php');
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
            redirect('utilisateur/acceuil');
            
        }
        else{
            $error = array(
                'erreur'=> 'login ou mot de passe incorrect'
            );
            $this->session->set_flashdata($error);
            $this->load->view('form_authentification');
        }
    }
    public function acceuil(){
        if($this->session->is_connected){
            $this->load->view('utilisateur/acceuil');
        }
        else{
            redirect();
            
        }
    }
    public function logout(){
        session_destroy();
        redirect();
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller
{
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
            $this->load->model('UtilisateurModel');
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
            $this->load->view('form_inscription.php');
        }
    }
}
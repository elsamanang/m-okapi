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

    //====================================================================================

    public function add_entree() {
        $this->form_validation->set_rules('nom','nom','required');
        $this->form_validation->set_rules('montant','montant','required');
        if($this->form_validation->run()){
            $nom = $this->input->post('nom');
            $montant = $this->input->post('montant');
            $user = $this->session->id;
            $date_ent = date('Y-m-d');
            #mettre dans le model
        }
    }
    public function add_catgorie_sortie() {
        $this->form_validation->set_rules('nom','nom','required');
        if($this->form_validation->run()){
            $nom = $this->input->post('nom');
            $user = $this->session->id;
            #mettre dans le model
        }
    }
    public function add_exercice_budgetaire() {
        $this->form_validation->set_rules('datedebut','datedebut','required');
        $this->form_validation->set_rules('datefin','datefin','required');
        $this->form_validation->set_rules('budgetinitial','budgetinitial','required');
        if($this->form_validation->run()){
            $datedebut = $this->input->post('datedebut');
            $datefin = $this->input->post('datefin');
            $budgetinitial = $this->input->post('budgetinitial');
            $user = $this->session->id;
            $date_creation = date('Y-m-d');
            #mettre dans le model
        }
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UtilisateurModel extends CI_Model{
    public $table = "utilisateur";
    public function creer_utilisateur($info){
        $this->db->insert($this->table, $info);

    }
}
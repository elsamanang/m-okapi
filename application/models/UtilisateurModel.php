<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UtilisateurModel extends CI_Model{

    /*===============================================================================================
    @var $TableCategorie
    @var $TableUtilisateur
    @explication les attributs prives de la classe representant des table de la DB
    */
    private $TableUtilisateur = 'utilisateur';
    private $TableCategorie = 'categorie_sortie';

    /*===============================================================================================
    @param void
    @return void
    @explication constructeur de la classe qui invoque celui de la super class
    */
    public function __construct()
    {
        parent::__construct();
    }

    /*===============================================================================================
    @param string $Pass
    @param string $Log
    @return object
    @explication renvoi toutes les infos selon les deux parametres
    */
    public function LogInModel($Pass, $Log)
    {
        return $this->db->where(['login' => $Log, 'mdp' => $Pass])
        ->get($this->TableUtilisateur)->result();
    }

    /*===============================================================================================
     @param string $Name
     @param string $Pass
     @param string $Log
     @param string $Email
     @return boolean
     @explication ajoute un nom,password,login,email dans la table utilisateur
     */
    public function CreateAccountModel($Name, $Pass, $Log, $Email)
    {
        $DataBase = [
            'nomcomplet' => $Name,
            'login' => $Log,
            'mdp' => $Pass,
            'email' => $Email,
            'etat' => false
        ];

        return $this->db->insert($this->TableUtilisateur, $DataBase);
    }

    /*===============================================================================================
    @param int $id
    @param string $pass
    @return boolean
    @explication update le password du user
    */
    public function SetPassUserAccountModel($id, $Pass)
    {
        $this->db->where('id', $id)->set('mdp', $Pass);

        return $this->db->update($this->TableUtilisateur);
    }

    /*===============================================================================================
    @param string $categorie
    @param string $Id
    @return boolean
    @explication ajoute une categorie dans la table categorie de sortie
    */
    public function CreateOneCategorieModel($Categorie, $Id)
    {
        $DataBase = ['nom' => $Categorie, 'id_utilisateur' => $Id];

        return $this->db->insert($this->TableCategorie, $DataBase);
    }

    /*===============================================================================================
     @param string $categorie
     @param string $Id
     @return object
     @explication renvoi toutes les categories
     */
    public function GetAllCategoriesModel()
    {
        return $this->db->select()->get($this->TableCategorie)->result();
    }
}
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DataAccess extends CI_Model{
  function __construct(){
    // Call the Model constructor
    parent::__construct();
  }

  public function getInfosUtilisateur($pseudo, $mdp){
    $req = "select visiteur.id as id, visiteur.nom as nom, visiteur.prenom as prenom, visiteur.statut as statut
				from visiteur
				where visiteur.login=? and visiteur.mdp=?";
		$rs = $this->db->query($req, array ($login, $mdp));
		$ligne = $rs->first_row('array');
		return $ligne;
  }
}

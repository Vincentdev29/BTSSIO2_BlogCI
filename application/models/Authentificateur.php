<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentificateur extends CI_Model{

  function __construct(){
    // Call the model constructor
    parent::__construct();
  }

  public function estConnecte(){
    return $this->session->userdata('idUser');
  }

  public function connecter(){
    $credentialUser = array(
      'idUser' => $idUser,
      'nom' => $nom,
      'prenom' => $prenom
    );

    $this->session->set_userdata($credentialUser);
  }

  public function authentifier($pseudo, $mdp){
    $this->load->model('dataAccess');

    $credentialUser = $this->dataAccess->getInfosUtilisateur($pseudo, $mdp);

    return $credentialUser;
  }

}

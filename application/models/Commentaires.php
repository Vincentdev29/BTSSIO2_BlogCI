<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Commentaires extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function getCommentaires($idBillet){
    $req="select COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as
contenu from t_commentaire where BIL_ID = $idBillet";
    $rs = $this->db->query($req);
    $lesCommentaires = $rs->result_array();
    return $lesCommentaires;
  }

  public function setCommentaires($idBillet, $dateComment, $auteurComment, $contenuComment){
    $data = array(
      'COM_DATE' => $dateComment,
      'COM_AUTEUR' => $auteurComment,
      'COM_CONTENU' => $contenuComment,
      'BIL_ID' => $idBillet
    );

    $this->db->insert('t_commentaire', $data);
  }
}

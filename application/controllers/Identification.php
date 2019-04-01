<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Identification extends CI_Controller{

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */

   public function index(){
     // Chargement du/des modèles
     redirect('/Site/');
     /*
     // Vérifie si l'utilisateur est connecte
     if(!$this->authentificateur->estConnecte()){
       $data = array();
       // Redirection page prin
       redirect('/Site/');
     }else
     */
   }

   public function inscription(){
     $data = array(
       'titre' => 'Inscription'
     );
     $this->load->view('templates/view_basePage', $data);
     $this->load->view('templates/view_header',$data);
     $this->load->view('templates/view_menuUnlogged');
     $this->load->view('view_inscription');
     $this->load->view('templates/view_endPage');
   }

   public function connexion(){
     $this->load->model('Authentificateur');

     $data = array(
       'titre' => 'Connexion',
       'erreur' => 'Login ou mot de passe incorrect',
       'connection' => $this->Authentificateur->estConnecte()
     );
     $this->load->view('templates/view_basePage', $data);
     $this->load->view('templates/view_header',$data);
     $this->load->view('templates/view_menuUnlogged');
     $this->load->view('view_connexion');
     $this->load->view('templates/view_endPage');
   }

   public function inscrireUtilisateur(){

   }

   public function profilUtilisateurConnecte($pseudo){

   }

   /**
   * Traite le retour du formulaire de connexion afin de connecter l'utilisateur
   * s'il est reconnu
   */
   public function seConnecter(){
    $this->load->model('Authentificateur');

     $pseudo = $this->input->post('pseudo');
     $mdp = $this->input->post('motdepasse');

     // Récupère les informations de l'utilisateur venant de la base. Si vide la variable est vide.
     $credentialUser = $this->Authentificateur->authentifier($pseudo, $mdp);

    if(empty($credentialUser)){
      $this->connexion();
    }else{
      $this->authentif->connecter($authUser['id'], $authUser['nom'], $authUser['prenom']);
      $this->index();
    }
   }

   public function seDeconnecter(){
     // Redirection après déconnection
     redirect('/Site/lesBillets');
   }
}

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
     $data = array(
       'titre' => 'Connexion'
     );
     $this->load->view('templates/view_basePage', $data);
     $this->load->view('templates/view_header',$data);
     $this->load->view('templates/view_menuUnlogged');
     $this->load->view('view_connexion');
     $this->load->view('templates/view_endPage');
   }


   public function profilUtilisateurConnecte($pseudo){
   }

   public function seConnecter(){
     // Si la connection est validé redirection sur la page d'accueil
     redirect('/Site/lesBillets');
   }

   public function seDeconnecter(){
     // Redirection après déconnection
     redirect('/Site/lesBillets');
   }
}

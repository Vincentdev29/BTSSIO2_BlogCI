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
     $this->load->view('templates/view_endPage');
   }

   public function connexion(){
     $data = array(
       'titre' => 'Connexion'
     );
     $this->load->view('templates/view_basePage', $data);
     $this->load->view('templates/view_header',$data);
     $this->load->view('templates/view_menuUnlogged');
     $this->load->view('templates/view_endPage');
   }
}

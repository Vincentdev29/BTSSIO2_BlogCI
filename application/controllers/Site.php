<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

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
	public function index()
	{
		$this->lesBillets();
	}

	public function lesBillets(){
		//Page d'accueil voir function index
		$this->load->model('Billet');
		//	On lance une requête
		$data = array(
			'titre' => 'Accueil',
			'lesBillets' => $this->Billet->getBillets()
		);
		//	On inclut une vue
		//$this->load->view('view_listBillet', $data);

		// Inclusion des vues en fonction de l'etat de connexion.
		if(!$this->authentificateur->estConnecte()){
			$this->load->view('templates/view_basePage', $data);
			$this->load->view('templates/view_header', $data);
			$this->load->view('templates/view_menuUnlogged', $data);
			$this->load->view('view_listBillet', $data);
			$this->load->view('templates/view_endPage');
		}else{
			$this->load->view('templates/view_basePage', $data);
			$this->load->view('templates/view_header', $data);
			$this->load->view('templates/view_menuLogged', $data);
			$this->load->view('view_listBillet');
			$this->load->view('templates/view_endPage');
		}
	}

  public function leBillet($idBillet){
    $this->load->model('Billet');
    // On lance une requête
    $data['billet'] = $this->Billet->getBillet($idBillet);
    $data['titre'] = 'Billet';
		$this->load->model('Commentaires');
		$data['lesCommentaires'] = $this->Commentaires->getCommentaires($idBillet);
    // Ancienne appel de la vue
    //$this->load->view('view_billet', $data);

		//Nouveau modèle avec templates
		$this->load->view('templates/view_basePage', $data);
		$this->load->view('templates/view_header', $data);
		$this->load->view('templates/view_menuUnlogged', $data);
		$this->load->view('view_billet', $data);
		$this->load->view('templates/view_endPage');
  }


	public function submitFormulaireCom($idBillet){
		//Recup info du form de la page pour ajout de com
		$this->load->model('Commentaires');
		$auteur = $this->input->post('auteur');
		$contenu = $this->input->post('comment');
		//Lance une requete pour l'ajout du commentaire
		$this->Commentaires->setCommentaires($idBillet, date('Y-m-d H:i:s.u'), $auteur, $contenu);

		//Recharge la page du billet
		redirect('/Site/leBillet/'.$idBillet);
	}
}

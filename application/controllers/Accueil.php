<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->load->model('GetDonnees');
        $this->load->model('InsertDonnees');

    }

    // ajout argent view
    public function ajouterArgentView() {
        $donnees = $this->GetDonnees->getAllCode();

        $this->load->view('pages/ajout_argent', array('donnees' => $donnees));
    }

    // ajout argent
    public function ajoutArgent($numCode) {
        $code = $this->GetDonnees->getCode($numCode);

        // ajout argent user
        
    }
}
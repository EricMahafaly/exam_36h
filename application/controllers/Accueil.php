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
    public function ajoutArgent() {
        $numCode = $this->input->post('code');
        $code = $this->GetDonnees->getCode($numCode);
        $tarif = 0;
        foreach($code as $row) {
            $tarif = $row->tarif;
        }

        // ajout argent user
        $this->InsertDonnees->ajoutArgentUser($tarif, $_SESSION['id']);

        redirect('/Form/loginView');
    }

    // choix objectif
    public function choixOjectif() {
        $this->load->view('/pages/choix_objectif');
    }

    // perdre poids
    public function perdrePoids() {
        $poidsPerdre = $this->input->post('poids');

        
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('GetDonnees');
        $this->load->model('InsertDonnees');
    }
    // affiche view Login
    public function loginView() {
        $this->load->view('/formulaire/login');
    }

    // controller login
    public function loginController() {
        $this->load->library('session');
        $mdp = $this->input->post('mdp');
        if($mdp == 'eric') {
            // Définir une valeur de session
            $this->session->set_userdata('pass', $mdp);
            
            // Récupérer une valeur de session
            $username = $this->session->userdata('pass');

            $this->load->view('/pages/accueil');
        } else {
            echo "echoue";
        }
    }

    // affiche view inscription
    public function inscriptionView() {

        $result = $this->GetDonnees->getUser();
        /*
        foreach ($result as $row) {
            echo $colonne1 = $row->nom;
            // Faites ce que vous voulez avec les données récupérées
        }
        */

        $this->load->view('/formulaire/inscription', $result);
    }

    // inscription
    public function inscriptionController() {
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $email = $this->input->post('email');
        $pwd = $this->input->post('pwd');
        $date_naissance = $this->input->post('date_naissance');

        $tab_info = array('nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'pwd' => $pwd, 'date_naissance' => $date_naissance);
        
        $this->InsertDonnees->inscription($tab_info);
    }

}
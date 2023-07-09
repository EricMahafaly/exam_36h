<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
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
        $this->load->view('/formulaire/inscription');
    }

}
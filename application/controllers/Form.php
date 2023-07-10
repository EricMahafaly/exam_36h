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
        $mdp = $this->input->post('mdp');
        $email = $this->input->post('email');
        $result = $this->GetDonnees->getUser();
        $check = 0;
        foreach($result as $row) {
            if($row->email == $email && $row->pwd == $mdp) {
                $check += 1;

                // Définir une valeur de session
                $this->session->set_userdata('email', $row->email);

                $this->load->view('/pages/accueil');
            }
        }

        if($check == 0) {
            redirect('/Form/loginView');
        }
    }

    // affiche view inscription
    public function inscriptionView() {
        $this->load->view('/formulaire/inscription');
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
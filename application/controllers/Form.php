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
        if(isset($_SESSION['id'])) {
            $this->load->view('/pages/accueil');
        } else {
            $this->load->view('/formulaire/login');
        }
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
                $_SESSION['id'] = $row->id_user;

            }
        }
        
        if($check == 0) {
            redirect('/Form/loginView');
        } else {

            $this->load->view('/pages/accueil');
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
        $genre = $this->input->post('genre');
        $taille = $this->input->post('taille');
        $poids = $this->input->post('poids');

        $tab_info = array('nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'pwd' => $pwd, 'date_naissance' => $date_naissance, 'genre' => $genre, 'taille' => $taille, 'poids' => $poids);
        
        $this->InsertDonnees->inscription($tab_info);
        $this->InsertDonnees->ajoutUserArgent();

        redirect('/Form/loginView');
    }
}
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
        if(isset($_SESSION['id']) && !isset($_SESSION['admin'])) {
            $argent = $this->GetDonnees->getArgentById($_SESSION['id']);
            $allCode = $this->GetDonnees->getAllCode();
            $information = $this->GetDonnees->getUserById($_SESSION['id']);
            $this->load->view('/pages/accueil', array('allCode' => $allCode, 'info' => $information, 'argent' => $argent));
        } else if(isset($_SESSION['id']) && isset($_SESSION['admin'])) {
            $this->load->view('pages_back/accueil_admin');
        } else if(!isset($_SESSION['id']) && !isset($_SESSION['admin'])) {
            $this->load->view('formulaire/login');
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

                if($row->est_admin == 1) {
                    $_SESSION['adimin'] = 1;
                    $this->load->view('pages_back/accueil_admin');

                } else {
                    $_SESSION['id'] = $row->id_user;
                }

            }
        }

        if($check == 0) {
            redirect('/Form/loginView');
        } else if(isset($_SESSION['id'])) {
            $argent = $this->GetDonnees->getArgentById($_SESSION['id']);
            $allCode = $this->GetDonnees->getAllCode();
            $information = $this->GetDonnees->getUserById($_SESSION['id']);
            $this->load->view('/pages/accueil', array('allCode' => $allCode, 'info' => $information, 'argent' => $argent));
        }
    }

    // affiche view inscription
    public function inscriptionView() {
        $this->load->view('/formulaire/inscription');
    }

    // inscription 1
    public function inscriptionControllerOne() {
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $email = $this->input->post('email');
        $pwd = $this->input->post('mdp');
        $date_naissance = $this->input->post('date_naissance');
        $genre = $this->input->post('genre');
        

        $tab_info = array('nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'pwd' => $pwd, 'date_naissance' => $date_naissance, 'genre' => $genre, 'taille' => 0.00, 'poids' => 0.00);
        
        $_SESSION['all_info'] = $tab_info;
        $this->load->view('formulaire/inscription2');
    }

    // inscription 2
    public function inscriptionControllerTwo() {
        $taille = $this->input->post('taille');
        $poids = $this->input->post('poids');

        $tab_info = $_SESSION['all_info'];
        $tab_info['taille'] = $this->input->post('taille');
        $tab_info['poids'] = $this->input->post('poids');

        $this->InsertDonnees->inscription($tab_info);
        $this->InsertDonnees->ajoutUserArgent();

        echo $this->input->post('taille');

        redirect('/Form/loginView');
    }

    // view inscription two
    public function inscriptionTowView() {
        $this->load->view('formulaire/inscription2');
    }
}
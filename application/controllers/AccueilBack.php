<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccueilBack extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->load->model('GetDonnees');
        $this->load->model('InsertDonnees');

    }

    // view CRUD regime
    public function crudRegime() {
        $result_perdre = $this->GetDonnees->getAllRegime();

        $this->load->view('crud_regime', array('donneesPerdre' => $result_perdre));
        
    } 
}
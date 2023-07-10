<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertDonnees extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // insert user
    public function inscription($tab_info) {
        $sql = "INSERT INTO users VALUES (DEFAULT, '%s', '%s', '%s', '%s', '%s', 0)";
        $qeury = sprintf($sql, $tab_info['nom'], $tab_info['prenom'], $tab_info['email'], $tab_info['pwd'], $tab_info['date_naissance']);
        $this->db->query($qeury);
    }
}

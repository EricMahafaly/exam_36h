<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertDonnees extends CI_Model {
    public function __construct() {
        parent::__construct();

    }

    // insert user
    public function inscription($tab_info) {
        $sql = "INSERT INTO users VALUES (DEFAULT, '%s', '%s', '%s', '%s', '%s', 0)";
        $query = sprintf($sql, $tab_info['nom'], $tab_info['prenom'], $tab_info['email'], $tab_info['pwd'], $tab_info['date_naissance']);
        $this->db->query($query);
    }

    // insert morphologie
    public function insertMorpho($tab_morpho, $idUser) {

        $sql = "INSERT INTO morphologie VALUES (DEFAULT, %d, %d, %d, %d)";
        $query = sprintf($sql,  $tab_morpho['genre'], $tab_morpho['taille'], $tab_morpho['poids'], $idUser);
        
        $this->db->query($query);
    }
}

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertDonnees extends CI_Model {
    public function __construct() {
        parent::__construct();

    }

    // insert user
    public function inscription($tab_info) {
        $sql = "INSERT INTO users VALUES (DEFAULT, '%s', '%s', '%s', '%s', '%s', %d, %d, %d, 0)";
        $query = sprintf($sql, $tab_info['nom'], $tab_info['prenom'], $tab_info['email'], $tab_info['pwd'], $tab_info['date_naissance'], $tab_info['genre'], $tab_info['taille'], $tab_info['poids']);
        
        $this->db->query($query);
    }

    // insert user in table argent
    public function ajoutUserArgent() {
        $query = "INSERT INTO argent VALUES (DEFAULT, 0)";

        $this->db->query($query);
    }

    // insert morphologie
    public function insertMorpho($tab_morpho, $idUser) {
        $sql = "INSERT INTO morphologie VALUES (DEFAULT, %d, %d, %d, %d)";
        $query = sprintf($sql,  $tab_morpho['genre'], $tab_morpho['taille'], $tab_morpho['poids'], $idUser);
        
        $this->db->query($query);
    }

    // insert argent
    public function ajoutArgentUser($argent, $idUser) {
        $sql = "UPDATE argent SET montant = montant + %d WHERE id_user = %d";
        $query = sprintf($sql, $argent, $idUser);

        $this->db->query($query);
    }
}

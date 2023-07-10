<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetDonnees extends CI_Model {
    public function __construct() {
        parent::__construct();

    }

    public function getUser() {
        $sql = "SELECT * FROM users";
        $query = $this->db->query($sql);

        return $query->result();
    }
} 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetDonnees extends CI_Model {
    public function __construct() {
        parent::__construct();

    }

    // get all user
    public function getUser() {
        $sql = "SELECT * FROM users";
        $query = $this->db->query($sql);

        return $query->result();
    }

    // get all code
    public function getAllCode() {
        $sql = "SELECT * FROM code";
        $query = $this->db->query($sql);

        return $query->result();
    }

    // argent code
    public function getCode($numCode) {
        $sql = "SELECT * FROM code WHERE code = '%s'";
        $query = $this->db->query(sprintf($sql, $numCode));

        return $query->result();
    }
} 
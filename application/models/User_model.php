<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check_login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', sha1($password)); // Gunakan hashing password yang lebih aman di produksi
        $query = $this->db->get('admins'); // Tabel user di database

        if ($query->num_rows() == 1) {
            return $query->row(); // Mengembalikan data pengguna
        } else {
            return false;
        }
    }
}

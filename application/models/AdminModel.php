<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Pastikan ini ada
    }


    public function get_undangan() {
        return $this->db->get('users')->result_array(); // Ambil semua data dari tabel users
    }

    public function get_comments() {
        return $this->db->get('comments')->result_array(); // Ambil semua data dari tabel users
    }

}
?>
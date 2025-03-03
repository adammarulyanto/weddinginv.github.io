<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Pastikan ini ada
    }


    public function get_undangan() {
        return $this->db->where("deleted_at IS NULL", NULL, FALSE)
                    ->get('users')
                    ->result_array();
    }

    public function get_comments() {
        return $this->db->get('comments')->result_array(); // Ambil semua data dari tabel users
    }

    public function delete_all_users() {
        $this->db->set('deleted_at', 'CURRENT_TIMESTAMP', FALSE) // FALSE agar tidak dianggap string
                 ->where('deleted_at', NULL, FALSE)
                 ->update('users');
    }

}
?>
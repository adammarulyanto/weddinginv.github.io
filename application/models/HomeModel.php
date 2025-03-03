<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Pastikan ini ada
    }

    public function insert_comment($data)
    {
        return $this->db->insert('comments', $data);
    }

    public function get_all_comments()
    {
        return $this->db->order_by('created_at', 'DESC')->get('comments')->result();
    }

    public function get_comments($limit, $offset) {
        return $this->db->order_by('created_at', 'DESC')
                        ->limit($limit, $offset)
                        ->get('comments')
                        ->result();
    }

    public function count_comments() {
        return $this->db->count_all('comments');
    }

    public function get_by_id($to) {
        return $this->db->get_where('users', ['nama' => $to])->row_array(); // Query untuk mencari ID
    }

    public function get_id_by_sha1($uid) {
        $this->db->select('id');
        $this->db->where('sha1(sha1(id))', $uid);
        return $this->db->get('users')->row_array(); // Ambil satu hasil
    }
}

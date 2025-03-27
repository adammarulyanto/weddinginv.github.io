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

    public function get_undangan_lite() {
        return $this->db->limit(10)->where("deleted_at IS NULL", NULL, FALSE)
                    ->get('users')
                    ->result_array();
    }

    public function get_comments_lite() {
        return $this->db->limit(10)->get('comments')->result_array(); // Ambil semua data dari tabel users
    }

    public function delete_all_users() {
        $this->db->set('deleted_at', 'CURRENT_TIMESTAMP', FALSE) // FALSE agar tidak dianggap string
                 ->where('deleted_at', NULL, FALSE)
                 ->update('users');
    }
    public function simpan_pesan($data) {
        // Cek apakah data sudah ada
        $query = $this->db->get('pesan');

        if ($query->num_rows() > 0) {
            // Jika sudah ada, update isi_pesan
            return $this->db->update('pesan', $data);
        } else {
            // Jika belum ada, insert data pertama kali
            return $this->db->insert('pesan', $data);
        }
    }

    public function del_data_undangan($id) {
        $this->db->where('id', $id);
        return $this->db->delete('users'); // Ganti 'nama_tabel' dengan nama tabel aslimu
    }

    public function del_data_rsvp($id) {
        $this->db->where('id', $id);
        return $this->db->delete('comments'); // Ganti 'nama_tabel' dengan nama tabel aslimu
    }

    public function get_attendance_summary() {
        $query = $this->db->query("
            SELECT 
                (SELECT COUNT(*) FROM users) AS undangan,
                COUNT(CASE WHEN attendance = 'Hadir' THEN 1 END) AS hadir,
                COUNT(CASE WHEN attendance = 'Tidak Hadir' THEN 1 END) AS tidak_hadir,
                COUNT(CASE WHEN attendance = 'Belum Pasti' THEN 1 END) AS belum_pasti
            FROM comments
        ");

        return $query->row_array(); // Mengembalikan hasil sebagai array asosiatif
    }

}
?>
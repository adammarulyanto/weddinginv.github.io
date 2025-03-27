<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct() {
	    parent::__construct();
        $this->load->library('session');
        // Cek apakah user sudah login
        if (!$this->session->userdata('logged_in')) {
            redirect('login'); // Jika belum login, redirect ke halaman login
        }
        
	    $this->load->model('AdminModel'); // Load model User_model
	    $this->load->model('ExcelModel'); // Load model User_model
        $this->load->library('upload');
    }
	public function index()
	{
		$data['comments'] = $this->AdminModel->get_comments_lite(); // Ambil data dari model
		$data['users'] = $this->AdminModel->get_undangan_lite(); // Ambil data dari model
		$this->load->view('admin',$data);
	}

	public function undangan()
	{
		$data['users'] = $this->AdminModel->get_undangan(); // Ambil data dari model
		$data['pesan'] = $this->db->get('pesan')->row_array();
		// Tambahkan hashed ID ke setiap user
	    // foreach ($users as &$user) {
	    //     $user->hashed_id = sha1(sha1($user->id));
	    // }
	    
		$this->load->view('undangan', $data);
	}

	public function doa_kehadiran()
	{
		$data['comments'] = $this->AdminModel->get_comments(); // Ambil data dari model
		$this->load->view('doa_kehadiran', $data);
	}
	public function upload() {
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'xls|xlsx';
        $config['max_size']      = 2048;
        $config['overwrite']     = TRUE;

        $this->upload->initialize($config);
        $this->delete_all();

        if (!$this->upload->do_upload('excel_file')) {
            echo json_encode(['error' => $this->upload->display_errors()]);
            return;
        }

        $fileData = $this->upload->data();
        $filePath = './uploads/' . $fileData['file_name'];

        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($filePath);
        $sheetData = array_map(function ($row) {
		    return array_filter($row, function ($cell) {
		        return $cell !== null && $cell !== ''; // Remove NULL & empty values
		    });
		}, $spreadsheet->getActiveSheet()->toArray(null, true, true, true));

		// Remove completely empty rows
		$sheetData = array_filter($sheetData);

        // Insert ke database
        $this->ExcelModel->insertBatch($sheetData);
        
        echo json_encode(['success' => 'Data berhasil disimpan!']);
    }
    public function delete_all() {
	    $this->load->model('AdminModel'); // Pastikan model sudah dimuat
	    $this->AdminModel->delete_all_users(); 
	}

	public function simpan_pesan() {
            $data = ['pesan' => $this->input->post('pesan')];
            $this->AdminModel->simpan_pesan($data);
            $this->session->set_flashdata('success', 'Pesan berhasil diperbarui!');
            redirect(base_url('admin/undangan')); 
    }

    public function del_undangan($id) {
        if ($this->AdminModel->del_data_undangan($id)) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data!');
        }
        redirect(base_url('admin/undangan'));
    }

    public function del_rsvp($id) {
        if ($this->AdminModel->del_data_rsvp($id)) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data!');
        }
        redirect(base_url('admin/doa_kehadiran'));
    }
}

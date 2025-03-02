<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	    $this->load->model('AdminModel'); // Load model User_model
    }
	public function index()
	{
		$this->load->view('admin');
	}

	public function undangan()
	{
		$data['users'] = $this->AdminModel->get_undangan(); // Ambil data dari model
		$this->load->view('undangan', $data);
	}

	public function doa_kehadiran()
	{
		$data['comments'] = $this->AdminModel->get_comments(); // Ambil data dari model
		$this->load->view('doa_kehadiran', $data);
	}
}

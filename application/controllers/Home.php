<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {

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

	public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeModel');
        $this->load->model('ExcelModel');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$to = $this->input->get('to'); // Ambil ID dari URL
        
        if (!$to) {
            show_404(); // Jika ID tidak ada di URL, tampilkan 404
            return;
        }
        
        $this->load->model('HomeModel'); // Load model
        $data = $this->HomeModel->get_by_id($to); // Cek di database
        
        if ($data) {
            $this->load->view('home', ['data' => $data]); // Load view jika ditemukan
        } else {
            show_404(); // Redirect ke halaman 404 jika tidak ditemukan
        }
	}

    public function submit_comment()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
		$this->form_validation->set_rules('message', 'Ucapan', 'required|trim');
		$this->form_validation->set_rules('attendance', 'Kehadiran', 'required');

		if ($this->form_validation->run() == FALSE) {
		    echo json_encode([
		        'status' => 'error',
		        'message' => validation_errors()
		    ]);
		    return;
		}

		// Bersihkan input manual (menggantikan xss_clean)
		$name = strip_tags($this->input->post('name'));
		$message = strip_tags($this->input->post('message'));
		$attendance = $this->input->post('attendance');
		$uid = $this->input->post('user_id');



		// Simpan ke database
		$data = [
		    'name' => $name,
		    'user_id' => $uid,
		    'message' => $message,
		    'attendance' => $attendance,
		    'created_at' => date('Y-m-d H:i:s')
		];

		$this->HomeModel->insert_comment($data);
		echo json_encode(['status' => 'success', 'message' => 'Komentar berhasil dikirim!']);

    }

    public function get_comments()
    {
        $this->load->model('HomeModel');
        $this->load->library('pagination');

        $config = [
            'base_url' => base_url('Home/get_comments'),
            'total_rows' => $this->HomeModel->count_comments(),
            'per_page' => 5,
            'uri_segment' => 3,
            'use_page_numbers' => TRUE,
            'full_tag_open' => '<ul class="pagination">',
            'full_tag_close' => '</ul>',
            'num_tag_open' => '<li>',
            'num_tag_close' => '</li>',
            'cur_tag_open' => '<li class="active"><a>',
            'cur_tag_close' => '</a></li>',
            'first_link' => FALSE,
			'last_link' => FALSE,
			'next_link' => FALSE,
			'prev_link' => FALSE
        ];
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? (int) $this->uri->segment(3) : 1;
		$limit = $config['per_page'];

		$start = max(0, ($page - 1) * $limit); // Mencegah offset negatif

        $data = [
            'comments' => $this->HomeModel->get_comments($config['per_page'], $start),
            'pagination' => $this->pagination->create_links()
        ];

        echo json_encode($data);
    }


}

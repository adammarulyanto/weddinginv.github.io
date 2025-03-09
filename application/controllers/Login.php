<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('login');
    }

    public function authenticate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->check_login($username, $password);

        if ($user) {
            $session_data = array(
                'user_id'   => $user->id,
                'username'  => $user->username,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($session_data);
            redirect('admin'); // Ganti dengan halaman tujuan setelah login
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}

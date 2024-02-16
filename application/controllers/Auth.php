<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends CI_Controller
{
    private $redirect = "admin";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function index()
    {
        $this->session->sess_destroy();
        $data = array(
            'login' => ''
        );
        $this->load->view('admin/login', $data);
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $data = $this->M_auth->CekLogin('admin', 'username', $username);

        if ($data) {
            if ($data['password'] == $password AND $data['username'] == $username) {
                $session_data = array(
                    'username' => $data['username'],
                    'password'=> $data['password'],
                    'IsAdmin' => 1
                );
                $this->session->set_userdata($session_data);
                redirect('Home', 'refresh');
            } else {
                echo "<script>alert('Username atau Password salah!');</script>";
                redirect('Auth', 'refresh');
            }
        } else {
            echo "<script>alert('Username tidak ditemukan!');</script>";
            redirect('Auth', 'refresh');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth', 'refresh');
    }
}


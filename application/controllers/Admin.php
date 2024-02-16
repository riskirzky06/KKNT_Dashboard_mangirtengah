<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    private $view = "admin/v_admin/";
    private $redirect = "Admin";
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }

    function index()
    {
        $read = $this->M_admin->GetAll();
        $data = array(
            'read' => $read,
            'judul' => "ADMINISTRATOR",
            'sub' => "Halaman Admin"
        );
        $this->template->load('template/template', $this->view . 'read', $data);
    
    }

    public function create()
    {
        $data = array(
            'create' => ''
        );
        $this->load->view($this->view . 'create', $data);
    }

    public function save()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );
        $this->M_admin->save($data);
        redirect($this->redirect, 'refresh');
    }

    public function edit()
    {
        $user = $this->uri->segment(3);
        $data = array(
            'edit' => $this->M_admin->edit($user)
        );
        $this->load->view($this->view . 'edit', $data);
    }

    public function update()
    {
        $user = $this->uri->segment(3);
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );
        $this->M_admin->update($user, $data);
        redirect($this->redirect, 'refresh');
    }

    public function delete()
    {
        $user = $this->uri->segment(3);
        $data = array(
            'username' => $user
        );
        $this->M_admin->delete($data);
        redirect($this->redirect, 'refresh');
    }
}

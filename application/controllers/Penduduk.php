<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{
    private $view = "admin/v_penduduk/";
    private $redirect = "Penduduk";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_penduduk');
    }

    public function index()
    {
        $read = $this->M_penduduk->GetAll();
        $data = array(
            'read' => $read,
            'judul' => "PENDUDUK",
            'sub' => "Halaman Data penduduk",
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
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'pendidikan' => $this->input->post('pendidikan'),
            'rt' => $this->input->post('rt'),
            'status' => $this->input->post('status')
        );
        $this->M_penduduk->save($data);
        redirect($this->redirect, 'refresh');
    }

    public function edit()
    {
        $user = $this->uri->segment(3);
        $data = array(
            'edit' => $this->M_penduduk->edit($user)
        );
        $this->load->view($this->view . 'edit', $data);
    }

    public function update()
    {
        $user = $this->uri->segment(3);
        $data = array(
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'pendidikan' => $this->input->post('pendidikan'),
            'rt' => $this->input->post('rt'),
            'status' => $this->input->post('status')
        );
        $this->M_penduduk->update($user, $data);
        redirect($this->redirect, 'refresh');
    }

    public function delete()
    {
        $penduduk = $this->uri->segment(3);
        $data = array(
            'nik' => $penduduk
        );
        $this->M_penduduk->delete($data);
        redirect($this->redirect, 'refresh');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Umkm extends CI_Controller{

    private $view = "admin/v_umkm/";
    private $redirect = "Umkm";
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_umkm');
    }

    function index()
    {
        $read = $this->M_umkm->GetAll();
        $data = array(
            'read' => $read,
            'judul' => "UMKM",
            'sub' => "Halaman UMKM"
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
            'id' => $this->input->post('id'),
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'pemilik' => $this->input->post('pemilik'),
            'alamat'=> $this->input->post('alamat'),
            'foto'=> $this->input->post('foto'),
            'keterangan'=> $this->input->post('keterangan')
        );
        $this->M_umkm->save($data);
        redirect($this->redirect, 'refresh');
    }
    public function edit()
    {
        $user = $this->uri->segment(3);
        $data = array(
            'edit' => $this->M_umkm->edit($user)
        );
        $this->load->view($this->view . 'edit', $data);
    }

    public function update()
    {
        $user = $this->uri->segment(3);
        $data = array(
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'pemilik' => $this->input->post('pemilik'),
            'alamat'=> $this->input->post('alamat'),
            'foto'=> $this->input->post('foto'),
            'keterangan'=> $this->input->post('keterangan')
        );
        $this->M_umkm->update($user, $data);
        redirect($this->redirect, 'refresh');
    }

    public function delete()
    {
        $user = $this->uri->segment(3);
        $data = array(
            'nama_perusahaan' => $user
        );
        $this->M_umkm->delete($data);
        redirect($this->redirect, 'refresh');
    }

}
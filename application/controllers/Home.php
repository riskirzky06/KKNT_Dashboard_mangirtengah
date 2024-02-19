<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Home extends CI_Controller
{
    private $view = "admin/v_home/";
    private $redirect = "Home";
    public function __construct()
    {
        parent::__construct();
        //mengaktifkan session dengan demikian halaman ini jika dipanggil kini membutuhkan session
        IsAdmin();
    }
    public function index()
    {
        $data = array(
            'judul' => "Welcome To Website Mangir Tengah"
        );
        /*
        $this->template memanggil libraries template,
        load('backend/template' artinya memanggil file template.php, $this->view.'read' memanggil file read.php
        catatan: setelah kita mengetahui untuk view kali ini script ada penambahan
        template,
        maka CRUD Admin pembalajaran sebelumnya mengikuti script seperti pada
        control Home */
        $this->template->load('template/template', $this->view . 'read', $data);
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto"> <!-- Tambahkan kelas ml-auto untuk membuat item menu rata kanan -->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      

    }
}
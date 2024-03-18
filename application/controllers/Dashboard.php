<?php
class Dashboard extends CI_Controller{

  public function __construct() {
    parent::__construct();
    // Periksa status login saat konstruktor dijalankan
    if (!$this->session->userdata('logged_in')) {
        redirect('auth'); // Redirect ke halaman login jika tidak login
    }
}

  public function index(){
    $this->load->view('template_datatable/header');
    $this->load->view('template/sidebar');
    $this->load->view('utama');
    $this->load->view('template_datatable/footer');
  }
}
 ?>

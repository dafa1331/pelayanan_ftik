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
    $data['all'] = $this->m_layanan->hitung_layanan_all();
    $this->load->view('template_datatable/header');
    $this->load->view('template_pimpinan/sidebar');
    $this->load->view('utama', $data);
    $this->load->view('template_datatable/footer');
  }
}
 ?>

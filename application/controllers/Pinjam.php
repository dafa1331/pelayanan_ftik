<?php

class Pinjam extends CI_Controller{
  public function __construct() {
      parent::__construct();
      // Periksa status login saat konstruktor dijalankan
      if (!$this->session->userdata('logged_in')) {
          redirect('auth'); // Redirect ke halaman login jika tidak login
      }
  }

  public function index(){
    $data['result'] = $this->m_layanan->get_data_alat();
    $this->load->view('template_datatable/header');
    $this->load->view('template/sidebar');
    $this->load->view('v_peminjaman', $data);
    $this->load->view('template_datatable/footer');
  }

  public function detail_data($id){
    $data['detail'] = $this->m_layanan->detail_pinjam($id);
    $data['detail1'] = $this->m_layanan->get_data_alat($id);
    $this->load->view('template_datatable/header');
    $this->load->view('template/sidebar');
    $this->load->view('d_pinjam', $data);
    $this->load->view('template_datatable/footer');
  }
}
?>

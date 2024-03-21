<?php

class Acc_prodi extends CI_Controller{
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
    }

    public function index(){
        $data['layanan'] = $this->m_layanan->get_layanan_by_prodi();
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/v_layanan_masuk', $data);
        $this->load->view('template_prodi/footer');
    }

    public function detail_data($id){
        $data['detail'] = $this->m_layanan->ambil_id_layanan($id);
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/d_layanan_masuk', $data);
        $this->load->view('template_prodi/footer');
      }
}
?>
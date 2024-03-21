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
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/v_layanan_masuk');
        $this->load->view('template_prodi/footer');
    }
}
?>
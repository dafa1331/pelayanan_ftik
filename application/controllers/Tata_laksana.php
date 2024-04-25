<?php

class Tata_laksana extends CI_Controller{
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
    }

    public function index(){
        $data['sk'] = $this->m_layanan->get_sk();
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_pengajuan_sk', $data);
        $this->load->view('template_datatable/footer');
    }

    public function detail_data($id){
        $data['detail_sk'] = $this->m_layanan->detail_sk($id);
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('d_pengajuan_sk', $data);
        $this->load->view('template_datatable/footer'); 
    }

}
?>
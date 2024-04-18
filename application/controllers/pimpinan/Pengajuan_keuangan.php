<?php
class Pengajuan_keuangan extends CI_Controller{
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
    }

    public function index(){
        $data['anggaran'] = $this->m_pimpinan->get_data_anggaran();
        $this->load->view('template_datatable/header');
        $this->load->view('template_pimpinan/sidebar');
        $this->load->view('pimpinan/pengajuan_keuangan', $data);
        $this->load->view('template_datatable/footer');
    }

    public function detail_data(){
        //perlu di update
    }
}
?>
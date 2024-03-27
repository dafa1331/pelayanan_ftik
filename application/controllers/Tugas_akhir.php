<?php

class Tugas_akhir extends CI_Controller{
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
    }

    public function index(){
        $data['result'] = $this->m_layanan->get_data_ta();
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_tugas_akhir', $data);
        $this->load->view('template_datatable/footer');
    }

    public function detail_data($id){
        $data['detail'] = $this->m_layanan->detail_ta($id);
        $data['detail1'] = $this->m_layanan->get_data_ta($id);
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('d_tugas_akhir', $data);
        $this->load->view('template_datatable/footer');
    }

    public function cetak($id){
        $data['detail'] = $this->m_layanan->detail_ta($id);
        $data['detail1'] = $this->m_layanan->get_data_nomor_ta($id);
        $this->load->view('p_surat_izin_penelitian', $data);
    }
}
?>
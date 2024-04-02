<?php

class Surat_tugas_kp extends CI_Controller{
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }

    }

    public function index(){
        $data['result'] = $this->m_layanan->get_data_surat_tugas_kp();
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_surat_tugas_kp', $data);
        $this->load->view('template_datatable/footer');
    }

    public function detail_data($id){
        $data['detail'] = $this->m_layanan->detail_surat_tugas_kp($id);
        $data['detail1'] = $this->m_layanan->detail_surat_tugas_kp1($id);
        $data['detail2'] = $this->m_layanan->get_data_nomor_surat_tugas($id);
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('d_surat_tugas_kp', $data);
        $this->load->view('template_datatable/footer');
    }

    public function tambah_nomor(){
        $id = $this->input->post('id_surat_tugas_kp');
        $nomor_surat = $this->input->post('nomor_surat');
        $tanggal_surat = $this->input->post('tanggal_surat');
    
        $data = array(
          'nomor_surat' => $nomor_surat,
          'tanggal_surat' => $tanggal_surat,
        );
    
        $where = array(
          'id_surat_tugas_kp' => $id,
        );
    
        $this->m_layanan->update($where, $data, 'tb_nomor_surat_tugas_kp');
        
        redirect('surat_tugas_kp');
      }

      public function cetak_surat($id){
        $data['detail'] = $this->m_layanan->detail_surat_tugas_kp($id);
        $data['detail2'] = $this->m_layanan->get_data_nomor_surat_tugas($id);
        $cetak = $this->load->view('p_surat_tugas', $data);
      }
}
?>
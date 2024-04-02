<?php

class Pengantar_kp extends CI_Controller{

      public function __construct() {
          parent::__construct();
          // Periksa status login saat konstruktor dijalankan
          if (!$this->session->userdata('logged_in')) {
              redirect('auth'); // Redirect ke halaman login jika tidak login
          }

      }

  public function index(){
    $data['result'] = $this->m_layanan->get_data_kp();
    $this->load->view('template_datatable/header');
    $this->load->view('template/sidebar');
    $this->load->view('v_pengantar_kp', $data);
    $this->load->view('template_datatable/footer');
  }

  public function detail_data($id){
    $data['detail'] = $this->m_layanan->detail_kp($id);
    $data['detail1'] = $this->m_layanan->detail_kp1($id);
    $data['detail2'] = $this->m_layanan->get_data_nomor($id);
    $this->load->view('template_datatable/header');
    $this->load->view('template/sidebar');
    $this->load->view('d_pengantar_kp', $data);
    $this->load->view('template_datatable/footer');
  }

  public function tambah_nomor(){
    $id = $this->input->post('id_surat');
    $nomor_surat = $this->input->post('nomor');
    $tanggal_surat = $this->input->post('tgl_surat');

    $data = array(
      'nomor_surat' => $nomor_surat,
      'tanggal_surat' => $tanggal_surat,
    );

    $where = array(
      'id_surat' => $id,
    );

    $this->m_layanan->update($where, $data, 'tb_nomor_pengantar_kp');
    
    redirect('pengantar_kp');
  }

  public function cetak($id){
    $data['detail'] = $this->m_layanan->detail_kp($id);
    $data['detail2'] = $this->m_layanan->get_data_nomor($id);

    // $this->load->library('pdflib');
    // $this->pdflib->setPaper('A4', 'potrait');
    // $this->pdflib->setFileName('Nama_file.pdf');
    // $this->pdflib->LoadView('p_surat_pengantar', $data);
    $cetak = $this->load->view('p_surat_pengantar', $data);

    
  }


}

 ?>

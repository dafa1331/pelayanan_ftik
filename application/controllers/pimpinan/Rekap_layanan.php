<?php

class Rekap_layanan extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
    }

    public function index(){
        
            $tgl_awal = $this->input->get('tgl_awal');
            $tgl_akhir = $this->input->get('tgl_akhir');
        
            if(empty($tgl_awal) or empty($tgl_akhir)){
              $layanan = $this->m_layanan->view_all();
              $url_cetak = 'layanan/cetak';
              $label = 'Data Layanan All';
            }else{
              $layanan = $this->m_layanan->view_by_date($tgl_awal, $tgl_akhir);
              $url_cetak = 'layanan/cetak?tgl_awal='.$tgl_awal.'&tgl_akhir='.$tgl_akhir;
              $tgl_awal = date('d-m-Y', strtotime($tgl_awal));
              $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir));
              $label = 'Periode Tanggal '.$tgl_awal.' s/d '.$tgl_akhir;
            }
            $data['layanan'] = $layanan;
            $data['url_cetak'] = base_url($url_cetak);
            $data['label'] = $label;
        
            $this->load->view('template_datatable/header');
            $this->load->view('template_pimpinan/sidebar');
            $this->load->view('rekap', $data);
            $this->load->view('template_datatable/footer');
          
    }

    public function cetak(){
        $tgl_awal = $this->input->get('tgl_awal');
        $tgl_akhir = $this->input->get('tgl_akhir');
    
        if(empty($tgl_awal) or empty($tgl_akhir)){
          $layanan = $this->m_layanan->view_all();
          $label = 'semua data layanan';
        }else{
          $layanan = $this->m_layanan->view_by_date($tgl_awal, $tgl_akhir);
          $tgl_awal = date('d-m-Y', strtotime($tgl_awal));
          $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir));
          $label = 'periode tanggal '.$tgl_awal.' s/d '.$tgl_akhir;
        }
    
        $data['label'] = $label;
        $data['layanan'] = $layanan;

        $this->load->library('pdflib');
        $this->pdflib->setPaper('A4', 'potrait');
        $this->pdflib->setFileName('Nama_file.pdf');
        $this->pdflib->loadView('cetak1', $data);
      }
}
?>
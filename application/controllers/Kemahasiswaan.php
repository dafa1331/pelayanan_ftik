<?php

class Kemahasiswaan extends CI_Controller{
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
    }

    public function index(){
        $data['hima'] = $this->m_layanan->get_hima();
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_kemahasiswaan', $data);
        $this->load->view('template_datatable/footer');
    }

    public function detail_data($id){
        $data['kemahasiswaan'] = $this->m_layanan->detail_kemahasiswaan($id);
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('d_kemahasiswaan', $data);
        $this->load->view('template_datatable/footer'); 
    }

    public function acc_fakultas(){
        $id = $this->input->post('id_izin_mahasiswa');
        $validasi = $this->input->post('validasi');
        
        $data = array(
          'acc_fakultas' => $validasi,
        );

        $where = array(
          'id_izin_mahasiswa' => $id,
        );

        $this->m_layanan->update($where, $data, 'tb_izin_kegiatan_mahasiswa');
        
        redirect('kemahasiswaan');
    }
}
?>
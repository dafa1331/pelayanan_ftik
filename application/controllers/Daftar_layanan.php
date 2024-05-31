<?php

class Daftar_layanan extends CI_Controller{
    public function index(){
        $data['result'] = $this->m_layanan->get_data_daftar();
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_daftar_layanan', $data);
        $this->load->view('template_datatable/footer');
    }

    public function tambah(){
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('f_daftar_layanan');
        $this->load->view('template_datatable/footer');
    }

    public function proses_tambah(){
        $nama_layanan = $this->input->post('nama_layanan');
        $tautan = $this->input->post('tautan');
        $deskripsi = $this->input->post('deskripsi');
        $kegunaan = $this->input->post('kegunaan');

        $data = array(
            'nama_layanan' => $nama_layanan,
            'tautan' => $tautan,
            'deskripsi' => $deskripsi,
            'kegunaan' => $kegunaan,
        );

        $simpan = $this->m_layanan->insert_data_list($data);
        redirect('daftar_layanan'); 
    }
}
?>
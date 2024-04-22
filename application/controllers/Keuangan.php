<?php
class Keuangan extends CI_Controller{
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
        $this->load->view('template/sidebar');
        $this->load->view('v_keuangan', $data);
        $this->load->view('template_datatable/footer');
    }

    public function detail_data($id){
        $data['keuangan'] = $this->m_pimpinan->detail_keuangan($id);
        $data['anggaran'] = $this->m_pimpinan->detail_anggaran($id);
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('d_keuangan', $data);
        $this->load->view('template_datatable/footer');
    }

    public function status_pengajuan(){
        $id = $this->input->post('id_pengajuan');
        $status_pengajuan = $this->input->post('status_pengajuan');
        $komentar = $this->input->post('komentar');
       
        $data = array(
          'status_pengajuan' => $status_pengajuan,
          'komentar' => $komentar,

        );

        $where = array(
          'id_pengajuan' => $id,
        );

        $this->m_layanan->update($where, $data, 'tb_pengajuan_kegiatan');
        
        redirect('keuangan');
    }
}
?>
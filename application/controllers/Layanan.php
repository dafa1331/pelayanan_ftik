<?php

class Layanan extends CI_Controller{
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
    }

    public function index(){
        $data['result'] = $this->m_layanan->get_data();
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_layanan', $data);
        $this->load->view('template_datatable/footer');
    }

    public function insert(){
        $data['nomor'] = $this->m_layanan->get_nomor();
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('f_layanan', $data);
        $this->load->view('template_datatable/footer');
    }

    public function proses_insert(){
        $nomor = $this->input->post('nomor');
        $nama_pemohon = $this->input->post('nama_pemohon');
        $nip_pemohon = $this->input->post('nip_pemohon');
        $status_pemohon = $this->input->post('status_pemohon');
        $unit_asal = $this->input->post('unit_asal');
        $no_hp = $this->input->post('no_hp');
        $keperluan = $this->input->post('keperluan');
        $bagian = $this->input->post('bagian');
        $other_option = $this->input->post('other_option');

        $unit_asal = ($unit_asal === 'other') ? $other_option : $unit_asal;

        $berkas_pendukung = $_FILES['berkas_pendukung'];
        if($berkas_pendukung = ''){}else{
            $config['upload_path'] = './assets/berkas_pendukung';
            $config['allowed_types'] = 'pdf';
            $config['file_name'] = $nip_pemohon;
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('berkas_pendukung')){
            echo "gagal upload";
            // redirect('pegawai/insert');
            }else{
            $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nomor' => $nomor,
            'nama_pemohon' => $nip_pemohon,
            'nip_pemohon' => $nip_pemohon,
            'status_pemohon' => $status_pemohon,
            'unit_asal' => $unit_asal,
            'tanggal_pengajuan' => date("Y-m-d"),
            'waktu_pengajuan' => date("H:i:s"),
            'no_hp' => $no_hp,
            'keperluan' => $keperluan,
            'bagian' => $bagian,
            'update_at' => date("Y-m-d"),
            'berkas_pendukung' => $berkas_pendukung,
        );

        $simpan = $this->m_layanan->insert_data($data);
        redirect('layanan');
    }

    public function detail_data($id){
      $data['detail'] = $this->m_layanan->ambil_id_layanan($id);
      $this->load->view('template_datatable/header');
      $this->load->view('template/sidebar');
      $this->load->view('d_layanan', $data);
      $this->load->view('template_datatable/footer');
    }

    public function delete_data(){
        //tulis fungsi disini
    }


}
?>

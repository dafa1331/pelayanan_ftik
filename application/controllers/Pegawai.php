<?php

class Pegawai extends CI_Controller{

  public function __construct() {
    parent::__construct();
    // Periksa status login saat konstruktor dijalankan
    if (!$this->session->userdata('logged_in')) {
        redirect('auth'); // Redirect ke halaman login jika tidak login
    }
}

public function index(){
  $data['result'] = $this->m_pegawai->get_data();
  $this->load->view('template_datatable/header');
  $this->load->view('template/sidebar');
  $this->load->view('v_pegawai', $data);
  $this->load->view('template_datatable/footer');
}

  public function insert(){
    $this->load->view('template_datatable/header');
    $this->load->view('template/sidebar');
    $this->load->view('f_pegawai');
    $this->load->view('template_datatable/footer');
  }

  public function proses_insert(){
    $nip = $this->input->post('nip');
    $nama = $this->input->post('nama');
    $nidn = $this->input->post('nidn');
    $nik = $this->input->post('nik');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $alamat = $this->input->post('alamat');
    $no_hp = $this->input->post('no_hp');
    $email = $this->input->post('email');
    $npwp = $this->input->post('npwp');

    $foto = $_FILES['foto'];
      if($foto = ''){}else{
        $config['upload_path'] = './assets/foto_pegawai';
        $config['allowed_types'] = 'jpg|png|jpeg|JPG';
        $config['file_name'] = $nip;
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('foto')){
          echo "gagal upload"; die();
          // redirect('pegawai/insert');
        }else{
          $foto = $this->upload->data('file_name');
        }
      }

    $data = array(
      'nip' => $nip,
      'nama' => $nama,
      'nidn' => $nidn,
      'nik' => $nik,
      'tanggal_lahir' => $tanggal_lahir,
      'tempat_lahir' => $tempat_lahir,
      'jenis_kelamin' => $jenis_kelamin,
      'alamat' => $alamat,
      'no_hp' => $no_hp,
      'email' => $email,
      'npwp' => $npwp,
      'foto' => $foto,
    );

    $simpan = $this->m_pegawai->insert_data($data);
    redirect('pegawai');
  }

  public function detail(){
    $this->load->view('template_datatable/header');
    $this->load->view('template/sidebar');
    $this->load->view('d_pegawai');
    $this->load->view('template_datatable/footer');
  }

  
}
 ?>

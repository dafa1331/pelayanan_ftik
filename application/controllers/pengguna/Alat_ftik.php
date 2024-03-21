<?php

class Alat_ftik extends CI_Controller{
  public function index(){
    $data['nomor'] = $this->m_layanan->get_nomor();
    $this->load->view('landing_page/template_halaman/header');
    $this->load->view('landing_page/template_utama/menu');
    $this->load->view('landing_page/peminjaman', $data);
    $this->load->view('landing_page/template_halaman/footer');
  }

  public function proses_insert(){
    $nama = $this->input->post('nama_mhs');
    $nim = $this->input->post('nim_mhs');
    $prodi = $this->input->post('prodi_mhs');
    $keperluan_pinjam = $this->input->post('keperluan_peminjaman');
    $no_hp = $this->input->post('no_hp');
    $alat = $this->input->post('alat');

    $simpan = array(
      'nama_mhs' => $nama,
      'nim_mhs' => $nim,
      'no_hp' => $no_hp,
      'prodi' => $prodi,
      'keperluan' => $keperluan_pinjam,
      'tanggal_pinjam' => date("Y-m-d"),
      'waktu_pinjam' => date("H:i:s"),
      'status_pengembalian' => 0,
    );

    $simpan_pinjam = $this->m_layanan->simpan_data_layanan($simpan, 'tb_pinjam_alat');

    if ($alat[0] !== null) {
      foreach ($alat as $row) {
        $kebutuhan_alat = [
          // 'nim'=>$nim,
          'nama_alat' => $row,
          'id_pinjam' => $simpan_pinjam,
        ];
        // $insert = $this->db->insert_id('tb_anggota_kp', $anggota);
        // $insert = $this->m_layanan->simpan_data1($anggota, 'tb_kp');
        $insert = $this->m_layanan->simpan_data_layanan($kebutuhan_alat, 'tb_alat_ftik');

        if ($insert) {
          $i++;
        }
      }
    }

    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                              input data berhasil
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                              </div>');
    redirect('pengguna/alat_ftik');
  }
}
 ?>

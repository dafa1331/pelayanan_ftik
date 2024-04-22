<?php

class Izin_penelitian extends CI_Controller{
  public function index(){
    $data['nomor'] = $this->m_layanan->get_nomor();
    $this->load->view('landing_page/template_halaman/header');
    $this->load->view('landing_page/template_utama/menu');
    $this->load->view('landing_page/izin_penelitian', $data);
    $this->load->view('landing_page/template_halaman/footer');
  }

  public function proses_insert(){
    $nomor = $this->input->post('nomor');
    $nama = $this->input->post('nama_mhs');
    $nim = $this->input->post('nim_mhs');
    $prodi = $this->input->post('prodi_mhs');
    $no_hp = $this->input->post('no_hp');
    $email = $this->input->post('email');
    $judul_ta = $this->input->post('judul_ta');
    $i = 0;
    $tujuan_surat = $this->input->post('tujuan_surat');
    $pimpinan_instansi = $this->input->post('pimpinan_instansi');
    $data_penelitian = $this->input->post('data');
    

    $layanan = array(
      // 'nomor' => $nomor,
      'nama_pemohon' => $nama,
      'nip_pemohon' => $nim,
      'status_pemohon' => 'Mahasiswa',
      'unit_asal' => $prodi,
      'tanggal_pengajuan' => date("Y-m-d"),
      'waktu_pengajuan' => date("H:i:s"),
      'no_hp' => $no_hp,
      'keperluan' => 'Pengajuan Surat Pengantar Kerja Praktik',
      'bagian' => 'customer service',
      'update_at' => date("Y-m-d"),

    );

    $id_layanan = $this->m_layanan->simpan_data_layanan($layanan, 'tb_layanan');

    $izin_penelitian = array(
      'nama_mhs' => $nama,
      'nim' => $nim,
      'prodi_mhs' => $prodi,
      'judul_ta' => $judul_ta,
      'no_hp' => $no_hp,
      'email' => $email,
    );

    $simpan_penelitian = $this->m_layanan->simpan_data_layanan($izin_penelitian, 'tb_izin_penelitian');

    if ($tujuan_surat[0] !== null) {
      foreach ($tujuan_surat as $row) {
        $kebutuhan_data = [
          // 'nim'=>$nim,
          'tujuan_surat' => $row,
          'pimpinan_instansi' => $pimpinan_instansi[$i],
          'kebutuhan_data' => $data_penelitian[$i],
          'id_penelitian' => $simpan_penelitian
        ];
        // $insert = $this->db->insert_id('tb_anggota_kp', $anggota);
        // $insert = $this->m_layanan->simpan_data1($anggota, 'tb_kp');
        $insert = $this->m_layanan->simpan_data_layanan($kebutuhan_data, 'kebutuhan_data');

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
    redirect('pengguna/izin_penelitian');


  }
}
?>

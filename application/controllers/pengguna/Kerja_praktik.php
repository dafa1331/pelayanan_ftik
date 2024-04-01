<?php

class Kerja_praktik extends CI_Controller{
    public function index(){
      $data['nomor'] = $this->m_layanan->get_nomor();
      $this->load->view('landing_page/template_halaman/header');
      $this->load->view('landing_page/template_utama/menu');
      $this->load->view('landing_page/kerja_praktik', $data);
      $this->load->view('landing_page/template_halaman/footer');
    }

    public function proses_tambah(){
      $nomor = $this->input->post('nomor');
      $nama = $this->input->post('nama_ketua');
      $nim = $this->input->post('nim_ketua');
      $prodi = $this->input->post('prodi_mhs');
      $tujuan_surat = $this->input->post('tujuan_surat');
      $jabatan_pimpinan = $this->input->post('jabatan_pimpinan');
      $alamat_instansi = $this->input->post('alamat_instansi');
      $tanggal_mulai = $this->input->post('tanggal_mulai');
      $tanggal_selesai = $this->input->post('tanggal_selesai');
      $no_hp = $this->input->post('no_hp');
      $email = $this->input->post('email');
      $i = 0;
      $a = $this->input->post('nama_anggota');
      $b = $this->input->post('nim_anggota');

    $layanan = array(
      'nomor' => $nomor,
      'nama_pemohon' => $a[0],
      'nip_pemohon' => $b[0],
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

    $nomor = array(
      'nim' => $b[0],
      'alamat_instansi' => $alamat_instansi,
      'jabatan_pimpinan' => $jabatan_pimpinan,
      'tanggal_mulai' => $tanggal_mulai,
      'tanggal_selesai' => $tanggal_selesai,
    );

    $simpan = $this->m_layanan->simpan_data_layanan($nomor, 'tb_nomor_pengantar_kp');

    // $kp = array(
    //   'nama_mhs' => $nama,
    //   'nim_mhs' => $nim,
    //   'prodi_mhs' => $prodi,
    //   'alamat_instansi' => $alamat_instansi,
    //   'jabatan_pimpinan' => $jabatan_pimpinan,
    //   'tujuan_surat' => $tujuan_surat,
    //   'tanggal_mulai' => $tanggal_mulai,
    //   'tanggal_selesai' => $tanggal_selesai,
    //   'no_hp' => $no_hp,
    //   'email' => $email,
    //   'nim_ketua' => $nim,
    // );
    //
    // $insert = $this->m_layanan->simpan_data_layanan($kp, 'tb_kp');

      if ($a[0] !== null) {
      foreach ($a as $row) {
        $anggota = [
          // 'nim'=>$nim,
          'nama_mhs' => $row,
          'nim_mhs' => $b[$i],
          'prodi_mhs' => $prodi,
          'alamat_instansi' => $alamat_instansi,
          'jabatan_pimpinan' => $jabatan_pimpinan,
          'tujuan_surat' => $tujuan_surat,
          'tanggal_mulai' => $tanggal_mulai,
          'tanggal_selesai' => $tanggal_selesai,
          'no_hp' => $no_hp,
          'email' => $email,
          'nim_ketua' => $b[0],
          'id_surat' =>$simpan
        ];
        // $insert = $this->db->insert_id('tb_anggota_kp', $anggota);
        // $insert = $this->m_layanan->simpan_data1($anggota, 'tb_kp');
        $insert = $this->m_layanan->simpan_data_layanan($anggota, 'tb_kp');

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
    redirect('pengguna/kerja_praktik');
  }

  public function surat_tugas(){
    $this->load->view('landing_page/template_halaman/header');
    $this->load->view('landing_page/template_utama/menu');
    $this->load->view('landing_page/surat_tugas_kerja_praktik');
    $this->load->view('landing_page/template_halaman/footer');
  }

  public function proses_tambah_surat_tugas(){
    $prodi_mhs = $this->input->post('prodi_mhs');
    $tujuan_surat = $this->input->post('tujuan_surat');
    $jabatan_pimpinan = $this->input->post('jabatan_pimpinan');
    $alamat_instansi = $this->input->post('alamat_instansi');
    $tanggal_mulai = $this->input->post('tanggal_mulai');
    $tanggal_selesai = $this->input->post('tanggal_selesai');
    $no_hp = $this->input->post('no_hp');
    $email = $this->input->post('email');
    $i = 0;
    $nama_mhs = $this->input->post('nama_mhs');
    $nim_mhs = $this->input->post('nim_mhs');

    $data = array(
      'nama_mhs' => $nama_mhs[0],
      'nim_mhs' => $nim_mhs[0],
      'prodi_mhs' => $prodi_mhs,
      'jabatan_pimpinan' => $jabatan_pimpinan,
      'alamat_instansi' => $alamat_instansi,
      'tanggal_mulai' => $tanggal_mulai,
      'tanggal_selesai' => $tanggal_selesai,
    );

    $data_surat_tugas = $this->m_layanan->simpan_data_layanan($data, 'tb_nomor_surat_tugas_kp');

    if ($nama_mhs[0] !== null) {
      foreach ($nama_mhs as $row) {
        $anggota_surat_tugas = [
          // 'nim'=>$nim,
          'nama_mhs' => $row,
          'nim_mhs' => $nim_mhs[$i],
          'prodi_mhs' => $prodi_mhs,
          'alamat_instansi' => $alamat_instansi,
          'jabatan_pimpinan' => $jabatan_pimpinan,
          'tujuan_surat' => $tujuan_surat,
          'tanggal_mulai' => $tanggal_mulai,
          'tanggal_selesai' => $tanggal_selesai,
          'no_hp' => $no_hp,
          'email' => $email,
          'nim_ketua' => $nim_mhs[0],
          'id_surat_tugas' => $data_surat_tugas
        ];
        // $insert = $this->db->insert_id('tb_anggota_kp', $anggota);
        // $insert = $this->m_layanan->simpan_data1($anggota, 'tb_kp');
        $insert = $this->m_layanan->simpan_data_layanan($anggota_surat_tugas, 'tb_data_anggota_surat_tugas');

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
    redirect('pengguna/kerja_praktik/surat_tugas');

  }
}
 ?>

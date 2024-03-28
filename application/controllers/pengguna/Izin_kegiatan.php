<?php
class Izin_kegiatan extends CI_Controller
{
    public function index()
    {
        $data['nomor'] = $this->m_layanan->get_nomor();
        $this->load->view('landing_page/template_halaman/header');
        $this->load->view('landing_page/template_utama/menu');
        $this->load->view('landing_page/izin_kegiatan', $data);
        $this->load->view('landing_page/template_halaman/footer');
    }

    public function proses_insert()
    {
        $nomor = $this->input->post('nomor');
        $nama = $this->input->post('nama_mhs');
        $nim = $this->input->post('nim_mhs');
        $prodi = $this->input->post('prodi_mhs');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $kegiatan = $this->input->post('kegiatan');
        $himpunan = $this->input->post('nama_himpunan');
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_selesai = $this->input->post('tanggal_selesai');
        $waktu_mulai = $this->input->post('waktu_mulai');
        $waktu_selesai = $this->input->post('waktu_selesai');
        $jumlah_peserta = $this->input->post('jumlah_peserta');
        $lokasi_kegiatan = $this->input->post('lokasi_kegiatan');

        $berkas = $_FILES['berkas'];
        if ($berkas = '') {
        } else {
            $config['upload_path'] = './assets/berkas_izin_kegiatan';
            $config['allowed_types'] = 'pdf';
            $config['file_name'] = 'berkas_pengajuan_kegiatan_'.$nim;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('berkas')) {
                echo "gagal upload";
                die();
                // redirect('pegawai/insert');
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $layanan = array(
            'nomor' => $nomor,
            'nama_pemohon' => $nama,
            'nip_pemohon' => $nim,
            'status_pemohon' => 'Mahasiswa',
            'unit_asal' => $prodi,
            'tanggal_pengajuan' => date("Y-m-d"),
            'waktu_pengajuan' => date("H:i:s"),
            'no_hp' => $no_hp,
            'keperluan' => 'Pengajuan Izin Kegiatan Mahasiswa Prodi '.$prodi,
            'bagian' => 'kemahasiswaan',
            'update_at' => date("Y-m-d"),
            // 'berkas_pendukung' => $berkas,
        );

        $layanan = $this->m_layanan->simpan_data_layanan($layanan, 'tb_layanan');

        $data = array(
            'nama_mhs' => $nama,
            'nim' => $nim,
            'prodi_mhs' => $prodi,
            'no_hp' => $no_hp,
            'email' => $email,
            'kegiatan' => $kegiatan,
            'nama_himpunan' => $himpunan,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'waktu_mulai' => $waktu_mulai,
            'waktu_selesai' => $waktu_selesai,
            'jumlah_peserta' => $jumlah_peserta,
            'lokasi_kegiatan' => $lokasi_kegiatan,
            'berkas' => $berkas,
        );

        $izin_kegiatan = $this->m_layanan->simpan_data_layanan($data, 'tb_izin_kegiatan_mahasiswa');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                              input data berhasil
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                              </div>');
        redirect('pengguna/izin_kegiatan');



    }
}
?>
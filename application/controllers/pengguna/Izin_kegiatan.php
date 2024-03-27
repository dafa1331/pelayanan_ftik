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

    public function proses_insert(){
        $nama = $this->input->post('nama_mhs');
        $nim = $this->input->post('nim');
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
        
    }
}
?>
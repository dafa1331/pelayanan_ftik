<?php
class Pengajuan_layanan extends CI_Controller{
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
    }
    public function index(){
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/prodi');
        $this->load->view('template_prodi/footer');
    }

    public function layanan_prodi(){
        $data['layanan'] = $this->m_layanan->get_layanan_by_prodi1();
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/v_permohonan_layanan_prodi', $data);
        $this->load->view('template_prodi/footer');
    }

    public function detail($id){
        $data['detail'] = $this->m_layanan->ambil_id_layanan($id);
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/d_layanan_masuk', $data);
        $this->load->view('template_prodi/footer');
    }

    public function tambah_layanan(){
        $data['pegawai'] = $this->m_layanan->tampil_prodi();
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/f_layanan', $data);
        $this->load->view('template_prodi/footer');
    }

    public function proses_tambah(){
        $nama = $this->input->post('nama_pemohon');
        $nip = $this->input->post('nip_pemohon');
        $prodi = $this->input->post('unit_pengusul');
        $no_hp = $this->input->post('no_hp');
        $keperluan = $this->input->post('keperluan');

        $berkas_pendukung = $_FILES['berkas_pendukung'];
        if($berkas_pendukung = ''){}else{
            $config['upload_path'] = './assets/berkas_pendukung';
            $config['allowed_types'] = '*';
            $config['file_name'] = $nip;
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('berkas_pendukung')){
            // echo "gagal upload";
            // redirect('prodi/pengajuan_layanan');
            }else{
            $berkas_pendukung = $this->upload->data('file_name');
            }
        }
        
        $data = array(
            'nama_pemohon' => $nama,
            'nip_pemohon' => $nip,
            'status_pemohon' => 'Pegawai',
            'unit_asal' => $prodi,
            'tanggal_pengajuan' => date("Y-m-d"),
            'waktu_pengajuan' => date("H:i:s"),
            'no_hp' => $no_hp,
            'keperluan' => $keperluan,
            'update_at' => date("Y-m-d"),
            'berkas_pendukung' => $berkas_pendukung,
            'acc_prodi' => 1,
        );

        $simpan = $this->m_layanan->insert_data($data);
        redirect('prodi/pengajuan_layanan');
    }

    
}
?>
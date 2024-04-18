<?php

class Pengajuan_surat_tugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
            
        }
    }

    public function index()
    {
        $data['surat_tugas'] = $this->m_layanan->get_data_surat_tugas();
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/v_pengajuan_surat_tugas', $data);
        $this->load->view('template_prodi/footer');
    }

    public function insert()
    {
        $data['nomor'] = $this->m_layanan->get_nomor();
        $data['pegawai'] = $this->m_layanan->tampil_prodi();
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/f_pengajuan_surat_tugas', $data);
        $this->load->view('template_prodi/footer');
    }

    public function proses_insert()
    {
        $nomor = $this->input->post('nomor');
        $nama_pengusul = $this->input->post('nama_pengusul');
        $nip_pengusul = $this->input->post('nip_pengusul');
        $no_hp = $this->input->post('no_hp');
        $prodi_pengusul = $this->input->post('prodi_pengusul');
        $tanggal_awal_kegiatan = $this->input->post('tgl_awal');
        $tanggal_akhir_kegiatan = $this->input->post('tgl_akhir');
        $kegiatan = $this->input->post('kegiatan');

        $lampiran = $_FILES['lampiran'];
        if($lampiran = ''){}else{
            $config['upload_path'] = './assets/berkas_pendukung';
            $config['allowed_types'] = 'xlsx|xls';
            $config['file_name'] = $nip_pengusul;
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('lampiran')){
            echo "gagal upload"; die();
            // redirect('pegawai/insert');
            }else{
                $lampiran = $this->upload->data('file_name');
            }
        }

            $data = array(
                'nama_pengusul' => $nama_pengusul,
                'nip_pengusul' => $nip_pengusul,
                'prodi_pengusul' => $prodi_pengusul,
                'no_hp' => $no_hp,
                'kegiatan' => $kegiatan,
                'tanggal_mulai_kegiatan' => $tanggal_awal_kegiatan,
                'tanggal_selesai_kegiatan' => $tanggal_akhir_kegiatan,
                'tanggal_pengajuan' => date("Y-m-d"),
                'lampiran' => $lampiran,
            );

            $surat_tugas = $this->m_layanan->simpan_data_layanan($data, 'tb_pengajuan_surat_tugas_prodi');

            $layanan = array(
                'nomor' => $nomor,
                'nama_pemohon' => $nama_pengusul,
                'nip_pemohon' => $nip_pengusul,
                'status_pemohon' => 'Pegawai',
                'unit_asal' => $prodi_pengusul,
                'tanggal_pengajuan' => date("Y-m-d"),
                'waktu_pengajuan' => date("H:i:s"),
                'no_hp' => $no_hp,
                'keperluan' => 'Pengajuan Surat Tugas Prodi ' . $prodi_pengusul,
                'bagian' => 'tata laksana dan teknologi informasi',
                'update_at' => date("Y-m-d"),
                'berkas_pendukung' => $lampiran,
                'acc_prodi' => 1,
            );

            $simpan_layanan = $this->m_layanan->simpan_data_layanan($layanan, 'tb_layanan');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    input data berhasil
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>');

            redirect('prodi/pengajuan_surat_tugas');
        
    }

    public function detail_data($id)
    {
        $data['detail'] = $this->m_layanan->get_data_surat_tugas($id);
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/d_pengajuan_surat_tugas', $data);
        $this->load->view('template_prodi/footer');
    }

    


}
?>
<?php

class Pengajuan_rab extends CI_Controller{
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
    }
    public function index(){
        $data['rab'] = $this->m_layanan->get_data_rab1(); 
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/v_pengajuan_rab', $data);
        $this->load->view('template_prodi/footer');
    }

    public function insert(){
        $data['nomor'] = $this->m_layanan->get_nomor();
        $data['pegawai'] = $this->m_layanan->tampil_prodi(); 
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/f_pengajuan_rab', $data);
        $this->load->view('template_prodi/footer');
    }

    public function proses_insert(){
        // $nomor = $this->input->post('nomor');
        $kegiatan = $this->input->post('nama_kegiatan');
        $pic = $this->input->post('pic_kegiatan');
        $nip = $this->input->post('nip_pic');
        $no_hp = $this->input->post('no_hp');
        $tanggal_pengajuan = $this->input->post('tanggal_pengajuan');
        $tgl_mulai = $this->input->post('tgl_mulai_kegiatan');
        $tgl_selesai = $this->input->post('tgl_selesai_kegiatan');
        $prodi = $this->input->post('prodi_pengusul');
        $jenis_akun = $this->input->post('jenis_akun');
        $kode_akun = $this->input->post('kode_akun');
        $uraian = $this->input->post('uraian');
        $keterangan = $this->input->post('keterangan');
        $anggaran = $this->input->post('penggunaan_anggaran');
        $i = 0;

        $kegiatan = array(
            'nama_kegiatan' => $kegiatan,
            'pic_kegiatan' => $pic,
            'nip_pic' => $nip,
            'no_hp' => $no_hp,
            'tanggal_pengajuan' => $tanggal_pengajuan,
            'tgl_mulai_kegiatan' => $tgl_mulai,
            'tgl_selesai_kegiatan' => $tgl_selesai,
            'prodi_pengusul' => $prodi,
        );

        $simpan_kegiatan = $this->m_layanan->simpan_data_layanan($kegiatan, 'tb_pengajuan_kegiatan');

        if ($jenis_akun[0] !== null) {
            foreach ($jenis_akun as $row) {
              $pengajuan_anggaran = [
                'jenis_akun' => $row,
                'kode_akun' => $kode_akun[$i],
                'uraian' => $uraian[$i],
                'keterangan' => $keterangan[$i],
                'penggunaan_anggaran' => $anggaran[$i],
                'id_pengajuan' => $simpan_kegiatan
              ];
             
              $insert = $this->m_layanan->simpan_data_layanan($pengajuan_anggaran, 'tb_anggaran');
      
              if ($insert) {
                $i++;
              }
            }
          }

          $layanan = array(
            // 'nomor' => $nomor,
            'nama_pemohon' => $pic,
            'nip_pemohon' => $nip,
            'status_pemohon' => 'Pegawai',
            'unit_asal' => $prodi,
            'tanggal_pengajuan' => date("Y-m-d"),
            'waktu_pengajuan' => date("H:i:s"),
            'no_hp' => $no_hp,
            'keperluan' => 'Pengajuan RAB Prodi '.$prodi,
            // 'bagian' => 'keuangan dan perencanaan',
            'update_at' => date("Y-m-d"),
            'acc_prodi' => 1,
      
          );
      
          $id_layanan = $this->m_layanan->simpan_data_layanan($layanan, 'tb_layanan');

          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                              input data berhasil
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                              </div>');
        redirect('prodi/pengajuan_rab');

    }

    public function detail_data($id){
        $data['detail'] = $this->m_layanan->get_data_rab($id);
        $data['data'] = $this->m_layanan->data_rab($id);
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/d_pengajuan_rab', $data);
        $this->load->view('template_prodi/footer');
    }


}
?>
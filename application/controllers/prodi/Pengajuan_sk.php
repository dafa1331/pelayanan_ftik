<?php 

class Pengajuan_sk extends CI_Controller{
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
    }

    public function index(){
        $data['sk'] = $this->m_layanan->get_data_sk1(); 
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/v_pengajuan_sk', $data);
        $this->load->view('template_prodi/footer');
    }

    public function insert(){
        $data['nomor'] = $this->m_layanan->get_nomor();
        $data['pegawai'] = $this->m_layanan->tampil_prodi(); 
        $this->load->view('template_prodi/header');
        $this->load->view('template_prodi/sidebar');
        $this->load->view('prodi/f_pengajuan_sk', $data);
        $this->load->view('template_prodi/footer');
    }

    public function proses_insert(){
        $nomor = $this->input->post('nomor');
        $nama_pengusul = $this->input->post('nama_pengusul');
        $nip_pengusul = $this->input->post('nip_pengusul');
        $prodi_pengusul = $this->input->post('prodi_pengusul');
        $no_hp = $this->input->post('no_hp');
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $judul_sk = $this->input->post('judul_sk');
        $honor = $this->input->post('honor');
        $nama_anggota = $this->input->post('nama_anggota');
        $jabatan = $this->input->post('jabatan');
        $tugas = $this->input->post('tugas');
        $i = 0;

        $pengajuan_sk = array(
            'nama_pengusul' => $nama_pengusul,
            'nip_pengusul' => $nip_pengusul,
            'prodi_pengusul' => $prodi_pengusul,
            'no_hp' => $no_hp,
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir,
            'judul_sk' => $judul_sk,
            'tanggal_pengajuan' => date("Y-m-d"),
            'honor' => $honor,
        );

        $simpan = $this->m_layanan->simpan_data_layanan($pengajuan_sk, 'tb_pengajuan_sk');

        if ($nama_anggota[0] !== null) {
            foreach ($nama_anggota as $row) {
              $lampiran = [
                'nama_anggota' => $row,
                'jabatan' => $jabatan[$i],
                'tugas' => $tugas[$i],
                'id_pengajuan_sk' => $simpan
              ];
             
              $insert = $this->m_layanan->simpan_data_layanan($lampiran, 'tb_lampiran_sk');
      
              if ($insert) {
                $i++;
              }
            }
          }

          $layanan = array(
            'nomor' => $nomor,
            'nama_pemohon' => $nama_pengusul,
            'nip_pemohon' => $nip_pengusul,
            'status_pemohon' => 'Pegawai',
            'unit_asal' => $prodi_pengusul,
            'tanggal_pengajuan' => date("Y-m-d"),
            'waktu_pengajuan' => date("H:i:s"),
            'no_hp' => $no_hp,
            'keperluan' => 'Pengajuan SK Prodi '.$prodi_pengusul,
            'bagian' => 'tata laksana dan teknologi informasi',
            'update_at' => date("Y-m-d"),
      
          );
      
          $id_layanan = $this->m_layanan->simpan_data_layanan($layanan, 'tb_layanan');

          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                              input data berhasil
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                              </div>');
        redirect('prodi/pengajuan_sk');
    }

    public function detail_data($id){
      $data['detail'] = $this->m_layanan->get_data_sk($id);
      $data['data'] = $this->m_layanan->data_sk($id);
      $this->load->view('template_prodi/header');
      $this->load->view('template_prodi/sidebar');
      $this->load->view('prodi/d_pengajuan_sk', $data);
      $this->load->view('template_prodi/footer');
    }
    
}
?>
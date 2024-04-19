<?php

class Layanan extends CI_Controller{
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
    }

    public function index(){
        $data['result'] = $this->m_layanan->get_data();
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_layanan', $data);
        $this->load->view('template_datatable/footer');
    }

    public function insert(){
        $data['nomor'] = $this->m_layanan->get_nomor();
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('f_layanan', $data);
        $this->load->view('template_datatable/footer');
    }

    public function proses_insert(){
        $nomor = $this->input->post('nomor');
        $nama_pemohon = $this->input->post('nama_pemohon');
        $nip_pemohon = $this->input->post('nip_pemohon');
        $status_pemohon = $this->input->post('status_pemohon');
        $unit_asal = $this->input->post('unit_asal');
        $no_hp = $this->input->post('no_hp');
        $keperluan = $this->input->post('keperluan');
        $bagian = $this->input->post('bagian');
        $other_option = $this->input->post('other_option');

        $unit_asal = ($unit_asal === 'other') ? $other_option : $unit_asal;

        $berkas_pendukung = $_FILES['berkas_pendukung'];
        if($berkas_pendukung = ''){}else{
            $config['upload_path'] = './assets/berkas_pendukung';
            $config['allowed_types'] = 'pdf';
            $config['file_name'] = $nip_pemohon;
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('berkas_pendukung')){
            echo "gagal upload";
            // redirect('pegawai/insert');
            }else{
            $berkas_pendukung = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nomor' => $nomor,
            'nama_pemohon' => $nip_pemohon,
            'nip_pemohon' => $nip_pemohon,
            'status_pemohon' => $status_pemohon,
            'unit_asal' => $unit_asal,
            'tanggal_pengajuan' => date("Y-m-d"),
            'waktu_pengajuan' => date("H:i:s"),
            'no_hp' => $no_hp,
            'keperluan' => $keperluan,
            'bagian' => $bagian,
            'update_at' => date("Y-m-d"),
            'berkas_pendukung' => $berkas_pendukung,
            'acc_prodi' => 1,
        );

        $simpan = $this->m_layanan->insert_data($data);
        redirect('layanan');
    }

    public function detail_data($id){
      $data['detail'] = $this->m_layanan->ambil_id_layanan($id);
      $this->load->view('template_datatable/header');
      $this->load->view('template/sidebar');
      $this->load->view('d_layanan', $data);
      $this->load->view('template_datatable/footer');
    }

    public function delete_data($id){
       
        $this->m_layanan->delete_data($id);
        redirect('layanan'); // 
    }

    public function rekap_layanan(){
        $tgl_awal = $this->input->get('tgl_awal');
        $tgl_akhir = $this->input->get('tgl_akhir');
    
        if(empty($tgl_awal) or empty($tgl_akhir)){
          $layanan = $this->m_layanan->view_all();
          $url_cetak = 'layanan/cetak';
          $label = 'Data Layanan All';
        }else{
          $layanan = $this->m_layanan->view_by_date($tgl_awal, $tgl_akhir);
          $url_cetak = 'layanan/cetak?tgl_awal='.$tgl_awal.'&tgl_akhir='.$tgl_akhir;
          $tgl_awal = date('d-m-Y', strtotime($tgl_awal));
          $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir));
          $label = 'Periode Tanggal '.$tgl_awal.' s/d '.$tgl_akhir;
        }
        $data['layanan'] = $layanan;
        $data['url_cetak'] = base_url($url_cetak);
        $data['label'] = $label;
    
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('rekap', $data);
        $this->load->view('template_datatable/footer');
      }
    
      public function cetak(){
        $tgl_awal = $this->input->get('tgl_awal');
        $tgl_akhir = $this->input->get('tgl_akhir');
    
        if(empty($tgl_awal) or empty($tgl_akhir)){
          $layanan = $this->m_layanan->view_all();
          $label = 'semua data layanan';
        }else{
          $layanan = $this->m_layanan->view_by_date($tgl_awal, $tgl_akhir);
          $tgl_awal = date('d-m-Y', strtotime($tgl_awal));
          $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir));
          $label = 'periode tanggal '.$tgl_awal.' s/d '.$tgl_akhir;
        }
    
        $data['label'] = $label;
        $data['layanan'] = $layanan;

        $this->load->library('pdflib');
        $this->pdflib->setPaper('A4', 'potrait');
        $this->pdflib->setFileName('Nama_file.pdf');
        $this->pdflib->loadView('cetak1', $data);
      }

      public function validasi_layanan(){
        $id = $this->input->post('id_layanan');
        $validasi = $this->input->post('validasi');
        $komentar = $this->input->post('komentar');

        $data = array(
          'validasi' => $validasi,
          'komentar' => $komentar,
        );

        $where = array(
          'id_layanan' => $id,
        );

        $this->m_layanan->update($where, $data, 'tb_layanan');
        
        redirect('layanan');
      }
    


}
?>

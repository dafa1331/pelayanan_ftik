<?php
class M_layanan extends CI_Model{

    public function insert_data($data) {
        $this->db->insert('tb_layanan', $data);
        return $this->db->insert_id();
     }

     public function insert_data_list($data) {
      $this->db->insert('tb_daftar_layanan', $data);
      return $this->db->insert_id();
   }

    public function get_data() {
        // Ambil data dari tabel atau sumber data lainnya
        $query = $this->db->get('tb_layanan');
        return $query->result(); // Mengembalikan hasil query sebagai objek array
    }

    public function get_data_daftar() {
      // Ambil data dari tabel atau sumber data lainnya
      $query = $this->db->get('tb_daftar_layanan');
      return $query->result(); // Mengembalikan hasil query sebagai objek array
  }

    public function get_data_by_username(){
      $level = $this->session->userdata('username');
      $this->db->select('*');
      $this->db->join('tb_user', 'tb_layanan.bagian = tb_user.bagian');
      $this->db->from('tb_layanan');
      $this->db->order_by('validasi', 'asc');
      $this->db->where('tb_user.username', $level);

      $query = $this->db->get();
      return $query->result();
    }

    public function update($where, $data, $table){
      $this->db->where($where);
      $this->db->update($table, $data);
    }

    function get_nomor(){
        $q = $this->db->query("SELECT MAX(RIGHT(nomor,4)) AS kd_max FROM tb_layanan WHERE DATE(tanggal_pengajuan)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
          foreach ($q->result() as $k) {
            $tmp = ((int)$k->kd_max)+1;
            $kd = sprintf("%04s", $tmp);
          }
        }else{
          $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return "FTIK".date('dmy').$kd;
      }

    function ambil_id_layanan($id){
      $hasil = $this->db->where('id_layanan', $id)->get('tb_layanan');
      if($hasil->num_rows() > 0){
        return $hasil->result();
      }else{
        return false;
      }
    }

    function simpan_data_layanan($data, $table){
      $this->db->insert($table,$data);
      return $this->db->insert_id();
    }

    function simpan_data1($data, $table){
        $this->db->insert($table,$data);
        return true;
    }

    public function detail_kp($id){
        $this->db->select('*');
        $this->db->join('tb_kp', 'tb_nomor_pengantar_kp.nim = tb_kp.nim_ketua');
        $this->db->from('tb_nomor_pengantar_kp');
        $this->db->where('tb_nomor_pengantar_kp.id_surat', $id);

        $query = $this->db->get();
        return $query->result();
      }

      public function detail_kp1($id){
          $this->db->select('*');
          $this->db->join('tb_kp', 'tb_nomor_pengantar_kp.nim = tb_kp.nim_ketua');
          $this->db->from('tb_nomor_pengantar_kp');
          $this->db->where('tb_nomor_pengantar_kp.id_surat', $id);

          $query = $this->db->get();
          return $query->row();
        }

      public function get_data_nomor($id){
        $hasil = $this->db->where('id_surat', $id)->get('tb_nomor_pengantar_kp');
        if($hasil->num_rows() > 0){
          return $hasil->result();
        }else{
          return false;
        }
      }

    public function get_data_kp() {
        // Ambil data dari tabel atau sumber data lainnya
        $query = $this->db->get('tb_nomor_pengantar_kp');
        return $query->result(); // Mengembalikan hasil query sebagai objek array
    }


    public function get_data_ta() {
        // Ambil data dari tabel atau sumber data lainnya
        $query = $this->db->get('tb_izin_penelitian');
        return $query->result(); // Mengembalikan hasil query sebagai objek array
    }

    public function get_data_nomor_ta($id){
      $hasil = $this->db->where('id_penelitian', $id)->get('tb_izin_penelitian');
      if($hasil->num_rows() > 0){
        return $hasil->result();
      }else{
        return false;
      }
    }

    public function detail_ta($id){
      $this->db->select('*');
      $this->db->join('kebutuhan_data', 'tb_izin_penelitian.id_penelitian = kebutuhan_data.id_penelitian');
      $this->db->from('tb_izin_penelitian');
      $this->db->where('tb_izin_penelitian.id_penelitian', $id);

      $query = $this->db->get();
      return $query->result();
    }

    public function get_data_alat($id) {
      
        $hasil = $this->db->where('id_pinjam', $id)->get('tb_pinjam_alat');
        if($hasil->num_rows() > 0){
          return $hasil->result();
        }else{
          return false;
        }
      
    }

    public function get_pinjam() {
      // Ambil data dari tabel atau sumber data lainnya
      $query = $this->db->get('tb_pinjam_alat');
      return $query->result(); // Mengembalikan hasil query sebagai objek array
    }

    public function detail_pinjam($id){
      $this->db->select('*');
      $this->db->join('tb_alat_ftik', 'tb_pinjam_alat.id_pinjam = tb_alat_ftik.id_pinjam');
      $this->db->from('tb_pinjam_alat');
      $this->db->where('tb_pinjam_alat.id_pinjam', $id);

      $query = $this->db->get();
      return $query->result();
    }

    public function get_data_user() {
      // Ambil data dari tabel atau sumber data lainnya
      $query = $this->db->get('tb_user');
      return $query->result(); // Mengembalikan hasil query sebagai objek array
    }

    public function get_data_rab() {
      // Ambil data dari tabel atau sumber data lainnya
      $query = $this->db->get('tb_pengajuan_kegiatan');
      return $query->result(); // Mengembalikan hasil query sebagai objek array
    }

    public function data_rab($id){
      $this->db->select('*');
      $this->db->join('tb_anggaran', 'tb_pengajuan_kegiatan.id_pengajuan = tb_anggaran.id_pengajuan');
      $this->db->from('tb_pengajuan_kegiatan');
      $this->db->where('tb_pengajuan_kegiatan.id_pengajuan', $id);

      $query = $this->db->get();
      return $query->result();
    }

    public function get_data_rab1(){
      $level = $this->session->userdata('username');

      $this->db->select('*');
      $this->db->from('tb_pengajuan_kegiatan');
      $this->db->join('tb_user', 'tb_pengajuan_kegiatan.prodi_pengusul = tb_user.bagian');
      $this->db->where('tb_user.username', $level);
      // Ambil data dari tabel atau sumber data lainnya
      $query = $this->db->get();
      return $query->result(); // Mengembalikan hasil query sebagai objek array
    }

    public function tampil_prodi(){
      $level = $this->session->userdata('username');
      $this->db->select('*');
      $this->db->from('tb_user');
      $this->db->where('tb_user.username', $level);

      $query = $this->db->get();
      return $query->result();
    }

    public function get_data_sk() {
      // Ambil data dari tabel atau sumber data lainnya
      $query = $this->db->get('tb_pengajuan_sk');
      return $query->result(); // Mengembalikan hasil query sebagai objek array
    }

    public function get_data_sk1() {

      $level = $this->session->userdata('username');

      $this->db->select('*');
      $this->db->from('tb_pengajuan_sk');
      $this->db->join('tb_user', 'tb_pengajuan_sk.prodi_pengusul = tb_user.bagian');
      $this->db->where('tb_user.username', $level);
      // Ambil data dari tabel atau sumber data lainnya
      $query = $this->db->get();
      return $query->result(); // Mengembalikan hasil query sebagai objek array
    }

    public function data_sk($id){
      $this->db->select('*');
      $this->db->join('tb_lampiran_sk', 'tb_pengajuan_sk.id_pengajuan = tb_lampiran_sk.id_pengajuan_sk');
      $this->db->from('tb_pengajuan_sk');
      $this->db->where('tb_pengajuan_sk.id_pengajuan', $id);

      $query = $this->db->get();
      return $query->result();
    }

    public function get_layanan_by_prodi(){
      $level = $this->session->userdata('username');
      $this->db->select('*');
      $this->db->join('tb_user', 'tb_layanan.unit_asal = tb_user.bagian');
      $this->db->from('tb_layanan');
      $this->db->order_by('acc_prodi', 'asc');
      $this->db->where('tb_user.username', $level);
      $this->db->where('tb_layanan.status_pemohon', 'Mahasiswa');

      $query = $this->db->get();
      return $query->result();
    }

    public function get_layanan_by_prodi1(){
      $level = $this->session->userdata('username');
      $this->db->select('*');
      $this->db->join('tb_user', 'tb_layanan.unit_asal = tb_user.bagian');
      $this->db->from('tb_layanan');
      $this->db->order_by('acc_prodi', 'asc');
      $this->db->where('tb_user.username', $level);
      $this->db->where('tb_layanan.status_pemohon', 'Pegawai');

      $query = $this->db->get();
      return $query->result();
    }

    public function get_data_surat_tugas() {

      $level = $this->session->userdata('username');

      $this->db->select('*');
      $this->db->from('tb_pengajuan_surat_tugas_prodi');
      $this->db->join('tb_user', 'tb_pengajuan_surat_tugas_prodi.prodi_pengusul = tb_user.bagian');
      $this->db->where('tb_user.username', $level);
      // Ambil data dari tabel atau sumber data lainnya
      $query = $this->db->get();
      return $query->result(); // Mengembalikan hasil query sebagai objek array
    }

    public function delete_data($id) {
      // Hapus data dari tabel1
      $this->db->where('nomor', $id);
      $this->db->delete('tb_layanan');

      // Hapus data dari tabel2
      // $this->db->where('id_', $id);
      // $this->db->delete('table2');

      // Tambahkan tabel lain jika perlu
  }

  public function get_data_surat_tugas_kp(){
      $query = $this->db->get('tb_nomor_surat_tugas_kp');
      return $query->result(); // Mengembalikan hasil query sebagai objek array
  }

  public function detail_surat_tugas_kp($id){
    $this->db->select('*');
    $this->db->join('tb_data_anggota_surat_tugas', 'tb_nomor_surat_tugas_kp.nim_mhs = tb_data_anggota_surat_tugas.nim_ketua');
    $this->db->from('tb_nomor_surat_tugas_kp');
    $this->db->where('tb_nomor_surat_tugas_kp.id_surat_tugas_kp', $id);

    $query = $this->db->get();
    return $query->result();
  }

  public function detail_surat_tugas_kp1($id){
    $this->db->select('*');
    $this->db->join('tb_data_anggota_surat_tugas', 'tb_nomor_surat_tugas_kp.nim_mhs = tb_data_anggota_surat_tugas.nim_ketua');
    $this->db->from('tb_nomor_surat_tugas_kp');
    $this->db->where('tb_nomor_surat_tugas_kp.id_surat_tugas_kp', $id);

    $query = $this->db->get();
    return $query->row();
    }

    public function get_data_nomor_surat_tugas($id){
      $hasil = $this->db->where('id_surat_tugas_kp', $id)->get('tb_nomor_surat_tugas_kp');
      if($hasil->num_rows() > 0){
        return $hasil->result();
      }else{
        return false;
      }
    }

    function hitung_layanan_all(){
      $query = $this->db->get('tb_layanan')->num_rows();
      return $query;
    }

    public function view_all(){
      return $this->db->get('tb_layanan')->result(); // Tampilkan semua data transaksi
    }

    public function view_by_date($tgl_awal, $tgl_akhir){
      $tgl_awal = $this->db->escape($tgl_awal);
      $tgl_akhir = $this->db->escape($tgl_akhir);

      $this->db->where('DATE(tanggal_pengajuan) BETWEEN '.$tgl_awal.' AND '.$tgl_akhir); // Tambahkan where tanggal nya

      return $this->db->get('tb_layanan')->result();// Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
    }

    public function get_hima() {
      // Ambil data dari tabel atau sumber data lainnya
      $query = $this->db->get('tb_izin_kegiatan_mahasiswa');
      return $query->result(); // Mengembalikan hasil query sebagai objek array
    }

    function detail_kemahasiswaan($id){
      $hasil = $this->db->where('id_izin_mahasiswa', $id)->get('tb_izin_kegiatan_mahasiswa');
      if($hasil->num_rows() > 0){
        return $hasil->result();
      }else{
        return false;
      }
    }
    public function get_sk() {
      // Ambil data dari tabel atau sumber data lainnya
      $query = $this->db->get('tb_pengajuan_sk');
      return $query->result(); // Mengembalikan hasil query sebagai objek array
    }

    function detail_sk($id){
      $hasil = $this->db->where('id_pengajuan', $id)->get('tb_pengajuan_sk');
      if($hasil->num_rows() > 0){
        return $hasil->result();
      }else{
        return false;
      }
    }

}
?>

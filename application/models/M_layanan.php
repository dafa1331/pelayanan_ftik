<?php
class M_layanan extends CI_Model{

    public function insert_data($data) {
        $this->db->insert('tb_layanan', $data);
        return $this->db->insert_id();
     }

    public function get_data() {
        // Ambil data dari tabel atau sumber data lainnya
        $query = $this->db->get('tb_layanan');
        return $query->result(); // Mengembalikan hasil query sebagai objek array
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
      $hasil = $this->db->where('nomor', $id)->get('tb_layanan');
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

    public function detail_ta($id){
      $this->db->select('*');
      $this->db->join('kebutuhan_data', 'tb_izin_penelitian.id_penelitian = kebutuhan_data.id_penelitian');
      $this->db->from('tb_izin_penelitian');
      $this->db->where('tb_izin_penelitian.id_penelitian', $id);

      $query = $this->db->get();
      return $query->result();
    }

    public function get_data_alat() {
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



}
?>

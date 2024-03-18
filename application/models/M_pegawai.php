<?php

class M_pegawai extends CI_Model{
  public function insert_data($data) {
      $this->db->insert('tb_pegawai', $data);
      return $this->db->insert_id();
   }

   public function tampil_data(){
      return $this->db->get('tb_pegawai');
    }

    public function get_data() {
      // Ambil data dari tabel atau sumber data lainnya
      $query = $this->db->get('tb_pegawai');
      return $query->result(); // Mengembalikan hasil query sebagai objek array
  }

}
 ?>

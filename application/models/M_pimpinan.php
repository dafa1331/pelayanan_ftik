<?php

class M_pimpinan extends CI_Model{
    public function get_data_anggaran() {
        // Ambil data dari tabel atau sumber data lainnya
        $query = $this->db->get('tb_pengajuan_kegiatan');
        return $query->result(); // Mengembalikan hasil query sebagai objek array
    }


}
?>
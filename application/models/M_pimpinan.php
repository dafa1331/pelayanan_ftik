<?php

class M_pimpinan extends CI_Model{
    public function get_data_anggaran() {
        // Ambil data dari tabel atau sumber data lainnya
        $query = $this->db->get('tb_pengajuan_kegiatan');
        return $query->result(); // Mengembalikan hasil query sebagai objek array
    }

    function detail_keuangan($id){
        $hasil = $this->db->where('id_pengajuan', $id)->get('tb_pengajuan_kegiatan');
        if($hasil->num_rows() > 0){
          return $hasil->result();
        }else{
          return false;
        }
      }

    public function detail_anggaran($id){
        $this->db->select('*');
        $this->db->join('tb_pengajuan_kegiatan', 'tb_anggaran.id_pengajuan = tb_pengajuan_kegiatan.id_pengajuan');
        $this->db->from('tb_anggaran');
        $this->db->where('tb_pengajuan_kegiatan.id_pengajuan', $id);

        $query = $this->db->get();
        return $query->result();
    }


}
?>
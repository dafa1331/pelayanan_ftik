<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Program Studi</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('prodi/pengajuan_layanan')?>">Home</a></li>
                    <li><a href="<?php echo base_url('prodi/pengajuan_rab')?>">RAB</a></li>
                    <li><span>Insert</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- Primary table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Tambah Data Pengajuan Kegiatan</h4>

                    <form method="post" action="<?php echo base_url('prodi/pengajuan_rab/proses_insert')?>">
                    <div class="col-lg-8 mt-10 mt-lg-0">

                      <div class="row gy-2 gx-md-3">

                      <div class="col-md-12 form-group">
                        <input type="text" name="nomor" class="form-control" value="<?php echo $nomor?>" placeholder="Masukkan Nomor Layanan" required readonly>
                      </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="pic_kegiatan" class="form-control" placeholder="Nama PIC Kegiatan" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="nip_pic" class="form-control" placeholder="NIP/NRK PIC" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="no_hp" class="form-control" placeholder="Nomor Hp PIC" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <label for="">Tanggal Pengajuan</label>
                          <input type="date" name="tanggal_pengajuan" class="form-control" placeholder="tanggal_pengajuan" required>
                        </div>

                        <div class="col-md-6 form-group">
                          <label for="">Tanggal Mulai</label>
                          <input type="date" name="tgl_mulai_kegiatan" class="form-control" placeholder="tanggal mulai" required>
                        </div>

                        <div class="col-md-6 form-group">
                          <label for="">Tanggal Selesai</label>
                          <input type="date" name="tgl_selesai_kegiatan" class="form-control" placeholder="tanggal selesai" required>
                        </div>

                        
                        <div class="col-md-12 form-group">
                          <?php foreach ($pegawai as $p) :?>
                          <input type="text" name="prodi_pengusul" class="form-control" value="<?php echo $p->bagian?>" placeholder="Masukkan No Hp" readonly>
                          <?php endforeach?>
                        </div>
                        
                        <div>
                        <div id="formContainer" class="col-md-12">
                          <div class="row gy-2 gx-md-3">

                          </div>
                        </div>
                        <div class="col-md-12 form-group">
                          <button type="button" class="btn btn-success" id="addForm">Tambahkan Detail Anggaran</button>
                        </div>
                          </div>
                        
                      </div>
                      
                      <button type="submit" class="btn btn-primary" name="button">Simpan</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- Primary table end -->
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
        $(document).ready(function(){
            // Fungsi untuk menambahkan form baru
            $("#addForm").click(function(){
                var newForm = '<div class="col-md-12"><div class="row gy-2 gx-md-3"><label>Anggaran</label><div class="col-md-12 form-group">  <input type="text" class="form-control" name="jenis_akun[]" placeholder="Jenis Akun"></div> <div class="col-md-12 form-group"><input type="text" class="form-control" name="kode_akun[]" placeholder="Kode Akun"></div> <div class="col-md-12 form-group"><input type="text" class="form-control" name="uraian[]" placeholder="uraian singkat"></div> <div class="col-md-12 form-group"><textarea class="form-control" name="keterangan[]" rows="5" placeholder="Keterangan"></textarea></div> <div class="col-md-12 form-group"><input type="text" class="form-control" name="penggunaan_anggaran[]" placeholder="Penggunaan Anggaran"></div> </div class="col-md-12 form-group"><button class="removeForm btn btn-danger">Hapus</button></div><br>';
                
                $("#formContainer").append(newForm);

            });

            // Fungsi untuk menghapus form
            $(document).on("click", ".removeForm", function(){
                $(this).parent().remove();
            });

        });
    </script>





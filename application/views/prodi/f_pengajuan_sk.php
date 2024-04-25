<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Program Studi</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('prodi/pengajuan_layanan')?>">Home</a></li>
                    <li><a href="<?php echo base_url('prodi/pengajuan_rab')?>">SK</a></li>
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
                    <h4 class="header-title">Tambah Data Pengajuan SK</h4>

                    <!-- <form method="post" action="<?php echo base_url('prodi/pengajuan_sk/proses_insert')?>"> -->
                    <?php echo form_open_multipart('prodi/pengajuan_sk/proses_insert')?>
                    <div class="col-lg-8 mt-10 mt-lg-0">

                      <div class="row gy-2 gx-md-3">
                      <div class="col-md-12 form-group">
                        <a class="btn btn-success" href="<?php echo base_url()?>assets/format_lampiran_sk.xlsx">download lampiran</a>
                      </div>
                      <!-- <div class="col-md-12 form-group">
                        <input type="text" name="nomor" class="form-control" value="<?php echo $nomor?>" placeholder="Masukkan Nomor Layanan" required readonly>
                      </div> -->

                        <div class="col-md-12 form-group">
                          <input type="text" name="nama_pengusul" class="form-control" placeholder="Nama Pengusul" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="nip_pengusul" class="form-control" placeholder="NIP / NRK Pengusul" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="no_hp" class="form-control" placeholder="Nomor HP / WA" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <?php foreach ($pegawai as $p) :?>
                          <input type="text" name="prodi_pengusul" class="form-control" value="<?php echo $p->bagian?>" placeholder="Masukkan No Hp" readonly>
                          <?php endforeach?>
                        </div>

                        <div class="col-md-6 form-group">
                          <label for="">Tanggal Berlaku</label>
                          <input type="date" name="tgl_awal" class="form-control" placeholder="tanggal mulai" required>
                        </div>

                        <div class="col-md-6 form-group">
                          <label for="">Tanggal Berakhir</label>
                          <input type="date" name="tgl_akhir" class="form-control" placeholder="tanggal selesai" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <textarea class="form-control" name="judul_sk" rows="5" placeholder="Nama SK"></textarea>
                        </div>

                        <div class="col-md-12 form-group">
                          <select name="honor" id="" class="form-control">
                            <option value="">--Apakah SK ini Dibayarkan ?--</option>
                            <option>Iya</option>
                            <option>Tidak</option>
                          </select>
                        </div>
                        
                        <!-- <div>
                        <div id="formContainer" class="col-md-12">
                          <div class="row gy-2 gx-md-3">

                          </div>
                        </div>
                        <div class="col-md-12 form-group">
                          <button type="button" class="btn btn-success" id="addForm">Tambahkan Lampiran SK</button>
                        </div>
                          </div> -->
                          <div class="col-md-12 form-group">
                            <label for="">Upload lampiran SK sesuai dengan format</label>
                              <input type="file" class="form-control" name="lampiran_sk" required>
                          </div>
                      </div>
                      
                      <button type="submit" class="btn btn-primary" name="button">Simpan</button>
                    </div>
                    <!-- </form> -->
                    <?php echo form_close()?>
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
                var newForm = '<div class="col-md-12"><div class="row gy-2 gx-md-3"><label>Lampiran</label><div class="col-md-12 form-group">  <input type="text" class="form-control" name="nama_anggota[]" placeholder="Nama Tanpa Gelar"></div> <div class="col-md-12 form-group"><input type="text" class="form-control" name="jabatan[]" placeholder="Jabatan dalam SK"></div> <div class="col-md-12 form-group"><textarea class="form-control" name="tugas[]" rows="5" placeholder="Tugas"></textarea> </div class="col-md-12 form-group"><button class="removeForm btn btn-danger">Hapus</button></div><br>';
                
                $("#formContainer").append(newForm);

            });

            // Fungsi untuk menghapus form
            $(document).on("click", ".removeForm", function(){
                $(this).parent().remove();
            });

        });
    </script>





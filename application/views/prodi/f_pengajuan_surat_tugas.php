<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Program Studi</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('prodi/pengajuan_layanan')?>">Home</a></li>
                    <li><a href="<?php echo base_url('prodi/pengajuan_surat_tugas')?>">Surat Tugas</a></li>
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
                    <h4 class="header-title">Tambah Data Pengajuan Surat Tugas</h4>
                    <?php echo form_open_multipart('prodi/pengajuan_surat_tugas/proses_insert')?>
                    
                    <div class="col-lg-8 mt-10 mt-lg-0">

                      <div class="row gy-2 gx-md-3">

                      <div class="col-md-12 form-group">
                        <a class="btn btn-primary" href="<?php echo base_url()?>assets/format_lampiran.xlsx">download lampiran</a>
                      </div>

                      <div class="col-md-12 form-group">
                        <input type="text" name="nomor" class="form-control" value="<?php echo $nomor?>" placeholder="Masukkan Nomor Layanan" required readonly>
                      </div>

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
                          <label for="">Tanggal Mulai</label>
                          <input type="date" name="tgl_awal" class="form-control" placeholder="tanggal mulai" required>
                        </div>

                        <div class="col-md-6 form-group">
                          <label for="">Tanggal Selesai</label>
                          <input type="date" name="tgl_akhir" class="form-control" placeholder="tanggal selesai" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <textarea class="form-control" name="kegiatan" rows="5" placeholder="nama kegiatan"></textarea>
                        </div>

                        <div class="col-md-12 form-group">
                          <label for="">lampiran surat tugas</label>
                          <input type="file" name="lampiran" class="form-control" required>
                        </div>
                      </div>
                      
                      <button type="submit" class="btn btn-primary" name="button">Simpan</button>
                    </div>
                    
                    <?php form_close()?>
                </div>

            </div>
        </div>
        <!-- Primary table end -->
    </div>
</div>

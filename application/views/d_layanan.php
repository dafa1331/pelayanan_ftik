

<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Layanan</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('layanan')?>">Layanan</a></li>
                    <li><span>Detail</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main-content-inner">
    <div class="row">
      <div class="col-12 mt-5">
          <div class="card">
              <div class="card-body">
                  <h4 class="header-title">Detail Data Layanan</h4>
<form method="post" action="<?php echo base_url('layanan/validasi_layanan')?>">

<table class="table table-strip">
  <?php foreach($detail as $dt) :?>
    <input type="hidden" name="id_layanan" class="form-control" value="<?php echo $dt->id_layanan?>" required>
  <tr>
    <td width="200 px">Nomor</td>
    <td width="10 px">:</td>
    <?php if($dt->nomor == ''){?>
    <td><input type="text" class="form-control" name="nomor" value="<?php echo $nomor?>" readonly></td>
    <?php }else{ ?>
      <td><input type="text" class="form-control" name="nomor" value="<?php echo $dt->nomor?>" readonly></td>
      <?php } ?>
    </tr>

  <tr>
    <td width="200 px">Nama</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->nama_pemohon?></td>
  </tr>

  <tr>
    <td width="200 px">NIP/NRK/NIM</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->nip_pemohon?></td>
  </tr>

  <tr>
    <td width="200 px">Status Pemohon</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->status_pemohon?></td>
  </tr>

  <tr>
    <td width="200 px">Unit Asal</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->unit_asal?>l</td>
  </tr>

  <tr>
    <td width="200 px">Hari</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo1($dt->tanggal_pengajuan)?></td>
  </tr>

  <tr>
    <td width="200 px">Tanggal</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($dt->tanggal_pengajuan) ?></td>
  </tr>

  <tr>
    <td width="200 px">Nomor Hp/WA</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->no_hp?></td>
  </tr>

  <tr>
    <td width="200 px">Keperluan</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->keperluan?></td>
  </tr>

  <tr>
    <td width="200 px">Validasi Prodi</td>
    <td width="10 px">:</td>
    <?php if($dt->acc_prodi = 0){
      // $acc = '<button class="btn btn-danger">belum di validasi</button>';}
      $acc = '<div style="border" class="btn btn-danger">belum di validasi</div>';}
      else{
        // $acc = '<button class="btn btn-success">sudah di validasi</button>'; }
        $acc = '<div style="border" class="btn btn-success">sudah di validasi</div>'; } ?>
    <td><?php echo $acc?></td>
  </tr>

  <?php if($this->session->userdata('username') == 'csftik' || $this->session->userdata('username') == 'superadmin'){?>
  <tr>
    <td width="200 px">Tim Kerja</td>
    <td width="10 px">:</td>
    <td><select name="bagian" class="form-control">
      <option value="<?php echo $dt->bagian?>"><?php echo $dt->bagian?></option>
      <option value="akademik">Akademik</option>
      <option value="kemahasiswaan">Kemahasiswaan</option>
      <option value="keuangan dan perencanaan">Keuangan dan Perencanaan</option>
      <option value="humas dan kerjasama">Humas dan Kerjasama</option>
      <option value="rumah tangga dan bmn">Rumah Tanggga dan BMN</option>
      <option value="kepegawaian">Kepegawaian</option>
      <option value="customer service">Customer Service FTIK</option>
      <option value="tata laksana dan teknologi informasi"> Tata Laksana dan TI</option>
    </select></td>
  </tr>
  <?php }else { ?>
  <tr>
    <td width="200 px">Tim Kerja</td>
    <td width="10 px">:</td>
    <td><input type="text" class="form-control" name="bagian" value="<?php echo $dt->bagian?>" readonly></td>
  </tr>
  
  <?php }?>
  <tr>
    <td width="200 px">Berkas Pendukung (optional)</td>
    <td width="10 px">:</td>
    <td> <?php echo anchor('assets/berkas_pendukung/'.$dt->berkas_pendukung,'<button class=" btn btn-primary btn-sm">download</button>') ?></td>
  </tr>
<?php endforeach?>
</table>

<?php
if($this->session->userdata('username') != 'csftik' || $this->session->userdata('username') != 'csftik'){?>

  <div class="col-md-6 form-group">
    
      
      <select name="validasi" class="form-control">
        <option value="">--Status Selesai--</option>
        <option value="1">Selesai dikerjakan</option>
        <option value="0">Sedang proses</option>
      </select>
  </div>
  <div class="col-md-6 form-group">
    <textarea class="form-control" name="komentar" rows="5" placeholder="Masukkan Komentar anda"></textarea>
  </div>
  <?php } ?>
  <button type="submit" class="btn btn-success">Simpan Data</button>
  <br>


</form>

<br>
<?php echo anchor('layanan','<button class=" btn btn-primary btn-sm">Kembali</button>') ?>
</div>
</div>
</div>
</div>
</div>

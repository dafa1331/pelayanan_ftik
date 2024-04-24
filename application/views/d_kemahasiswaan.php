<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Prodi</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('kemahasiswaan')?>">Pengajuan Izin Kegiatan</a></li>
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
                  <h4 class="header-title">Detail Data Pengajuan</h4>

<form method="post" action="<?php echo base_url('kemahasiswaan/acc_fakultas')?>">

<table class="table table-strip">
<?php foreach($kemahasiswaan as $dt) :?>
    <input type="hidden" name="id_izin_mahasiswa" class="form-control" value="<?php echo $dt->id_izin_mahasiswa?>" required>
  <tr>
    <td width="200 px">Nama Mahasiswa</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->nama_mhs?></td>
  </tr>

  <tr>
    <td width="200 px">NIM Mahasiswa</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->nim?></td>
  </tr>

  <tr>
    <td width="200 px">Program Studi Mahasiswa</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->prodi_mhs?></td>
  </tr>

  <tr>
    <td width="200 px">No HP/WA</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->no_hp?></td>
  </tr>

  <tr>
    <td width="200 px">Email</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->email?></td>
  </tr>

  <tr>
    <td width="200 px">Kegiatan</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->kegiatan?></td>
  </tr>

  <tr>
    <td width="200 px">Tanggal Mulai Kegiatan</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo ($dt->tanggal_mulai)?></td>
  </tr>

  <tr>
    <td width="200 px">Tanggal Selesai Kegiatan</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($dt->tanggal_selesai) ?></td>
  </tr>

  <tr>
    <td width="200 px">Waktu Mulai</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->waktu_mulai?></td>
  </tr>
  
  <tr>
    <td width="200 px">Waktu Selesai</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->waktu_selesai?></td>
  </tr>

  <tr>
    <td width="200 px">Jumlah Peserta</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->jumlah_peserta?></td>
  </tr>

  <tr>
    <td width="200 px">Lokasi Kegiatan</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->lokasi_kegiatan?></td>
  </tr>

  <tr>
    <td width="200 px">Berkas Pendukung (optional)</td>
    <td width="10 px">:</td>
    <td> <?php echo anchor('assets/berkas_izin_kegiatan/'.$dt->berkas,'<button class=" btn btn-primary btn-sm">download</button>') ?></td>
  </tr>

<?php endforeach?>
</table>
<?php if ($dt->acc_fakultas == ''){?>
<div class="col-md-6 form-group">
    
      <input type="hidden" name="id_izin_mahasiswa" value="<?php echo $dt->id_izin_mahasiswa?>">
      
      <select name="validasi" class="form-control">
        <option value="">--apakah di setujui--</option>
        <option value="1">Setujui</option>
        <option value="0">Tidak Disetujui</option>
      </select>
  </div>
  <?php } else{ 
    if($dt->acc_fakultas == 0) {
      $acc = '<button class="btn btn-danger">belum disetujui</button>';
    }else{
      $acc = '<button class="btn btn-success">sudah disetujui</button>';
    }
    ?>
    <table class="table table-strip">
    <tr>
      <td width="200 px">Status disetujui</td>
      <td width="10 px">:</td>
      <td><?php echo $acc?></td>
    </tr>
    </table>
    
  <?php } ?>
  <button type="submit" class="btn btn-success">Simpan</button>
</form>
<br>
<?php echo anchor('keuangan','<button class=" btn btn-primary btn-sm">Kembali</button>') ?>
</div>
</div>
</div>
</div>
</div>

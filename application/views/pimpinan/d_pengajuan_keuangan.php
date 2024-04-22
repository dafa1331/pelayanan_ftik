<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Prodi</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('pimpinan/dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('pimpinan/pengajuan_keuangan')?>">Pengajuan Keuangan</a></li>
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

<?php foreach($keuangan as $dt) :
  if($dt->status_pengajuan == 0) {
    $status = '<button class="btn btn-danger">Belum diajukan</button>';
  }else{
    $status = '<button class="btn btn-success">Sudah diajukan</button>';
  }
  ?>

<table class="table table-strip">

  <tr>
    <td width="200 px">PIC Kegiatan</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->pic_kegiatan?></td>
  </tr>

  <tr>
    <td width="200 px">NIP PIC</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->pic_kegiatan?></td>
  </tr>

  <tr>
    <td width="200 px">No HP PIC</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->no_hp?></td>
  </tr>

  <tr>
    <td width="200 px">Kegiatan</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->nama_kegiatan?></td>
  </tr>

  <tr>
    <td width="200 px">Tanggal Pengajuan</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo ($dt->tanggal_pengajuan)?></td>
  </tr>

  <tr>
    <td width="200 px">Tanggal Mulai Kegiatan</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($dt->tgl_mulai_kegiatan) ?></td>
  </tr>

  <tr>
    <td width="200 px">Tanggal Selesai Kegiatan</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($dt->tgl_selesai_kegiatan)?></td>
  </tr>

  <tr>
    <td width="200 px">Prodi</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->prodi_pengusul?></td>
  </tr>

  <tr>
    <td width="200 px">Status Pengajuan</td>
    <td width="10 px">:</td>
    <td><?php echo $status ?></td>
  </tr>

  <tr>
    <td width="200 px">Komentar</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->komentar?></td>
  </tr>

<?php endforeach?>
</table>
<br>
<h4>Detail Anggaran</h4>
<br>
<table class="table table-strip">
    <thead>
      <tr>
          <th>Nomor</th>
          <th>Jenis Akun</th>
          <th>Kode Akun</th>
          <th>Uraian</th>
          <th>keterangan</th>
          <th>Anggaran</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach($anggaran as $detail) :?>
        <tr>
          <td><?php echo $no++?></td>
          <td><?php echo $detail->jenis_akun?></td>
          <td><?php echo $detail->kode_akun?></td>
          <td><?php echo $detail->uraian?></td>
          <td><?php echo $detail->keterangan?></td>
          <td><?php echo $detail->penggunaan_anggaran?></td>
        </tr>
      <?php endforeach?>
    </tbody>
</table>

<br>
<?php echo anchor('pimpinan/pengajuan_keuangan','<button class=" btn btn-primary btn-sm">Kembali</button>') ?>
</div>
</div>
</div>
</div>
</div>

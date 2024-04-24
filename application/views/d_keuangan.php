<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Prodi</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('keuangan')?>">Pengajuan Keuangan</a></li>
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

<form method="post" action="<?php echo base_url('keuangan/status_pengajuan')?>">

<table class="table table-strip">
<?php foreach($keuangan as $dt) :?>
    <input type="hidden" name="id_pengajuan" class="form-control" value="<?php echo $dt->id_pengajuan?>" required>
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
    <td><select name="status_pengajuan" class="form-control">
        <option value="">--Status Pengajuan--</option>
        <option value="0">Belum diajukan</option>
        <option value="1">Sudah diajukan</option>
    </select></td>
  </tr>

  <tr>
    <td width="200 px">Komentar</td>
    <td width="10 px">:</td>
    <td><textarea class="form-control" name="komentar" rows="5" placeholder="Catatan" required></textarea></td>
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
<button type="submit" class="btn btn-success">Simpan</button>

</form>
<br>
<?php echo anchor('keuangan','<button class=" btn btn-primary btn-sm">Kembali</button>') ?>
</div>
</div>
</div>
</div>
</div>

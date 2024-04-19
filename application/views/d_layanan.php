

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
  <tr>
    <td width="200 px">Nomor</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->nomor?></td>
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
    <td width="200 px">Tim Kerja</td>
    <td width="10 px">:</td>
    <td><?php echo $dt->bagian?></td>
  </tr>

  <tr>
    <td width="200 px">Berkas Pendukung (optional)</td>
    <td width="10 px">:</td>
    <td> <?php echo anchor('assets/berkas_pendukung/'.$dt->berkas_pendukung,'<button class=" btn btn-primary btn-sm">download</button>') ?></td>
  </tr>
<?php endforeach?>
</table>

  <div class="col-md-6 form-group">
    
      <input type="hidden" name="id_layanan" class="form-control" value="<?php echo $dt->id_layanan?>" required>
      <select name="validasi" class="form-control">
        <option value="">--Status Selesai--</option>
        <option value="1">Selesai dikerjakan</option>
        <option value="0">Sedang proses</option>
      </select>
  </div>
  <div class="col-md-6 form-group">
    <textarea class="form-control" name="komentar" rows="5" placeholder="Masukkan Komentar anda"></textarea>
  </div>

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

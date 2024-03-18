<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Layanan</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('pengantar_kp')?>">Tugas Akhir</a></li>
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
                  <h4 class="header-title">Detail Data Izin Penelitian</h4>

<table class="table table-strip">
<?php foreach ($detail1 as $d) :?>
  <tr>
    <td width="200 px">Nama</td>
    <td width="10 px">:</td>
    <td><?php echo $d->nama_mhs?></td>
  </tr>
  <tr>
    <td width="200 px">NIM</td>
    <td width="10 px">:</td>
    <td><?php echo $d->nim?></td>
  </tr>
  <tr>
    <td width="200 px">Prodi</td>
    <td width="10 px">:</td>
    <td><?php echo $d->prodi_mhs?></td>
  </tr>
  <tr>
    <td width="200 px">No HP / WA</td>
    <td width="10 px">:</td>
    <td><?php echo $d->no_hp?></td>
  </tr>
  <tr>
    <td width="200 px">Email</td>
    <td width="10 px">:</td>
    <td><?php echo $d->email?></td>
  </tr>
  <tr>
    <td width="200 px">Judul Tugas Akhir</td>
    <td width="10 px">:</td>
    <td><?php echo $d->judul_ta?></td>
  </tr>
<?php endforeach?>
</table>

<table class="table table-strip">
  <thead>
    <tr>
        <th>Instansi</th>
        <th>Pimpinan Instansi</th>
        <th>Kebutuhan Data</th>
    </tr>
  </thead>
  <tbody>
      <tr>
        <?php foreach($detail as $detail) :?>
        <td><?php echo $detail->tujuan_surat?></td>
        <td><?php echo $detail->pimpinan_instansi?></td>
        <td><?php echo $detail->kebutuhan_data?></td>
      </tr>
        <?php endforeach?>
  </tbody>
</table>

<?php echo anchor('tugas_akhir','<button class=" btn btn-primary btn-sm">Kembali</button>') ?>
</div>
</div>
</div>
</div>
</div>

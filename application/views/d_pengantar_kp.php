<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Layanan</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('pengantar_kp')?>">Kerja Praktik</a></li>
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
                  <h4 class="header-title">Detail Data Kerja Praktik</h4>

<table class="table table-strip">

  <tr>
    <td width="200 px">Tujuan Surat</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->tujuan_surat?></td>
  </tr>
  <tr>
    <td width="200 px">Alamat</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->alamat_instansi?></td>
  </tr>
  <tr>
    <td width="200 px">Tanggal Mulai KP</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($detail1->tanggal_mulai)?></td>
  </tr>
  <tr>
    <td width="200 px">Tanggal Selesai KP</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($detail1->tanggal_selesai)?></td>
  </tr>

</table>

<table class="table table-strip">
  <thead>
    <tr>
        <th>Nomor</th>
        <th>Nama Mahasiswa</th>
        <th>NIM</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;
     foreach($detail as $detail) :?>
      <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $detail->nama_mhs?></td>
        <td><?php echo $detail->nim?></td>
      </tr>
    <?php endforeach?>
  </tbody>
</table>

<?php echo anchor('pengantar_kp','<button class=" btn btn-primary btn-sm">Kembali</button>') ?>
</div>
</div>
</div>
</div>
</div>

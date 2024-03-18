<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Layanan</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('pengantar_kp')?>">Peminjaman Alat</a></li>
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
                  <h4 class="header-title">Detail Data Peminjaman Alat</h4>

<table class="table table-strip">
  <?php foreach ($detail1 as $detail1) :?>
  <tr>
    <td width="200 px">Nama Mahasiswa</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->nama_mhs?></td>
  </tr>
  <tr>
    <td width="200 px">Alamat</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->nim_mhs?></td>
  </tr>
  <tr>
    <td width="200 px">Hari Peminjaman</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo1($detail1->tanggal_pinjam)?></td>
  </tr>
  <tr>
    <td width="200 px">Tanggal Peminjaman</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->tanggal_pinjam?></td>
  </tr>
<?php endforeach?>
</table>

<table class="table table-strip">
  <thead>
    <tr>
        <th>Nomor</th>
        <th>Nama Mahasiswa</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;
     foreach($detail as $detail) :?>
      <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $detail->nama_alat?></td>
      </tr>
    <?php endforeach?>
  </tbody>
</table>

<?php echo anchor('pinjam','<button class=" btn btn-primary btn-sm">Kembali</button>') ?>
</div>
</div>
</div>
</div>
</div>

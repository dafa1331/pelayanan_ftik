<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Prodi</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('prodi/pengajuan_layanan')?>">Home</a></li>
                    <li><a href="<?php echo base_url('prodi/pengajuan_rab')?>">RAB</a></li>
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

<table class="table table-strip">
<?php foreach ($detail as $detail1):?>
  <tr>
    <td width="200 px">Nama Kegiatan</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->nama_kegiatan?></td>
  </tr>
  <tr>
    <td width="200 px">PIC Kegiatan</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->pic_kegiatan?></td>
  </tr>
  <tr>
    <td width="200 px">Hari Pengajuan</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo1($detail1->tanggal_pengajuan)?></td>
  </tr>
  <tr>
    <td width="200 px">Tanggal Pengajuan</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($detail1->tanggal_pengajuan)?></td>
  </tr>
  <tr>
    <td width="200 px">Tanggal Mulai Kegiatan</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($detail1->tgl_mulai_kegiatan)?></td>
  </tr>
  <tr>
    <td width="200 px">Tanggal Selesai Kegiatan</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($detail1->tgl_selesai_kegiatan)?></td>
  </tr>
<?php endforeach?>
</table>

<table class="table table-strip">
  <thead>
    <tr>
        <th>Nomor</th>
        <th>Jenis Akun</th>
        <th>Kode AKun</th>
        <th>Uraian</th>
        <th>Keterangan</th>
        <th>anggaran</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; 
    foreach ($data as $data) : ?>
     
      <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $data->jenis_akun?></td>
        <td><?php echo $data->kode_akun?></td>
        <td><?php echo $data->uraian?></td>
        <td><?php echo $data->keterangan?></td>
        <td><?php echo $data->penggunaan_anggaran?></td>
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

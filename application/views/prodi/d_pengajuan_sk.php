<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Prodi</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('prodi/pengajuan_layanan')?>">Home</a></li>
                    <li><a href="<?php echo base_url('prodi/pengajuan_rab')?>">SK</a></li>
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
    <td width="200 px">Nama</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->nama_pengusul?></td>
  </tr>
  <tr>
    <td width="200 px">NIP/NRK</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->nip_pengusul?></td>
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
    <td width="200 px">Tanggal Berlaku SK</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($detail1->tgl_awal)?></td>
  </tr>
  <tr>
    <td width="200 px">Tanggal Berakhir SK</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($detail1->tgl_akhir)?></td>
  </tr>
  <tr>
    <td width="200 px">Tentang SK</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->judul_sk?></td>
  </tr>
  <tr>
    <td width="200 px">Dibayarkan Honor</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->honor?></td>
  </tr>
<?php endforeach?>
</table>

<table class="table table-strip">
  <thead>
    <tr>
        <th>Nomor</th>
        <th>Nama dalam SK</th>
        <th>Jabatan dalam SK</th>
        <th>Uraian Tugas</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; 
    foreach ($data as $data) : ?>
     
      <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $data->nama_anggota?></td>
        <td><?php echo $data->jabatan?></td>
        <td><?php echo $data->tugas?></td>
      </tr>
    <?php endforeach?>
  </tbody>
</table>

<?php echo anchor('prodi/pengajuan_sk','<button class=" btn btn-primary btn-sm">Kembali</button>') ?>
</div>
</div>
</div>
</div>
</div>

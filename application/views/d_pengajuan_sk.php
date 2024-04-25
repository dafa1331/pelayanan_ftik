<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Layanan</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('tata_laksana')?>">Pengajuan SK</a></li>
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
                  <h4 class="header-title">Detail Data Pengajuan Surat Keputusan</h4>

<table class="table table-strip">
  <?php 
  foreach ($detail_sk as $detail1) :
  ?>
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
    <td width="200 px">No HP/WA</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->no_hp?></td>
  </tr>
  <tr>
    <td width="200 px">Prodi</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->prodi_pengusul?></td>
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
    <td width="200 px">Tanggal berlaku SK</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($detail1->tgl_awal)?></td>
  </tr>
  <tr>
    <td width="200 px">Tanggal berakhir SK</td>
    <td width="10 px">:</td>
    <td><?php echo format_indo($detail1->tgl_akhir)?></td>
  </tr>
  <tr>
    <td width="200 px">Judul SK</td>
    <td width="10 px">:</td>
    <td><?php echo $detail1->judul_sk?></td>
  </tr>
  <tr>
    <?php
      if($detail1->honor == 'tidak'){
        $honor = '<button class="btn btn-warning">tidak dihonorkan</button>';
      }else if($detail1->honor){
        $honor = '<button class="btn btn-info">dihonorkan</button>';
      }
    ?>
    <td width="200 px">dihonorkan</td>
    <td width="10 px">:</td>
    <td><?php echo $honor?></td>
  </tr>
  <tr>
    <td width="200 px">Lampiran SK</td>
    <td width="10 px">:</td>
    <td><?php echo anchor('assets/berkas_pendukung/'.$detail1->lampiran_sk,'<button class=" btn btn-success btn-sm">download</button>') ?></td>
  </tr>
  
  
<?php endforeach?>
</table>


<br>
<?php echo anchor('tata_laksana','<button class=" btn btn-primary btn-sm">Kembali</button>') ?>

</div>
</div>
</div>
</div>
</div>

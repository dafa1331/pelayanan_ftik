
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Halaman Surat Tugas / Surat Keterangan</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url('prodi/pengajuan_layanan')?>">Home</a></li>
                                <li><span>Pengajuan Surat Tugas</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- Primary table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Surat Tugas / Surat Keterangan</h4>
                                <?php echo anchor('prodi/pengajuan_surat_tugas/insert','<button class="btn btn-primary btn-sm">Tambah</button>') ?>
                                <br>
                                <br>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" width="100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th width="100px">Nomor</th>
                                                <th>Nama Pengusul</th>
                                                <th>Kegiatan</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal Selesai</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($surat_tugas as $s) :?>
                                            <tr>
                                                <td><?php echo $no++?></td>
                                                <td><?php echo $s->nama_pengusul?></td>
                                                <td><?php echo $s->kegiatan?></td>
                                                <td><?php echo $s->tanggal_mulai_kegiatan?></td>
                                                <td><?php echo $s->tanggal_selesai_kegiatan?></td>
                                                <td><?php echo anchor('prodi/pengajuan_surat_tugas/detail_data/'.$s->id_surat_tugas,'<button class="fa fa-eye btn btn-primary btn-sm"></button>') ?></td>
                                            </tr>
                                            <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2024. FTIK ITERA. </p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->

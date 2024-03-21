
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Halaman Surat Keputusan</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url('prodi/pengajuan_layanan')?>">Home</a></li>
                                <li><span>Pengajuan SK</span></li>
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
                                <h4 class="header-title">Data SK</h4>
                                <?php echo anchor('prodi/pengajuan_sk/insert','<button class="btn btn-primary btn-sm">Tambah</button>') ?>
                                <br>
                                <br>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" width="100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th width="100px">Nomor</th>
                                                <th>Nama Pengusul</th>
                                                <th>Tentang SK</th>
                                                <th>Tanggal Berlaku</th>
                                                <th>Tanggal Berakhir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($sk as $s) :?>
                                            <tr>
                                                <td><?php echo $no++?></td>
                                                <td><?php echo $s->nama_pengusul?></td>
                                                <td><?php echo $s->judul_sk?></td>
                                                <td><?php echo $s->tgl_awal?></td>
                                                <td><?php echo $s->tgl_akhir?></td>
                                                <td><?php echo anchor('prodi/pengajuan_sk/detail_data/'.$s->id_pengajuan,'<button class="fa fa-eye btn btn-primary btn-sm"></button>') ?></td>
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

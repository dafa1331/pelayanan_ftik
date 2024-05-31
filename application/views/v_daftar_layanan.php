
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Halaman Pegawai</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                                <li><span>Daftar Layanan FTIK</span></li>
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
                                <h4 class="header-title">List Layanan</h4>
                                <?php echo anchor('daftar_layanan/tambah','<button class="btn btn-primary btn-sm">Tambah</button>') ?>
                                <br>
                                <br>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center"  width="100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Nama Layanan</th>
                                                <th>Tujuan Layanan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1; 
                                            foreach ($result as $r) :?>
                                            <tr>
                                                <td><?php echo $no++?></td>
                                                <td><?php echo $r->nama_layanan?></td>
                                                <td><?php echo $r->kegunaan?></td>
                                                <td><?php echo anchor('daftar_layanan/detail_data/'.$r->id_daftar_layanan,'<button class="fa fa-eye btn btn-primary btn-sm"></button>') ?> <?php echo anchor('daftar_layanan/delete_data/'.$r->id_daftar_layanan,'<button class="fa fa-trash btn btn-danger btn-sm"></button>') ?></td>
                                                <!-- <td><a href="<?php echo $r->tautan?>" class="btn btn-success">Buka</a></td> -->
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

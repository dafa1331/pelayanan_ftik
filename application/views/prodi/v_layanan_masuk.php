
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Halaman Layanan</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url('prodi/pengajuan_layanan')?>">Home</a></li>
                                <li><span>Layanan Masuk</span></li>
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
                                <h4 class="header-title">Data layanan</h4>
                                <?php echo anchor('prodi/pengajuan_layanan/tambah_layanan','<button class="btn btn-primary btn-sm">Tambah Layanan</button>');?>
                                <br>
                                <br>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" width="100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>NIM</th>
                                                <th>Layanan</th>
                                                <th>Status Validasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            $no = 1; 
                                            foreach ($layanan as $l) :
                                                if($l->acc_prodi == 0){
                                                    $belum = '<button class="btn btn-danger">Belum</button>';
                                                }else{
                                                    $belum = '<button class="btn btn-success">Sudah</button>';
                                                }
                                            ?>
                                            <tr>
                                                <td><?php echo $no++?></td>
                                                <td><?php echo $l->nama_pemohon?></td>
                                                <td><?php echo $l->nip_pemohon?></td> 
                                                <td><?php echo $l->keperluan?></td>
                                                <td><?php echo $belum?></td>
                                                <td><?php echo anchor('prodi/acc_prodi/detail/'.$l->id_layanan,'<button class="fa fa-eye btn btn-primary btn-sm"></button>') ?></td>
                                            </tr>
                                           <?php endforeach?>
                                           <!-- prodi/acc_prodi/detail_data/ -->
                                        </tbody>
                                    </table>
                                </div>
                                <?php form_close()?>
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

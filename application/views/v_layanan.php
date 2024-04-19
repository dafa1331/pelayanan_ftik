
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Halaman Layanan</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                                <li><span>Layanan</span></li>
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
                                <h4 class="header-title">Data Layanan</h4>
                                <?php echo anchor('layanan/insert','<button class="btn btn-primary btn-sm">Tambah</button>') ?>
                                <br>
                                <br>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" width="100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th width="100px">Nomor</th>
                                                <th>Nama Pemohon</th>
                                                <th>Asal Pemohon</th>
                                                <th>Keperluan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            foreach ($result as $r) :
                                                if($r->validasi == 0){
                                                    $belum = '<button class="btn btn-warning">Sedang diproses</button>';
                                                }else if ($r->validasi == 1){
                                                    $belum = '<button class="btn btn-success">Selesai dikerjakan</button>';
                                                }else{
                                                    $belum = '<button class="btn btn-danger">Belum dikerjakan</button>';
                                                }?>
                                            <tr>
                                                <td><?php echo $r->nomor?></td>
                                                <td><?php echo $r->nama_pemohon?></td>
                                                <td><?php echo $r->unit_asal?></td>
                                                <td><?php echo $r->keperluan?></td>
                                                <td><?php echo $belum?></td>
                                                <td><?php echo anchor('layanan/detail_data/'.$r->id_layanan,'<button class="fa fa-eye btn btn-primary btn-sm"></button>') ?> <?php echo anchor('layanan/delete_data/'.$r->nomor,'<button class="fa fa-trash btn btn-danger btn-sm"></button>') ?></td>
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


            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Halaman Surat Tugas KP</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                                <li><span>Surat Tugas KP</span></li>
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
                                <h4 class="header-title">Data Pengajuan Surat Tugas Kerja Praktik</h4>
                                
                                <br>
                                <br>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" width="100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>NIM</th>
                                                <th>Nomor Surat</th>
                                                <th>Tanggal Mulai</th>
                                                <th></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($result as $r) :
                                            ?>
                                                
                                            <tr>
                                                <td><?php echo $r->nim_mhs?></td>
                                                <td><?php echo $r->nomor_surat?></td>
                                                <td><?php echo format_indo($r->tanggal_mulai)?></td>
                                                <td><?php echo anchor('surat_tugas_kp/detail_data/'.$r->id_surat_tugas_kp,'<button class="fa fa-eye btn btn-primary btn-sm"></button>') ?> <?php echo anchor('surat_tugas_kp/cetak_surat/'.$r->id_surat_tugas_kp,'<button class="fa fa-print btn btn-warning btn-sm"></button>') ?></td>
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

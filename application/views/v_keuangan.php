
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Pengajuan Anggaran</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                                <li><span>Anggaran</span></li>
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
                                <h4 class="header-title">Data Pengajuan</h4>
                               
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" width="100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th width="100px">Nomor</th>
                                                <th>Nama PIC</th>
                                                <th>Asal Pemohon</th>
                                                <th>Kegiatan</th>
                                                <th>Pengajuan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           $no = 1;
                                           foreach($anggaran as $a) :
                                            if($a->status_pengajuan = 0){
                                                $status = '<button class="btn btn-danger">belum diajukan</button>';
                                            }else{
                                                $status = '<button class="btn btn-success">sudah diajukan</button>';
                                            }
                                           ?>
                                            <tr>
                                                <td><?php echo $no++?></td>
                                                <td><?php echo $a->pic_kegiatan?></td>
                                                <td><?php echo $a->prodi_pengusul?></td>
                                                <td><?php echo $a->nama_kegiatan?></td>
                                                <td><?php echo $status?></td>
                                                <td><?php echo anchor('keuangan/detail_data/'.$a->id_pengajuan,'<button class="fa fa-eye btn btn-primary btn-sm"></button>') ?> </td>
                                            </tr>
                                            <?php endforeach;?>
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

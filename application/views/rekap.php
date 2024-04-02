
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
                                <form method="get" action="<?php echo base_url('layanan/rekap_layanan') ?>">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Filter Tanggal</label>
                                <div class="input-group">
                                    <input type="date" name="tgl_awal" value="<?= @$_GET['tgl_awal'] ?>" class="form-control tgl_awal datetimepicker-input" placeholder="Tanggal Awal" data-toggle="datetimepicker" data-target=".tgl_awal" autocomplete="off">
                                    <div class="input-group-append">
                                        <span class="input-group-text">s/d</span>
                                    </div>
                                    <input type="date" name="tgl_akhir" value="<?= @$_GET['tgl_akhir'] ?>" class="form-control tgl_akhir datetimepicker-input" placeholder="Tanggal Akhir" data-toggle="datetimepicker" data-target=".tgl_akhir" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="filter" value="true" class="btn btn-primary">TAMPILKAN</button>

                            <?php
                            if(isset($_GET['filter'])) // Jika user mengisi filter tanggal, maka munculkan tombol untuk reset filter
                                echo '<a href="'.base_url('layanan/rekap_layanan').'" class="btn btn-default">RESET</a>';
                            ?>
                        </form>
                        <br>
                        <h6 style="margin-bottom: 5px;"><b><?php echo $label ?></b></h6>

                        <div style="margin-top: 5px;">
                            <a class="btn btn-success" href="<?php echo $url_cetak ?>">Cetak Rekap Layanan</a>
                        </div>
                                <br>
                                <br>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" width="100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th width="100px">Nomor</th>
                                                <th>Tanggal</th>
                                                <th>Nama Pemohon</th>
                                                <th>Keperluan</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php   
                                                $no = 1;
                                                if(empty($layanan)){ // Jika data tidak ada
                                                    echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
                                                }else{ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                                                    foreach($layanan as $data){ // Looping hasil data transaksi
                                                        $tgl = date('d-m-Y', strtotime($data->tanggal_pengajuan)); // Ubah format tanggal jadi dd-mm-yyyy

                                                        echo "<tr>";
                                                        echo "<td>".$no++."</td>";
                                                        echo "<td>".$tgl."</td>";
                                                        echo "<td>".$data->nama_pemohon."</td>";
                                                        echo "<td>".$data->keperluan."</td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                            ?>
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

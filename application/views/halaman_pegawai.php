

<body>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                                <li><span>Pegawai</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- page title area end -->
            <div class="main-content-inner">
              <br>
              <?php echo anchor('pegawai/insert','<button class="btn btn-primary btn-sm">Tambah</button>') ?>
              <!-- <button type="button" class="btn btn-primary" name="button">tambah</button> -->
                <div class="row">
                    <!-- Primary table start -->
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Table Primary</h4>
                                <div class="table">
                                    <table id="tabel" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Nomor</th>
                                                <th>NIP/NRK</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>aksi</th>
                                            </tr>
                                            <tbody>
                                              <?php
                                              $no = 1;
                                              foreach($pegawai as $usr): ?>
                                              <tr>
                                                <td width="20 px"><?php echo $no++ ?></td>
                                                <td><?php echo $usr->nip ?></td>
                                                <td><?php echo $usr->nama ?></td>
                                                <td><?php echo $usr->email ?></td>
                                                <td width="20 px"><?php echo anchor('user/hapus/'.$usr->id, '<div class="btn btn-primary"><i class="fa fa-trash"></i></div>') ?></td>
                                              <?php endforeach; ?>
                                            </tbody>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primary table end -->
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

    <!-- jquery latest version -->
</body>

</html>

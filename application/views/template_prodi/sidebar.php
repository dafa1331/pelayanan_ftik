<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="<?php echo base_url()?>assets/images/ftik.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="<?php echo base_url('prodi/pengajuan_layanan')?>" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>

                            <li><a href="<?php echo base_url('prodi/acc_prodi')?>"><i class="ti-palette"></i> <span>Layanan Masuk</span></a></li>
                           
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>Permohonan Layanan</span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo base_url('prodi/pengajuan_sk')?>">Pengajuan SK</a></li>
                                    <li><a href="<?php echo base_url('prodi/pengajuan_rab')?>">Pengajuan RAB</a></li>
                                    <li><a href="#"><i>Pengajuan Surat Tugas (coming soon)</i></a></li>
                                </ul>
                            </li>
                            
                            
                            
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="<?php echo base_url()?>assets/images/author/avatar.png" alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Message</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="<?php echo base_url('auth/keluar')?>">Log Out</a>
                </div>
            </div>
        </div>
                </div>
            </div>
            <!-- header area end -->

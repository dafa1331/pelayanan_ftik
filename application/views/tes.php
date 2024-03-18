<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Pegawai</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('layanan')?>">Layanan</a></li>
                    <li><span>Insert</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<meta name="google-signin-client_id" content="290281422272-gprkd40848h89jf4b9d8gg8ko29nvna6.apps.googleusercontent.com">
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- Primary table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Tambah Data Layanan</h4>

                    <form class="" action="<?php echo base_url('spreadsheet/insert_data')?>" method="post">


                    <div class="col-lg-8 mt-10 mt-lg-0">

                      <div class="row gy-2 gx-md-3">

                        <div class="col-md-12 form-group">
                          <input type="text" name="nama" class="form-control" placeholder="Masukkan Nomor Layanan" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Nama Pemohon" required>
                        </div>


                        <button type="submit" class="btn btn-primary" name="button">Simpan</button>


                      </div>
                    </div>
                  </form>
                </div>

            </div>
        </div>
        <!-- Primary table end -->
    </div>
</div>

<script src="https://apis.google.com/js/platform.js" async defer></script>

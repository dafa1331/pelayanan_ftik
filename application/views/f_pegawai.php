<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Pegawai</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('pegawai')?>">Pegawai</a></li>
                    <li><span>Insert</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="<?php echo base_url()?>assets/images/author/avatar.png" alt="avatar">
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
    <div class="row">
        <!-- Primary table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Tambah Data Pegawai</h4>
                    <?php echo form_open_multipart('pegawai/proses_insert')?>
                    <div class="col-lg-8 mt-10 mt-lg-0">

                      <div class="row gy-2 gx-md-3">

                        <div class="col-md-12 form-group">
                          <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP/NRK" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="nidn" class="form-control" placeholder="Masukkan NIDN/NITK" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" required>
                        </div>

                        <div class="col-md-6 form-group">
                          <input type="text" name="tempat_lahir" class="form-control" placeholder="tempat lahir" required>
                        </div>

                        <div class="col-md-6 form-group">
                          <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <select class="form-control" name="jenis_kelamin">
                            <option value="">--pilih jenis kelamin--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>

                        <div class="col-md-12 form-group">
                          <textarea class="form-control" name="alamat" rows="5" placeholder="Masukkan Alamat" required></textarea>
                        </div>

                        <div class="col-md-6 form-group">
                          <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Hp" required>
                        </div>

                        <div class="col-md-6 form-group">
                          <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="npwp" class="form-control" placeholder="Masukkan NPWP" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="file" class="form-control" name="foto" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="button">Simpan</button>


                      </div>
                    </div>
                  <?php echo form_close();?>
                </div>

            </div>
        </div>
        <!-- Primary table end -->
    </div>
</div>

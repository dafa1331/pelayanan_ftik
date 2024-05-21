<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Layanan</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('pengantar_kp')?>">Kerja Praktik</a></li>
                    <li><span>Detail</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main-content-inner">
    <div class="row">
        <!-- Primary table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Data Pengantar KP</h4>
                    <form method="post" action="<?php echo base_url('pengantar_kp/proses_edit') ?>">

                        <div class="col-lg-8 mt-10 mt-lg-0">
                            <div class="row gy-2 gx-md-3">
                                <div class="col-md-12 form-group">
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $detail1->id_surat?>">
                                    <input type="text" name="jabatan_pimpinan" class="form-control" value="<?php echo $detail1->jabatan_pimpinan?>">
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="text" name="alamat_instansi" class="form-control" value="<?php echo $detail1->alamat_instansi?>">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="">Tanggal Mulai</label>
                                    <input type="date" name="tanggal_mulai" class="form-control" value="<?php echo $detail1->tanggal_mulai?>">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="">Tanggal Selesai</label>
                                    <input type="date" name="tanggal_selesai" class="form-control" value="<?php echo $detail1->tanggal_selesai?>">
                                </div>
                                
                                <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                            </div>
                        </div>
                        
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>
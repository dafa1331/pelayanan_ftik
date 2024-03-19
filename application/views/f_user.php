<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">User</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('user')?>">user</a></li>
                    <li><span>Insert</span></li>
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
                    <h4 class="header-title">Tambah Data User</h4>

                    <?php echo form_open_multipart('user/proses_insert')?>
                    <div class="col-lg-8 mt-10 mt-lg-0">

                      <div class="row gy-2 gx-md-3">

                        <div class="col-md-12 form-group">
                          <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama Pemohon" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="password" name="confirm_password" class="form-control" placeholder="Ulangi Password" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="bagian" class="form-control" placeholder="Masukkan Bagian" required>
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

<script>
    // Tambahkan event listener untuk memantau perubahan pada elemen select
    document.getElementById('options').addEventListener('change', function() {
        var otherOptionContainer = document.getElementById('other_option_container');
        var otherOptionInput = document.getElementById('other_option');

        // Jika opsi "lainnya" dipilih, tampilkan input untuk pilihan lainnya
        if (this.value === 'other') {
            otherOptionContainer.style.display = 'block';
            otherOptionInput.required = true; // Opsional: membuat input lainnya menjadi wajib diisi
        } else {
            otherOptionContainer.style.display = 'none';
            otherOptionInput.required = false;
        }
    });
</script>

<!-- <script>
    $(document).ready(function() {
        $('#options').change(function() {
            var otherOptionContainer = $('#other_option_container');
            var otherOptionInput = $('#other_option');

            // Jika opsi "lainnya" dipilih, tampilkan input untuk pilihan lainnya
            if ($(this).val() === 'other') {
                otherOptionContainer.show();
                otherOptionInput.prop('required', true); // Opsional: membuat input lainnya menjadi wajib diisi
            } else {
                otherOptionContainer.hide();
                otherOptionInput.prop('required', false);
            }
        });
    });
</script> -->

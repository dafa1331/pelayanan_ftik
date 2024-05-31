<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-10">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Pegawai</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>
                    <li><a href="<?php echo base_url('daftar_layanan')?>">List Data Layanan</a></li>
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
                    <h4 class="header-title">Tambah Data </h4>

                    <form method="post" action="<?php echo base_url('daftar_layanan/proses_tambah')?>">
                    <div class="col-lg-8 mt-10 mt-lg-0">

                      <div class="row gy-2 gx-md-3">

                        <div class="col-md-12 form-group">
                          <input type="text" name="nama_layanan" class="form-control" placeholder="Masukkan Nama Layanan" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <select class="form-control" name="kegunaan" >
                            <option value="">--keperluan layanan--</option>
                            <option>Pegawai</option>
                            <option>Mahasiswa</option>
                          </select>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="tautan" class="form-control" placeholder="Masukkan Tautan Surat" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <textarea class="form-control" name="deskripsi" rows="5" placeholder="Masukkan Deskripsi Layanan" required></textarea>
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

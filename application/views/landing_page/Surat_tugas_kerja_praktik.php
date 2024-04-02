<main id="main">

  <!-- Blog Details Page Title & Breadcrumbs -->
  <div data-aos="fade" class="page-title">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Halaman Pengajuan Surat Tugas Kerja Praktik</h1>
            <p class="mb-0">Silahkan Masukkan data anda dengan benar di Halaman ini</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?php echo base_url() ?>">Home</a></li>
          <li class="current">Kerja Praktik</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Blog-details Section - Blog Details Page -->
  <section id="blog-details" class="blog-details">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-5">

        <div class="col-lg-8">
          <form action="<?php echo base_url('pengguna/kerja_praktik/proses_tambah_surat_tugas') ?>" method="post">
            <div class="col-lg-20 mt-10 mt-lg-0">

              <div class="row gy-2 gx-md-3">

                <div class="col-md-12 form-group">
                  <select class="form-control" name="prodi_mhs" required>
                    <option value="">--Program Studi--</option>
                    <option>Teknik Sipil</option>
                    <option>Perencanaan Wilayah dan Kota</option>
                    <option>Teknik Geomatika</option>
                    <option>Arsitektur</option>
                    <option>Teknik Lingkungan</option>
                    <option>Teknik Kelautan</option>
                    <option>Desain Komunikasi Visual</option>
                    <option>Arsitektur Lanskap</option>
                    <option>Teknik Perkeretaapian</option>
                    <option>Rekayasa Tata Kelola Air Terpadu</option>
                    <option>Pariwisata</option>
                  </select>
                </div>

                <div class="col-md-12 form-group" required>
                  <input type="text" name="tujuan_surat" class="form-control" placeholder="Tujuan Surat">
                </div>

                <div class="col-md-12 form-group" required>
                  <input type="text" name="jabatan_pimpinan" class="form-control"
                    placeholder="Jabatan pimpinan instansi (ex : Kepala Dinas Sosial)">
                </div>

                <div class="col-md-12 form-group" required>
                  <textarea class="form-control" name="alamat_instansi" rows="5"
                    placeholder="Masukkan Alamat Instansi yang dituju"></textarea>
                </div>

                <div class="col-md-6 form-group" required>
                  <label for="">Tanggal Mulai KP</label>
                  <input type="date" name="tanggal_mulai" class="form-control" placeholder="tanggal mulai KP">
                </div>

                <div class="col-md-6 form-group" required>
                  <label for="">Tanggal Selesai KP</label>
                  <input type="date" name="tanggal_selesai" class="form-control" placeholder="tanggal mulai KP">
                </div>

                <div class="col-md-12 form-group" required>
                  <input type="text" name="nomor_balasan" class="form-control" placeholder="Nomor Balasan dari Instansi yang dituju">
                </div>

                <div class="col-md-6 form-group" required>
                  <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Hp / WA">
                </div>

                <div class="col-md-6 form-group" required>
                  <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                </div>

                <div id="formContainer" class="col-md-12">
                      <div class="row gy-2 gx-md-3">

                      </div>
                    </div>
                    <div>
                      <button type="button" class="btn btn-success" id="addForm">Tambahkan Nama</button>
                    </div>

                <div class="col-md-6 form-group" required>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

              </div>


            </div>

          </form>

        </div>

      </div>

    </div>

  </section><!-- End Blog-details Section -->

</main>
<!-- ======= Footer ======= -->


</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
        $(document).ready(function(){
            // Fungsi untuk menambahkan form baru
            $("#addForm").click(function(){
                var newForm = '<div class="col-md-12"><div class="row gy-2 gx-md-3"><label>Detail Instansi</label> <div class="col-md-6 form-group">  <input type="text" class="form-control" name="nama_mhs[]" placeholder="Nama Mahasiswa"></div> <div class="col-md-6 form-group"><input type="text" class="form-control" name="nim_mhs[]" placeholder="Masukkan nim"></div> </div><button class="removeForm btn btn-danger">Hapus</button></div>';
                
                $("#formContainer").append(newForm);

            });

            // Fungsi untuk menghapus form
            $(document).on("click", ".removeForm", function(){
                $(this).parent().remove();
            });

        });
    </script>
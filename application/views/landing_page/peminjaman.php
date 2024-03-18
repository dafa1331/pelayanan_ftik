

  <main id="main">

    <!-- Blog Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Halaman Peminjaman Alat FTIK</h1>
              <p class="mb-0">Silahkan Masukkan data anda dengan benar di Halaman ini</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?php echo base_url()?>">Home</a></li>
            <li class="current">Peminjaman Alat FTIK</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Blog-details Section - Blog Details Page -->
    <section id="blog-details" class="blog-details">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">
              <form action="<?php echo base_url('pengguna/alat_ftik/proses_insert')?>" method="post">
                <div class="col-lg-20 mt-10 mt-lg-0">

                  <div class="row gy-2 gx-md-3">

                    <div class="col-md-12 form-group">
                      <input type="text" name="nama_mhs" class="form-control" placeholder="Masukkan Nama"  required>
                    </div>

                    <div class="col-md-12 form-group">
                      <input type="number" name="nim_mhs" class="form-control" placeholder="Masukkan NIM" required>
                    </div>

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

                    <div class="col-md-12 form-group">
                      <input type="number" name="no_hp" class="form-control" placeholder="Masukkan Nomor HP" required>
                    </div>

                    <div class="col-md-12 form-group">
                        <textarea class="form-control" name="keperluan_peminjaman" rows="5" placeholder="Masukkan Keperluan Peminjaman Alat" required></textarea>
                      </div>

                    <div id="formContainer" class="col-md-12">
                      <div class="row gy-2 gx-md-3">

                      </div>
                    </div>
                    <div>
                      <button type="button" class="btn btn-success" id="addForm">Alat yang dipinjam</button>
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


</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
        $(document).ready(function(){
            // Fungsi untuk menambahkan form baru
            $("#addForm").click(function(){
                var newForm = '<br><div class="col-md-12"><div class="row gy-2 gx-md-3"><div class="col-md-12 form-group">  <input type="text" class="form-control" name="alat[]" placeholder="Alat Yang Dipinjam"></div></div><button class="removeForm btn btn-danger">Hapus</button></div>';

                $("#formContainer").append(newForm);

            });

            // Fungsi untuk menghapus form
            $(document).on("click", ".removeForm", function(){
                $(this).parent().remove();
            });

        });
    </script>

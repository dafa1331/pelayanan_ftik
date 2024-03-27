
      
  <main id="main">

<!-- Blog Details Page Title & Breadcrumbs -->
<div data-aos="fade" class="page-title">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Halaman Pengajuan Izin Kegiatan Mahasiswa</h1>
          <p class="mb-0">Silahkan Masukkan data anda dengan benar di Halaman ini</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="<?php echo base_url()?>">Home</a></li>
        <li class="current">Izin Kegiatan</li>
      </ol>
    </div>
  </nav>
</div><!-- End Page Title -->

<!-- Blog-details Section - Blog Details Page -->
<section id="blog-details" class="blog-details">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-5">

      <div class="col-lg-8">
          <form action="<?php echo base_url('pengguna/izin_kegiatan/proses_insert')?>" method="post">
            <div class="col-lg-20 mt-10 mt-lg-0">

              <div class="row gy-2 gx-md-3">

                <div class="col-md-12 form-group">
                  <input type="text" name="nomor" class="form-control" value="<?php echo $nomor?>" placeholder="Masukkan Nomor Layanan" required readonly>
                </div>

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

                <div class="col-md-6 form-group" required>
                  <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Hp / WA" >
                </div>

                <div class="col-md-6 form-group" required>
                  <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                </div>

                <div class="col-md-12 form-group">
                    <textarea class="form-control" name="kegiatan" rows="5" placeholder="Masukkan Kegiatan yang akan dilaksanakan" required></textarea>
                </div>

                <div class="col-md-12 form-group">
                  <input type="text" name="nama_himpunan" class="form-control" placeholder="Nama Himpunan" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="">tanggal mulai</label>
                  <input type="date" name="tanggal_mulai" class="form-control"  required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="">tanggal selesai</label>
                  <input type="date" name="tanggal_selesai" class="form-control" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="">Waktu Mulai</label>
                  <input type="time" name="waktu_mulai" class="form-control" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="">Waktu Selesai</label>
                  <input type="time" name="waktu_selesai" class="form-control" required>
                </div>

                <div class="col-md-12 form-group">
                  <input type="text" name="jumlah_peserta" class="form-control" placeholder="Jumlah Peserta" required>
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

  <main id="main">

    <!-- Blog Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Halaman Pengajuan Kerja Praktik</h1>
              <p class="mb-0">Silahkan Masukkan data anda dengan benar di Halaman ini</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?php echo base_url()?>">Home</a></li>
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
              <form action="<?php echo base_url('pengguna/kerja_praktik/proses_tambah')?>" method="post">
                <div class="col-lg-20 mt-10 mt-lg-0">

                  <div class="row gy-2 gx-md-3">

                    <div class="col-md-12 form-group">
                      <input type="text" name="nomor" class="form-control" value="<?php echo $nomor?>" placeholder="Masukkan Nomor Layanan" required readonly>
                    </div>

                    <!-- <div class="col-md-12 form-group">
                      <input type="text" name="nama_ketua" class="form-control" placeholder="Masukkan Nama"  required>
                    </div> -->

                    <!-- <div class="col-md-12 form-group">
                      <input type="number" name="nim_ketua" class="form-control" placeholder="Masukkan NIM" required>
                    </div> -->

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
                      <input type="text" name="jabatan_pimpinan" class="form-control" placeholder="Jabatan pimpinan instansi (ex : Kepala Dinas Sosial)">
                    </div>

                    <div class="col-md-12 form-group" required>
                      <textarea class="form-control" name="alamat_instansi" rows="5" placeholder="Masukkan Alamat Instansi yang dituju"></textarea>
                    </div>

                    <div class="col-md-6 form-group" required>
                      <label for="">Tanggal Mulai KP</label>
                      <input type="date" name="tanggal_mulai" class="form-control" placeholder="tanggal mulai KP">
                    </div>

                    <div class="col-md-6 form-group" required>
                      <label for="">Tanggal Selesai KP</label>
                      <input type="date" name="tanggal_selesai" class="form-control" placeholder="tanggal mulai KP">
                    </div>

                    <div class="col-md-6 form-group" required>
                      <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Hp / WA" >
                    </div>

                    <div class="col-md-6 form-group" required>
                      <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                    </div>

                    <!-- <div class="col-md-12 form-group">
                      <select class="form-control" id="selectOption" required>
                        <option value="">--Ingin Menambah Anggota ?--</option>
                        <option value="1">Iya</option>
                        <option value="0">Tidak</option>
                      </select>
                    </div> -->

                    <div class="form-group" id="form1"  required>
                    <br>
                      <h6>
                          <center>Anggota Kelompok
                      </h6>
                      <table class="table table-bordered" id="tableLoop" width="100%">
                          <thead>
                              <tr>
                                  <th class="text-center" width="10%">No</th>
                                  <th width="30%">Nama</th>
                                  <th width="30%">NIM</th>
                                  <th class="text-center" width="10%"><button class="btn btn-success btn-block" id="BarisBaru"><i class="bi bi-plus"></i></button></th>
                              </tr>
                          </thead>
                          <tbody></tbody>
                      </table>
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
              $(document).ready(function() {
                 for(B=1; B<=1; B++){
                  Barisbaru();
                 }
                 $('#BarisBaru').click(function(e) {
                     e.preventDefault();
                     Barisbaru();
                 });

                 $("tableLoop tbody").find('input[type=text]').filter(':visible:first').focus();
              });

              function Barisbaru() {
                  $(document).ready(function() {
                      $("[data-toggle='tooltip']").tooltip();
                  });
                  var Nomor = $("#tableLoop tbody tr").length + 1;
                  var Baris = '<tr>';
                          Baris += '<td style="width= 5%" class="text-center">'+Nomor+'</td>';
                          Baris += '<td style="width= 40%">';
                              Baris += '<input style="width= 40%" type="text" name="nama_anggota[]" class="form-control" placeholder="Nama Lengkap">';
                          Baris += '</td>';
                          Baris += '<td>';
                              Baris += '<input type="text" name="nim_anggota[]" class="form-control" placeholder="NIM">';
                          Baris += '</td>';
                          Baris += '<td style="width= 5%" class="text-center">';
                              Baris += '<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus Baris" id="HapusBaris"><i class="bi bi-trash3-fill"></i></a>';
                          Baris += '</td>';
                      Baris += '</tr>';

                  $("#tableLoop tbody").append(Baris);
                  $("#tableLoop tbody tr").each(function () {
                     $(this).find('td:nth-child(2) input').focus();
                  });

              }

              $(document).on('click', '#HapusBaris', function(e) {
                 e.preventDefault();
                 var Nomor = 1;
                 $(this).parent().parent().remove();
                 $('tableLoop tbody tr').each(function() {
                     $(this).find('td:nth-child(1)').html(Nomor);
                     Nomor++;
                 });
              });

              $(document).ready(function() {
                 $('#SimpanData').submit(function(e) {
                     e.preventDefault();
                     biodata();
                 });
              });

              function biodata() {
                  $.ajax({
                      url:$("#SimpanData").attr('action'),
                      type:'post',
                      cache:false,
                      dataType:"json",
                      data: $("#SimpanData").serialize(),
                      success:function (data) {
                          if (data.success == true) {
                              $('.first_name').val('');
                              $('.last_name').val('');
                              $('#notif').fadeIn(800, function() {
                                 $("#notif").html(data.notif).fadeOut(5000).delay(800);
                              });
                          }
                          else{
                              $('#notif').html('<div class="alert alert-danger">Data Gagal Disimpan</div>')
                          }
                      },

                      error:function (error) {
                          alert(error);
                      }

                  });
              }
          </script>
          <script>
    $(document).ready(function() {
        $("#selectOption").change(function() {
            var selectedValue = $(this).val();
            if (selectedValue == 1) {
                $("#form1").show();
            } else{
                $("#form1").hide();
            }
        });
    });
</script>

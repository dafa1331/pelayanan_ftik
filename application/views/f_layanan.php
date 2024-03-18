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
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- Primary table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Tambah Data Layanan</h4>

                    <?php echo form_open_multipart('layanan/proses_insert')?>
                    <div class="col-lg-8 mt-10 mt-lg-0">

                      <div class="row gy-2 gx-md-3">

                        <div class="col-md-12 form-group">
                          <input type="text" name="nomor" class="form-control" value="<?php echo $nomor?>" placeholder="Masukkan Nomor Layanan" required readonly>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="nama_pemohon" class="form-control" placeholder="Masukkan Nama Pemohon" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="nip_pemohon" class="form-control" placeholder="Masukkan NIP/NRK/NIM Pemohon" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <select class="form-control" name="status_pemohon" >
                            <option value="">--Status Pemohon--</option>
                            <option>Pegawai</option>
                            <option>Mahasiswa</option>
                            <option>Stakeholder</option>
                          </select>
                        </div>

                        <div class="col-md-12 form-group">
                          <select class="form-control" name="unit_asal" id="options">
                            <option value="">--Unit Asal--</option>
                            <option value="Program Studi Teknik Sipil">Program Studi Teknik Sipil</option>
                            <option value="Program Studi Perencanaan Wilayah dan Kota">Program Studi Perencanaan Wilayah dan Kota</option>
                            <option value="Program Studi Teknik Geomatika">Program Studi Teknik Geomatika</option>
                            <option value="Program Studi Arsitektur">Program Studi Arsitektur</option>
                            <option value="Program Studi Teknik Lingkungan">Program Studi Teknik Lingkungan</option>
                            <option value="Program Studi Teknik Kelautan">Program Studi Teknik Kelautan</option>
                            <option value="Program Studi Desain Komunikasi Visual">Program Studi Desain Komunikasi Visual</option>
                            <option value="Program Studi Arsitektur Lanskap">Program Studi Arsitektur Lanskap</option>
                            <option value="Program Studi Teknik Perkeretaapian">Program Studi Teknik Perkeretaapian</option>
                            <option value="Program Studi Rekayasa Tata Kelola Air Terpadu">Program Studi Rekayasa Tata Kelola Air Terpadu</option>
                            <option value="Program Studi Pariwisata">Program Studi Pariwisata</option>
                            <option value="Fakultas Teknologi Infrastruktur dan Kewilayahan">Fakultas Teknologi Infrastruktur dan Kewilayahan</option>
                            <option value="other">lainnya</option>
                          </select>
                        </div>

                        <!-- Input untuk opsi "lainnya" -->
                        <div class="col-md-12 form-group" id="other_option_container" style="display: none;">
                            <input type="text" class="form-control" id="other_option" name="other_option" placeholder="Masukkan Asal Pemohon">
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Hp" required>
                        </div>

                        <div class="col-md-12 form-group">
                          <textarea class="form-control" name="keperluan" rows="5" placeholder="Masukkan Keperluan Permohonan" required></textarea>
                        </div>

                        <div class="col-md-12 form-group">
                          <select class="form-control" name="bagian" >
                            <option value="">--Tim Kerja--</option>
                            <option value="akademik">Akademik</option>
                            <option value="kemahasiswaan">Kemahasiswaan</option>
                            <option value="keuangan dan perencanaan">Keuangan dan Perencanaan</option>
                            <option value="humas dan kerjasama">Humas dan Kerjasama</option>
                            <option value="rumah tangga dan bmn">Rumah Tangga dan BMN</option>
                            <option value="kepegawaian">Kepegawaian</option>
                            <option value="customer service">Customer Service (CS)</option>
                            <option value="tata laksana dan teknologi informasi">Tata Laksana dan Teknologi Informasi</option>
                          </select>
                        </div>

                        <div class="col-md-12 form-group">
                          <input type="file" class="form-control" name="berkas_pendukung">
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

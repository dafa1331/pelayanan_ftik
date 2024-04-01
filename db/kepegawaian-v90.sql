-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2024 pada 08.08
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kebutuhan_data`
--

CREATE TABLE `kebutuhan_data` (
  `id_kebutuhan_data` int(11) NOT NULL,
  `tujuan_surat` varchar(255) NOT NULL,
  `pimpinan_instansi` varchar(255) NOT NULL,
  `kebutuhan_data` text NOT NULL,
  `id_penelitian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kebutuhan_data`
--

INSERT INTO `kebutuhan_data` (`id_kebutuhan_data`, `tujuan_surat`, `pimpinan_instansi`, `kebutuhan_data`, `id_penelitian`) VALUES
(17, 'tes1', 'kepala dinas coba coba', '1. data penelitian\r\n2. data penelitian \r\n3. data penelitian \r\n4. data penelit', 20),
(18, 'tes2', 'kepala dinas coba coba 2', '1. data penelitian\r\n2. data penelitian \r\n3. data penelitian \r\n4. data penelit', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alat_ftik`
--

CREATE TABLE `tb_alat_ftik` (
  `id_alat` int(11) NOT NULL,
  `nama_alat` varchar(255) NOT NULL,
  `id_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_alat_ftik`
--

INSERT INTO `tb_alat_ftik` (`id_alat`, `nama_alat`, `id_pinjam`) VALUES
(1, 'speaker', 1),
(2, 'speaker', 2),
(3, 'converter', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggaran`
--

CREATE TABLE `tb_anggaran` (
  `id_anggaran` int(11) NOT NULL,
  `jenis_akun` varchar(255) NOT NULL,
  `kode_akun` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `penggunaan_anggaran` decimal(10,0) NOT NULL,
  `id_pengajuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_izin_kegiatan_mahasiswa`
--

CREATE TABLE `tb_izin_kegiatan_mahasiswa` (
  `id_izin_mahasiswa` int(11) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `prodi_mhs` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `nama_himpunan` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `jumlah_peserta` varchar(255) NOT NULL,
  `acc_fakultas` int(11) NOT NULL,
  `acc_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_izin_penelitian`
--

CREATE TABLE `tb_izin_penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `prodi_mhs` varchar(255) NOT NULL,
  `judul_ta` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_izin_penelitian`
--

INSERT INTO `tb_izin_penelitian` (`id_penelitian`, `nama_mhs`, `nim`, `prodi_mhs`, `judul_ta`, `no_hp`, `email`, `nomor_surat`, `tanggal_surat`) VALUES
(20, 'afan', '123456', 'Teknik Perkeretaapian', 'sasasa', '0215468464', 'lastiur@email.com', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kp`
--

CREATE TABLE `tb_kp` (
  `nim_mhs` varchar(255) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `prodi_mhs` varchar(255) NOT NULL,
  `alamat_instansi` text NOT NULL,
  `jabatan_pimpinan` varchar(255) NOT NULL,
  `tujuan_surat` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nim_ketua` varchar(255) NOT NULL,
  `id_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kp`
--

INSERT INTO `tb_kp` (`nim_mhs`, `nama_mhs`, `prodi_mhs`, `alamat_instansi`, `jabatan_pimpinan`, `tujuan_surat`, `tanggal_mulai`, `tanggal_selesai`, `no_hp`, `email`, `nim_ketua`, `id_surat`) VALUES
('123456', 'nama 1', 'Teknik Sipil', 'tes alamat', 'tes jabatan', 'tes', '2024-03-15', '2024-05-15', '', 'afan.darmaji@staff.itera.ac.id', '123456', 0),
('123457', 'nama 1', 'Teknik Sipil', 'tes alamat', 'tes jabatan', 'tes', '2024-03-15', '2024-05-15', '', 'afan.darmaji@staff.itera.ac.id', '123456', 0),
('1517051031', 'asti', 'Perencanaan Wilayah dan Kota', 'tesdsd', 'tes jabatan', 'tes', '2024-03-30', '2024-05-21', '0815475625', 'afan.darmaji@staff.itera.ac.id', '1517051051', 0),
('1517051051', 'afan', 'Perencanaan Wilayah dan Kota', 'tesdsd', 'tes jabatan', 'tes', '2024-03-30', '2024-05-21', '0815475625', 'afan.darmaji@staff.itera.ac.id', '1517051051', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lampiran_sk`
--

CREATE TABLE `tb_lampiran_sk` (
  `id_anggota_sk` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tugas` varchar(255) NOT NULL,
  `id_pengajuan_sk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_lampiran_sk`
--

INSERT INTO `tb_lampiran_sk` (`id_anggota_sk`, `nama_anggota`, `jabatan`, `tugas`, `id_pengajuan_sk`) VALUES
(1, 'afan', 'ketua', 'tes', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `nomor` varchar(255) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `nip_pemohon` varchar(255) NOT NULL,
  `status_pemohon` varchar(255) NOT NULL,
  `unit_asal` varchar(255) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `waktu_pengajuan` time NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `update_at` date NOT NULL,
  `berkas_pendukung` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `acc_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_layanan`
--

INSERT INTO `tb_layanan` (`nomor`, `nama_pemohon`, `nip_pemohon`, `status_pemohon`, `unit_asal`, `tanggal_pengajuan`, `waktu_pengajuan`, `no_hp`, `keperluan`, `bagian`, `update_at`, `berkas_pendukung`, `slug`, `acc_prodi`) VALUES
('FTIK1503240001', 'nama 1', '123456', 'Mahasiswa', 'Teknik Sipil', '2024-03-15', '04:06:42', '', 'Pengajuan Surat Pengantar Kerja Praktik', 'customer service', '2024-03-25', '', '', 1),
('FTIK1503240002', 'afan', '1517051051', 'Mahasiswa', 'Perencanaan Wilayah dan Kota', '2024-03-15', '04:20:26', '0815475625', 'Pengajuan Surat Pengantar Kerja Praktik', 'customer service', '2024-03-15', '', '', 0),
('FTIK1603240001', 'Afan Darmaji', '1517051051', 'Mahasiswa', 'Perencanaan Wilayah dan Kota', '2024-03-16', '09:08:33', '086526267281', 'Pengajuan Surat Pengantar Kerja Praktik', 'customer service', '2024-03-16', '', '', 0),
('FTIK2003240001', 'Maya', '1234', 'Pegawai', 'Teknik Sipil', '2024-03-20', '10:42:05', '09876', 'Pengajuan SK Prodi ', 'tata laksana dan teknologi informasi', '2024-03-25', '', '', 1),
('FTIK2703240001', 'afan', '123456', 'Mahasiswa', 'Teknik Perkeretaapian', '2024-03-27', '05:21:31', '0215468464', 'Pengajuan Surat Pengantar Kerja Praktik', 'customer service', '2024-03-27', '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nomor_pengantar_kp`
--

CREATE TABLE `tb_nomor_pengantar_kp` (
  `id_surat` int(11) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `jabatan_pimpinan` varchar(255) NOT NULL,
  `alamat_instansi` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `id_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_nomor_pengantar_kp`
--

INSERT INTO `tb_nomor_pengantar_kp` (`id_surat`, `nim`, `jabatan_pimpinan`, `alamat_instansi`, `tanggal_mulai`, `tanggal_selesai`, `nomor_surat`, `tanggal_surat`, `id_layanan`) VALUES
(15, '123456', 'tes jabatan', 'tes alamat', '2024-03-15', '2024-05-15', '245', '2024-03-26', 0),
(16, '1517051051', 'tes jabatan', 'tesdsd', '2024-03-30', '2024-05-21', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nidn` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `nama`, `nik`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `nidn`, `alamat`, `no_hp`, `email`, `npwp`, `foto`) VALUES
('1997030820223262', 'Afan Darmaji', '1872050803970002', '1997-03-08', 'Sumbersari', 'Laki-Laki', '-', 'Bantul', '085765650434', 'afandarmaji1551@gmail.com', '96.046.737-1.321.000', '1997030820223262.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan_kegiatan`
--

CREATE TABLE `tb_pengajuan_kegiatan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `pic_kegiatan` varchar(255) NOT NULL,
  `nip_pic` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `tgl_mulai_kegiatan` date NOT NULL,
  `tgl_selesai_kegiatan` date NOT NULL,
  `prodi_pengusul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan_sk`
--

CREATE TABLE `tb_pengajuan_sk` (
  `id_pengajuan` int(11) NOT NULL,
  `nama_pengusul` varchar(255) NOT NULL,
  `nip_pengusul` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `prodi_pengusul` varchar(255) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `judul_sk` text NOT NULL,
  `honor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pengajuan_sk`
--

INSERT INTO `tb_pengajuan_sk` (`id_pengajuan`, `nama_pengusul`, `nip_pengusul`, `no_hp`, `prodi_pengusul`, `tgl_awal`, `tgl_akhir`, `tanggal_pengajuan`, `judul_sk`, `honor`) VALUES
(3, 'Maya', '1234', '09876', 'program studi teknik sipil', '2024-03-01', '2024-07-31', '2024-03-20', 'SK tes', 'Tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pinjam_alat`
--

CREATE TABLE `tb_pinjam_alat` (
  `id_pinjam` int(11) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `nim_mhs` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `waktu_pinjam` time NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `waktu_kembali` time NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `status_pengembalian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pinjam_alat`
--

INSERT INTO `tb_pinjam_alat` (`id_pinjam`, `nama_mhs`, `nim_mhs`, `prodi`, `no_hp`, `keperluan`, `tanggal_pinjam`, `waktu_pinjam`, `tanggal_kembali`, `waktu_kembali`, `kondisi`, `status_pengembalian`) VALUES
(1, 'tes', '1234', '', '0215468464', '0', '2024-03-18', '00:00:00', '2024-03-21', '10:33:43', 'bagus', 1),
(2, 'tes2', '123454', 'Teknik Sipil', '0215468464', 'tes', '2024-03-18', '00:00:00', '2024-03-21', '10:34:38', 'bagus sekali mantapp', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `kode_prodi` varchar(255) NOT NULL,
  `id_fakultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `bagian`, `id_prodi`, `level`) VALUES
(1, 'afan darmaji', 'superadmin', '$2y$10$iq4Nz5ArYaNb8kROARspTeuXoxlMr7xQS0RLotTqtbSuZDqQHqqfK', 'superadmin', 12, 'superadmin'),
(2, 'akademik', 'akademik', '$2y$10$.vM6yPZ3//dGKTmraBZO9elRh5H9JiYO6DJyNAQMVM3VWjnAgfoRW', 'akademik', 12, 'pegawai'),
(3, 'kemahasiswaan', 'kemahasiswaan', '$2y$10$oko9teLhymQRq1BWFp7O7OL02lGHDJDPnUzpUxW5SJ71LvpLyxKDm', 'kemahasiswaan', 12, 'pegawai'),
(4, 'keuangan dan perencanaan', 'keuangan', '$2y$10$E7FyjBVlUxUtGouhsUbW8e3rVSfj/hjt/MO8Srk6d/tKw3d5i2tQe', 'keuangan dan perencanaan', 12, 'pegawai'),
(5, 'humas dan kerjasama', 'humas', '$2y$10$iO54wjbHJpFCK4efz3YNB.P1rZ.AOlNNcunKUUi5Is4R0uoUD.1Fm', 'humas dan kerjasama', 12, 'pegawai'),
(6, 'rumah tangga dan bmn', 'sarprasbmn', '$2y$10$6HyUGR/Jv/0Ah3fziyOR8e6iGRTORNy66j1eWbWx49/qeEvqqOZHO', 'rumah tangga dan bmn', 12, 'pegawai'),
(7, 'kepegawaian', 'kepegawaian', '$2y$10$Y/uMqOVM9Bd9Duu7aBDsg.a5bs254Uq46WoIhVgBjRzS8W/.9Yg0S', 'kepegawaian', 12, 'pegawai'),
(8, 'customer service', 'csftik', '$2y$10$GvqN4Sfp3E2S9NH32iCo9O9hjc5OaIG60lJHxUTSnzXGN.5BanQtO', 'customer service', 12, 'pegawai'),
(9, 'tata laksana dan teknologi informasi', 'tatalaksana', '$2y$10$pnxKTYOnKs0VUyvTym2Ckui7VUgug7AMZIfMOYNjXWZV5CR8YA7Da', 'tata laksana dan teknologi informasi', 12, 'pegawai'),
(10, 'Program Studi Teknik Sipil', 'prodi_sipil', '$2y$10$Qx3qcZrGAAlIF394JmtH0OgSv9vcutMki.5.mpGnkhGPg21ZMuDPG', 'Teknik Sipil', 12, 'prodi'),
(11, 'Program Studi Perencanaan Wilayah dan Kota', 'prodi_pwk', '$2y$10$T1zigFBXWuh0eIj6mKAL1eIYg2CrF3rOvQHh83ZrRv9pds0ZSEMLO', 'Perencanaan Wilayah dan Kota', 12, 'prodi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kebutuhan_data`
--
ALTER TABLE `kebutuhan_data`
  ADD PRIMARY KEY (`id_kebutuhan_data`);

--
-- Indeks untuk tabel `tb_alat_ftik`
--
ALTER TABLE `tb_alat_ftik`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indeks untuk tabel `tb_anggaran`
--
ALTER TABLE `tb_anggaran`
  ADD PRIMARY KEY (`id_anggaran`);

--
-- Indeks untuk tabel `tb_izin_kegiatan_mahasiswa`
--
ALTER TABLE `tb_izin_kegiatan_mahasiswa`
  ADD PRIMARY KEY (`id_izin_mahasiswa`);

--
-- Indeks untuk tabel `tb_izin_penelitian`
--
ALTER TABLE `tb_izin_penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indeks untuk tabel `tb_kp`
--
ALTER TABLE `tb_kp`
  ADD PRIMARY KEY (`nim_mhs`);

--
-- Indeks untuk tabel `tb_lampiran_sk`
--
ALTER TABLE `tb_lampiran_sk`
  ADD PRIMARY KEY (`id_anggota_sk`);

--
-- Indeks untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `tb_nomor_pengantar_kp`
--
ALTER TABLE `tb_nomor_pengantar_kp`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_pengajuan_kegiatan`
--
ALTER TABLE `tb_pengajuan_kegiatan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `tb_pengajuan_sk`
--
ALTER TABLE `tb_pengajuan_sk`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `tb_pinjam_alat`
--
ALTER TABLE `tb_pinjam_alat`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indeks untuk tabel `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kebutuhan_data`
--
ALTER TABLE `kebutuhan_data`
  MODIFY `id_kebutuhan_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_alat_ftik`
--
ALTER TABLE `tb_alat_ftik`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_anggaran`
--
ALTER TABLE `tb_anggaran`
  MODIFY `id_anggaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_izin_kegiatan_mahasiswa`
--
ALTER TABLE `tb_izin_kegiatan_mahasiswa`
  MODIFY `id_izin_mahasiswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_izin_penelitian`
--
ALTER TABLE `tb_izin_penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_lampiran_sk`
--
ALTER TABLE `tb_lampiran_sk`
  MODIFY `id_anggota_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_nomor_pengantar_kp`
--
ALTER TABLE `tb_nomor_pengantar_kp`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_pengajuan_kegiatan`
--
ALTER TABLE `tb_pengajuan_kegiatan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pengajuan_sk`
--
ALTER TABLE `tb_pengajuan_sk`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

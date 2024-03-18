-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 09:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

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
-- Table structure for table `tb_kp`
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
  `nim_ketua` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kp`
--

INSERT INTO `tb_kp` (`nim_mhs`, `nama_mhs`, `prodi_mhs`, `alamat_instansi`, `jabatan_pimpinan`, `tujuan_surat`, `tanggal_mulai`, `tanggal_selesai`, `no_hp`, `email`, `nim_ketua`) VALUES
('1517051051', 'afan darmaji', 'Teknik Geomatika', 'Jl. Tulang Bawang No.10 A, Imopuro, Kec. Metro Pusat, Kota Metro, Lampung 34124', 'Kepala Dinas Komunikasi dan Informatika Kota Metro', 'Dinas Komunikasi dan Informatika Kota Metro', '2024-03-14', '2024-07-03', '081528836003', 'afandarmaji1551@gmail.com', '1517051051'),
('1517051052', 'Fernatdi Angger Saputra', 'Teknik Geomatika', 'Jl. Tulang Bawang No.10 A, Imopuro, Kec. Metro Pusat, Kota Metro, Lampung 34124', 'Kepala Dinas Komunikasi dan Informatika Kota Metro', 'Dinas Komunikasi dan Informatika Kota Metro', '2024-03-14', '2024-07-03', '081528836003', 'afandarmaji1551@gmail.com', '1517051051');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `nomor` varchar(255) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `nip_pemohon` varchar(255) NOT NULL,
  `status_pemohon` varchar(255) NOT NULL,
  `unit_asal` varchar(255) NOT NULL,
  `hari_pengajuan` varchar(255) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `waktu_pengajuan` time NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `update_at` date NOT NULL,
  `berkas_pendukung` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`nomor`, `nama_pemohon`, `nip_pemohon`, `status_pemohon`, `unit_asal`, `hari_pengajuan`, `tanggal_pengajuan`, `waktu_pengajuan`, `no_hp`, `keperluan`, `bagian`, `update_at`, `berkas_pendukung`, `slug`) VALUES
('', 'afan darmaji', '1517051051', 'Mahasiswa', 'Teknik Geomatika', 'Thursday', '2024-03-14', '08:39:49', '081528836003', 'Pengajuan Surat Pengantar Kerja Praktik', 'customer service', '2024-03-14', '', ''),
('FTIK0703240001', '123', '123', 'Stakeholder', 'asal tes', 'Kamis', '2024-03-07', '17:43:03', '123', 'asas', 'keuangan dan perencanaan', '2024-03-07', '', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nomor_pengantar_kp`
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
-- Dumping data for table `tb_nomor_pengantar_kp`
--

INSERT INTO `tb_nomor_pengantar_kp` (`id_surat`, `nim`, `jabatan_pimpinan`, `alamat_instansi`, `tanggal_mulai`, `tanggal_selesai`, `nomor_surat`, `tanggal_surat`, `id_layanan`) VALUES
(7, '1517051051', 'Kepala Dinas Komunikasi dan Informatika Kota Metro', 'Jl. Tulang Bawang No.10 A, Imopuro, Kec. Metro Pusat, Kota Metro, Lampung 34124', '2024-03-14', '2024-07-03', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
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
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `nama`, `nik`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `nidn`, `alamat`, `no_hp`, `email`, `npwp`, `foto`) VALUES
('1997030820223262', 'Afan Darmaji', '1872050803970002', '1997-03-08', 'Sumbersari', 'Laki-Laki', '-', 'Bantul', '085765650434', 'afandarmaji1551@gmail.com', '96.046.737-1.321.000', '1997030820223262.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `kode_prodi` varchar(255) NOT NULL,
  `id_fakultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
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
-- Dumping data for table `tb_user`
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
(9, 'tata laksana dan teknologi informasi', 'tatalaksana', '$2y$10$pnxKTYOnKs0VUyvTym2Ckui7VUgug7AMZIfMOYNjXWZV5CR8YA7Da', 'tata laksana dan teknologi informasi', 12, 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kp`
--
ALTER TABLE `tb_kp`
  ADD PRIMARY KEY (`nim_mhs`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `tb_nomor_pengantar_kp`
--
ALTER TABLE `tb_nomor_pengantar_kp`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_nomor_pengantar_kp`
--
ALTER TABLE `tb_nomor_pengantar_kp`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

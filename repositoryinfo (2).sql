-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 10:52 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repositoryinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id_author` int(2) NOT NULL,
  `author` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id_author`, `author`) VALUES
(4, 'Dekan'),
(5, 'Dikti'),
(6, 'Kopertis'),
(9, 'Lembaga Internasional'),
(7, 'Lembaga Lokal'),
(8, 'Lembaga Nasional'),
(3, 'Presiden'),
(10, 'Prodi'),
(1, 'Rektor'),
(11, 'Unit'),
(2, 'Yayasan');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(1) NOT NULL,
  `kd_fakultas` varchar(4) NOT NULL,
  `fakultas` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `kd_fakultas`, `fakultas`) VALUES
(1, 'FTD', 'Fakultas Teknologi dan Desain'),
(2, 'FHB', 'Fakultas Humaniora dan Bisnis');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `akses_id` int(2) NOT NULL,
  `author` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`akses_id`, `author`) VALUES
(1, 'administrator'),
(3, 'dosen'),
(2, 'kaprodi');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_jenis_dokumen` int(2) NOT NULL,
  `jenis_dokumen` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_jenis_dokumen`, `jenis_dokumen`) VALUES
(9, 'Akademik'),
(5, 'Formulir'),
(3, 'Foto'),
(7, 'Laporan'),
(8, 'Notulensi'),
(2, 'Pedoman'),
(4, 'Publikasi'),
(6, 'Sertifikat'),
(1, 'Surat');

-- --------------------------------------------------------

--
-- Table structure for table `kelengkapan_data`
--

CREATE TABLE `kelengkapan_data` (
  `standar` int(2) NOT NULL,
  `status` varchar(60) NOT NULL,
  `kelengkapan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelengkapan_data`
--

INSERT INTO `kelengkapan_data` (`standar`, `status`, `kelengkapan`) VALUES
(1, 'Visi, Misi, Tujuan dan Sasaran, Serta Strategi Pencapaian', '0'),
(2, 'Tata Pamong', '0'),
(3, 'Kemahasiswaan dan Lulusan', '0'),
(4, 'Sumber Daya Manusia', '0'),
(5, 'Kurikulum, Pembelajaran, dan Suasana Akademik', '0'),
(6, 'Pembiayaan, Prasarana, Sarana, dan Sistem Informasi', '0'),
(7, 'Penelitian dan Kerja Sama', '0'),
(8, 'Pengabdian kepada Masyarakat', '0'),
(9, 'Capaian Luaran', '0');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok_dokumen`
--

CREATE TABLE `kelompok_dokumen` (
  `kd_dok` varchar(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `abbrev` varchar(6) NOT NULL,
  `kode_permen` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompok_dokumen`
--

INSERT INTO `kelompok_dokumen` (`kd_dok`, `nama`, `abbrev`, `kode_permen`) VALUES
('-', '-', '-', '-'),
('kd001', 'Jurnal', '', 'pd004'),
('kd002', 'Prosiding', '', 'pd004'),
('kd003', 'Buku', '', 'pd005'),
('kd004', 'HKI', '', 'pd005'),
('kd005', 'Produk/Teknologi/Hasil Rekayas', '', 'pd005'),
('kd006', 'Kebijakan Strategis', '', 'pd005'),
('kd007', 'BKD', '', 'pd011'),
('kd008', 'JAD', '', 'pd011'),
('kd009', 'Sertifikat Dosen', '', 'pd011'),
('kd010', 'Prestasi', '', 'pd011'),
('kd011', 'Jurnal', '', 'pd024'),
('kd012', 'Prosiding', '', 'pd024'),
('kd013', 'Buku', '', 'pd025'),
('kd014', 'HKI', '', 'pd025'),
('kd015', 'Produk/Teknologi/Hasil Rekayas', '', 'pd025'),
('kd016', 'Kebijakan Strategis', '', 'pd025'),
('kd017', 'Jurnal', '', 'pd029'),
('kd018', 'Prosiding', '', 'pd029'),
('kd019', 'Buku', '', 'pd030'),
('kd020', 'HKI', '', 'pd030'),
('kd021', 'Produk/Teknologi/Hasil Rekayas', '', 'pd030'),
('kd022', 'Kebijakan Strategis', '', 'pd030'),
('kd023', 'Jurnal', '', 'pd038'),
('kd024', 'Prosiding', '', 'pd038');

-- --------------------------------------------------------

--
-- Table structure for table `lingkup`
--

CREATE TABLE `lingkup` (
  `id_lingkup` int(2) NOT NULL,
  `lingkup` varchar(25) NOT NULL,
  `kode_kat_dok` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lingkup`
--

INSERT INTO `lingkup` (`id_lingkup`, `lingkup`, `kode_kat_dok`) VALUES
(1, 'Lokal', 'kd001'),
(2, 'Nasional', 'kd001'),
(3, 'Internasional', 'kd001'),
(4, 'Nasional', 'kd002'),
(5, 'Internasional', 'kd002'),
(6, 'Lokal', 'kd011'),
(7, 'Nasional', 'kd011'),
(8, 'Internasional', 'kd011'),
(9, 'Nasional', 'kd012'),
(10, 'Internasional', 'kd012'),
(11, 'Lokal', 'kd017'),
(12, 'Nasional', 'kd017'),
(13, 'Internasional', 'kd017'),
(14, 'Nasional', 'kd018'),
(15, 'Internasional', 'kd018'),
(16, 'Lokal', 'kd023'),
(17, 'Nasional', 'kd023'),
(18, 'Internasional', 'kd023'),
(19, 'Nasional', 'kd024'),
(20, 'Internasional', 'kd024');

-- --------------------------------------------------------

--
-- Table structure for table `perluasan_dokumen`
--

CREATE TABLE `perluasan_dokumen` (
  `id_permen` varchar(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kd_std` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perluasan_dokumen`
--

INSERT INTO `perluasan_dokumen` (`id_permen`, `nama`, `kd_std`) VALUES
('-', '-', 0),
('pd001', 'Surat', 2),
('pd002', 'Pedoman', 2),
('pd003', 'Luaran Laporan', 2),
('pd004', 'Luaran Publikasi', 2),
('pd005', 'Luaran Lainnya', 2),
('pd006', 'Surat', 3),
('pd007', 'Pedoman', 3),
('pd008', 'Data Mahasiswa', 3),
('pd009', 'Surat', 4),
('pd010', 'Pedoman', 4),
('pd011', 'Data Dosen Tetap', 4),
('pd012', 'Data Dosen Tidak Tetap', 4),
('pd013', 'Data Dosen Praktisi/Industri', 4),
('pd014', 'Surat', 5),
('pd015', 'Pedoman', 5),
('pd016', 'Data Investasi', 5),
('pd017', 'RKAT', 5),
('pd018', 'Surat', 6),
('pd019', 'Pedoman', 6),
('pd020', 'Kurikulum', 6),
('pd021', 'Surat', 7),
('pd022', 'Pedoman', 7),
('pd023', 'Luaran Laporan', 7),
('pd024', 'Luaran Publikasi', 7),
('pd025', 'Luaran Lainnya', 7),
('pd026', 'Surat', 8),
('pd027', 'Pedoman', 8),
('pd028', 'Luaran Laporan', 8),
('pd029', 'Luaran Publikasi', 8),
('pd030', 'Luaran Lainnya', 8),
('pd031', 'Data Hasil Pembelajaran', 9),
('pd032', 'Prestasi Akademik Mahasiswa', 9),
('pd033', 'Prestasi non-Akademik Mahasisw', 9),
('pd034', 'Data Lulusan', 9),
('pd035', 'Tracer Study', 9),
('pd036', 'PKM Mahasiswa', 9),
('pd037', 'Tugas Akhir Mahasiswa', 9),
('pd038', 'Publikasi Mahasiswa', 9);

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `id_program` int(2) NOT NULL,
  `program_studi` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`id_program`, `program_studi`) VALUES
(1, 'Akuntansi'),
(10, 'Arsitektur'),
(6, 'Desain Komunikasi Visual'),
(5, 'Desain Produk'),
(4, 'Ilmu Komunikasi'),
(7, 'Informatika'),
(2, 'Manajemen'),
(3, 'Psikologi'),
(8, 'Sistem Informasi'),
(9, 'Teknik Sipil');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(2) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`) VALUES
(1, '2015'),
(2, '2016'),
(3, '2017'),
(4, '2018'),
(5, '2019'),
(6, '2020');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_valid`
--

CREATE TABLE `tahun_valid` (
  `id_thn_valid` int(1) NOT NULL,
  `thn_valid` varchar(15) NOT NULL,
  `range_thn` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_valid`
--

INSERT INTO `tahun_valid` (`id_thn_valid`, `thn_valid`, `range_thn`) VALUES
(1, '6 bulan', '0 - 6 bulan'),
(2, '1 tahun', '0 - 12 bulan'),
(3, '4 tahun', '0 - 48 bulan'),
(4, 'Seumur Hidup', 'Seumur Hidup');

-- --------------------------------------------------------

--
-- Table structure for table `t_dokumen`
--

CREATE TABLE `t_dokumen` (
  `id_dok` int(11) NOT NULL,
  `no_dok` varchar(30) NOT NULL,
  `nama_dokumen` varchar(250) NOT NULL,
  `jenis_dokumen` varchar(30) NOT NULL,
  `lingkup` varchar(10) DEFAULT NULL,
  `standar` varchar(10) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `pic` varchar(50) NOT NULL,
  `tahun_valid` varchar(15) DEFAULT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `tt_semester` varchar(6) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file` varchar(500) DEFAULT NULL,
  `valid` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE `t_login` (
  `id` int(15) NOT NULL,
  `NIDN` varchar(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `prodi` varchar(28) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`id`, `NIDN`, `username`, `prodi`, `email`, `password`, `author`) VALUES
(1, '9999999998', 'admin', 'Teknik Sipil', 'admin@upj.ac.id', '$2y$12$qzCd/DZweNWvYwzu26uVl.t06q0UrSTQ/MhQgaJrszJ24vDzpEmnO', 'administrator'),
(2, '9999999997', 'admin1', 'Akuntansi', 'admin1@upj.ac.id', '$2y$12$hnVN4pXpsR58wdWsbRx94.2pv/R8aseFIdBTgHGeCFNeMGPRmtn0G', 'administrator'),
(3, '9999999999', 'dosen', 'Akuntansi', 'dosen@upj.ac.id', '$2y$12$.J2zWQHTzhrAJ1093nTfYOBjR.bZHM3nzOgp8TYKasWJ1a3738mm6', 'dosen'),
(5, '9999999996', 'kaprodi', 'Informatika', 'kaprodi@upj.ac.id', '$2y$12$0/n5mw4xLqqLXgSu.C8/Duenok5GU68VT1PphnZbfUA7eLEplp5Ui', 'kaprodi'),
(6, '1234567890', 'TEST', 'Manajemen', 'test@upj.ac.id', '$2y$05$7SWL0EmDjrHvmxSwsmnLPuKklzhGW2R5FNTjrlGDRkb8g9jz9Y13S', 'dosen'),
(7, '0328068404', 'SAFITRI JAYA', 'Informatika', 'safitri.jaya@upj.ac.id', '$2y$05$wjWmkrkLrumweNAkKDAS4uPlUnRQDK7uelpWSneXf.YuTCEMxvS2q', 'kaprodi'),
(8, '123456789', 'TEST2', 'Arsitektur', 'test2@gmail.com', '$2y$05$y2shg2s8cYAn9V2B768rm.y74eETUwJa3Q45j7/BoTQ2u4gO7pwHq', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_author`),
  ADD UNIQUE KEY `author` (`author`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`akses_id`),
  ADD UNIQUE KEY `author` (`author`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_jenis_dokumen`),
  ADD UNIQUE KEY `jenis_dokumen` (`jenis_dokumen`);

--
-- Indexes for table `kelengkapan_data`
--
ALTER TABLE `kelengkapan_data`
  ADD PRIMARY KEY (`standar`),
  ADD UNIQUE KEY `standar` (`standar`);

--
-- Indexes for table `kelompok_dokumen`
--
ALTER TABLE `kelompok_dokumen`
  ADD PRIMARY KEY (`kd_dok`);

--
-- Indexes for table `lingkup`
--
ALTER TABLE `lingkup`
  ADD PRIMARY KEY (`id_lingkup`);

--
-- Indexes for table `perluasan_dokumen`
--
ALTER TABLE `perluasan_dokumen`
  ADD PRIMARY KEY (`id_permen`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_program`),
  ADD UNIQUE KEY `program_studi` (`program_studi`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`),
  ADD UNIQUE KEY `tahun` (`tahun`);

--
-- Indexes for table `tahun_valid`
--
ALTER TABLE `tahun_valid`
  ADD PRIMARY KEY (`id_thn_valid`),
  ADD UNIQUE KEY `range_thn` (`range_thn`);

--
-- Indexes for table `t_dokumen`
--
ALTER TABLE `t_dokumen`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `NIDN` (`NIDN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id_author` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `akses_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_jenis_dokumen` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kelengkapan_data`
--
ALTER TABLE `kelengkapan_data`
  MODIFY `standar` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lingkup`
--
ALTER TABLE `lingkup`
  MODIFY `id_lingkup` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_program` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tahun_valid`
--
ALTER TABLE `tahun_valid`
  MODIFY `id_thn_valid` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_dokumen`
--
ALTER TABLE `t_dokumen`
  MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

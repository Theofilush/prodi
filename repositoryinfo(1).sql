-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 12:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `akreditasi`
--

CREATE TABLE `akreditasi` (
  `id_akreditasi` int(6) NOT NULL,
  `id_standar` int(6) NOT NULL,
  `id_butir` int(6) NOT NULL,
  `id_lingkup` int(6) NOT NULL,
  `id_jenis` int(6) NOT NULL,
  `tahun` varchar(6) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `pencapaian` double NOT NULL,
  `bobot` double NOT NULL,
  `valid` varchar(5) NOT NULL,
  `indikator` int(10) NOT NULL,
  `presentase` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akreditasi`
--

INSERT INTO `akreditasi` (`id_akreditasi`, `id_standar`, `id_butir`, `id_lingkup`, `id_jenis`, `tahun`, `pic`, `file`, `pencapaian`, `bobot`, `valid`, `indikator`, `presentase`) VALUES
(1, 1, 1, 3, 2, '2020-1', 'admin', 'Sertifikat_HAKI2.pdf', 100, 2, 'Ya', 1, 2),
(2, 1, 2, 3, 1, '2020-2', 'admin', 'Sertifikat_HAKI3.pdf', 0, 2, 'Tidak', 0, 0),
(3, 1, 3, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI4.pdf', 100, 1, 'Ya', 1, 1),
(4, 1, 1, 3, 1, '2019-2', 'admin', 'Sertifikat_HAKI5.pdf', 100, 2, 'Ya', 2, 2),
(5, 1, 2, 3, 2, '2019-1', 'admin', 'Sertifikat_HAKI6.pdf', 100, 2, 'Ya', 2, 2),
(6, 1, 3, 3, 2, '2018-1', 'admin', 'Sertifikat_HAKI7.pdf', 100, 1, 'Ya', 1, 1),
(7, 1, 2, 3, 2, '2018-2', 'admin', 'Sertifikat_HAKI8.pdf', 40, 2, 'Ya', 2, 0.8),
(8, 1, 1, 3, 1, '2017-1', 'admin', 'Sertifikat_HAKI9.pdf', 10, 2, 'Ya', 1, 0.2),
(9, 1, 2, 2, 2, '2017-2', 'admin', 'Sertifikat_HAKI10.pdf', 35, 2, 'Ya', 2, 0.7),
(10, 2, 5, 1, 1, '2020-1', 'admin', 'Sertifikat_HAKI11.pdf', 33, 2, 'Ya', 2, 0.66),
(11, 2, 6, 2, 5, '2020-1', 'admin', 'Sertifikat_HAKI12.pdf', 33, 1, 'Ya', 1, 0.33),
(12, 2, 7, 1, 1, '2020-1', 'admin', 'Sertifikat_HAKI13.pdf', 0, 1.5, 'Tidak', 0, 0),
(13, 2, 8, 2, 1, '2020-2', 'admin', 'Sertifikat_HAKI14.pdf', 100, 1, 'Ya', 1, 1),
(14, 2, 4, 3, 1, '2020-2', 'admin', 'Sertifikat_HAKI15.pdf', 100, 0.25, 'Ya', 1, 0.25),
(15, 2, 9, 3, 1, '2020-2', 'admin', 'Sertifikat_HAKI16.pdf', 100, 2, 'Ya', 2, 2),
(16, 2, 10, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI17.pdf', 100, 2, 'Ya', 2, 2),
(17, 2, 11, 3, 2, '2020-2', 'admin', 'Sertifikat_HAKI18.pdf', 70, 2.75, 'Ya', 3, 1.93),
(18, 2, 12, 3, 2, '2020-1', 'admin', 'Sertifikat_HAKI19.pdf', 100, 0.5, 'Ya', 1, 0.5),
(19, 2, 13, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI20.pdf', 100, 0.5, 'Ya', 1, 0.5),
(20, 2, 14, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI21.pdf', 0, 1, 'Tidak', 0, 0),
(21, 2, 15, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI22.pdf', 0, 0.5, 'Tidak', 0, 0),
(22, 2, 16, 3, 1, '2020-2', 'admin', 'Sertifikat_HAKI23.pdf', 0, 2, 'Tidak', 0, 0),
(23, 2, 17, 3, 1, '2020-2', 'admin', 'Sertifikat_HAKI24.pdf', 0, 2, 'Tidak', 0, 0),
(24, 2, 18, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI25.pdf', 0, 0, 'Tidak', 0, 0),
(25, 2, 4, 1, 1, '2019-1', 'admin', 'Sertifikat_HAKI26.pdf', 100, 0.75, 'Ya', 1, 0.75),
(26, 2, 5, 3, 1, '2018-2', 'admin', 'Sertifikat_HAKI27.pdf', 50, 2.5, 'Ya', 2, 1.25),
(27, 2, 4, 3, 1, '2018-1', 'admin', 'Sertifikat_HAKI28.pdf', 50, 2.75, 'Ya', 2, 1.38),
(28, 2, 4, 1, 1, '2017-1', 'admin', 'Sertifikat_HAKI29.pdf', 75, 2.75, 'Ya', 2, 2.06),
(29, 2, 6, 1, 3, '2017-2', 'admin', 'Sertifikat_HAKI30.pdf', 100, 2.75, 'Ya', 2, 2.75),
(30, 3, 20, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI31.pdf', 50, 0.25, 'Ya', 1, 0.13),
(31, 3, 22, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI32.pdf', 0.4, 1.5, 'Ya', 2, 0.01),
(32, 3, 23, 3, 1, '2020-2', 'admin', 'Sertifikat_HAKI33.pdf', 100, 0.5, 'Ya', 3, 0.5),
(33, 3, 24, 3, 1, '2020-2', 'admin', 'Sertifikat_HAKI34.pdf', 0, 1, 'Tidak', 1, 0),
(34, 3, 25, 3, 1, '2020-2', 'admin', 'Sertifikat_HAKI35.pdf', 80, 0.25, 'Ya', 2, 0.2),
(35, 3, 26, 3, 1, '2020-2', 'admin', 'Sertifikat_HAKI36.pdf', 100, 0.25, 'Ya', 1, 0.25),
(36, 3, 27, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI37.pdf', 100, 0.25, 'Ya', 2, 0.25),
(37, 3, 28, 3, 1, '2020-2', 'admin', 'Sertifikat_HAKI38.pdf', 100, 0.5, 'Ya', 2, 0.5),
(38, 3, 19, 1, 1, '2020-2', 'admin', 'Sertifikat_HAKI39.pdf', 75, 1, 'Ya', 1, 0.75),
(39, 3, 21, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI40.pdf', 60, 1, 'Ya', 1, 0.6),
(40, 3, 29, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI41.pdf', 0, 1, 'Tidak', 0, 0),
(41, 3, 19, 3, 1, '2019-1', 'admin', 'Sertifikat_HAKI42.pdf', 100, 0.25, 'Ya', 1, 0.25),
(42, 3, 20, 3, 1, '2019-2', 'admin', 'Sertifikat_HAKI43.pdf', 100, 1.5, 'Ya', 1, 1.5),
(43, 3, 19, 3, 1, '2018-2', 'admin', 'Sertifikat_HAKI44.pdf', 100, 0.25, 'Ya', 1, 0.25),
(44, 3, 21, 3, 2, '2018-1', 'admin', 'Sertifikat_HAKI45.pdf', 100, 0.5, 'Ya', 1, 0.5),
(45, 4, 30, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI46.pdf', 100, 0.5, 'Ya', 1, 0.5),
(46, 4, 31, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI47.pdf', 100, 1, 'Ya', 1, 1),
(47, 4, 32, 3, 1, '2020-2', 'admin', 'Sertifikat_HAKI48.pdf', 100, 0.5, 'Ya', 1, 0.5),
(48, 4, 33, 1, 1, '2020-1', 'admin', 'Sertifikat_HAKI49.pdf', 100, 0.25, 'Ya', 2, 0.25),
(49, 4, 34, 3, 1, '2019-1', 'admin', 'Sertifikat_HAKI50.pdf', 100, 0.5, 'Ya', 3, 0.5),
(50, 4, 35, 3, 1, '2019-2', 'admin', 'Sertifikat_HAKI51.pdf', 100, 0.5, 'Ya', 2, 0.5),
(51, 4, 36, 3, 1, '2019-1', 'admin', 'Sertifikat_HAKI52.pdf', 100, 1, 'Ya', 3, 1),
(52, 4, 37, 3, 1, '2016-1', 'admin', 'Sertifikat_HAKI53.pdf', 100, 0.5, 'Ya', 2, 0.5),
(53, 4, 38, 3, 1, '2018-1', 'admin', 'Sertifikat_HAKI54.pdf', 100, 0.5, 'Ya', 2, 0.5),
(54, 4, 39, 3, 1, '2016-2', 'admin', 'Sertifikat_HAKI55.pdf', 100, 0.25, 'Ya', 1, 0.25),
(55, 5, 57, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI56.pdf', 90, 0.5, 'Ya', 2, 0.45),
(56, 5, 58, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI57.pdf', 100, 1.5, 'Ya', 2, 1.5),
(57, 5, 60, 3, 1, '2019-2', 'admin', 'Sertifikat_HAKI58.pdf', 100, 0.25, 'Ya', 1, 0.25),
(58, 5, 61, 3, 1, '2019-1', 'admin', 'Sertifikat_HAKI59.pdf', 100, 0.25, 'Ya', 1, 0.25),
(59, 5, 62, 3, 1, '2019-2', 'admin', 'Sertifikat_HAKI60.pdf', 0, 1.5, 'Tidak', 0, 0),
(60, 5, 57, 1, 1, '2018-1', 'admin', 'Sertifikat_HAKI61.pdf', 150, 0.5, 'Ya', 1, 0.75),
(61, 6, 63, 3, 2, '2020-2', 'admin', 'Sertifikat_HAKI62.pdf', 100, 1, 'Ya', 1, 1),
(62, 6, 64, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI63.pdf', 100, 1, 'Ya', 3, 1),
(63, 6, 65, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI64.pdf', 100, 1, 'Ya', 1, 1),
(64, 6, 66, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI65.pdf', 100, 1, 'Ya', 1, 1),
(65, 6, 67, 3, 1, '2019-1', 'admin', 'Sertifikat_HAKI66.pdf', 50, 0.25, 'Ya', 1, 0.13),
(66, 6, 68, 3, 1, '2019-2', 'admin', 'Sertifikat_HAKI67.pdf', 100, 0.25, 'Ya', 2, 0.25),
(67, 6, 69, 3, 1, '2019-1', 'admin', 'Sertifikat_HAKI68.pdf', 100, 1, 'Ya', 2, 1),
(68, 6, 70, 3, 1, '2018-1', 'admin', 'Sertifikat_HAKI69.pdf', 100, 1, 'Ya', 2, 1),
(69, 6, 71, 3, 1, '2018-2', 'admin', 'Sertifikat_HAKI70.pdf', 100, 1, 'Ya', 2, 1),
(70, 7, 81, 3, 3, '2020-1', 'admin', 'Sertifikat_HAKI71.pdf', 100, 0.75, 'Ya', 1, 0.75),
(71, 7, 82, 3, 2, '2020-1', 'admin', 'Sertifikat_HAKI72.pdf', 50, 1, 'Ya', 1, 0.5),
(72, 7, 83, 3, 1, '2019-1', 'admin', 'Sertifikat_HAKI73.pdf', 50, 1, 'Ya', 1, 0.5),
(73, 7, 84, 3, 1, '2019-2', 'admin', 'Sertifikat_HAKI74.pdf', 50, 2, 'Ya', 2, 1),
(74, 7, 85, 3, 1, '2019-1', 'admin', 'Sertifikat_HAKI75.pdf', 33, 1, 'Ya', 1, 0.33),
(75, 7, 86, 3, 1, '2018-1', 'admin', 'Sertifikat_HAKI76.pdf', 0, 0.75, 'Tidak', 0, 0),
(76, 7, 87, 3, 1, '2017-2', 'admin', 'Sertifikat_HAKI77.pdf', 100, 1, 'Ya', 2, 1),
(77, 7, 88, 3, 1, '2018-1', 'admin', 'Sertifikat_HAKI78.pdf', 30, 0.75, 'Ya', 1, 0.22),
(78, 7, 90, 3, 4, '2020-1', 'admin', 'Sertifikat_HAKI79.pdf', 150, 1, 'Ya', 2, 1.5),
(79, 8, 91, 2, 1, '2020-2', 'admin', 'Sertifikat_HAKI80.pdf', 100, 1, 'Ya', 1, 1),
(80, 8, 92, 3, 2, '2020-1', 'admin', 'Sertifikat_HAKI81.pdf', 0, 1, 'Tidak', 0, 0),
(81, 8, 93, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI82.pdf', 50, 1, 'Ya', 1, 0.5),
(82, 8, 94, 2, 1, '2019-2', 'admin', 'Sertifikat_HAKI83.pdf', 0, 1.5, 'Tidak', 0, 0),
(83, 8, 95, 2, 1, '2019-1', 'admin', 'Sertifikat_HAKI84.pdf', 100, 1, 'Ya', 1, 1),
(84, 8, 91, 3, 1, '2018-1', 'admin', 'Sertifikat_HAKI85.pdf', 100, 1, 'Ya', 1, 1),
(85, 8, 94, 3, 1, '2018-2', 'admin', 'Sertifikat_HAKI86.pdf', 100, 1.5, 'Ya', 2, 1.5),
(86, 9, 97, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI87.pdf', 100, 1, 'Ya', 2, 1),
(87, 9, 98, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI88.pdf', 0, 1, 'Tidak', 0, 0),
(88, 9, 99, 3, 1, '2015-1', 'admin', 'Sertifikat_HAKI89.pdf', 0, 0.5, 'Tidak', 0, 0),
(89, 9, 100, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI90.pdf', 0, 1, 'Tidak', 0, 0),
(90, 9, 101, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI91.pdf', 0, 0.25, 'Tidak', 0, 0),
(91, 9, 102, 3, 1, '2019-2', 'admin', 'Sertifikat_HAKI92.pdf', 100, 1, 'Ya', 2, 1),
(92, 9, 103, 3, 1, '2019-2', 'admin', 'Sertifikat_HAKI93.pdf', 100, 1, 'Ya', 2, 1),
(93, 9, 104, 3, 1, '2019-2', 'admin', 'Sertifikat_HAKI94.pdf', 100, 0.25, 'Ya', 2, 0.25),
(94, 9, 105, 3, 1, '2019-1', 'admin', 'Sertifikat_HAKI95.pdf', 0, 0.5, 'Tidak', 0, 0),
(95, 9, 106, 3, 1, '2018-1', 'admin', 'Sertifikat_HAKI96.pdf', 80, 1, 'Ya', 2, 0.8),
(96, 9, 107, 3, 1, '2018-1', 'admin', 'Sertifikat_HAKI97.pdf', 100, 0.75, 'Ya', 2, 0.75),
(97, 9, 108, 3, 1, '2018-2', 'admin', 'Sertifikat_HAKI98.pdf', 100, 1, 'Ya', 2, 1),
(98, 10, 115, 3, 1, '2020-1', 'admin', 'Sertifikat_HAKI99.pdf', 50, 0.25, 'Ya', 1, 0.13),
(99, 10, 116, 3, 1, '2020-2', 'admin', '011-Memo_Eksternal_Satgas_COVID-19_UPJ_060121_Mahasiswa3.pdf', 10, 0.25, 'Ya', 2, 0.03),
(100, 10, 117, 3, 4, '2020-1', 'admin', '011-Memo_Eksternal_Satgas_COVID-19_UPJ_060121_Mahasiswa4.pdf', 0, 2.5, 'Tidak', 0, 0),
(101, 10, 118, 3, 4, '2020-1', 'admin', '011-Memo_Eksternal_Satgas_COVID-19_UPJ_060121_Mahasiswa5.pdf', 70, 0.25, 'Ya', 2, 0.18),
(102, 10, 119, 3, 4, '2020-1', 'admin', '011-Memo_Eksternal_Satgas_COVID-19_UPJ_060121_Mahasiswa6.pdf', 100, 0.25, 'Ya', 2, 0.25),
(103, 10, 120, 3, 1, '2019-1', 'admin', '011-Memo_Eksternal_Satgas_COVID-19_UPJ_060121_Mahasiswa7.pdf', 80, 0.25, 'Ya', 2, 0.2),
(104, 10, 121, 3, 1, '2019-1', 'admin', '011-Memo_Eksternal_Satgas_COVID-19_UPJ_060121_Mahasiswa8.pdf', 100, 0.25, 'Ya', 2, 0.25),
(105, 10, 122, 3, 1, '2019-2', 'admin', '011-Memo_Eksternal_Satgas_COVID-19_UPJ_060121_Mahasiswa9.pdf', 0, 0.25, 'Tidak', 0, 0),
(106, 10, 123, 3, 2, '2019-1', 'admin', '011-Memo_Eksternal_Satgas_COVID-19_UPJ_060121_Mahasiswa10.pdf', 60, 0.25, 'Ya', 1, 0.15),
(107, 10, 116, 2, 1, '2018-2', 'admin', 'Sertifikat_HAKI.pdf', 100, 0.5, 'Ya', 2, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `butir`
--

CREATE TABLE `butir` (
  `id_butir` int(6) NOT NULL,
  `id_standar` int(6) NOT NULL,
  `nama_butir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `butir`
--

INSERT INTO `butir` (`id_butir`, `id_standar`, `nama_butir`) VALUES
(1, 1, 'A1. Visi Turunan\r\n'),
(2, 1, 'A2. Dokumentasi Penyusunan VMTS\r\n'),
(3, 1, 'A3. Sosialisasi VM dan Nilai Jaya\r\n'),
(4, 2, 'B1. SK, SO, Pekabat dan SK pengangkatan\r\n'),
(5, 2, 'B2. Kegiatan nasional -  internasional\r\n'),
(6, 2, 'B3. Kerjasama UPJ Bidang Tridharma\r\n'),
(7, 2, 'B4. Kerjasama UPJ Tingkat Internasional\r\n'),
(8, 2, 'B5. Kerjasama UPJ Tingkat Nasional\r\n'),
(9, 2, 'B6. Monev SN Dikti dan 2 SPT UPJ\r\n'),
(10, 2, 'B7. PPEPP 3 SN DIKTI dan 2 SPT UPJ\r\n'),
(11, 2, 'B8. EDOM\r\n'),
(12, 2, 'B9. Pelaporan proses pembelajaran\r\n'),
(13, 2, 'B10.Laporan Akademik Program Studi dan unit setiap TA. \r\n'),
(14, 2, 'B11.Laporan evaluasi tahunan\r\n'),
(15, 2, 'B12.Peringkat akreditasi tertinggi dari BAN-PT/LAM\r\n'),
(16, 2, 'B13.Peningkatan Akreditasi Perguruan Tinggi (APT 3.0)\r\n'),
(17, 2, 'B14.Peningkatan Akreditasi Program Studi (APS 4.0)\r\n'),
(18, 2, 'B15.Program pasca sarjana (S2)\r\n'),
(19, 3, 'C1. Seleksi Maba\r\n'),
(20, 3, 'C2. Peningkatan Maba\r\n'),
(21, 3, 'C3. Kegiatan Prodi Bersama MPH\r\n'),
(22, 3, 'C4. Intake\r\n'),
(23, 3, 'C5. Mahasiswa Aktif\r\n'),
(24, 3, 'C6. Keterlibatan prodi dalam menseleksi mahasiswa\r\n'),
(25, 3, 'C7. Dosen pembimbing\r\n'),
(26, 3, 'C8. Formulir PA\r\n'),
(27, 3, 'C9. Sertifikat Kompetensi\r\n'),
(28, 3, 'C10. JCAL\r\n'),
(29, 3, 'C11.Produk wirausaha berbasis inovasi \r\n'),
(30, 4, 'D1. Jumlah dosen tetap setiap Program Studi minimal 6 (enam) orang\r\n'),
(31, 4, 'D2. Dosen S3\r\n'),
(32, 4, 'D3. 20% dosen memiliki Jabatan Akademik Dosen (JAD) minimal 2 (dua) tahun. \r\n'),
(33, 4, 'D4. Jumlah dosen tetap memiliki rasio 1:25 (eksakta) dan 1:35 (sosial)\r\n'),
(34, 4, 'D5. SK pembimbing Skripsi TA\r\n'),
(35, 4, 'D6. SK Mengajar\r\n'),
(36, 4, 'D7. Beban Kinerja Dosen (BKD) minimal 5 (lima) sks\r\n'),
(37, 4, 'D8. BKD Dosen\r\n'),
(38, 4, 'D9. Dosen LB\r\n'),
(39, 4, 'D10. Jumlah dosen tetap minimal 80%\r\n'),
(40, 4, 'D11. Dosen sebagai pembicara dalam seminar\r\n'),
(41, 4, 'D12. Publikasi Nasional\r\n'),
(42, 4, 'D13. Publikasi Media Masa Nasional\r\n'),
(43, 4, 'D14. Publikasi Internasional\r\n'),
(44, 4, 'D15. Publikasi Media Internasional\r\n'),
(45, 4, 'D16. Jurnal yang disitasi\r\n'),
(46, 4, 'D17. Hasil penelitian yang dipatenkan minimal 1 paten dalam 5 tahun.\r\n'),
(47, 4, 'D18. HKI\r\n'),
(48, 4, 'D19. SK AA\r\n'),
(49, 4, 'D20. SK Lektor\r\n'),
(50, 4, 'D21. Sertifikat Pelatihan\r\n'),
(51, 4, 'D22. 10% peningkatan jumlah dosen GB atau LK\r\n'),
(52, 4, 'D23. Sertifikat Serdos\r\n'),
(53, 4, 'D24. Kemampuan dosen dalam berkomunikasi bahasa Inggris \r\n'),
(54, 4, 'D25. Kemimpinan Publik\r\n'),
(55, 4, 'D26. Keikutan dosen dalam lomba \r\n'),
(56, 4, 'D27. Turnover dosen Prodi rendah\r\n'),
(57, 5, 'E1.Biaya operasional pendidikan\r\n'),
(58, 5, 'E2.Dana penelitian dosen\r\n'),
(59, 5, 'E3.Dana pengabdian kepada masyarakat dosen\r\n'),
(60, 5, 'E4. RKAT INF\r\n'),
(61, 5, 'E5.RKAT diserahkan tepat waktu\r\n'),
(62, 5, 'E6. income generating unit\r\n'),
(63, 6, 'F1. Terlaksananya peninjauan RPS \r\n'),
(64, 6, 'F2. Evaluasi Kurikulum\r\n'),
(65, 6, 'F3. Laporan Kompetisi Lulusan\r\n'),
(66, 6, 'F4. Tersedianya RPS dan RTM untuk setiap mata kuliah\r\n'),
(67, 6, 'F5. Perbaikan RPS\r\n'),
(68, 6, 'F6. Metode pembelajaran dalam RPS\r\n'),
(69, 6, 'F7. Unggah RPS, RTM dan slide\r\n'),
(70, 6, 'F8. Penyerahan jadwal kuliah\r\n'),
(71, 6, 'F9. Penyerahan penilaian hasil belajar (UTS dan UAS)\r\n'),
(72, 6, 'F10.Proses tatap muka mahasiswa dengan dosen\r\n'),
(73, 6, 'F11.Dokumentasi pembelajaran yang dilakukan secara on-line dan off-line\r\n'),
(74, 6, 'F12. Bimbingan Skripsi\r\n'),
(75, 6, 'F13. Penilaian akademik\r\n'),
(76, 6, 'F14.Penilaian skripsi / TA\r\n'),
(77, 6, 'F15.Proses pembelajaran\r\n'),
(78, 6, 'F16. Kegiatan Penunjangan Suasana Akademik\r\n'),
(79, 6, 'F17. Survey Kepuasan Mahasiswa\r\n'),
(80, 6, 'F18. Analisis dan tindak lanjut survey mahasiswa\r\n'),
(81, 7, 'G1.Kajian urban penelitian UPJ\r\n'),
(82, 7, 'G2. Roadmap penelitian\r\n'),
(83, 7, 'G3. Keterlibatan mahasiswa dalam penelitian\r\n'),
(84, 7, 'G4. Penelitian dengan sumber pembiayaan LN\r\n'),
(85, 7, 'G5. Penelitian dengan sumber pembiayaan DN\r\n'),
(86, 7, 'G6. Penelitian dan pengabdian\r\n'),
(87, 7, 'G7. Karya inovasi penelitian\r\n'),
(88, 7, 'G8. Skor SINTA\r\n'),
(89, 7, 'G9. Joint Research\r\n'),
(90, 7, 'G10. Joint Publication\r\n'),
(91, 8, 'H1. Rencana induk pengmas\r\n'),
(92, 8, 'H2. Roadmap pengmas\r\n'),
(93, 8, 'H3. Keterlibatan mahasiswa dalam pengmas\r\n'),
(94, 8, 'H4. Pengabdian sumber pembiayaan luar negeri\r\n'),
(95, 8, 'H5. Kegiatan pengmas dengan sumber pembiayaan Dn\r\n'),
(96, 8, 'H6. Pengmas nasional\r\n'),
(97, 9, 'I-1. IPK Lulusan\r\n'),
(98, 9, 'I-2. Prestasi mahasiswa bidang akademik internasional\r\n'),
(99, 9, 'I-3. Prestasi mahasiswa bidang akademik nasional\r\n'),
(100, 9, 'I-4. Prestasi mahasiswa bidang non akademik international\r\n'),
(101, 9, 'I-5. Prestasi mahasiswa bidang non akademik nasional\r\n'),
(102, 9, 'I-6.Lama masa studi\r\n'),
(103, 9, 'I-7.Jumlah lulusan tepat waktu \r\n'),
(104, 9, 'I-8.Surat lulus ijazah, gelar dan surat keterangan pendamping\r\n'),
(105, 9, 'I-9.Survei lulusan\r\n'),
(106, 9, 'I-10.Masa tunggu lulusan \r\n'),
(107, 9, 'I-11.Lulusan sesuai dengan bidang ilmu\r\n'),
(108, 9, 'I-12.Lulusan bekerja di multinasional/internasional\r\n'),
(109, 9, 'I-13.Lulusan yang bekerja di perusahaan nasional/wirausaha\r\n'),
(110, 9, 'I-14.Hasil penilaian pengguna lulusan\r\n'),
(111, 9, 'I-15. Publikasi mahasiswa tingkat international'),
(112, 9, 'I-16. Publikasi mahasiswa tingkat nasional'),
(113, 9, 'I-17. Hasil penelitian - PKM mahasiswa yang mendapat pengakuan HKI\r\n\r\n'),
(114, 9, 'I-18. Proposal PKM'),
(115, 10, 'J1. Lulusan gaji>1.2 kali lipat'),
(116, 10, 'J2. Lulusan melanjutkan studi'),
(117, 10, 'J3. Mahasiswa merdeka belajar'),
(118, 10, 'J4. Dosen berkegiatan tridarma dakan negeri'),
(119, 10, 'J5. Dosen QS100'),
(120, 10, 'J6. Perjanjian PKWT, PKWTT, PKPW'),
(121, 10, 'J7. Dosen membimbing mahasiswa'),
(122, 10, 'J8. Sertifikasi dosen S3'),
(123, 10, 'J9. Mata kuliah program sarjana');

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
(3, 'dosen'),
(8, 'kaprodi'),
(4, 'mahasiswa'),
(7, 'verifikator');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_dokumen`
--

CREATE TABLE `jenis_dokumen` (
  `id_jenis` int(6) NOT NULL,
  `jenis_dokumen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_dokumen`
--

INSERT INTO `jenis_dokumen` (`id_jenis`, `jenis_dokumen`) VALUES
(1, 'Bidang pendidikan'),
(2, 'Bidang penelitian'),
(3, 'Bidang pengmas'),
(4, 'Bidang penunjang'),
(5, 'Bidang tata kelola'),
(6, 'Bidang kerjasama'),
(7, 'Bidang keuangan'),
(8, 'Bidang sarana prasar');

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
-- Table structure for table `lingkup_dokumen`
--

CREATE TABLE `lingkup_dokumen` (
  `id_lingkup` int(6) NOT NULL,
  `nama_lingkup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lingkup_dokumen`
--

INSERT INTO `lingkup_dokumen` (`id_lingkup`, `nama_lingkup`) VALUES
(1, 'PT Lokal'),
(2, 'PT Nasional'),
(3, 'PT Internasional'),
(4, 'Industri Lokal'),
(5, 'Industri Nasional'),
(6, 'Industri Internasion'),
(7, 'Pemerintah Lokal'),
(8, 'Pemerintah Nasional'),
(9, 'Pemerintah Internasi'),
(10, 'Komunitas Lokal'),
(11, 'Komunitas Nasional'),
(12, 'Komunitas Internasio'),
(13, 'Media Lokal'),
(14, 'Media Nasional'),
(15, 'Media Internasional');

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
-- Table structure for table `standar`
--

CREATE TABLE `standar` (
  `id_standar` int(6) NOT NULL,
  `nama_standar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standar`
--

INSERT INTO `standar` (`id_standar`, `nama_standar`) VALUES
(1, 'Visi, Misi dan Tujuan'),
(2, 'Tata Pamong, Tata Kelola dan Kerjasama\r\n'),
(3, 'Mahasiswa'),
(4, 'Sumber Daya Manusia'),
(5, 'Keuangan, Sarana dan Prasarana'),
(6, 'Pendidikan'),
(7, 'Penelitian'),
(8, 'Pengabdian Masyarakat'),
(9, 'Luaran, Capaian Ttridharma'),
(10, 'MBKM');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(10) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`) VALUES
(1, '2015-1'),
(2, '2015-2'),
(3, '2016-1'),
(4, '2016-2'),
(5, '2017-1'),
(6, '2017-2'),
(7, '2018-1'),
(8, '2018-2'),
(9, '2019-1'),
(10, '2019-2'),
(11, '2020-1'),
(12, '2020-2');

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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `file` varchar(500) DEFAULT NULL,
  `valid` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dokumen`
--

INSERT INTO `t_dokumen` (`id_dok`, `no_dok`, `nama_dokumen`, `jenis_dokumen`, `lingkup`, `standar`, `author`, `pic`, `tahun_valid`, `tahun_terbit`, `tt_semester`, `created_at`, `file`, `valid`) VALUES
(1, '', 'aaaaa', 'pd029', 'kd017', '8', NULL, 'admin', NULL, '2016', 'Gasal', '2021-02-24 14:49:54', '', 'YA');

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
(7, '0328068404', 'SAFITRI JAYA', 'Informatika', 'safitri.jaya@upj.ac.id', '$2y$05$wjWmkrkLrumweNAkKDAS4uPlUnRQDK7uelpWSneXf.YuTCEMxvS2q', 'kaprodi'),
(9, '9747455432', 'Pak prio', 'Informatika', 'prio@upj.ac.id', '$2y$05$6HdT3nqbthOl0olDBym1EuQJYZgvdovgivafXLrsAO0Dd/JRLx22K', 'dosen'),
(10, '45721412', 'DZUL', 'Teknik Sipil', 'dzul@upj.ac.id', '$2y$05$.FZVmiqTzWoKJE9KxCKhj.kju0pHTGpKJccX/LD.eKFzepmZKYW5m', 'Mahasiswa'),
(12, '6346346435', 'jul', '', 'dzulfiqarfoto@gmail.com', '$2y$05$F7AHtuFqFqm8HjYEIRnQeuhoAJvKCGdd89cJ040376MQnQ8TG2jJu', 'kaprodi'),
(13, '2017071016', 'DZULFIQAR', '', 'dzulfiqarfoto@gmail.com', '$2y$05$trFIcOQHHcBkRY2XYcWmCOuZimPpCBrYlsKlIXmSVneRoFg1I8Eh6', 'mahasiswa'),
(14, '2017071020', 'AZIZ', '', 'aziz@gmaio.com', '$2y$05$pTLZrMxa3cmRHcJ6JGc2s.U2jwNlyC9zX/QM9pPqJlQ86wCgnqcwC', 'mahasiswa'),
(16, '21212121', 'GKM', '', 'verifikator@gmail.com', '$2y$05$TxsK8GHyBoUJVa/.w6HmDu8Cj0R.F78v.wV9HabRuQxKvQqSQt8vW', 'verifikator');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `id_verifikasi` int(6) NOT NULL,
  `id_akreditasi` int(6) NOT NULL,
  `capaian` double NOT NULL,
  `bobot` double NOT NULL,
  `valid` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verifikasi`
--

INSERT INTO `verifikasi` (`id_verifikasi`, `id_akreditasi`, `capaian`, `bobot`, `valid`) VALUES
(1, 1, 100, 2, 'YA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akreditasi`
--
ALTER TABLE `akreditasi`
  ADD PRIMARY KEY (`id_akreditasi`);

--
-- Indexes for table `butir`
--
ALTER TABLE `butir`
  ADD PRIMARY KEY (`id_butir`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`akses_id`),
  ADD UNIQUE KEY `author` (`author`);

--
-- Indexes for table `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  ADD PRIMARY KEY (`id_jenis`);

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
-- Indexes for table `lingkup_dokumen`
--
ALTER TABLE `lingkup_dokumen`
  ADD PRIMARY KEY (`id_lingkup`);

--
-- Indexes for table `perluasan_dokumen`
--
ALTER TABLE `perluasan_dokumen`
  ADD PRIMARY KEY (`id_permen`);

--
-- Indexes for table `standar`
--
ALTER TABLE `standar`
  ADD PRIMARY KEY (`id_standar`);

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
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akreditasi`
--
ALTER TABLE `akreditasi`
  MODIFY `id_akreditasi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `butir`
--
ALTER TABLE `butir`
  MODIFY `id_butir` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `akses_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  MODIFY `id_jenis` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `lingkup_dokumen`
--
ALTER TABLE `lingkup_dokumen`
  MODIFY `id_lingkup` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `standar`
--
ALTER TABLE `standar`
  MODIFY `id_standar` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tahun_valid`
--
ALTER TABLE `tahun_valid`
  MODIFY `id_thn_valid` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_dokumen`
--
ALTER TABLE `t_dokumen`
  MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `verifikasi`
--
ALTER TABLE `verifikasi`
  MODIFY `id_verifikasi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

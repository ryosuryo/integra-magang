-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 05:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `integra_magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(50) NOT NULL,
  `id_magang` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_absen` time NOT NULL,
  `absen` enum('Masuk','Tidak Masuk','','') NOT NULL,
  `alasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_magang`, `tanggal`, `jam_absen`, `absen`, `alasan`) VALUES
(22, 26, '2019-08-20', '00:00:00', 'Tidak Masuk', 'sakit perut'),
(23, 26, '2019-08-21', '00:00:00', 'Masuk', ''),
(24, 26, '2019-08-22', '00:00:00', 'Masuk', ''),
(25, 26, '2019-08-23', '00:00:00', 'Masuk', ''),
(26, 26, '2019-08-27', '00:00:00', 'Masuk', ''),
(27, 26, '2019-08-27', '00:00:00', 'Masuk', ''),
(28, 26, '2019-08-27', '00:00:00', 'Masuk', ''),
(29, 26, '2019-08-27', '00:00:00', 'Tidak Masuk', 'Sakit kepala'),
(40, 26, '2019-08-28', '00:00:00', 'Masuk', ''),
(52, 26, '2019-08-29', '00:00:00', 'Masuk', ''),
(53, 26, '2019-09-02', '00:00:00', 'Masuk', ''),
(64, 26, '2019-09-03', '02:09:22', 'Masuk', ''),
(65, 26, '2019-09-04', '09:49:24', 'Masuk', ''),
(66, 28, '2019-09-04', '02:45:30', 'Masuk', ''),
(67, 28, '2019-09-05', '09:36:20', 'Masuk', ''),
(68, 33, '2019-09-26', '09:27:23', 'Masuk', ''),
(69, 33, '2019-09-30', '08:45:17', 'Masuk', ''),
(71, 26, '2019-09-30', '00:00:00', 'Masuk', ''),
(72, 33, '2019-10-01', '08:17:00', 'Masuk', ''),
(73, 33, '2019-10-02', '09:10:42', 'Masuk', ''),
(74, 33, '2019-10-07', '08:54:48', 'Masuk', ''),
(75, 34, '2019-10-07', '10:26:59', 'Masuk', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'admin', 'fddf42d74baff104e3969569d27e33df0f4b3f98', 'Muhammad Fahmi');

-- --------------------------------------------------------

--
-- Table structure for table `aktifitas`
--

CREATE TABLE `aktifitas` (
  `id_aktifitas` int(11) NOT NULL,
  `id_magang` int(50) NOT NULL,
  `tgl_aktifitas` date NOT NULL,
  `isi_aktifitas` text NOT NULL,
  `capture_aktifitas` varchar(255) NOT NULL,
  `status_aktifitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktifitas`
--

INSERT INTO `aktifitas` (`id_aktifitas`, `id_magang`, `tgl_aktifitas`, `isi_aktifitas`, `capture_aktifitas`, `status_aktifitas`) VALUES
(16, 26, '2019-08-15', 'membuat absensi', 'modem.jpeg', 'Diterima'),
(17, 26, '2019-08-14', 'membuat validasi', 'printer.jpg', 'Diterima'),
(18, 26, '2019-09-03', 'hahsasuahsh', 'cap.png', 'pending'),
(19, 28, '2019-09-05', 'membuat forgot password', 'avatar.png', 'Diterima'),
(20, 28, '2019-09-04', 'memperbaiki error', 'call-answer.png', 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `catatan_penolakan`
--

CREATE TABLE `catatan_penolakan` (
  `id_catatan` int(50) NOT NULL,
  `id_magang` int(50) NOT NULL,
  `status_magang` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan_penolakan`
--

INSERT INTO `catatan_penolakan` (`id_catatan`, `id_magang`, `status_magang`, `catatan`) VALUES
(13, 26, 'Diterima', 'Jaga tata tertib dengan baik, ikuti nasehat pembimbing'),
(15, 33, 'Diterima', ''),
(16, 34, 'Diterima', '');

-- --------------------------------------------------------

--
-- Table structure for table `datacv`
--

CREATE TABLE `datacv` (
  `id_dataCV` int(11) NOT NULL,
  `id_magang` int(11) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datacv`
--

INSERT INTO `datacv` (`id_dataCV`, `id_magang`, `data`) VALUES
(1, 28, '<p>Nama Saya Fani</p>\r\n');

-- --------------------------------------------------------

--
-- Stand-in structure for view `jml_pemagang`
-- (See below for the actual view)
--
CREATE TABLE `jml_pemagang` (
`tahun` int(4)
,`jumlah_pemagang` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `magang`
--

CREATE TABLE `magang` (
  `id_magang` int(11) NOT NULL,
  `nim_magang` varchar(50) NOT NULL,
  `nama_magang` varchar(200) NOT NULL,
  `ttl_magang` varchar(255) NOT NULL,
  `email_magang` varchar(90) NOT NULL,
  `password_magang` varchar(255) NOT NULL,
  `kampus_magang` varchar(100) NOT NULL,
  `jurusan_magang` varchar(100) NOT NULL,
  `alamat_magang` varchar(200) NOT NULL,
  `nohp_magang` varchar(20) NOT NULL,
  `status_magang` varchar(100) NOT NULL,
  `file_magang` varchar(225) NOT NULL,
  `foto_magang` varchar(50) NOT NULL,
  `jk_magang` varchar(20) NOT NULL,
  `is_actived` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magang`
--

INSERT INTO `magang` (`id_magang`, `nim_magang`, `nama_magang`, `ttl_magang`, `email_magang`, `password_magang`, `kampus_magang`, `jurusan_magang`, `alamat_magang`, `nohp_magang`, `status_magang`, `file_magang`, `foto_magang`, `jk_magang`, `is_actived`, `date_created`) VALUES
(26, '028089237429811', 'Fani Rahmatulloh', 'Jombang, 28 September 2001', 'fanirahmatulloh842@gmail.com', '$2y$10$i6M2gonFPQcOGxoCwvkvhObvuSeJr108uAv1d/VTpxqymvW71Ot/.', 'Universitas Gajah Mada', 'Teknik Kendaraan Ringan', 'JL. Danau Buyan G7 D7 Sawojajar Malang', '081389031167', 'Diterima', 'doc_3.pdf', 'facebook1.png', 'Laki-Laki', 1, 1565842559),
(27, '028089237429811', 'Riski', '', '', '', '', '', '', '', '', '', '', '', 1, 0),
(28, '00122137823428', 'Mohammad Fani', 'Jombang ,29 September 2001', 'mohammad_fani_26rpl@student.smktelkom-mlg.sch.id', '$2y$10$v6hmuIHT6Qwm/iHVUUhyFuxW92m1ZNao/leVLgLvIn3qHiPmjSOzi', 'SMK Telkom Malang', 'Rekayasa Perangkat Lunak', 'JL. Danau Buyan G7 D7, Sawojajar, Malang', '081389031168977', 'Diterima', 'Mohammad_Fani_Rahmatulloh.pdf', 'Mohammad_Fani_Rahmatulloh.jpg', 'Laki-Laki', 1, 1567581490),
(33, 'E31171358', 'Rezha Pratama H', '', 'rezhasinatra@gmail.com', '$2y$10$zPqq4Dk14EDHo/imdDa/HujBnT/qC7D/D7CF/3SFrq7/1Vb03Ov8e', 'Politeknik Negeri Jember', 'Manajemen Informatika / Teknologi Informasi', 'Perumahan Tegal Besar Permai 2 P.18, kaliwates, Jember', '08980394734', 'Diterima', '', '', 'Laki-Laki', 1, 1569463272),
(34, 'E31171296', 'Aprilia Cindy', 'Lumajang, 7 April 1999', 'ravikaput@gmail.com', '$2y$10$9KyqcGVJWa9nWsImLNBBYedsAQQUKWoKp52jWgnjTSkkY0s3vYhAe', 'Politeknik Negeri Jember', 'Manajemen Informatika', 'Lumajang', '081238666090', 'Diterima', '', '1aff95a67c60f395d7ec16c641ef6a8b.jpg', 'Perempuan', 1, 1570417942);

-- --------------------------------------------------------

--
-- Stand-in structure for view `periode`
-- (See below for the actual view)
--
CREATE TABLE `periode` (
`id_magang` int(50)
,`tahun` int(4)
);

-- --------------------------------------------------------

--
-- Table structure for table `periode_pemagang`
--

CREATE TABLE `periode_pemagang` (
  `id_periode_pemagang` int(11) NOT NULL,
  `id_magang` int(50) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode_pemagang`
--

INSERT INTO `periode_pemagang` (`id_periode_pemagang`, `id_magang`, `tgl_awal`, `tgl_akhir`) VALUES
(48, 26, '2019-04-01', '2019-09-23'),
(49, 27, '2019-09-01', '2019-12-30'),
(51, 28, '2019-07-01', '2019-09-27'),
(54, 33, '2019-09-16', '2019-12-13'),
(55, 34, '2019-09-16', '2019-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(8, 'nfdhanyml@gmail.com', 'VTLMSwkWiRhP+P3NO08NrPuB2nr0Sth6/RvJzKsBJLA=', '1569419228'),
(12, 'rezhasinatra@gmail.com', 'DxXalqkl2LbwFr/90K5tz1I2Pqn+YjU+owDsnneN/V0=', '1569463641');

-- --------------------------------------------------------

--
-- Structure for view `jml_pemagang`
--
DROP TABLE IF EXISTS `jml_pemagang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jml_pemagang`  AS  select year(`periode_pemagang`.`tgl_awal`) AS `tahun`,count(year(`periode_pemagang`.`tgl_awal`)) AS `jumlah_pemagang` from `periode_pemagang` group by year(`periode_pemagang`.`tgl_awal`) ;

-- --------------------------------------------------------

--
-- Structure for view `periode`
--
DROP TABLE IF EXISTS `periode`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `periode`  AS  select `periode_pemagang`.`id_magang` AS `id_magang`,year(`periode_pemagang`.`tgl_awal`) AS `tahun` from `periode_pemagang` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_magang` (`id_magang`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aktifitas`
--
ALTER TABLE `aktifitas`
  ADD PRIMARY KEY (`id_aktifitas`),
  ADD KEY `id_magang` (`id_magang`);

--
-- Indexes for table `catatan_penolakan`
--
ALTER TABLE `catatan_penolakan`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_magang` (`id_magang`);

--
-- Indexes for table `datacv`
--
ALTER TABLE `datacv`
  ADD PRIMARY KEY (`id_dataCV`),
  ADD KEY `id_magang` (`id_magang`);

--
-- Indexes for table `magang`
--
ALTER TABLE `magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indexes for table `periode_pemagang`
--
ALTER TABLE `periode_pemagang`
  ADD PRIMARY KEY (`id_periode_pemagang`),
  ADD KEY `id_magang` (`id_magang`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aktifitas`
--
ALTER TABLE `aktifitas`
  MODIFY `id_aktifitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `catatan_penolakan`
--
ALTER TABLE `catatan_penolakan`
  MODIFY `id_catatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `datacv`
--
ALTER TABLE `datacv`
  MODIFY `id_dataCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `magang`
--
ALTER TABLE `magang`
  MODIFY `id_magang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `periode_pemagang`
--
ALTER TABLE `periode_pemagang`
  MODIFY `id_periode_pemagang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_magang`) REFERENCES `magang` (`id_magang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `aktifitas`
--
ALTER TABLE `aktifitas`
  ADD CONSTRAINT `aktifitas_ibfk_2` FOREIGN KEY (`id_magang`) REFERENCES `magang` (`id_magang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `catatan_penolakan`
--
ALTER TABLE `catatan_penolakan`
  ADD CONSTRAINT `catatan_penolakan_ibfk_1` FOREIGN KEY (`id_magang`) REFERENCES `magang` (`id_magang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `periode_pemagang`
--
ALTER TABLE `periode_pemagang`
  ADD CONSTRAINT `periode_pemagang_ibfk_1` FOREIGN KEY (`id_magang`) REFERENCES `magang` (`id_magang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2024 at 05:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masyarakat`
--

CREATE TABLE `tbl_masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_masyarakat`
--

INSERT INTO `tbl_masyarakat` (`nik`, `nama`, `username`, `password`, `tlp`) VALUES
('1234567890123456', 'Andi Setiawan', 'andi123', 'password1', '081234567890'),
('2345678901234567', 'Budi Santoso', 'budi_s', 'password2', '082345678901'),
('3456789012345678', 'Citra Dewi', 'citra_d', 'password3', '083456789012'),
('4567890123456789', 'Deni Firmansyah', 'deni_f', 'password4', '084567890123'),
('5678901234567890', 'Erni Puspita', 'erni_p', 'password5', '085678901234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengaduan`
--

CREATE TABLE `tbl_pengaduan` (
  `id_pengaduan` bigint(20) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pengaduan`
--

INSERT INTO `tbl_pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(1, '2024-10-21', '1234567890123456', 'Saya melaporkan kalau presiden nya ganti baru', 'assets/images/pengaduan/foto1.jpg', 'proses'),
(2, '2024-10-21', '2345678901234567', 'Saya melaporkan bahwa radit fuck boy', 'assets/images/pengaduan/foto2.jpg', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` bigint(20) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tlp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `tlp`, `level`) VALUES
(1, '-', '-', '-', '-', 'petugas'),
(2, 'Rina Kurnia', 'rina_admin', 'adminpass1', '081234567890', 'admin'),
(3, 'Satria Nugroho', 'satria_petugas', 'petugaspass1', '082345678901', 'petugas'),
(4, 'Putri Lestari', 'putri_admin', 'adminpass2', '083456789012', 'admin'),
(5, 'Yusuf Hidayat', 'yusuf_petugas', 'petugaspass2', '084567890123', 'petugas'),
(6, 'Nina Pratiwi', 'nina_admin', 'adminpass3', '085678901234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tanggapan`
--

CREATE TABLE `tbl_tanggapan` (
  `id_tanggapan` bigint(20) NOT NULL,
  `id_pengaduan` bigint(20) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_tanggapan`
--

INSERT INTO `tbl_tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(1, 1, '2024-10-21', 'Kata katane kang....\nIbarat Mercon seng mbok sumet\nTeros mbok tinggal mlayu\n\nYo kui aku..\n\nSeng rela ajor\nDemi kebahagiaanmu\n\nJan kurang ajarr..', 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_pengaduan`
-- (See below for the actual view)
--
CREATE TABLE `vw_pengaduan` (
`id_pengaduan` bigint(20)
,`tgl_pengaduan` date
,`nik_masyarakat` char(16)
,`nama_masyarakat` varchar(255)
,`username_masyarakat` varchar(255)
,`tlp_masyarakat` varchar(13)
,`isi_laporan` text
,`foto` varchar(255)
,`status` enum('0','proses','selesai')
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_tanggapan`
-- (See below for the actual view)
--
CREATE TABLE `vw_tanggapan` (
`id_tanggapan` bigint(20)
,`id_pengaduan` bigint(20)
,`tgl_pengaduan` date
,`nik_masyarakat` char(16)
,`nama_masyarakat` varchar(255)
,`username_masyarakat` varchar(255)
,`tlp_masyarakat` varchar(13)
,`isi_laporan_pengaduan` text
,`foto_pengaduan` varchar(255)
,`status_pengaduan` enum('0','proses','selesai')
,`tgl_tanggapan` date
,`tanggapan` text
,`id_petugas` bigint(20)
,`nama_petugas` varchar(255)
,`username_petugas` varchar(255)
,`tlp_petugas` varchar(13)
,`level_petugas` enum('admin','petugas')
);

-- --------------------------------------------------------

--
-- Structure for view `vw_pengaduan`
--
DROP TABLE IF EXISTS `vw_pengaduan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_pengaduan`  AS SELECT `tbl_pengaduan`.`id_pengaduan` AS `id_pengaduan`, `tbl_pengaduan`.`tgl_pengaduan` AS `tgl_pengaduan`, `tbl_pengaduan`.`nik` AS `nik_masyarakat`, `tbl_masyarakat`.`nama` AS `nama_masyarakat`, `tbl_masyarakat`.`username` AS `username_masyarakat`, `tbl_masyarakat`.`tlp` AS `tlp_masyarakat`, `tbl_pengaduan`.`isi_laporan` AS `isi_laporan`, `tbl_pengaduan`.`foto` AS `foto`, `tbl_pengaduan`.`status` AS `status` FROM (`tbl_pengaduan` join `tbl_masyarakat` on(`tbl_pengaduan`.`nik` = `tbl_masyarakat`.`nik`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_tanggapan`
--
DROP TABLE IF EXISTS `vw_tanggapan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_tanggapan`  AS SELECT `tbl_tanggapan`.`id_tanggapan` AS `id_tanggapan`, `tbl_tanggapan`.`id_pengaduan` AS `id_pengaduan`, `vw_pengaduan`.`tgl_pengaduan` AS `tgl_pengaduan`, `vw_pengaduan`.`nik_masyarakat` AS `nik_masyarakat`, `vw_pengaduan`.`nama_masyarakat` AS `nama_masyarakat`, `vw_pengaduan`.`username_masyarakat` AS `username_masyarakat`, `vw_pengaduan`.`tlp_masyarakat` AS `tlp_masyarakat`, `vw_pengaduan`.`isi_laporan` AS `isi_laporan_pengaduan`, `vw_pengaduan`.`foto` AS `foto_pengaduan`, `vw_pengaduan`.`status` AS `status_pengaduan`, `tbl_tanggapan`.`tgl_tanggapan` AS `tgl_tanggapan`, `tbl_tanggapan`.`tanggapan` AS `tanggapan`, `tbl_tanggapan`.`id_petugas` AS `id_petugas`, `tbl_petugas`.`nama_petugas` AS `nama_petugas`, `tbl_petugas`.`username` AS `username_petugas`, `tbl_petugas`.`tlp` AS `tlp_petugas`, `tbl_petugas`.`level` AS `level_petugas` FROM ((`tbl_tanggapan` join `vw_pengaduan` on(`tbl_tanggapan`.`id_pengaduan` = `vw_pengaduan`.`id_pengaduan`)) join `tbl_petugas` on(`tbl_tanggapan`.`id_petugas` = `tbl_petugas`.`id_petugas`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_masyarakat`
--
ALTER TABLE `tbl_masyarakat`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `username` (`username`,`tlp`);

--
-- Indexes for table `tbl_pengaduan`
--
ALTER TABLE `tbl_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `username` (`username`,`tlp`);

--
-- Indexes for table `tbl_tanggapan`
--
ALTER TABLE `tbl_tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pengaduan`
--
ALTER TABLE `tbl_pengaduan`
  MODIFY `id_pengaduan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_petugas` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_tanggapan`
--
ALTER TABLE `tbl_tanggapan`
  MODIFY `id_tanggapan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pengaduan`
--
ALTER TABLE `tbl_pengaduan`
  ADD CONSTRAINT `tbl_pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tbl_masyarakat` (`nik`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_tanggapan`
--
ALTER TABLE `tbl_tanggapan`
  ADD CONSTRAINT `tbl_tanggapan_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `tbl_pengaduan` (`id_pengaduan`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tbl_petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

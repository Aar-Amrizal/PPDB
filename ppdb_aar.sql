-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 08:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_aar`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_bayar`
--

CREATE TABLE `data_bayar` (
  `id` int(100) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `gelombang` varchar(2300) NOT NULL,
  `jumlah` bigint(230) NOT NULL,
  `bayar` bigint(230) NOT NULL,
  `kembalian` bigint(230) NOT NULL,
  `sisa` bigint(200) NOT NULL,
  `keterangan` varchar(2300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_bayar`
--

INSERT INTO `data_bayar` (`id`, `no_pendaftaran`, `tanggal`, `nama_siswa`, `asal_sekolah`, `gelombang`, `jumlah`, `bayar`, `kembalian`, `sisa`, `keterangan`) VALUES
(6, 'BYR001', '08-05-2024', 'nana', 'smk madya depok', 'gel 1', 2000000, 2000000, 0, 0, 'Lunas'),
(7, 'byr004', '09-05-2024', 'gityu', 'smk madya depok', 'gel 4', 6000000, 124568099999, 124562099999, 124562099999, 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` int(111) NOT NULL,
  `nama_siswa` varchar(111) NOT NULL,
  `nama_ortu` varchar(111) NOT NULL,
  `alamat_ortu` varchar(111) NOT NULL,
  `no_telOrtu` varchar(111) NOT NULL,
  `pekerjaan_ortu` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ortu`
--

INSERT INTO `data_ortu` (`id`, `nama_siswa`, `nama_ortu`, `alamat_ortu`, `no_telOrtu`, `pekerjaan_ortu`) VALUES
(1, 'pajar', '', '', '', ''),
(2, 'pajar', '', '', '', ''),
(3, 'pajar', '', '', '', ''),
(4, 'pajar', '', '', '', ''),
(5, 'pajar', '', '', '', ''),
(16, 'nana', '', '', '', ''),
(17, 'nana', 'a', 'Depok, Smk Madya', '', 'Satpam Sekolah Smk Madya'),
(18, 'aar', '', '', '', 'Satpam Sekolah Smk Madya'),
(19, 'siapa', '', '', '', 'Satpam Sekolah Smk Madya'),
(20, 'gityu', 'qqqqqqqqqqq', 'qq', '', 'Satpam Sekolah Smk Madya'),
(21, 'vava', 'qqqqqqqqqqq', '', '', 'Satpam Sekolah Smk Madya');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(111) NOT NULL,
  `no_pendaftaran` varchar(111) NOT NULL,
  `nama_siswa` varchar(111) NOT NULL,
  `ttl` varchar(111) NOT NULL,
  `jenis_kel` varchar(111) NOT NULL,
  `agama` varchar(111) NOT NULL,
  `no_telSiswa` varchar(111) NOT NULL,
  `asal_sekolah` varchar(111) NOT NULL,
  `alamat_sekolah` varchar(111) NOT NULL,
  `jurusan` varchar(111) NOT NULL,
  `tanggal` varchar(111) NOT NULL,
  `ukuran` varchar(111) NOT NULL,
  `gelombang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `no_pendaftaran`, `nama_siswa`, `ttl`, `jenis_kel`, `agama`, `no_telSiswa`, `asal_sekolah`, `alamat_sekolah`, `jurusan`, `tanggal`, `ukuran`, `gelombang`) VALUES
(17, 'BYR001', 'nana', '01-01-2007', '', 'Islam', '021', 'smk madya depok', 'Depok, Smk Madya', 'REKAYASA PERANGKAT LUNAK', '08-05-2024', '', 'gel 1'),
(18, 'BYR002', 'aar', '01-01-2007', 'Laki-Laki', 'Islam', '085368338455', 'smk madya depok', 'Depok, Smk Madya', 'DESAIN KOMUNIKASI VISUAL', '09-05-2024', '', 'gel 2'),
(19, 'BYR003', 'siapa', '01-01-2007', 'Perempuan', 'Islam', '087586478557', 'smk madya depok', 'Depok, Smk Madya', 'AKUTANSI KEUANGAN DAN LEMBAGA', '09-05-2024', '', 'gel 1'),
(20, 'BYR004', 'gityu', '01-01-2007', '', 'Islam', '9999999999', 'smk madya depok', 'bgj', 'REKAYASA PERANGKAT LUNAK', '09-05-2024', '', 'gel 4'),
(21, 'BYR005', 'vava', '01-01-2007', 'Perempuan', 'Islam', '9999999999', 'smk madya depok', 'Depok, Smk Madya', 'REKAYASA PERANGKAT LUNAK', '09-05-2024', 'L', 'gel 4');

-- --------------------------------------------------------

--
-- Table structure for table `data_wali`
--

CREATE TABLE `data_wali` (
  `id` int(111) NOT NULL,
  `nama_siswa` varchar(111) NOT NULL,
  `nama_wali` varchar(111) NOT NULL,
  `alamat_wali` varchar(111) NOT NULL,
  `no_telWali` varchar(111) NOT NULL,
  `pekerjaan_wali` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_wali`
--

INSERT INTO `data_wali` (`id`, `nama_siswa`, `nama_wali`, `alamat_wali`, `no_telWali`, `pekerjaan_wali`) VALUES
(1, 'pajar', '', '', '', ''),
(2, 'pajar', '', '', '', ''),
(3, 'pajar', '', '', '', ''),
(4, 'pajar', '', '', '', ''),
(5, 'pajar', '', '', '', ''),
(16, 'nana', '', '', '', ''),
(17, 'nana', '', '', '', ''),
(18, 'aar', '', '', '', ''),
(19, 'siapa', '', '', '', ''),
(20, 'gityu', 'qqw', 'wq', '', 'w'),
(21, 'vava', 'qqw', '', '', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gel`
--

CREATE TABLE `tbl_gel` (
  `id` int(11) NOT NULL,
  `gelombang` varchar(111) NOT NULL,
  `nominal` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gel`
--

INSERT INTO `tbl_gel` (`id`, `gelombang`, `nominal`) VALUES
(13, 'gel 2', 2500000),
(14, 'gel 4', 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(18, 'nana', 'nana', '1', 'admin'),
(20, 'ara ara', 'ara', '2', 'petugas'),
(21, 'abdy1', 'aar', '123', 'admin'),
(22, '12', 'ara', '12', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_bayar`
--
ALTER TABLE `data_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_wali`
--
ALTER TABLE `data_wali`
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_gel`
--
ALTER TABLE `tbl_gel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_bayar`
--
ALTER TABLE `data_bayar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_gel`
--
ALTER TABLE `tbl_gel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

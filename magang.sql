-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 04:33 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `token` text NOT NULL,
  `id_user` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id_akun`, `username`, `password`, `token`, `id_user`) VALUES
(19, 'ijal', '12345', 'cCdlcHOLfJ4:APA91bF2vkBEgMP7gdq6XaxmVT4N3SbSfcoW5svG1n1nvwLP9bwdQBj96K3r0Oi-Ksu7Ln_-eUmC5j1MXOsg-grJD0yUs9uYvzHq2Z21ikpHqA-eTh6KspJJ5fdQ7mQV1s3RawjLeEni', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catatan`
--

CREATE TABLE `tbl_catatan` (
  `id_catatan` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `img` varchar(225) NOT NULL,
  `id_daily` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily`
--

CREATE TABLE `tbl_daily` (
  `id_daily` int(11) NOT NULL,
  `tgl_daily` varchar(35) NOT NULL,
  `pokok_bahasan` varchar(35) NOT NULL,
  `sub_pokok` varchar(35) NOT NULL,
  `kegiatan` text NOT NULL,
  `status` varchar(35) NOT NULL,
  `NIM` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_daily`
--

INSERT INTO `tbl_daily` (`id_daily`, `tgl_daily`, `pokok_bahasan`, `sub_pokok`, `kegiatan`, `status`, `NIM`) VALUES
(7, '25-11-2020', 'terserah', 'bomat', 'karepmu', 'Belum Dicek', 'E41172253');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `NIM` varchar(35) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(35) NOT NULL,
  `alamat_mahasiswa` text NOT NULL,
  `asal_kampus` varchar(35) NOT NULL,
  `jurusan` varchar(35) NOT NULL,
  `foto_mahasiswa` text NOT NULL,
  `tgl_daftar` varchar(35) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `ipk` double NOT NULL,
  `id_akun` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`NIM`, `nama_mahasiswa`, `jenis_kelamin`, `alamat_mahasiswa`, `asal_kampus`, `jurusan`, `foto_mahasiswa`, `tgl_daftar`, `no_hp`, `email`, `ipk`, `id_akun`) VALUES
('E41172253', 'Fahrizal ', 'Laki-laki', 'Banyuwangi', 'Polije', 'Tif', 'IMG_20201125_111154_BURST1.jpg', '2525-1111-20202020', '0859180657812', 'jiwanrizal5@gmail.com', 3.5, '19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembimbing`
--

CREATE TABLE `tbl_pembimbing` (
  `id_pendamping` int(11) NOT NULL,
  `nama_pendamping` varchar(35) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembimbing`
--

INSERT INTO `tbl_pembimbing` (`id_pendamping`, `nama_pendamping`, `no_hp`, `username`, `password`, `token`) VALUES
(3, 'bambang pamungka', '0859180657182', 'bambang', '12345', 'fKCsiZQj9Q4:APA91bEdS5eDzgjGahyCrlwSbHwUlE9i8ItmtuDjn3VJIab_1Gg0imVMvjAa01Ydgw04RQ3-Jd_X8FVp4pCVR1wK-NKeCM8q0bNuPXAfw3NMi6A9Ngh51G3B22X44swS5P_gRrQ8gC9C');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `tgl_mulai` varchar(35) NOT NULL,
  `tgl_selesai` varchar(35) NOT NULL,
  `file` varchar(225) NOT NULL,
  `tgl_pengajuan` varchar(35) NOT NULL,
  `status` varchar(35) NOT NULL,
  `NIM` varchar(35) NOT NULL,
  `id_pendamping` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id_pengajuan`, `tgl_mulai`, `tgl_selesai`, `file`, `tgl_pengajuan`, `status`, `NIM`, `id_pendamping`) VALUES
(15, '25-11-2020', '25-11-2020', '6666.pdf', '25-11-2020', 'Diterima', 'E41172253', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signature`
--

CREATE TABLE `tbl_signature` (
  `id_sign` int(11) NOT NULL,
  `img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `jenis_user` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `tbl_catatan`
--
ALTER TABLE `tbl_catatan`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indexes for table `tbl_daily`
--
ALTER TABLE `tbl_daily`
  ADD PRIMARY KEY (`id_daily`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `tbl_pembimbing`
--
ALTER TABLE `tbl_pembimbing`
  ADD PRIMARY KEY (`id_pendamping`);

--
-- Indexes for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tbl_signature`
--
ALTER TABLE `tbl_signature`
  ADD PRIMARY KEY (`id_sign`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_catatan`
--
ALTER TABLE `tbl_catatan`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_daily`
--
ALTER TABLE `tbl_daily`
  MODIFY `id_daily` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pembimbing`
--
ALTER TABLE `tbl_pembimbing`
  MODIFY `id_pendamping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_signature`
--
ALTER TABLE `tbl_signature`
  MODIFY `id_sign` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 03:45 AM
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
-- Database: `mdr`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_acc`
--

CREATE TABLE `tb_acc` (
  `id_acc` varchar(3) NOT NULL,
  `nm_acc` varchar(20) DEFAULT NULL,
  `rem_acc` varchar(20) DEFAULT NULL,
  `stat_acc` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_acc`
--

INSERT INTO `tb_acc` (`id_acc`, `nm_acc`, `rem_acc`, `stat_acc`) VALUES
('A99', 'Intern', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_accfrm`
--

CREATE TABLE `tb_accfrm` (
  `id_userfrm` varchar(7) NOT NULL,
  `id_acc` varchar(3) NOT NULL,
  `code_frm` varchar(5) NOT NULL,
  `is_add` int(1) NOT NULL,
  `is_edt` int(1) NOT NULL,
  `is_del` int(1) NOT NULL,
  `is_spec1` int(1) NOT NULL,
  `is_spec2` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_accfrm`
--

INSERT INTO `tb_accfrm` (`id_userfrm`, `id_acc`, `code_frm`, `is_add`, `is_edt`, `is_del`, `is_spec1`, `is_spec2`) VALUES
('UF00001', 'A99', 'FRM09', 1, 1, 1, 1, 1),
('UF00002', 'A99', 'FR002', 1, 1, 1, 1, 1),
('UF00003', 'A99', 'FR003', 1, 1, 1, 1, 1),
('UF00004', 'A99', 'FR101', 1, 1, 1, 1, 1),
('UF00005', 'A99', 'FR102', 1, 1, 1, 1, 1),
('UF00007', 'A99', 'FR103', 1, 1, 1, 1, 1),
('UF00008', 'A99', 'FR104', 1, 1, 1, 1, 1),
('UF00009', 'A99', 'FR105', 1, 1, 1, 1, 1),
('UF00011', 'A99', 'FR107', 1, 1, 1, 1, 1),
('UF00012', 'A99', 'FR108', 1, 1, 1, 1, 1),
('UF00013', 'A99', 'FR109', 1, 1, 1, 1, 1),
('UF00014', 'A99', 'FR111', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(25) NOT NULL,
  `addt_barang` varchar(11) DEFAULT NULL,
  `tipe_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(70) NOT NULL,
  `des_barang` varchar(70) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `id_loker` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `addt_barang`, `tipe_barang`, `nama_barang`, `des_barang`, `stok_barang`, `id_loker`) VALUES
('GS-20110001', 'GS-20110001', 'Amplop', 'Amplop', 'Amplop uk. 110x230', 15, '1B'),
('GS-20110002', 'GS-20110002', 'Amplop', 'Amplop', 'Amplop uk. 114x162', 4, '1B'),
('GS-20110003', 'GS-20110003', 'Amplop', 'Amplop Dokumen', 'Amplop uk. 152x90', 1, '1B'),
('GS-20110004', 'GS-20110004', 'Amplop', 'Amplop Dokumen', 'Amplop Coklat Sedang', 140, '1B'),
('GS-20110005', 'GS-20110005', 'Amplop', 'Amplop Dokumen', 'Amplop Coklat Besar', 9, '1B'),
('GS-20110006', 'GS-20110006', 'Amplop', 'Amplop Dokument', 'Amplop Dokumen MDR', 950, '1B'),
('GS-20110007', 'GS-20110007', 'Ballpoint', 'Ballpoint Desc', 'Ballpoint Meja Hitam', 4, '1B'),
('GS-20110008', 'GS-20110008', 'Ballpoint', 'Ballpoint Desc', 'Ballpoint Meja Biru', 1, '1B'),
('GS-20110009', 'GS-20110009', 'Ballpoint', 'Ballpoint', 'Ballpoint Hitam', 35, '1B'),
('GS-20110010', 'GS-20110010', 'Ballpoint', 'Ballpoint', 'Ballpoint Merah', 8, '1B'),
('GS-20110011', 'GS-20110011', 'Baterai', 'Baterai', 'Baterai 9 Volt', 11, '1B'),
('GS-20110012', 'GS-20110012', 'Baterai', 'Baterai', 'Baterai Lithium 3 Volt', 2, '1B'),
('GS-20110013', 'GS-20110013', 'Baterai', 'Baterai', 'Baterai AA', 36, '1B'),
('GS-20110014', 'GS-20110014', 'Baterai', 'Baterai', 'Baterai AAA', 8, '1B'),
('GS-20110015', 'GS-20110015', 'Bubble Wrap', 'Bubble Wrap', 'Bubble Wrap', 6, '1B'),
('GS-20110016', 'GS-20110016', 'Buku', 'Tanda Terima', 'Tanda Terima', 12, '1B'),
('GS-20110017', 'GS-20110017', 'Buku', 'Surat Jalan ', 'Surat Jalan', 1, '1B'),
('GS-20110018', 'GS-20110018', 'Buku', 'Kwitansi', 'Kwitansi', 3, '1B'),
('GS-20110019', 'GS-20110019', 'Buku', 'Buku Tulis', 'Buku Tulis', 0, '1B'),
('GS-20110020', 'GS-20110020', 'Buku', 'Notes', 'Buku Notes Besar', 2, '1B'),
('GS-20110021', 'GS-20110021', 'Buku', 'Notes', 'Buku Notes Sedang', 1, '1B'),
('GS-20110022', 'GS-20110022', 'Buku', 'Notes', 'Buku Notes Kecil', 1, '1B'),
('GS-20110023', 'GS-20110023', 'Buku', 'Notes', 'Notebook Mini', 1, '1B'),
('GS-20110024', 'GS-20110024', 'Celurit', 'Celurit', 'Celurit Kecil', 3, '1B'),
('GS-20110025', 'GS-20110025', 'Clips', 'Trigonal Clips', 'Trigonal Paper Clips No. 3', 1, '1B'),
('GS-20110026', 'GS-20110026', 'Clips', 'Paper Clips', 'Paper Clips Jumbo No. 5', 5, '1B'),
('GS-20110027', 'GS-20110027', 'Clips', 'Binder Clips', 'Binder Clips uk. 105', 25, '1B'),
('GS-20110028', 'GS-20110028', 'Clips', 'Binder Clips', 'Binder Clip uk. 260', 31, '1B'),
('GS-20110029', 'GS-20110029', 'Clips', 'Binder Clips', 'Binder Clip uk. 111', 0, '1B'),
('GS-20110030', 'GS-20110030', 'Clips', 'Binder Clips', 'Binder Clip uk. 155', 6, '1B'),
('GS-20110031', 'GS-20110031', 'Clips', 'Binder Clips', 'Binder Clip uk. 107', 2, '1B'),
('GS-20110032', 'GS-20110032', 'Clips', 'Penjepit Nametag Flexible', 'Penjepit Nametage Flexible', 24, '1B'),
('GS-20110033', 'GS-20110033', 'Clips', 'Nametag Clip', 'Nametag Clip', 204, '1B'),
('GS-20110034', 'GS-20110034', 'Correction Pen', 'Correction Pen', 'Correction Pen', 9, '1B'),
('GS-20110035', 'GS-20110035', 'Cutter', 'Cutter', 'Cutter Plastik', 14, '1B'),
('GS-20110036', 'GS-20110036', 'Cutter', 'Cutter', 'Cutter L-500', 6, '1B'),
('GS-20110037', 'GS-20110037', 'Cutter', 'Cutter', 'Cutter Kecil', 34, '1B'),
('GS-20110038', 'GS-20110038', 'Ear Plug', 'Ear Plug', 'Ear Plug', 16, '1B'),
('GS-20110039', 'GS-20110039', 'Fastener', 'Paper Fastener', 'Paper Fastener Acco', 22, '1B'),
('GS-20110040', 'GS-20110040', 'Gembok', 'Gembok', 'Gembok', 1, '1B'),
('GS-20110041', 'GS-20110041', 'Gunting', 'Gunting', 'Gunting Ukuran Sedang', 1, '1B'),
('GS-20110042', 'GS-20110042', 'Highlighter', 'Highlighter', 'Highlighter Hijau', 4, '1B'),
('GS-20110043', 'GS-20110043', 'Hightlighter', 'Hightlighter', 'Hightlighter Pink', 2, '1B'),
('GS-20110044', 'GS-20110044', 'Highlighter', 'Highlighter', 'Highlighter Biru', 2, '1B'),
('GS-20110045', 'GS-20110045', 'ID Card', 'ID Card Holder', 'ID Card Holder Putih', 5, '1B'),
('GS-20110046', 'GS-20110046', 'ID Card', 'ID Card Holder', 'ID Card Bening', 4, '1B'),
('GS-20110047', 'GS-20110047', 'ID Card', 'ID Card Full Set', 'ID Card Full Set', 17, '1B'),
('GS-20110048', 'GS-20110048', 'Kapur', 'Kapur', 'Kapur Tulis', 8, '1B'),
('GS-20110049', 'GS-20110049', 'Kertas', 'Kertas HVS', 'Kertas HVS A4', 4, '1B'),
('GS-20110050', 'GS-20110050', 'Kertas', 'Kertas HVS', 'Kertas HVS F4', 0, '1B'),
('GS-20110051', 'GS-20110051', 'Kertas', 'Kertas Concorde', 'Concorde HVS Paper', 0, '1B'),
('GS-20110052', 'GS-20110052', 'Kertas', 'Kertas Bufallo', 'Kertas Bufallo Ungu', 1, '1B'),
('GS-20110053', 'GS-20110053', 'Kertas', 'Kertas Bufallo', 'Kertas Bufallo Orange', 2, '1B'),
('GS-20110054', 'GS-20110054', 'Kertas', 'Kertas Bufallo', 'Kertas Bufallo Pink', 3, '1B'),
('GS-20110055', 'GS-20110055', 'Kertas', 'Kertas Bufallo', 'Kertas Bufallo Biru', 4, '1B'),
('GS-20110056', 'GS-20110056', 'Kertas', 'Kertas Bufallo', 'Kertas Bufallo Kuning', 2, '1B'),
('GS-20110057', 'GS-20110057', 'Kertas', 'Kertas Bufallo', 'Kertas Bufallo Putih', 3, '1B'),
('GS-20110058', 'GS-20110058', 'Kertas', 'Kertas Foto', 'Kertas Foto', 4, '1B'),
('GS-20110059', 'GS-20110059', 'Lanyard', 'Lanyard ID Card', 'Lanyard ID Card', 44, '1B'),
('GS-20110060', 'GS-20110060', 'Lem', 'Lem Kertas', 'Lem Kertas Povinal', 12, '1B'),
('GS-20110061', 'GS-20110061', 'Lem', 'Glue Stick', 'Glue Stick', 1, '1B'),
('GS-20110062', 'GS-20110062', 'Lem', 'Lem Castol', 'Lem Castol', 2, '1B'),
('GS-20110063', 'GS-20110063', 'Lem', 'Lem Fox', 'Lem Fox', 1, '1B'),
('GS-20110064', 'GS-20110064', 'Map', 'Business File Map', 'Map Ako Bening', 9, '1B'),
('GS-20110065', 'GS-20110065', 'Map', 'Clear Holder', 'Clear Holder', 0, '1B'),
('GS-20110066', 'GS-20110066', 'Map', 'Clear Sleeves', 'Clear Sleeves', 8, '1B'),
('GS-20110067', 'GS-20110067', 'Map', 'Envelope Folder', 'Envelope Folder With Snap Button', 0, '1B'),
('GS-20110068', 'GS-20110068', 'Map', 'Envelope Folder', 'Envelope Folder With String', 0, '1B'),
('GS-20110069', 'GS-20110069', 'Map', 'Paper Map', 'Map Ako Kertas Biru', 16, '1B'),
('GS-20110070', 'GS-20110070', 'Map', 'Paper Map', 'Map Kertas Orange', 1, '1B'),
('GS-20110071', 'GS-20110071', 'Map', 'Paper Map', 'Map Keertas Pink', 2, '1B'),
('GS-20110072', 'GS-20110072', 'Map', 'Paper Map', 'Map Kertas Kuning', 68, '1B'),
('GS-20110073', 'GS-20110073', 'Map', 'Paper Map', 'Map Kertas Biru', 33, '1B'),
('GS-20110074', 'GS-20110074', 'Materai', 'Materai', 'Materai 6000', 104, '1B'),
('GS-20110075', 'GS-20110075', 'Name Tga', 'Name Tag', 'Nametag Mika uk. 82', 5, '1B'),
('GS-20110076', 'GS-20110076', 'Name Tag', 'Name Tag', 'Nametag uk. 92', 153, '1B'),
('GS-20110077', 'GS-20110077', 'Ordner', 'Ordner Besar', 'Ordner Uk F4', 4, '1B'),
('GS-20110078', 'GS-20110078', 'Ordner Divider', 'Ordner Divider', 'Pembatas Ordner', 2, '1B'),
('GS-20110079', 'GS-20110079', 'Penggaris', 'Penggaris Besi', 'Penggaris Besi 30 cm', 8, '1B'),
('GS-20110080', 'GS-20110080', 'Penghapus', 'Penghapus Kain', 'Penghapus Papan', 2, '1B'),
('GS-20110081', 'GS-20110081', 'Penghapus', 'Penghapus Pensil', 'Penghapus Karet Kecil', 1, '1B'),
('GS-20110082', 'GS-20110082', 'Penghapus', 'Penghapus Pensil', 'Penghapus Karet Besar', 2, '1B'),
('GS-20110083', 'GS-20110083', 'Pensil', 'Pensil', 'Pensil HB', 9, '1B'),
('GS-20110084', 'GS-20110084', 'Pensil', 'Pensil', 'Pensil 2B', 27, '1B'),
('GS-20110085', 'GS-20110085', 'Pita Printer', 'Pita Printer LX', 'Pita Printer LX', 2, '1B'),
('GS-20110086', 'GS-20110086', 'Plastik', 'Clear Sheet Protector', 'Clear Sheet Protector', 3, '1B'),
('GS-20110087', 'GS-20110087', 'Plastik', 'Kantong Plastik', 'Kantong Plastik', 0, '1B'),
('GS-20110088', 'GS-20110088', 'Plastik', 'Plastik Clip', 'Plastik Clip 25x35', 2, '1B'),
('GS-20110089', 'GS-20110089', 'Puncher', 'Puncher', 'Puncher Kecil', 0, '1B'),
('GS-20110090', 'GS-20110090', 'Puncher', 'Puncher', 'Puncher 40XL', 2, '1B'),
('GS-20110091', 'GS-20110091', 'Puncher', 'Puncher', 'Puncher O136', 1, '1B'),
('GS-20110092', 'GS-20110092', 'Push Pin', 'Drawing Push Pin', 'Drawing Push Pin', 3, '1B'),
('GS-20110093', 'GS-20110093', 'Push Pin', 'Magnetic Push Pin', 'Magnetic Push Pin', 15, '1B'),
('GS-20110094', 'GS-20110094', 'Rautan', 'Rautan', 'Rautan', 2, '1B'),
('GS-20110095', 'GS-20110095', 'Refill Ballpoint', 'Refil Ballpoint', 'Refil Ballpoint Gel', 13, '1B'),
('GS-20110096', 'GS-20110096', 'Refill Cutter', 'Refill Cutter', 'Refill Cutter', 1, '1B'),
('GS-20110097', 'GS-20110097', 'Refill Cutter', 'Refill Cutter', 'Refill Cutter L-150', 34, '1B'),
('GS-20110098', 'GS-20110098', 'Refill Lem', 'Refill Lem', 'Refill Lem Povinal 500 ml', 1, '1B'),
('GS-20110099', 'GS-20110099', 'Refill Pensil', 'Refil Pensil Mekanik', 'Refil Pensil Mekanik 0.5', 4, '1B'),
('GS-20110100', 'GS-20110100', 'Refill Pensil', 'Refill Pensil Mekanik', 'Refil Pensil Mekanik 0.7', 4, '1B'),
('GS-20110101', 'GS-20110101', 'Refill Spidol', 'Refill Board Marker', 'Refill Spidol Whiteboard Hitam', 2, '1B'),
('GS-20110102', 'GS-20110102', 'Refill Spidol', 'Refill Board Marker', 'Refill Spidol Whiteboard Biru', 2, '1B'),
('GS-20110103', 'GS-20110103', 'Refill Spidol', 'Refill Board Marker', 'Refill Spidol Whiteboard Merah', 2, '1B'),
('GS-20110104', 'GS-20110104', 'Refill Spidol', 'Refill Permanent Marker', 'Refill Spidol Permanent Hitam', 10, '1B'),
('GS-20110105', 'GS-20110105', 'Refill Spidol', 'Refill Permanent Marker', 'Refill Spidol Permanent Biru', 6, '1B'),
('GS-20110106', 'GS-20110106', 'Refill Stamp', 'Refill Stamp', 'Refill Stampad Biru', 3, '1B'),
('GS-20110107', 'GS-20110107', 'Refill Stamp', 'Refill Stamp', 'Refill Stampad Ungu', 1, '1B'),
('GS-20110108', 'GS-20110108', 'Refill Stamp', 'Refill Stamp', 'Refill Stampad Merah', 1, '1B'),
('GS-20110109', 'GS-20110109', 'Refill Stapler', 'Refill Stapler', 'Isi Stapler uk. 10', 7, '1B'),
('GS-20110110', 'GS-20110110', 'Refill Stapler', 'Refill Stapler', 'Refill Stapler uk. 24', 95, '1B'),
('GS-20110111', 'GS-20110111', 'Refill Typewritter', 'Daito Typewritter ribbon', 'Daito Typewritter ribbon', 1, '1B'),
('GS-20110112', 'GS-20110112', 'Sarung Tangan', 'Sarung Tangan', 'Sarung Tangan Kain', 5, '1B'),
('GS-20110113', 'GS-20110113', 'Spidol', 'Drawing Pen', 'Drawing Pen Hitam', 13, '1B'),
('GS-20110114', 'GS-20110114', 'Spidol', 'Drawing Pen', 'Drawing Pen Biru', 8, '1B'),
('GS-20110115', 'GS-20110115', 'Spidol', 'Drawing Pen', 'Drawing Pen Merah', 3, '1B'),
('GS-20110116', 'GS-20110116', 'Spidol', 'Drawing Pen', 'Drawing Pen Kuning', 1, '1B'),
('GS-20110117', 'GS-20110117', 'Spidol', 'Marked Board', 'Markerd Board Hitam', 2, '1B'),
('GS-20110118', 'GS-20110118', 'Spidol', 'Marked Board', 'Marked Board Hijau', 1, '1B'),
('GS-20110119', 'GS-20110119', 'Spidol', 'Marked Board', 'Marked Board Biru', 0, '1B'),
('GS-20110120', 'GS-20110120', 'Spidol', 'Marked Boardq', 'Marked Board Merah', 4, '1B'),
('GS-20110121', 'GS-20110121', 'Spidol', 'Marked Permanent', 'Marker Permanent Hitam', 4, '1B'),
('GS-20110122', 'GS-20110122', 'Spidol', 'Marker Permanent', 'Marker Permanent Biru', 2, '1B'),
('GS-20110123', 'GS-20110123', 'Spidol', 'Marker Permanent', 'Marker Permanent Hijau', 3, '1B'),
('GS-20110124', 'GS-20110124', 'Spidol', 'Marker Permanent', 'Marker Permanent Merah', 0, '1B'),
('GS-20110125', 'GS-20110125', 'Spidol', 'Spidol Besar', 'Spidol Besar 500 Hitam', 1, '1B'),
('GS-20110126', 'GS-20110126', 'Spidol', 'Spidol Besar', 'Spidol Besar 500 Biru', 1, '1B'),
('GS-20110127', 'GS-20110127', 'Stamp', 'Date Stamp', 'Date Stamp', 1, '1B'),
('GS-20110128', 'GS-20110128', 'Standbooks', 'Standbooks', 'Standbooks', 4, '1B'),
('GS-20110129', 'GS-20110129', 'Stapler', 'Stapler', 'Stapler Sedang 50/50D', 3, '1B'),
('GS-20110130', 'GS-20110130', 'Stapler', 'Stapler', 'Stapler Mini 868', 1, '1B'),
('GS-20110131', 'GS-20110131', 'Stapler', 'Stapler', 'Stapler Kecil 10', 1, '1B'),
('GS-20110132', 'GS-20110132', 'Stapler', 'Stapler', 'Stapler 250BD-1', 1, '1B'),
('GS-20110133', 'GS-20110133', 'Steorofoam', 'Steorofoam', 'Steorofoam', 6, '1B'),
('GS-20110134', 'GS-20110134', 'Stiker Label', 'Stiker Label', 'Label Nama uk. 101 (50 x 100)\r\n', 1, '1B'),
('GS-20110135', 'GS-20110135', 'Stiker Label', 'Stiker Label', 'Label Nama uk. 105 (25 x 38)\r\n', 0, '1B'),
('GS-20110136', 'GS-20110136', 'Stiker Label', 'Stiker Label', 'Label Nama uk. 109 (13 x 38)\r\n', 0, '1B'),
('GS-20110137', 'GS-20110137', 'Stiker Label', 'Stiker Label', 'Label Nama uk. 113 (9 x 13)\r\n', 0, '1B'),
('GS-20110138', 'GS-20110138', 'Stiker Label', 'Stiker Label', 'Label Nama uk. 103 (32 x 64)\r\n', 6, '1B'),
('GS-20110139', 'GS-20110139', 'Sticky Note', 'Sticky Note', 'Sticky note uk. 76 x 76 (100 sheets)', 3, '1B'),
('GS-20110140', 'GS-20110140', 'Sticky Note', 'Sticky Note', 'Sticky note uk. 75 x 125 (100 sheets)\r\n', 3, '1B'),
('GS-20110141', 'GS-20110141', 'Sticky Note', 'Sticky Note', 'Sticky note uk. 50 x 75 (100 sheets)\r\n', 4, '1B'),
('GS-20110142', 'GS-20110142', 'Sticky Note', 'Sticky Note', 'Sticky note uk. 76 x 101 (100 sheets)\r\n', 0, '1B'),
('GS-20110143', 'GS-20110143', 'Sticky Note', 'Sticky Note', 'Sticky note uk. 40 x 50 (100 sheets)\r\n', 4, '1B'),
('GS-20110144', 'GS-20110144', 'Sticky Note', 'Sticky Note', 'Sticky note uk. 50 x 75 (200 sheets)\r\n', 1, '1B'),
('GS-20110145', 'GS-20110145', 'Sticky Note', 'Sign Here', 'Sign here film marker\r\n', 2, '1B'),
('GS-20110146', 'GS-20110146', 'Sticky Note', 'Sticky Note', 'Sticky Note Film Marker\r\n', 0, '1B'),
('GS-20110147', 'GS-20110147', 'Tape', 'Adhesive tape\r\n', 'Adhesive tape\r\n', 5, '1B'),
('GS-20110148', 'GS-20110148', 'Tape', 'Berry Tape', 'Berry tape/Cloth Tape uk. 48 x 12\r\n', 4, '1B'),
('GS-20110149', 'GS-20110149', 'Tape', 'Berry Tape', 'Berry tape/Cloth Tape uk. 36 x 12\r\n', 2, '1B'),
('GS-20110150', 'GS-20110150', 'Tape', 'Berry Tape', 'Berry tape/Cloth Tape uk. 24 x 12\r\n', 1, '1B'),
('GS-20110151', 'GS-20110151', 'Tape', 'Double Tape', 'Double Tape Besar', 2, '1B'),
('GS-20110152', 'GS-20110152', 'Tape', 'Double Tape', 'Double Tape 1/2 inch', 3, '1B'),
('GS-20110153', 'GS-20110153', 'Tape', 'Foam Tape', 'Foam Tape 1/2 inch', 3, '1B'),
('GS-20110154', 'GS-20110154', 'Tape', 'Foam Tape', 'Foam Tape 1 inch', 2, '1B'),
('GS-20110155', 'GS-20110155', 'Tape', 'Isolasi', 'Isolasi Kecil Bazic', 19, '1B'),
('GS-20110156', 'GS-20110156', 'Tape', 'Isolasi', 'Isolasi Kecil Nachi', 22, '1B'),
('GS-20110157', 'GS-20110157', 'Tape', 'Isolasi', 'Isolasi Kecil Crystal', 9, '1B'),
('GS-20110158', 'GS-20110158', 'Tape', 'Tape Bening', 'Lakban Bening', 17, '1B'),
('GS-20110159', 'GS-20110159', 'Tape', 'Tape Bening', 'Plakban Bening 1/2 inch', 18, '1'),
('GS-20110160', 'GS-20110160', 'Tape', 'Tape Bening', 'Plakban Bening 1 inch', 0, '1B'),
('GS-20110161', 'GS-20110161', 'Tape', 'Tape Coklat', 'Lakban Karton', 0, '1B'),
('GS-20110162', 'GS-20110162', 'Tape', 'Tape Coklat', 'Lakban Coklat', 27, '1B'),
('GS-20110163', 'GS-20110163', 'Tape', 'Tape Hitam', 'Lakban Hitam', 2, '1B'),
('GS-20110164', 'GS-20110164', 'Tape', 'Tissue Tape', 'Tissue Tape', 0, '1B'),
('GS-20110165', 'GS-20110165', 'Tape Dispenser', 'Tape Dispenser', 'Tape Dispenser Besar', 2, '1B'),
('GS-20110166', 'GS-20110166', 'Gembok', 'Gembok Besar', 'Gembok Besar 65MM', 1, '1B'),
('GS-20110167', 'GS-20110167', 'Ordner', 'Ordner Kecil', 'Ordner uk. 1/2 F4', 10, '1B'),
('INV.PROD.2011.201.01', NULL, 'Meja', 'Meja Kerja', 'Meja staff + rak 6 sub (set)\r\n', 33, '2B'),
('INV.PROD.2011.201.02', NULL, 'Meja', 'Meja Tamu', 'Meja bulat', 3, '2B'),
('INV.PROD.2011.201.03', NULL, 'Meja', 'Meja Kerja', 'Meja manajer bentuk L dengan 2 drawer (set)', 4, '2B'),
('INV.PROD.2011.201.04', NULL, 'Meja', 'Meja Kerja', 'Meja kayu informa', 1, '2B'),
('INV.PROD.2011.201.05', NULL, 'Meja', 'Meja Kerja', 'Meja manajer persegi panjang', 1, '2B'),
('INV.PROD.2011.201.06', NULL, 'Meja', 'Meja Tamu', 'Meja tamu dengan roda', 1, '2B'),
('INV.PROD.2011.201.07', NULL, 'Meja', 'Meja Tamu', 'Meja tamu tanpa roda', 1, '2B'),
('INV.PROD.2011.201.08', NULL, 'Meja', 'Meja Meeting', 'Meja ruang meeting besar', 1, '2B'),
('INV.PROD.2011.201.09', NULL, 'Meja', 'Meja Meeting', 'Meja ruang meeting kecil', 1, '2B'),
('INV.PROD.2011.201.10', NULL, 'Meja', 'Meja Receptionist', 'Meja Receptionist', 1, '2B'),
('INV.PROD.2011.201.11', NULL, 'Meja', 'Meja Kerja', 'Meja set 3 bagian', 1, '2B'),
('INV.PROD.2011.201.12', NULL, 'Meja', 'Meja Buffet', 'Meja lemari buffet (3 pintu dan 2 sub)', 3, '2B'),
('INV.PROD.2011.201.13', NULL, 'Meja', 'Meja Tamu', 'Meja kecil persegi warna silver', 1, '2B'),
('INV.PROD.2011.201.14', NULL, 'Meja', 'Meja Kerja', 'Meja kayu hitam', 1, '2B'),
('INV.PROD.2011.201.15', NULL, 'Meja', 'Meja Kerja', 'Meja set 2 bagian', 1, '2B'),
('INV.PROD.2011.201.16', NULL, 'Meja', 'Meja Buffet', 'Meja lemari buffet (1.5 pintu dan 2 sub)', 1, '2B'),
('INV.PROD.2011.201.17', NULL, 'Meja', 'Meja Rak', 'Meja fungsi rak(6 sub)', 1, '2B'),
('INV.PROD.2011.201.18', NULL, 'Meja', 'Meja Makan', 'Meja makan kombinasi kayu', 1, '2B'),
('INV.PROD.2011.201.19', NULL, 'Meja', 'Meja Makan', 'Meja makan kayu', 1, '2B'),
('INV.PROD.2011.201.20', NULL, 'Meja', 'Meja Rak', 'Meja fungsi rak (4 sub)', 1, '2B'),
('INV.PROD.2011.201.21', NULL, 'Meja', 'Meja Gantung', 'Meja gantung', 1, '2B'),
('INV.PROD.2011.202.01', NULL, 'Kursi', 'Kursi Kerja', 'Kursi indachi roda', 1, '2B'),
('INV.PROD.2011.202.02', NULL, 'Kursi', 'Kursi Kerja', 'Kursi indachi tanpa roda', 39, '2B'),
('INV.PROD.2011.202.03', NULL, 'Kursi', 'Kursi Kerja', 'Kursi indachi tinggi roda', 22, '2B'),
('INV.PROD.2011.202.04', NULL, 'Kursi', 'Kursi Kerja', 'Kursi informa warna biru-abu', 5, '2B'),
('INV.PROD.2011.202.05', NULL, 'Kursi', 'Kursi Kerja', 'Kursi informa warna merah-hitam', 1, '2B'),
('INV.PROD.2011.202.06', NULL, 'Kursi', 'Kursi Santai', 'Kursi besi panjang', 5, '2B'),
('INV.PROD.2011.202.07', NULL, 'Kursi', 'Kursi Tamu', 'Kursi bulat kulit', 7, '2B'),
('INV.PROD.2011.202.08', NULL, 'Kursi', 'Kursi Makan', 'Kursi pantry bahan kulit', 7, '2B'),
('INV.PROD.2011.202.09', NULL, 'Kursi', 'Kursi Makan', 'Kursi pantry bahan kayu-kulit', 4, '2B'),
('INV.PROD.2011.202.10', NULL, 'Kursi', 'Kursi Plastik', 'Kursi plastik warna coklat', 4, '2B'),
('INV.PROD.2011.202.11', NULL, 'Kursi', 'Kursi Plastik', 'Kursi plastik warna merah', 2, '2B'),
('INV.PROD.2011.202.12', NULL, 'Kursi', 'Kursi Kayu', 'Kursi kayu', 1, '2B');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barangkeluar`
--

CREATE TABLE `tb_barangkeluar` (
  `id_barang_keluar` varchar(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `id_karyawan` varchar(3) NOT NULL,
  `catatan` longtext NOT NULL,
  `ttd` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barangmasuk`
--

CREATE TABLE `tb_barangmasuk` (
  `id_barang_masuk` varchar(12) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `bukti_terima` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailkeluar`
--

CREATE TABLE `tb_detailkeluar` (
  `id_barang_keluar` varchar(11) NOT NULL,
  `id_barang` varchar(11) NOT NULL,
  `jumlah_keluar` int(3) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailmasuk`
--

CREATE TABLE `tb_detailmasuk` (
  `id_barang_masuk` varchar(12) NOT NULL,
  `id_barang` varchar(12) NOT NULL,
  `jumlah_masuk` int(5) NOT NULL,
  `satuan` enum('Pcs','Box','Unit') NOT NULL,
  `jenis` enum('Stok awal','Stok akhir') NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id_divisi` varchar(7) NOT NULL,
  `nama_divisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_emp`
--

CREATE TABLE `tb_emp` (
  `id_emp` varchar(6) NOT NULL,
  `nm_emp` varchar(100) NOT NULL,
  `nicknm_emp` varchar(20) NOT NULL,
  `altnm_emp` varchar(80) NOT NULL,
  `hon_emp` varchar(10) DEFAULT NULL,
  `nik_emp` varchar(9) DEFAULT NULL,
  `id_div` varchar(4) NOT NULL,
  `id_dept` varchar(4) NOT NULL,
  `about_emp` text,
  `title_emp` varchar(100) DEFAULT NULL,
  `pos_emp` varchar(100) DEFAULT '',
  `site_emp` varchar(30) DEFAULT '',
  `stw_emp` date DEFAULT NULL,
  `enw_emp` date DEFAULT NULL,
  `id_loc` varchar(3) DEFAULT NULL,
  `sex_emp` enum('Male','Female') DEFAULT NULL,
  `bp_emp` varchar(50) DEFAULT '',
  `bd_emp` date DEFAULT NULL,
  `phone_emp` varchar(22) NOT NULL,
  `ktp_emp` varchar(16) DEFAULT NULL,
  `kk_emp` varchar(20) DEFAULT NULL,
  `sn_emp` varchar(20) DEFAULT NULL,
  `address_emp` text,
  `marst_emp` enum('Married','Single','Widow/Widower') DEFAULT NULL,
  `rel_emp` enum('Islam','Katolik','Kristen','Hindu','Budha','Konghucu','-') DEFAULT NULL,
  `eth_emp` varchar(30) DEFAULT NULL,
  `edu_emp` varchar(10) DEFAULT NULL,
  `maj_emp` varchar(50) DEFAULT NULL,
  `uni_emp` varchar(100) DEFAULT NULL,
  `blood_emp` enum('A','B','O','AB','-') DEFAULT NULL,
  `sim_emp` varchar(20) DEFAULT NULL,
  `passport_emp` varchar(20) DEFAULT NULL,
  `npwp_emp` varchar(30) DEFAULT NULL,
  `bpjs_emp` varchar(20) DEFAULT NULL,
  `kpj_emp` varchar(20) DEFAULT NULL,
  `email_emp` varchar(50) DEFAULT NULL,
  `emailwork_emp` varchar(50) DEFAULT NULL,
  `bank_emp` varchar(20) DEFAULT NULL,
  `bankbranch_emp` varchar(50) DEFAULT NULL,
  `bankacc_emp` varchar(25) DEFAULT NULL,
  `ecn_emp` varchar(50) DEFAULT NULL,
  `father_emp` varchar(50) DEFAULT NULL,
  `mother_emp` varchar(50) DEFAULT NULL,
  `spouse_emp` varchar(50) DEFAULT NULL,
  `numchild_emp` int(11) DEFAULT NULL,
  `numsibling_emp` int(11) DEFAULT NULL,
  `workday_emp` varchar(20) NOT NULL,
  `worktime_emp` varchar(20) NOT NULL,
  `efin_emp` varchar(30) DEFAULT NULL,
  `id_st_emp` varchar(10) NOT NULL,
  `acno_emp` int(6) NOT NULL,
  `id_tt` varchar(4) NOT NULL,
  `notes_emp` text,
  `show_emp` int(1) NOT NULL,
  `code_user` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_emp`
--

INSERT INTO `tb_emp` (`id_emp`, `nm_emp`, `nicknm_emp`, `altnm_emp`, `hon_emp`, `nik_emp`, `id_div`, `id_dept`, `about_emp`, `title_emp`, `pos_emp`, `site_emp`, `stw_emp`, `enw_emp`, `id_loc`, `sex_emp`, `bp_emp`, `bd_emp`, `phone_emp`, `ktp_emp`, `kk_emp`, `sn_emp`, `address_emp`, `marst_emp`, `rel_emp`, `eth_emp`, `edu_emp`, `maj_emp`, `uni_emp`, `blood_emp`, `sim_emp`, `passport_emp`, `npwp_emp`, `bpjs_emp`, `kpj_emp`, `email_emp`, `emailwork_emp`, `bank_emp`, `bankbranch_emp`, `bankacc_emp`, `ecn_emp`, `father_emp`, `mother_emp`, `spouse_emp`, `numchild_emp`, `numsibling_emp`, `workday_emp`, `worktime_emp`, `efin_emp`, `id_st_emp`, `acno_emp`, `id_tt`, `notes_emp`, `show_emp`, `code_user`) VALUES
('E99901', 'Intern', 'Intern', 'Intern', NULL, NULL, 'DV01', 'DP01', '1', NULL, '', '', '2020-09-25', '2020-09-25', 'HQ1', NULL, '', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, 'ST01', 1, 'TT01', NULL, 1, 'USR99901');

-- --------------------------------------------------------

--
-- Table structure for table `tb_frm`
--

CREATE TABLE `tb_frm` (
  `code_frm` varchar(5) NOT NULL,
  `id_frm` varchar(30) NOT NULL,
  `desc_frm` varchar(30) NOT NULL,
  `id_frmgroup` varchar(4) NOT NULL,
  `is_shortcut` int(11) NOT NULL,
  `stat_frm` int(1) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_frm`
--

INSERT INTO `tb_frm` (`code_frm`, `id_frm`, `desc_frm`, `id_frmgroup`, `is_shortcut`, `stat_frm`, `sort_order`) VALUES
('FR002', 'Form', 'Daftar Form', 'FG05', 0, 0, 2),
('FR003', 'Barang', 'Data Barang', 'FG07', 0, 0, 1),
('FR101', 'Access', 'Hak Akses', 'FG99', 0, 1, 1),
('FR102', 'Useraccess', 'Hak Akses', 'FG99', 0, 1, 1),
('FR103', 'Barangmasuk', 'ATK Masuk', 'FG07', 0, 0, 0),
('FR104', 'Barangkeluar', 'ATK Keluar', 'FG07', 0, 0, 0),
('FR105', 'Loker', 'Data Loker', 'FG05', 0, 0, 1),
('FR106', 'Laporan', 'Laporan Masuk', 'FG11', 0, 0, 2),
('FR107', 'Keranjang', 'Keranjang', 'FG05', 0, 0, 2),
('FR108', 'DashboardBarang', 'Dasboard ATK', 'FG07', 0, 0, 1),
('FR109', 'Karyawan', 'Data Karyawan', 'FG05', 1, 1, 1),
('FR110', 'Dashboard', 'Dashboard', 'FG05', 0, 0, 0),
('FR111', 'LaporanNava', 'Laporan atk', 'FG07', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_frmgroup`
--

CREATE TABLE `tb_frmgroup` (
  `id_frmgroup` varchar(4) NOT NULL,
  `nm_frmgroup` varchar(50) NOT NULL,
  `icon_frmgroup` varchar(30) DEFAULT NULL,
  `iconcolor_frmgroup` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_frmgroup`
--

INSERT INTO `tb_frmgroup` (`id_frmgroup`, `nm_frmgroup`, `icon_frmgroup`, `iconcolor_frmgroup`) VALUES
('FG05', 'Others', 'fa-user', 'text-white'),
('FG07', 'Barang', 'fa-user', 'text-white'),
('FG99', 'Trial', 'fa-user', 'text-white');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` varchar(7) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `divisi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nama_karyawan`, `divisi`) VALUES
('K01', 'Siti', '-'),
('K02', 'Ridha', '-'),
('K03', 'Hasan', '-'),
('K04', 'Fahrudin', 'Staff office'),
('K05', 'Aldila', 'Database administrator'),
('K06', 'Zulfa', 'Receptionist'),
('K07', 'Satpam', '-'),
('K08', 'Abd. Hadi', '-'),
('K09', 'Andi', '-'),
('K10', 'Rifqi', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jam` time NOT NULL,
  `id_barang` varchar(7) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id_keranjang`, `tanggal_keluar`, `jam`, `id_barang`, `jumlah`, `catatan`) VALUES
(1, '2020-10-15', '00:20:20', 'BRG0011', 1, ''),
(2, '2020-10-15', '00:20:20', 'BRG0011', 1, ''),
(3, '2020-10-15', '00:20:20', 'BRG0011', 1, ''),
(4, '2020-10-15', '00:20:20', 'BRG0011', 1, ''),
(5, '2020-10-15', '00:20:20', 'BRG0009', 1, ''),
(6, '2020-10-15', '00:20:20', 'BRG0009', 1, ''),
(7, '2020-10-15', '00:20:20', 'BRG0010', 1, ''),
(8, '2020-10-15', '00:20:20', 'BRG0007', 1, ''),
(9, '2020-10-15', '00:20:20', 'BRG0011', 1, ''),
(10, '2020-10-15', '11:24:36', 'BRG0011', 1, ''),
(11, '2020-10-16', '08:18:45', 'BRG0007', 1, ''),
(12, '2020-10-16', '08:18:54', 'BRG0008', 1, ''),
(13, '2020-10-16', '08:19:55', 'BRG0008', 1, ''),
(14, '2020-10-16', '08:20:00', 'BRG0008', 1, ''),
(15, '2020-10-16', '08:30:40', 'BRG0007', 1, ''),
(16, '2020-10-16', '08:31:11', 'BRG0007', 1, ''),
(17, '2020-10-16', '08:31:21', 'BRG0009', 1, ''),
(18, '2020-10-16', '08:32:43', 'BRG0009', 1, ''),
(19, '2020-10-16', '08:38:01', 'BRG0011', 1, ''),
(20, '2020-10-16', '08:42:25', 'BRG0011', 1, ''),
(21, '2020-10-20', '10:19:14', 'BRG0010', 1, ''),
(22, '2020-10-22', '03:51:13', 'BRG0011', 1, ''),
(23, '2020-10-26', '08:23:32', 'GA00002', 1, ''),
(24, '2020-10-26', '08:23:38', 'GA00001', 1, ''),
(25, '2020-10-26', '08:23:42', 'BRG0011', 1, ''),
(26, '2020-10-26', '08:48:37', 'GA00002', 1, ''),
(27, '2020-10-26', '08:48:42', 'GA00001', 1, ''),
(28, '2020-10-26', '08:56:20', 'GA00001', 1, ''),
(29, '2020-10-26', '08:56:23', 'GA00002', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_loc`
--

CREATE TABLE `tb_loc` (
  `id_loc` varchar(3) NOT NULL,
  `nm_loc` varchar(30) NOT NULL,
  `phn_loc` varchar(16) DEFAULT NULL,
  `fax_loc` varchar(16) DEFAULT NULL,
  `email_loc` varchar(50) DEFAULT NULL,
  `addr_loc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_loc`
--

INSERT INTO `tb_loc` (`id_loc`, `nm_loc`, `phn_loc`, `fax_loc`, `email_loc`, `addr_loc`) VALUES
('HQ1', 'Head Office', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_loker`
--

CREATE TABLE `tb_loker` (
  `id_loker` char(4) NOT NULL,
  `nama_loker` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_loker`
--

INSERT INTO `tb_loker` (`id_loker`, `nama_loker`) VALUES
('1-IN', 'Inventaris'),
('1A', 'ATK'),
('1B', 'ATK'),
('2A', '-'),
('2B', 'Inventaris'),
('2E', '-'),
('3A', '-'),
('3E', '-'),
('4A', '-'),
('4C', '-'),
('4E', '-'),
('5A', '-'),
('5B', '-'),
('6A', '-'),
('7E', '-'),
('8E', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting`
--

CREATE TABLE `tb_setting` (
  `profile_id` varchar(4) NOT NULL,
  `website_name` varchar(30) NOT NULL,
  `website_title` varchar(30) NOT NULL,
  `website_icon` varchar(30) NOT NULL,
  `website_logo` varchar(30) NOT NULL,
  `website_address` text NOT NULL,
  `website_phone` text NOT NULL,
  `website_email` varchar(30) NOT NULL,
  `website_twitter` varchar(30) NOT NULL,
  `website_facebook` varchar(30) NOT NULL,
  `website_linkedin` varchar(30) NOT NULL,
  `website_gplus` varchar(30) NOT NULL,
  `website_instagram` varchar(30) NOT NULL,
  `profile_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_setting`
--

INSERT INTO `tb_setting` (`profile_id`, `website_name`, `website_title`, `website_icon`, `website_logo`, `website_address`, `website_phone`, `website_email`, `website_twitter`, `website_facebook`, `website_linkedin`, `website_gplus`, `website_instagram`, `profile_status`) VALUES
('WP01', 'MiO Web', 'PT Mangli Djaya Raya', 'mdr-ico.ico', 'mdr-logo.png', 'Jl Mayjen D.I Pandjaitan No. 99 Petung Bangsalsari, Jember Jawa Timur - Indonesia', '+62331 486656 | 711866 | 711984', 'info@ptmdr.co.id', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `code_user` varchar(8) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `pwd_user` varchar(60) NOT NULL,
  `id_acc` varchar(3) NOT NULL,
  `ava_user` varchar(80) NOT NULL,
  `jd_user` date NOT NULL,
  `isonline_user` int(1) DEFAULT NULL,
  `lastlogin_user` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`code_user`, `nm_user`, `pwd_user`, `id_acc`, `ava_user`, `jd_user`, `isonline_user`, `lastlogin_user`) VALUES
('USR99901', 'intern', '$2y$12$BVbeYKCw8WFhT7cQ55SGO.RjA//4/Xabg2pT5.fAQdroy3mavLk.y', 'A99', 'def.jpg', '2020-09-25', 1, '2020-09-25 13:42:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_acc`
--
ALTER TABLE `tb_acc`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indexes for table `tb_accfrm`
--
ALTER TABLE `tb_accfrm`
  ADD PRIMARY KEY (`id_userfrm`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_barangkeluar`
--
ALTER TABLE `tb_barangkeluar`
  ADD PRIMARY KEY (`id_barang_keluar`);

--
-- Indexes for table `tb_barangmasuk`
--
ALTER TABLE `tb_barangmasuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `tb_emp`
--
ALTER TABLE `tb_emp`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indexes for table `tb_frm`
--
ALTER TABLE `tb_frm`
  ADD PRIMARY KEY (`code_frm`);

--
-- Indexes for table `tb_frmgroup`
--
ALTER TABLE `tb_frmgroup`
  ADD PRIMARY KEY (`id_frmgroup`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `tb_loc`
--
ALTER TABLE `tb_loc`
  ADD PRIMARY KEY (`id_loc`);

--
-- Indexes for table `tb_loker`
--
ALTER TABLE `tb_loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`code_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

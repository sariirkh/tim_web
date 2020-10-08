-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2020 pada 11.25
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

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
-- Struktur dari tabel `tb_acc`
--

CREATE TABLE `tb_acc` (
  `id_acc` varchar(3) NOT NULL,
  `nm_acc` varchar(20) DEFAULT NULL,
  `rem_acc` varchar(20) DEFAULT NULL,
  `stat_acc` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_acc`
--

INSERT INTO `tb_acc` (`id_acc`, `nm_acc`, `rem_acc`, `stat_acc`) VALUES
('A99', 'Intern', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_accfrm`
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
-- Dumping data untuk tabel `tb_accfrm`
--

INSERT INTO `tb_accfrm` (`id_userfrm`, `id_acc`, `code_frm`, `is_add`, `is_edt`, `is_del`, `is_spec1`, `is_spec2`) VALUES
('UF00001', 'A99', 'FRM09', 1, 1, 1, 1, 1),
('UF00002', 'A99', 'FR002', 1, 1, 1, 1, 1),
('UF00004', 'A99', 'FR101', 1, 1, 1, 1, 1),
('UF00005', 'A99', 'FR102', 1, 1, 1, 1, 1),
('UF00007', 'A99', 'FR100', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_emp`
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
-- Dumping data untuk tabel `tb_emp`
--

INSERT INTO `tb_emp` (`id_emp`, `nm_emp`, `nicknm_emp`, `altnm_emp`, `hon_emp`, `nik_emp`, `id_div`, `id_dept`, `about_emp`, `title_emp`, `pos_emp`, `site_emp`, `stw_emp`, `enw_emp`, `id_loc`, `sex_emp`, `bp_emp`, `bd_emp`, `phone_emp`, `ktp_emp`, `kk_emp`, `sn_emp`, `address_emp`, `marst_emp`, `rel_emp`, `eth_emp`, `edu_emp`, `maj_emp`, `uni_emp`, `blood_emp`, `sim_emp`, `passport_emp`, `npwp_emp`, `bpjs_emp`, `kpj_emp`, `email_emp`, `emailwork_emp`, `bank_emp`, `bankbranch_emp`, `bankacc_emp`, `ecn_emp`, `father_emp`, `mother_emp`, `spouse_emp`, `numchild_emp`, `numsibling_emp`, `workday_emp`, `worktime_emp`, `efin_emp`, `id_st_emp`, `acno_emp`, `id_tt`, `notes_emp`, `show_emp`, `code_user`) VALUES
('E99901', 'Intern', 'Intern', 'Intern', NULL, NULL, 'DV01', 'DP01', '1', NULL, '', '', '2020-09-25', '2020-09-25', 'HQ1', NULL, '', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, 'ST01', 1, 'TT01', NULL, 1, 'USR99901');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_frm`
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
-- Dumping data untuk tabel `tb_frm`
--

INSERT INTO `tb_frm` (`code_frm`, `id_frm`, `desc_frm`, `id_frmgroup`, `is_shortcut`, `stat_frm`, `sort_order`) VALUES
('FR002', 'Form', 'Daftar Form', 'FG05', 0, 0, 1),
('FR100', 'Pelamar', 'Form Pelamar', 'FG05', 0, 0, 1),
('FR101', 'Access', 'Hak Akses', 'FG99', 0, 1, 1),
('FR102', 'Useraccess', 'Hak Akses', 'FG99', 0, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_frmgroup`
--

CREATE TABLE `tb_frmgroup` (
  `id_frmgroup` varchar(4) NOT NULL,
  `nm_frmgroup` varchar(50) NOT NULL,
  `icon_frmgroup` varchar(30) DEFAULT NULL,
  `iconcolor_frmgroup` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_frmgroup`
--

INSERT INTO `tb_frmgroup` (`id_frmgroup`, `nm_frmgroup`, `icon_frmgroup`, `iconcolor_frmgroup`) VALUES
('FG05', 'Others', 'fa-user', 'text-white'),
('FG07', 'Report', 'fa-user', 'text-white'),
('FG99', 'Trial', 'fa-user', 'text-white');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_loc`
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
-- Dumping data untuk tabel `tb_loc`
--

INSERT INTO `tb_loc` (`id_loc`, `nm_loc`, `phn_loc`, `fax_loc`, `email_loc`, `addr_loc`) VALUES
('HQ1', 'Head Office', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelamar`
--

CREATE TABLE `tb_pelamar` (
  `id_pelamar` varchar(8) NOT NULL,
  `TglDaftar_pelamar` date NOT NULL,
  `nama_pelamar` varchar(50) NOT NULL,
  `tgllahir_pelamar` date NOT NULL,
  `umur_pelamar` varchar(4) NOT NULL,
  `jk_pelamar` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat_pelamar` varchar(50) NOT NULL,
  `agama_pelamar` enum('Islam','Kristen','Katolik','Budha','Hindu','Kong Hu Chu') NOT NULL,
  `nohp_pelamar` char(12) NOT NULL,
  `status_pelamar` enum('Single','Married') NOT NULL,
  `pdkterakhir_pelamar` varchar(80) NOT NULL,
  `jurusan_pelamar` varchar(50) NOT NULL,
  `asalsekolah_pelamar` varchar(80) NOT NULL,
  `Foto_pelamar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelamar`
--

INSERT INTO `tb_pelamar` (`id_pelamar`, `TglDaftar_pelamar`, `nama_pelamar`, `tgllahir_pelamar`, `umur_pelamar`, `jk_pelamar`, `alamat_pelamar`, `agama_pelamar`, `nohp_pelamar`, `status_pelamar`, `pdkterakhir_pelamar`, `jurusan_pelamar`, `asalsekolah_pelamar`, `Foto_pelamar`) VALUES
('PLM0001', '1903-01-03', 'Herlitsca Mayuri', '1997-08-27', '23', 'Perempuan', 'Jember', 'Islam', '085655905695', 'Single', 'SMK', 'TIK', 'SMK 6 Jember', 'naomi.jpg'),
('PLM0002', '2020-10-06', 'Vivi Trisna Handini', '1996-09-19', '24', 'Laki-laki', 'Jember', 'Islam', '085334372032', 'Single', 'S1', 'Sarjana Pertanian', 'UNEJ', 'E00052.jpg'),
('PLM0003', '1903-08-06', 'Yussabbitnih', '1992-11-15', '28', 'Perempuan', 'Jember', 'Islam', '085258246241', 'Married', 'S1', 'Sarjana Pertanian', 'MU Jember', 'yus.jpg'),
('PLM0004', '2020-02-03', 'Muhammad Abdussyukur', '1996-03-17', '24', 'Perempuan', 'Jember', 'Islam', '081233518947', 'Single', 'S1', 'Sarjana Pertanian', 'UNEJ', 'E00032.jpg'),
('PLM0006', '2020-10-01', 'Wulan Sari', '2018-12-02', '20', 'Perempuan', 'Jember', 'Hindu', '08927635325', 'Married', 'SMA', 'TKK', 'MU', 'ainung2.JPG'),
('PLM0007', '2020-10-01', 'Danang', '2018-09-02', '25', 'Laki-laki', 'Jember', 'Kong Hu Chu', '08923533774', 'Single', 'S2', 'SMA', 'UNEJ', 'dani.JPG'),
('PLM0008', '2020-10-09', 'Dinda Kirana', '2019-07-01', '30', 'Perempuan', 'Jember', 'Budha', '082435367', 'Married', 'SLTP', 'MUltimedia', 'SMK 5 Jember', 'E00090.png'),
('PLM0009', '2020-10-14', 'Bastomi Matara', '2016-11-01', '24', 'Laki-laki', 'Jember', 'Kristen', '081246926713', 'Married', 'SMK', 'TIK', 'SMKN 08 Jember', 'A.jpg'),
('PLM0010', '2020-10-01', 'Ririn', '2020-02-02', '12', 'Perempuan', 'Jember', 'Hindu', '098394768', 'Married', 'SMA', 'TIK', 'SMK 5 Jember', '4x6.jpg'),
('PLM0011', '2020-10-08', 'sintadanjojo', '2019-09-06', '20', 'Perempuan', 'jember', 'Islam', '08983938878', 'Married', 'S3 kedokteran', 'Kedokteran', 'ITS', 'logo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setting`
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
-- Dumping data untuk tabel `tb_setting`
--

INSERT INTO `tb_setting` (`profile_id`, `website_name`, `website_title`, `website_icon`, `website_logo`, `website_address`, `website_phone`, `website_email`, `website_twitter`, `website_facebook`, `website_linkedin`, `website_gplus`, `website_instagram`, `profile_status`) VALUES
('WP01', 'MiO Web', 'PT Mangli Djaya Raya', 'mdr-ico.ico', 'mdr-logo.png', 'Jl Mayjen D.I Pandjaitan No. 99 Petung Bangsalsari, Jember Jawa Timur - Indonesia', '+62331 486656 | 711866 | 711984', 'info@ptmdr.co.id', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
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
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`code_user`, `nm_user`, `pwd_user`, `id_acc`, `ava_user`, `jd_user`, `isonline_user`, `lastlogin_user`) VALUES
('USR99901', 'intern', '$2y$12$BVbeYKCw8WFhT7cQ55SGO.RjA//4/Xabg2pT5.fAQdroy3mavLk.y', 'A99', 'def.jpg', '2020-09-25', 1, '2020-09-25 13:42:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_acc`
--
ALTER TABLE `tb_acc`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indeks untuk tabel `tb_accfrm`
--
ALTER TABLE `tb_accfrm`
  ADD PRIMARY KEY (`id_userfrm`);

--
-- Indeks untuk tabel `tb_emp`
--
ALTER TABLE `tb_emp`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indeks untuk tabel `tb_frm`
--
ALTER TABLE `tb_frm`
  ADD PRIMARY KEY (`code_frm`);

--
-- Indeks untuk tabel `tb_frmgroup`
--
ALTER TABLE `tb_frmgroup`
  ADD PRIMARY KEY (`id_frmgroup`);

--
-- Indeks untuk tabel `tb_loc`
--
ALTER TABLE `tb_loc`
  ADD PRIMARY KEY (`id_loc`);

--
-- Indeks untuk tabel `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indeks untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`code_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

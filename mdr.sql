-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2020 pada 05.01
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
('UF00007', 'A99', 'FR100', 1, 1, 1, 1, 1),
('UF00008', 'A99', 'FR103', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cr`
--

CREATE TABLE `tb_cr` (
  `id_cr` varchar(4) NOT NULL,
  `title_cr` text NOT NULL,
  `content_cr` text NOT NULL,
  `img_cr` varchar(100) NOT NULL,
  `order_cr` int(2) NOT NULL,
  `status_cr` enum('Active','Inactive','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_cr`
--

INSERT INTO `tb_cr` (`id_cr`, `title_cr`, `content_cr`, `img_cr`, `order_cr`, `status_cr`) VALUES
('CR01', 'Corporate Development Staff', '<p><b>Requirement</b></p><p>- Female / Male , With maximum age of 27 years old</p><p>- Good Looking</p><p>- Bachelo\'s degree in Technic Industry<i> ( priority )</i></p><p>- 2+ years experience for ISO 9001:2015</p><p>- Having experience about QHSE&nbsp;</p><p>- Ability to meet assigned deadlines</p><p>- Excellent communication skills, both written and verbal.</p><p>- Good communication in english</p><p>- Strong numeracy and analytical skills.</p><p>- Good problem-solving and time management skills.</p><p>- Highly organized and detail-oriented.</p><p>- Advanced skill in Ms. Excel is mandatory</p><p>- Ability to perform multiple assignments</p><p></p><p>- Confidentiality</p><p><br></p><p>Send your CV &amp; Application letter to&nbsp;</p><p><b><i>news@ptmdr.co.id</i></b></p><p><b><i><br></i></b></p><p><b><i><br></i></b></p><p><b><i><br></i></b></p><p><br></p>', 'web.png', 1, 'Inactive'),
('CR02', 'Accounting Staff', '<div>Requirement<br></div><div><br></div><div><br></div><div style=\"text-align: justify;\">- Female/Male , with maximum age of 27 years old,</div><div style=\"text-align: justify;\">- Good Looking</div><div style=\"text-align: justify;\">- Bachelor\'s degree in Accounting</div><div style=\"text-align: justify;\">- 2+ years of accounting experience.</div><div style=\"text-align: justify;\">- Ability to meet assigned deadlines</div><div style=\"text-align: justify;\">- Excellent communication skills, both written and verbal.</div><div style=\"text-align: justify;\">- Good communication in english</div><div style=\"text-align: justify;\">- Strong numeracy and analytical skills.</div><div style=\"text-align: justify;\">- Good problem-solving and time management skills.</div><div style=\"text-align: justify;\">- Highly organized and detail-oriented.</div><div style=\"text-align: justify;\">- Advanced skill in Ms. Excel is mandatory</div><div style=\"text-align: justify;\">- Having experience using SAP system will be advantage</div><div style=\"text-align: justify;\">- Ability to perform multiple assignments</div><div style=\"text-align: justify; \">- Confidentiality</div><div style=\"text-align: justify; \"><br></div><div><div style=\"text-align: justify; \">Send your CV &amp; Application letter to</div><div style=\"text-align: justify; \">news@ptmdr.co.id</div></div><div><br></div>', 'web.png', 2, 'Inactive');

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
('FR102', 'Useraccess', 'Hak Akses', 'FG99', 0, 1, 1),
('FR103', 'HomePelamar', 'Dashboard Pelamar Kerja', 'FG05', 0, 0, 1);

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
  `nilai_pelamar` double NOT NULL,
  `asalsekolah_pelamar` varchar(80) NOT NULL,
  `prestasi_pelamar` varchar(100) NOT NULL,
  `keahlian_pelamar` varchar(200) NOT NULL,
  `pengalamankerja_pelamar` varchar(200) NOT NULL,
  `loker_pelamar` varchar(100) NOT NULL,
  `statuslowongan_pelamar` enum('open','close') NOT NULL,
  `tahapan_pelamar` enum('mendaftar','upload berkas','interview 1','interview 2','tes excel','tes tulis','psikotes','interview 3','diterima','gagal') NOT NULL,
  `notes_pelamar` varchar(500) NOT NULL,
  `Foto_pelamar` text NOT NULL,
  `file_pelamar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelamar`
--

INSERT INTO `tb_pelamar` (`id_pelamar`, `TglDaftar_pelamar`, `nama_pelamar`, `tgllahir_pelamar`, `umur_pelamar`, `jk_pelamar`, `alamat_pelamar`, `agama_pelamar`, `nohp_pelamar`, `status_pelamar`, `pdkterakhir_pelamar`, `jurusan_pelamar`, `nilai_pelamar`, `asalsekolah_pelamar`, `prestasi_pelamar`, `keahlian_pelamar`, `pengalamankerja_pelamar`, `loker_pelamar`, `statuslowongan_pelamar`, `tahapan_pelamar`, `notes_pelamar`, `Foto_pelamar`, `file_pelamar`) VALUES
('PLM0001', '2020-10-15', 'nabila', '2020-02-01', '12', 'Perempuan', 'jember', 'Islam', '08947354367', 'Single', 'SMK', 'TIK', 35.5, 'smk 5 jember', 'desain', 'desain grafis', 'belum', 'belum tau', 'open', 'mendaftar', 'seleksi berkas', '3.jpg', ''),
('PLM0002', '2020-10-15', 'azizah', '2020-02-01', '20', 'Perempuan', 'jember', 'Islam', '08973664246', 'Single', 'SMA', 'IPA', 25.5, 'SMA 2 JEMBER', 'Olimpiade Matematika', 'Matematika', 'belum pernah', 'belum tau', 'open', 'mendaftar', 'seleksi berkas', 'data.pdf', '');

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
-- Indeks untuk tabel `tb_cr`
--
ALTER TABLE `tb_cr`
  ADD PRIMARY KEY (`id_cr`);

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

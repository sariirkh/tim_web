-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2020 pada 09.44
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
('UF00008', 'A99', 'FR103', 1, 1, 1, 1, 1),
('UF00009', 'A99', 'FR104', 1, 1, 1, 1, 1);

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
('CR01', 'Corporate Development Staff', '<p><b>Requirement</b></p><p>- Female / Male , With maximum age of 27 years old</p><p>- Good Looking</p><p>- Bachelo\'s degree in Technic Industry<i> ( priority )</i></p><p>- 2+ years experience for ISO 9001:2015</p><p>- Having experience about QHSE </p><p>- Ability to meet assigned deadlines</p><p>- Excellent communication skills, both written and verbal.</p><p>- Good communication in english</p><p>- Strong numeracy and analytical skills.</p><p>- Good problem-solving and time management skills.</p><p>- Highly organized and detail-oriented.</p><p>- Advanced skill in Ms. Excel is mandatory</p><p>- Ability to perform multiple assignments</p><p></p><p>- Confidentiality</p><p><br></p><p>Send your CV & Application letter to </p><p><b><i>news@ptmdr.co.id</i></b></p><p><b><i><br></i></b></p><p><b><i><br></i></b></p><p><b><i><br></i></b></p><p><br></p>', 'avatar.png', 2, 'Active'),
('CR02', 'Accounting Staff', '<div>Requirement<br></div><div><br></div><div><br></div><div style=\"text-align: justify;\">- Female/Male , with maximum age of 27 years old,</div><div style=\"text-align: justify;\">- Good Looking</div><div style=\"text-align: justify;\">- Bachelor\'s degree in Accounting</div><div style=\"text-align: justify;\">- 2+ years of accounting experience.</div><div style=\"text-align: justify;\">- Ability to meet assigned deadlines</div><div style=\"text-align: justify;\">- Excellent communication skills, both written and verbal.</div><div style=\"text-align: justify;\">- Good communication in english</div><div style=\"text-align: justify;\">- Strong numeracy and analytical skills.</div><div style=\"text-align: justify;\">- Good problem-solving and time management skills.</div><div style=\"text-align: justify;\">- Highly organized and detail-oriented.</div><div style=\"text-align: justify;\">- Advanced skill in Ms. Excel is mandatory</div><div style=\"text-align: justify;\">- Having experience using SAP system will be advantage</div><div style=\"text-align: justify;\">- Ability to perform multiple assignments</div><div style=\"text-align: justify; \">- Confidentiality</div><div style=\"text-align: justify; \"><br></div><div><div style=\"text-align: justify; \">Send your CV & Application letter to</div><div style=\"text-align: justify; \">news@ptmdr.co.id</div></div><div><br></div>', 'career.JPG', 1, 'Active');

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
('FR002', 'Form', 'Daftar Form', 'FG05', 1, 1, 1),
('FR100', 'Pelamar', 'Data Pelamar', 'FG05', 1, 1, 1),
('FR101', 'Access', 'Hak Akses', 'FG99', 1, 1, 1),
('FR102', 'Useraccess', 'Hak Akses', 'FG99', 1, 1, 1),
('FR103', 'HomePelamar', 'Dashboard Pelamar Kerja', 'FG05', 1, 1, 1),
('FR104', 'Cr', 'Data Career', 'FG05', 1, 1, 1),
('FR105', 'Pelaporan', 'Laporan Pelamar', 'FG05', 1, 1, 1);

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
  `alamat_pelamar` text NOT NULL,
  `kota_pelamar` varchar(50) NOT NULL,
  `agama_pelamar` enum('Islam','Kristen','Katolik','Budha','Hindu','Kong Hu Chu') NOT NULL,
  `nohp_pelamar` char(12) NOT NULL,
  `status_pelamar` enum('Single','Married') NOT NULL,
  `pdkterakhir_pelamar` enum('SD','SMP','SMA/MA','SMK','D1','D2','D3','D4','S1','S2','S3') NOT NULL,
  `jurusan_pelamar` varchar(50) NOT NULL,
  `nilai_pelamar` double NOT NULL,
  `asalsekolah_pelamar` varchar(50) NOT NULL,
  `prestasi_pelamar` varchar(50) NOT NULL,
  `keahlian_pelamar` varchar(50) NOT NULL,
  `pengalamankerja_pelamar` varchar(100) NOT NULL,
  `loker_pelamar` varchar(100) NOT NULL,
  `statuslowongan_pelamar` enum('open','close') NOT NULL,
  `tahapan_pelamar` enum('mendaftar','uploadberkas','interview1','interview2','tesexcel','testulis','psikotes','interview3','diterima','gagal') NOT NULL,
  `notes_pelamar` varchar(500) NOT NULL,
  `Foto_pelamar` text NOT NULL,
  `file_pelamar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelamar`
--

INSERT INTO `tb_pelamar` (`id_pelamar`, `TglDaftar_pelamar`, `nama_pelamar`, `tgllahir_pelamar`, `umur_pelamar`, `jk_pelamar`, `alamat_pelamar`, `kota_pelamar`, `agama_pelamar`, `nohp_pelamar`, `status_pelamar`, `pdkterakhir_pelamar`, `jurusan_pelamar`, `nilai_pelamar`, `asalsekolah_pelamar`, `prestasi_pelamar`, `keahlian_pelamar`, `pengalamankerja_pelamar`, `loker_pelamar`, `statuslowongan_pelamar`, `tahapan_pelamar`, `notes_pelamar`, `Foto_pelamar`, `file_pelamar`) VALUES
('PLM0001', '2020-11-09', 'Lia Nur Safita', '1997-04-11', '23', 'Perempuan', 'Dusun Sadengan, RT 002 RW 015, Rowo Tengah, Sumber Baru', 'Jember', 'Islam', '085749953733', 'Single', 'S1', 'Fakultas Hukum', 3.43, 'Universitas Jember', 'Belum Ada', 'Microsoft Office, Adobe Photoshop dan Corel Draw', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Seleksi Berkas', '19-11-2020-14.56.15.jpg', 'oke.pdf'),
('PLM0002', '2020-11-09', 'Chrizando Dwiki Diputra', '1995-03-28', '25', 'Laki-laki', 'Dusun Sukomakmur RT 003 RW 002, Desa Mendurejo, Umbul Sari', 'Jember', 'Islam', '081249731815', 'Single', 'S1', 'Fakultas Pertanian dan Peternakan', 3.7, 'Universitas Muhammadiyah Malang', 'Belum Ada', 'Microsoft Office,  Corel Draw dan Photoshop', 'Warung Print Jember dan Multindo Auto Finance ', 'CR02', 'open', 'mendaftar', 'Seleksi Berkas', '19-11-2020-16.16.25.jpg', ''),
('PLM0003', '2020-11-09', 'Dina Utami Mahardika', '1996-08-08', '24', 'Perempuan', 'Perum Griya Kencana Asri J-18, RT 003 RW 036, Kebonsari Sumbersari', 'Jember', 'Islam', '085103701156', 'Single', 'D3', 'Manajemen Agribisnis', 3.6, 'Politeknik Negeri Jember', 'Belum Ada', 'Toefl, Ms. Office, Administrasi, Communication dan', 'PT MITRA PINASTHIKA MUSTIKA Tbk dan PT HM SAMPOERNA Tbk', 'CR02', 'open', 'mendaftar', 'Seleksi Berkas', '19-11-2020-16.43.09.jpg', ''),
('PLM0004', '2020-12-02', 'Rizky Febriansyah', '1993-02-11', '27', 'Laki-laki', 'Dsn. Krajan RT/RW  02/01 Kalibaru wetan', 'Banyuwangi', 'Islam', '08113588089', 'Single', 'S1', 'Sarjana Ilmu Komputer', 3.2, 'Universitas Muhammadiyah Jember', 'Tidak ada', 'Microsoft Office dan Photoshop', 'PT. Bank Rakyat Indonesia Tbk', 'CR01', 'open', 'mendaftar', 'gagal seleksi berkas', 'TapScanner 02-12-2020-11.22.jpg', ''),
('PLM0005', '2020-12-02', 'Fany Dwi Irfansyah', '1997-03-19', '23', 'Laki-laki', 'Desa Serut Kec. Panti', 'Jember', 'Islam', '081216301834', 'Single', 'S1', 'Fakultas Pertanian', 3.51, 'Universitas Jember', 'Fasilitator Bidang Pertanian Organik Tanaman', 'Microsoft Office, Access dan Outlook', 'Asisten Laboraturium Teknologi Benih Di Universitas Jember', 'CR01', 'open', 'mendaftar', 'Gagal seleksi berkas', 'TapScanner 02-12-2020-11.34.jpg', ''),
('PLM0006', '2020-12-02', 'Himayatun Nufus', '1996-08-17', '24', 'Perempuan', 'Dusun Krajan 1 RT/RW 003/025 Kasiyan Timur Kecamatan Puger', 'Jember', 'Islam', '08991292099', 'Single', 'D4', 'Teknik Energi Terbarukan', 3.57, 'Politeknik Negeri Jember', 'Pengelola Energi Bangunan Gedung', 'Microsoft Office', 'Belum Pernah', 'CR02', 'open', 'gagal', 'Gagal seleksi Berkas', 'TapScanner 02-12-2020-11.42.jpg', ''),
('PLM0007', '2020-12-02', 'Ahmad Bayu Aji Subroto', '1997-08-15', '23', 'Laki-laki', 'Dusun Krajan RT/RW 002/001 Jatisari Jenggawah', 'Jember', 'Islam', '08818435889', 'Single', 'S1', 'Sastra Inggris', 3.37, 'Universitas Jember', 'Belum Ada', 'English Speaking, English Grammer, English Listeni', 'Belum Pernah', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-11.51.jpg', ''),
('PLM0008', '2020-12-02', 'Muhammad Yusuf Fajar', '1993-10-12', '27', 'Laki-laki', 'Dsn. Krajan RT/TW 002/005 Desa Jambearum Kecamatan Puger', 'Jember', 'Islam', '082264149621', 'Single', 'S1', 'Peternakan', 3.54, 'Universitas Diponegoro', 'Belum Ada', 'English (Toefl PBT)', 'Guru Di SMKN 5 JEMBER dan Yayasan Saifurochman', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-11.51(1).jpg', ''),
('PLM0009', '2020-12-02', 'Vika Nurlutfhiyah Ni\'maturrakhmat', '1996-08-08', '24', 'Perempuan', 'Dusun Krajan RT/RW 01/03 Tisnogambar, Bangsalsari', 'Jember', 'Islam', '085293129638', 'Single', 'S1', 'Teknologi Hasil Pertanian', 3.75, 'Universitas Jember', 'Belum Ada', 'Tidak Ada', 'Admin Kantor dan Keuangan Makmur ', 'CR01', 'open', 'mendaftar', 'Gagal seleksi berkas', 'TapScanner 02-12-2020-12.31.jpg', ''),
('PLM0010', '2020-12-02', 'Nur Adinda Puspasari', '1996-09-09', '24', 'Perempuan', 'Jl. Letjen Suprapto IX Kebonsari', 'Jember', 'Islam', '082231710447', 'Single', 'S1', 'Fakultas Ekonomi Dan Bisnis', 3.29, 'Universitas Jember', 'Tidak Ada', 'English Language dan Microsoft Office', 'Magang di Kantor Perum BULOG', 'CR01', 'open', 'interview1', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-12.31(1).jpg', ''),
('PLM0011', '2020-12-02', 'Agem Budi Aji', '1991-11-25', '29', 'Laki-laki', 'Jl. M.h Thamrin Dusun Ajung Kulon RT/RW 04/03 Desa Ajung', 'Jember', 'Islam', '089525995577', 'Married', 'S1', 'Ekonomi Syriah', 3.21, 'Sekolah Tinggi Ekonomi Islam Yogyakarta', 'Tidak Ada', 'Ms. Office, Language', 'PT. BRI Syariah Tbk.', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-12.31(2).jpg', ''),
('PLM0012', '2020-12-02', 'Edy sutrisno', '1992-02-02', '28', 'Laki-laki', 'Jl. Gurami No.51 Sempusari', 'Jember', 'Islam', '081233526210', 'Single', 'S1', 'Manajemen Pendidikan Islam', 3.43, 'Institut Agama Islam Negeri Jember', 'Tidak Ada', 'Ms. Office dan Language', 'PT Merak Jaya Beton dan PT Mitratama Semesta Lestari', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-12.31(3).jpg', ''),
('PLM0013', '2020-12-02', 'Agus Nur Wahid', '1991-08-18', '29', 'Laki-laki', 'Dsn Karangsono Ds. Grenden Kec. Puger', 'Jember', 'Islam', '081333818328', 'Married', 'S1', 'Manajemen Ekonomi', 3.54, 'Universitas Gajayana Malang', 'Tidak Ada', 'Ms. Office, Corel Draw dan Language', 'Banking PT BRI Persero, Penjualan Asuransi Davestera PT BRI', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-13.54.jpg', ''),
('PLM0014', '2020-12-02', 'Darkus Istain Baskoro', '1993-09-03', '27', 'Laki-laki', 'Jl. Mastrip Gg Masjid RT/RW 07/02 Sukowiryo ', 'Bondowoso', 'Islam', '085331904291', 'Single', 'S1', 'Teknik Informatika', 3.21, 'Universitas Gunadarma', 'Basic User Linux', 'SQl dan Programming', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-13.54(1).jpg', ''),
('PLM0015', '2020-12-02', 'Shasabila Risty', '1997-09-15', '23', 'Perempuan', 'Jl. Aip Moegiman no 50 Dusun Rowo RT/RW 12/05 Tenggarang', 'Bondowoso', 'Islam', '085815340138', 'Single', 'S1', 'Ekonomi Manajemen', 3.91, 'Universitas Muhammadiyah Jember', 'Belum Ada', 'Ms. Office dan Language', 'Kasir admin keungan di Cv Aryanta Prima Perkasa Malang', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-14.10.jpg', ''),
('PLM0016', '2020-12-02', 'Deni Bastian Adiarto', '1996-03-01', '24', 'Laki-laki', 'Jl. Halmahera V no.2 Sumbersari', 'Jember', 'Islam', '085259332139', 'Single', 'S1', 'Ilmu Hukum', 3.34, 'Universitas Jember', 'Belum Ada', 'Ms. Office', 'Magang di Kantor Kejaksaan Lumajang', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-14.10(1).jpg', ''),
('PLM0017', '2020-12-02', 'Mutammimah', '1994-10-12', '26', 'Perempuan', 'Jl. A Yani Dusun Krajan RT/RW 003/007 Serut Panti', 'Jember', 'Islam', '082231087597', 'Single', 'S1', 'Sastra Inggris', 2.89, 'Universitas Jember', 'Belum Ada', 'Ms. Office dan Bahasa Inggris', 'Guru Bahasa Inggris di SMP PGRI PANTI', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-14.55.jpg', ''),
('PLM0018', '2020-12-02', 'Abu Yazid Barokah', '1995-05-28', '25', 'Laki-laki', 'Perumahan Surya Mangli Asri Blok C9', 'Jember', 'Islam', '082260601131', 'Single', 'S1', 'Hukum ekonomi Syariah', 7.9, 'IAIN JEMBER', 'Belum Ada', 'Ms. Office', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-15.22.jpg', ''),
('PLM0019', '2020-12-02', 'Putri Wulandari', '1997-03-06', '23', 'Perempuan', 'Dusun Krajan RT/RW 02/04 Klompangan Ajung', 'Jember', 'Islam', '082139418263', 'Single', 'S1', 'Akuntansi', 3.38, 'Universitas Jember', 'Belum Ada', 'Ms. Office', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-16.12.jpg', ''),
('PLM0020', '2020-12-02', 'Hodaifi', '1996-02-12', '24', 'Laki-laki', 'Jl Sukowono Tamanan, sukosari Lumbung RT/RW 10/02', 'Bondowoso', 'Islam', '082336987770', 'Married', 'S1', 'Ekonomi', 3.54, 'Universitas Muhammadiyah Jember', 'Belum Ada', 'Ms. Office, DEA dan SPSS', 'PT. BCA Finance cab. Jember', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-16.27.jpg', ''),
('PLM0021', '2020-12-02', 'Narulita Ayu Prasetya', '1997-03-12', '23', 'Perempuan', 'Perumahan Kodam V Brawijaya Blok TA 113 Mangli', 'Jember', 'Islam', '082232899498', 'Single', 'S1', 'Ekonomi Dan Bisnis Islam', 3.55, 'IAIN JEMBER', 'Belum Ada', 'Ms. Office', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 02-12-2020-16.35.jpg', ''),
('PLM0022', '2020-12-03', 'Nicko Abdillah Aria wardana', '1991-01-22', '29', 'Laki-laki', 'Perum. Bumi Mangli Permain Blok CC12 RT/RW 001/013 Lingk. Krajan Kel. Mangli', 'Jember', 'Islam', '089562234704', 'Single', 'S1', 'Teknik Elektro', 3.36, 'Universitas Muhammadiyah Jember', 'Belum Ada', 'Ms. Office, Software Instalation, Data Entry, Were', 'PT Wahana Ottomitra Multhiartha Dan PT Ledokombo', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-08.51.jpg', ''),
('PLM0023', '2020-12-03', 'Nurul Ihsan', '1996-07-28', '24', 'Laki-laki', 'Jl. Hayam Wuruk II/98 Kaliwates', 'Jember', 'Islam', '081233579631', 'Single', 'S1', 'Ekonomi Manajemen', 3.39, 'Universitas Muhammadiyah Jember', 'Belum Ada', 'Ms. Office', 'Magang Di PT Bank Mandiri', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-08.58.jpg', ''),
('PLM0024', '2020-12-03', 'Heni Muvita Sari', '1996-06-22', '24', 'Perempuan', 'Dusun Terongan Desa Kebonrejo RT/RW 004/006 Kalibaru', 'Jember', 'Islam', '088103620118', 'Single', 'D4', 'Manajemen Agroindustri', 3.71, 'Politeknik Negeri Jember', 'Belum Ada', 'Ms. Office, GMP, FSSC', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-09.14.jpg', ''),
('PLM0025', '2020-12-03', 'Fadilla Endah Sunarsiyani', '1988-09-13', '32', 'Perempuan', 'Dusun Gumuk Banji, RT/RW 002/027 Kencong ', 'Jember', 'Islam', '085211005474', 'Single', 'S1', 'Ilmu Sosial Dan Ilmu Politik', 3.19, 'Universitas Jember', 'Juara 2 Lomba Cerdas Cermat PAI se-KAB. Jember', 'Ms. Office', 'PT. Driessa Nedda Asia Jakarta dan PT Bank Mega Jakarta', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-09.25.jpg', ''),
('PLM0026', '2020-12-03', 'Reza Fachruddin Azhar', '1996-11-23', '24', 'Laki-laki', 'Dsn. Balekambang RT/RW 01/07 Kencong', 'Jember', 'Islam', '082336116183', 'Single', 'S1', 'Teknik', 3.76, 'Universitas Muhammadiyah Jember', 'Belum Ada', 'Ms. Office dan Photoshop Premiere', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-09.25(1).jpg', ''),
('PLM0027', '2020-12-03', 'Guntur Prasetyo', '1997-04-09', '23', 'Laki-laki', 'Dsn. Krajan Tengah RT/RW 006/002 Sumberjati Tempeh', 'Jember', 'Islam', '085791578985', 'Single', 'S1', 'Ekonomi dan Bisnis', 3.42, 'Universitas Jember', 'Belum Ada', 'Ms. Office', 'BROW and TOUR TRAVEL ', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-09.34.jpg', ''),
('PLM0028', '2020-12-03', 'Fajriyah', '1996-03-19', '24', 'Perempuan', 'Jl. Otista  Gg Amat No 14 Mangli ', 'Jember', 'Islam', '08813206547', 'Single', 'S1', 'Ekonomi Syariah', 3.47, 'IAIN Jember', 'Belum Ada', 'Ms. Office', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Selekis Berkas', 'TapScanner 03-12-2020-09.44.jpg', ''),
('PLM0029', '2020-12-03', 'Anggel Retno Saputro', '1996-03-08', '24', 'Laki-laki', 'Jl. Lettu Mulyadi No.54 Ds. Puger Kulon, Kec. Puger', 'Jember', 'Islam', '081229545504', 'Single', 'S1', 'Ilmu sejarah', 3.14, 'Universitas Jember', 'Belum Ada ', 'Ms. Office', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-09.55 (1).jpg', ''),
('PLM0030', '2020-12-03', 'Bela Samsul Arifin ', '1997-06-15', '23', 'Laki-laki', 'Jl. Letjen S. Parman No.20 RT/RW 002/001 Dsn. Kloncing Timur Sumbersari', 'Jember', 'Islam', '089668524895', 'Single', 'S1', 'Ilmu Sosial dan Ilmu Politik', 3.82, 'Universitas Muhammadiyah Jember', 'Juara 2 Lomba Daur Ulang ', 'Ms. Office dan Statistik ', 'BRI LIFE Jember dan PT K_LINK INDONESIA ', 'CR01', 'open', 'mendaftar', 'Gagal seleksi Berkas', 'TapScanner 03-12-2020-10.00.jpg', ''),
('PLM0031', '2020-03-06', 'Sri Wahyuni', '1997-04-15', '23', 'Perempuan', 'Dsn. Krajan RT/RW 002/001 Desa Klompangan Ajung', 'Jember', 'Islam', '082132853265', 'Single', 'S1', 'Universitas Jember', 3.5, 'Universitas Jember', 'Juara III Lomba Bahasa Inggris', 'Ms. Office', ' Cannon Media Jember', 'CR02', 'open', 'mendaftar', 'Gagal seleksi Berkas', 'TapScanner 03-12-2020-10.14 (1).jpg', ''),
('PLM0032', '2020-03-05', 'Abi Andika Putra', '1996-10-26', '24', 'Laki-laki', 'Beteng Sidomekar RT/RW 05/05 Kecamatan Semboro', 'Jember', 'Islam', '081252837582', 'Single', 'S1', 'Manajemen', 3.07, 'Stie Mandala Jember', 'Belum Ada', 'Ms. Office', 'Pelatihan Kewirausahaan BLKI Jember', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.24.jpg', ''),
('PLM0033', '2020-03-03', 'Abdul Hadi', '1994-03-03', '26', 'Laki-laki', 'Dsn. Krajan III RT/RW 03/34 Wringin Agung Jombang', 'Jember', 'Islam', '085646689184', 'Single', 'S1', 'Fakultas Hukum', 3.52, 'Universitas Wijaya Kusuma Surabaya', 'Juara 10 Lomba Karya Tulis Ilmiah', 'Ms. Office', 'PT Citra Busana Jaya Pertiwi', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.24.jpg', ''),
('PLM0034', '2020-03-06', 'Feby Vitri Habsari', '1997-02-09', '23', 'Perempuan', 'Dsn Krajan Tisnogambar RT/RW 001/003 Bangsalsari', 'Jember', 'Islam', '089608434251', 'Single', 'S1', 'Pertanian', 3.75, 'Universitas Jember', 'Belum Ada', 'Ms. Office', 'PTPN XII KENDENGLEMBU', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37.jpg', ''),
('PLM0035', '2020-07-20', 'Muhammad Sofyan', '1994-04-28', '26', 'Laki-laki', 'Dsn. Kedungsuko Bangsalsari', 'Jember', 'Islam', '085730356109', 'Married', 'SMA/MA', 'IPS', 8.3, 'MA Annur Bangsalsari', 'Belum Ada', 'Belum Ada', 'PT ISS Surabaya', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37(1).jpg', ''),
('PLM0036', '2020-08-22', 'Ahmad Dofir Efendi', '1996-09-28', '24', 'Laki-laki', 'Dsn. Dukuh 1 Banjarsari Kec. Bangsalsari', 'Jember', 'Islam', '081340141155', 'Married', 'SMA/MA', 'IPS', 7.2, 'SMAN 1 Tanggul', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37(2).jpg', ''),
('PLM0037', '2020-12-03', 'Desi Dwi Ayu Lestari', '1997-12-25', '23', 'Perempuan', 'Dsn. Glundengan RT/RW 02/03 Panti', 'Jember', 'Islam', '085959907940', 'Single', 'SMK', 'Pengawasan Mutu Hasil Pertanian dan Perikanan', 0, 'SMK 5 JEMBER', 'Tidak Ada', 'Tidak Ada', 'PT Aneka Daya Solarindo', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37(3).jpg', ''),
('PLM0038', '2020-07-27', 'Fajar Muttaqien', '1988-05-19', '32', 'Laki-laki', 'XIV Letjen Soeprapto Kebonsari Sumbersari', 'Jember', 'Islam', '082112540019', 'Married', 'SMA/MA', 'Bahasa Indonesia', 24.53, 'SMAN 3 JEMBER', 'Tidak Ada', 'Adob Photosop dan Ms. Office', 'Sales PT Siantar Top', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37(4).jpg', ''),
('PLM0039', '2020-07-08', 'Muhammad Yani', '1995-04-24', '25', 'Laki-laki', 'Jl. WR Supratman Dsn Krajan B. Gambirono Bangsalasari', 'Jember', 'Islam', '088231678316', 'Single', 'SMK', 'Pemasaran', 80.3, 'SMK MHI Bangsalsari', 'Tidak Ada', 'Tidak Ada', 'PT. SEJAHTERA USAHA BERSAMA', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37(5).jpg', ''),
('PLM0040', '2020-07-09', 'Teksan Adi wijaya', '1993-01-23', '27', 'Laki-laki', 'Dsn. Krajan B. RT/RW 01/35 Bangsalsari', 'Jember', 'Islam', '082137176245', 'Married', 'SMK', 'Teknik Otomotif', 8.6, 'SMK YPM 14 Sumobito Jombang', 'Tidak Ada', 'Teknik Kendaraan Ringan', 'PT. Catur Aditya Sentosa', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37(6).jpg', ''),
('PLM0041', '2020-07-16', 'Mochammad Zainal Muchtar', '1993-04-20', '27', 'Laki-laki', 'Jl. BR Wahidin I/70 RT 02 RW 23 Kebon Dalem', 'Jember', 'Islam', '082233711491', 'Single', 'D3', 'Manajemen Agribisnis', 3.61, 'Politeknik Negeri Jember', 'Tidak Ada', 'Ms. Office, Aplikasi SAP', 'PT Reska Multi Usaha Branch Office 9 jember', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi berkas', 'TapScanner 03-12-2020-10.37(7).jpg', ''),
('PLM0042', '2020-12-03', 'Erik Setiawan', '1984-01-28', '36', 'Laki-laki', 'Jln. tanjung 02 Tanggul Kulon ', 'Jember', 'Islam', '085813409821', 'Married', 'SMK', 'Teknik Mesin ', 8, 'SMK Muhammadiyah Kepanjen Malang', 'Tidak Ada', 'Tidak Ada', 'Magang di PT. Perkebunan Nusantara', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37(8).jpg', ''),
('PLM0043', '2020-12-03', 'Adi Satya Sena putra', '1993-11-26', '27', 'Laki-laki', 'Jl. Raya Srono GG SDN 7 Kebaman No. 11 Srono ', 'Banyuwangi', 'Islam', '087887766653', 'Single', 'S1', 'Teknik elektro', 3.07, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'PT CIOMAS AdiSatwa Magelang', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37(10).jpg', ''),
('PLM0044', '2020-08-05', 'Tri Wardani Wajarwati', '2001-01-17', '19', 'Perempuan', 'Kalisatan Bangsalsari', 'Jember', 'Islam', '08883810180', 'Single', 'SMK', 'Akuntansi Keuangan Lembaga', 79, 'SMK MHI', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37(11).jpg', ''),
('PLM0045', '2020-07-08', 'Wais Al Kufini', '1995-11-22', '25', 'Laki-laki', 'Gambirono Kulon RT/RW 001/007 Gambirono Bangsalsari', 'Jember', 'Islam', '089667702759', 'Single', 'SMK', 'Teknik Kendaraan Ringan', 7.7, 'PGRI 3 Tanggul', 'Tidak Ada', 'Tidak Ada', 'PT LANGGENG MAKMUR UTAMA', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37(12).jpg', ''),
('PLM0046', '2020-07-09', 'Hariyanto', '1988-10-12', '32', 'Laki-laki', 'Gambirono', 'Jember', 'Islam', '082330636856', 'Married', 'SMK', 'Teknik Komputer dan Jaringan', 7.1, 'SMKN 2 Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Selesi Berkas', 'TapScanner 03-12-2020-10.37(13).jpg', ''),
('PLM0047', '2020-03-01', 'Jinani Firdausiah', '1996-03-17', '24', 'Perempuan', 'Jl. Argopuro No.27 RT 02 RW 03 Manggisan Tanggul', 'Jember', 'Islam', '082331522796', 'Single', 'S1', 'Sarjana Hukum Ekonomi Syariah', 3.58, 'STIS MIFTAHUL ULUM LUMAJANG', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37(14).jpg', ''),
('PLM0048', '2019-09-09', 'Bambang Agus Suryo Drari', '1987-11-14', '33', 'Laki-laki', 'Dsn. babatan RT 03 RW 15 Sidomekar Semboro', 'Jember', 'Islam', '085706445573', 'Married', 'SMA/MA', 'Bahasa', 40.04, 'SMAN 1 SUTOJAYAN', 'Tidak ada', 'Tidak Ada', 'PT LANGGENG KARYA MAKMUR LESTARI', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-10.37(15).jpg', ''),
('PLM0049', '2019-10-08', 'Imam Hanafi', '1996-06-13', '24', 'Laki-laki', 'Dsn Krajan RT 02 RW 11 Gelang Sumber Baru', 'Jember', 'Islam', '088103716055', 'Single', 'SMK', 'Teknik Kendaraan Ringan', 78.3, 'SMKN 7 JEMBER', 'Tidak Ada', 'Tidak Ada', 'Di Gudang Alfamart', 'CR01', 'open', 'mendaftar', 'Gagal seleksi Berkas', 'TapScanner 03-12-2020-10.37(16).jpg', ''),
('PLM0050', '2020-04-01', 'Ardiansyah Trisnanto', '1992-07-22', '28', 'Laki-laki', 'Jl. Danau Tundano RT 04 RW 06 ', 'Jember', 'Islam', '082140982945', 'Single', 'S1', 'Ilmu hukum', 3.16, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'Bank Mandiri taspen', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi berkas', 'TapScanner 03-12-2020-10.37(17).jpg', ''),
('PLM0051', '2020-12-03', 'M. Bagus Prasetyo', '2000-10-23', '20', 'Laki-laki', 'Dsn. Gumuk Kembar Sidorejo Umbulsari', 'Jember', 'Islam', '085236228752', 'Single', 'SMK', 'Teknik Kendaraan Ringan Otomotif', 25.75, 'SMK PGRI 3 TANGGUL', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08.jpg', ''),
('PLM0052', '2020-06-05', 'Vicky Dwi Afandi', '2001-02-03', '19', 'Laki-laki', 'Dsn. Gumuk Kembar RT 03 RW 07 kel. Sidorejo Umbulsari', 'Jember', 'Islam', '085711287870', 'Single', 'SMK', 'Tidak Tau', 0, 'SMK PGRI 3 TANGGUL', 'Tidak Ada', 'Tidak Ada', 'Bengkel Gaguk Mandiri', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(1).jpg', ''),
('PLM0053', '2020-08-20', 'Zulfa Nuril Hikmah', '1996-12-23', '24', 'Perempuan', 'RT 01 RW 04 Dsn Karang Pokap Desa Seruni Jenggawah', 'Jember', 'Islam', '082237118823', 'Single', 'S1', 'Pertanian', 3.74, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(3).jpg', ''),
('PLM0054', '2020-06-10', 'Nurcholis Arifin', '1993-03-28', '27', 'Laki-laki', 'Jl. Mayjen Sutoyo Gg 1 No. 17 Kraksaan', 'Probolinggo', 'Islam', '082228485245', 'Single', 'D3', 'Ekonomi', 3.43, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'KKL Dewata Garmen Bali', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(4).jpg', ''),
('PLM0055', '2020-12-03', 'Mardi', '1972-02-03', '48', 'Laki-laki', 'Perum Kebon Agung indah Blok X No.2 ', 'Jember', 'Islam', '085101266567', 'Married', 'SMA/MA', 'Ekonomi', 136, 'SMEA EKONOMI WALISONGO', 'Tidak Ada', 'Tidak Ada', 'Driver PT Sinar Gloria', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(5).jpg', ''),
('PLM0056', '2020-06-17', 'Anisatul Qoimah', '1991-02-21', '29', 'Perempuan', 'Karang Semanding RT 02 RW 07 Sukorejo Bangsalsari', 'Jember', 'Islam', '085232932098', 'Single', 'SMA/MA', 'Paket C', 82, 'Paket C', 'Tidak Ada', 'Tidak Ada', 'Karyawan Koperasi SMP 1 Bangsalsari', 'CR01', 'open', 'mendaftar', 'Gagal seleksi Berkas', 'TapScanner 03-12-2020-13.08(6).jpg', ''),
('PLM0057', '2020-06-12', 'Niken Ayu Larasati', '1998-06-05', '22', 'Perempuan', 'Jl. Sentotprawirodijo XIV /120', 'Jember', 'Islam', '085211952424', 'Single', 'S1', 'Pendidikan Bahasa dan Seni', 3.68, 'Universitas Jember', 'Tidak Ada', 'Public Speaking, Komunication dan Ms. Office', 'EF Jember', 'CR01', 'open', 'mendaftar', 'Gagal seleksi berkas', 'TapScanner 03-12-2020-13.08(7).jpg', ''),
('PLM0058', '2020-06-16', 'Edi Sanjaya', '1998-05-14', '22', 'Laki-laki', 'Sukorejo bangsalsari', 'Jember', 'Islam', '081331116004', 'Single', 'SMK', 'Multimedia', 79, 'SMK MAARIF BANGSALSARI', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(8).jpg', ''),
('PLM0059', '2020-07-19', 'Wahyu Eko Manunggal', '2002-11-11', '18', 'Laki-laki', 'Dsn Gumuk Kembar RT 03 RW 07 Sidorejo Umbul sari', 'Jember', 'Islam', '085806208226', 'Single', 'SMK', 'Teknik Kendaraan Otomotif', 34.25, 'SMK PGRI 3 Tanggul', 'Tidak Ada', 'Tidak Ada', 'Bengkel Gaguk Mandiri', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(9).jpg', ''),
('PLM0060', '2020-08-07', 'Yogi Hakiki Fanani', '1995-02-11', '25', 'Laki-laki', 'Dsn. Karajan B RT 01 RW 35 Bangsalsari', 'Jember', 'Islam', '081393333220', 'Single', 'S1', 'Ilmu Administrasi', 3.6, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'OSPEK UKMK', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(10).jpg', ''),
('PLM0061', '2019-09-25', 'Listyan Udi Windarsih', '1995-06-26', '25', 'Perempuan', 'Jl. Kh Wahid Hasyim No.36', 'Jember', 'Islam', '085939318588', 'Single', 'SMK', 'Tataboga', 9, 'SMKN 3 JEMBER', 'Tidak Ada', 'Tidak Ada ', 'Restoran United Steak', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(11).jpg', ''),
('PLM0062', '2020-12-03', 'Maliha', '1995-07-07', '25', 'Perempuan', 'Bangsalsari', 'Jember', 'Islam', '0', 'Single', 'SMK', 'Akuntansi', 9.23, 'SMK MHI Bangsalsari', 'Tidak Ada', 'Tidak Ada', 'PT. Sumber Alfaria Trijaya Tbk.', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(12).jpg', ''),
('PLM0063', '2020-06-08', 'Dony Agus Purwanto', '2001-10-12', '19', 'Laki-laki', 'Dsn Balung Kopi Kidul RT 04 RW 04 ', 'Jember', 'Islam', '085859928122', 'Single', 'SMA/MA', 'IPS', 80.67, 'MA WAHID HASYIM', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(13).jpg', ''),
('PLM0064', '2020-06-12', 'Muhammad Tonir Sodik', '2000-11-28', '20', 'Laki-laki', 'Petung Paguan RT 01 RW 01 ', 'Jember', 'Islam', '087823661078', 'Single', 'SMK', 'Pemasaran', 73, 'SMK PLUS Darussalam', 'Tidak Ada', 'Mengoperasikan Komputer', 'PKL Di Transmart Jember', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(14).jpg', ''),
('PLM0065', '2020-06-08', 'Misbahul Munir', '1992-01-12', '28', 'Laki-laki', 'Dsn. Taman Rejo RT 03 RW 07 Taman Sari Wuluhan', 'Jember', 'Islam', '082264153821', 'Single', 'SMK', 'Bahasa Indonesia', 67.49, 'SMK Teknologi Balung', 'Tidak Ada', 'Mengelas', 'CV. Karya Mandiri', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(15).jpg', ''),
('PLM0066', '2020-06-09', 'Beny Setiyo Nugroho', '1994-08-06', '26', 'Laki-laki', 'Dsn Cabean RT 03 Rw 01 Kertosari Kec. Geger ', 'Madiun', 'Islam', '085232801516', 'Single', 'S1', 'Psikologi', 3.43, 'Universitas Muhammadiyah Malang', 'Tidak Ada', 'Ms. Office', 'PT. Sumber Alfaria Trijaya', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(16).jpg', ''),
('PLM0067', '2020-04-18', 'Azizah Desy Safwana', '2000-12-05', '20', 'Perempuan', 'Dsn. Glengseran RT 03 Rw 06 Suci panti', 'Jember', 'Islam', '085731543380', 'Single', 'SMA/MA', 'IPA', 82.3, 'SMA Diponogero Panti', 'Tidak Ada', 'Tidak Ada', 'Pelatihan Satpam', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(17).jpg', ''),
('PLM0068', '2020-12-03', 'Robitoh Hakibul Elsar', '1993-11-05', '27', 'Laki-laki', 'Jl. Dharmawangsa R.7 No.2 Rambigundam, Rambipuji', 'Jember', 'Islam', '082233845606', 'Single', 'SMK', 'Pemasaran', 7.77, 'SMKN 1 Jember', 'Tidak Ada', 'Tidak Ada', 'Koperasi Agrobisnis Tarutama Nusantara', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-13.08(18).jpg', ''),
('PLM0069', '2019-12-01', 'Septy Tri Wahyuni', '1996-09-12', '24', 'Perempuan', 'Perum Griya Mangli Indah CE 2 ', 'Jember', 'Islam', '081234870743', 'Single', 'S1', 'Teknologi Hasil Pertanian', 3.49, 'Universitas Jember', 'Tidak Ada', 'Ms. Office dan Ms. Visio', 'Bisnis Online (Usaha Pulsa dan Frozen Food)', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-15.28.jpg', ''),
('PLM0070', '2019-12-07', 'Desy Bella Saswari', '1996-12-15', '24', 'Perempuan', 'Dsn. Krajan RT 05 RW 06 Kec. Jatiroto ', 'Lumajang', 'Islam', '085230993164', 'Single', 'D4', 'Teknik Produksi Benih', 3.42, 'Politeknik Negeri Jember', 'Tidak Ada', 'Ms. Office dan Adobe Photosop', 'Pemodalan Nasional Madani', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-15.28(1).jpg', ''),
('PLM0071', '2019-12-08', 'Fadli Affan', '1998-03-05', '22', 'Laki-laki', 'Dsn. Krajan A RT 03 RW 020 Desa Gambirono Bangsalsari', 'Jember', 'Islam', '081374842036', 'Single', 'SMK', 'Teknik Ketenagalistrikan', 76, 'SMK PGRI 03 TANGGUL', 'Tidak Ada', 'Tidak Ada', 'PT Pulau Sambu', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-15.28(2).jpg', ''),
('PLM0072', '2019-12-10', 'Endah Rospitasari', '1995-08-20', '25', 'Perempuan', 'Ampel Wuluhan', 'Jember', 'Islam', '085230292942', 'Single', 'S1', 'Keguruan dan Ilmu pendidikan', 3.66, 'Universitas Muhammadiyah Jember', 'Tidak Ada', 'Ms.Office', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-15.49.jpg', ''),
('PLM0073', '2019-12-12', 'Moh Badrus Soleh', '2000-10-17', '20', 'Laki-laki', 'Jl. Batang Hari Kulon Gambirono', 'Jember', 'Islam', '085345037622', 'Single', 'SMK', 'Multimedia', 69, 'SMK BANY KHOLIEL', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-15.49(1).jpg', ''),
('PLM0074', '2019-12-10', 'Nadya Audyna', '1997-11-17', '23', 'Perempuan', 'Dsn. Gedangan RT 001 RW 019 Desa Puger Kulon', 'Jember', 'Islam', '081336769230', 'Single', 'S1', 'Ilmu Pemerintahan', 3.78, 'Universitas Muhammadiyah Jember', 'Tidak Ada', 'Ms.Office', 'Pelayanan Isntansi Pemerintahan Desa', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-15.49(2).jpg', ''),
('PLM0075', '2019-12-06', 'Febriana Irianto Putri', '1997-02-15', '23', 'Perempuan', 'Dsn Krajan RT 03 RW 05 Desa Kertosari Kec Pakusari', 'Jember', 'Islam', '081230618354', 'Single', 'S1', 'Manajemen', 3.63, 'Universitas Muhammadiyah Jember', 'Tidak Ada', 'Ms. Office', 'Guru TK PGRI 2 Mayang', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-16.06.jpg', ''),
('PLM0076', '2019-12-09', 'Diana Rizqa Auliya', '1997-01-13', '23', 'Perempuan', 'Dusun Gayam RT 001 RW 026 Rambigundam', 'Jember', 'Islam', '089614931007', 'Single', 'D4', 'Manajemen Agroindustri', 3.63, 'Politeknik Negeri Jember', 'Juara harapan 2 Penelitian Tambakau Jember', 'Ms. Office', 'Industri Sayuran Beku', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-16.12.jpg', ''),
('PLM0077', '2019-12-09', 'Rosana Panggawean', '1997-04-01', '23', 'Perempuan', 'Jl Udang Windu No.43 Kaliwates', 'Jember', 'Islam', '081331819689', 'Single', 'SMK', 'Kimia Analisis', 86.3, 'SMKN 5 JEMBER', 'Tidak Ada', 'Kemampuan Analisis Kimia dan Ms. Office', 'PT Perkebunan X Jember', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-16.19.jpg', ''),
('PLM0078', '2020-02-28', 'Amirul Ghufron An Najib', '1996-11-25', '24', 'Laki-laki', 'Dusun Krajan RT 004 RW 005 Jatiroto', 'Jember', 'Islam', '082147139770', 'Single', 'S1', 'Teknologi Industri', 3.54, 'Institut Teknologi Sepuluh Nopember', 'Tidak ada', 'Ms. Office', 'Tidak Ada', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-16.19(1).jpg', ''),
('PLM0079', '2020-02-28', 'Jesicha Maulida S.', '1993-09-12', '27', 'Perempuan', 'Perum Dharma Alam Blok AM No.2', 'Jember', 'Islam', '087863411712', 'Single', 'S1', 'Ilmu ekonomi Pembanguna', 3.5, 'Universitas Jember', 'Tidak Ada', 'Ms. Office dan PIVOT', 'PT Moga Djaja dan PT samator Gas Industri', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-16.36.jpg', ''),
('PLM0080', '2020-03-02', 'Asih Putri Wardhani', '1996-06-22', '24', 'Perempuan', 'Dusun Rambutan No.20 Rt 001 Rw 006 Bangsalsari ', 'Jember', 'Islam', '081223467211', 'Single', 'S1', 'Sastra Inggris', 3.6, 'Universitas Negeri Jember', 'Tidak Ada', 'Ms. Office', 'Sebagai LO tamu asing dari Tim LKP Texas Jember', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 03-12-2020-16.43.jpg', ''),
('PLM0081', '2019-12-09', 'Vina Meriana', '1996-05-25', '24', 'Perempuan', 'Jl. Letjen Sutojo III Ling. Sumber Pakem RT 03 RW 032, Kebonsari', 'Jember', 'Islam', '08975044418', 'Single', 'D4', 'Manajemen Agroindustri', 3.79, 'Politeknik Negeri Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-08.23.jpg', ''),
('PLM0082', '2019-12-09', 'Wahyu Tri Widodo', '1999-07-19', '21', 'Laki-laki', 'Dusun Semboro Pasar  RT 03  RW 14 Desa Semboro Kecamatan Semboro', 'Jember', 'Islam', '081277247421', 'Single', 'SMK', 'Teknik Intalasi Pemanfaatan Tenaga Listrik', 80, 'SMK PGRI 3 Tanggul', 'Tidak Ada', 'Tidak Ada', 'Teknisi di PT Pulau Sambu Guntung', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-08.23(1).jpg', ''),
('PLM0083', '2019-12-06', 'Aprilia Popika Sari', '1997-04-22', '23', 'Perempuan', 'Jl. Panjaitan Dusun Krajan RT006/RW013 , Tanggul ', 'Jember', 'Islam', '087757163097', 'Single', 'S1', 'Akuntansi', 3.55, 'STIE Mandala', 'Tidak Ada', 'Tidak Ada', 'Belum Ada', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-08.32.jpg', ''),
('PLM0084', '2019-12-09', 'Erni Setyawati', '1997-07-25', '23', 'Perempuan', 'Jalan Gajah Mada XXIII/126, Kecamatan Kaliwates', 'Jember', 'Islam', '089536914373', 'Single', 'D3', 'Teknologi Pertanian', 3.18, 'Politeknik Negeri Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Ada', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-08.32(2).jpg', ''),
('PLM0085', '2019-12-09', 'Aris Dwi Nurul Mala', '1993-08-09', '27', 'Perempuan', 'Perum Griya Mangli No, C11', 'Jember', 'Islam', '082332662297', 'Single', 'S1', 'Agribisnis', 3.2, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Ada', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-08.41.jpg', ''),
('PLM0086', '2019-12-12', 'Tristia Fatmarini', '1994-11-30', '26', 'Perempuan', 'Dusun Krajan 1 RT/RW 003/003 Desa Puger Kulon Kecamatan Puger', 'Jember', 'Islam', '082232462510', 'Single', 'S1', 'Ekonomi Pembangunan', 3.78, 'Universitas Moch. Sroedji Jember', 'Tidak Ada', 'Ms. Office', 'Jember Helm (Toko)', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-08.43.jpg', ''),
('PLM0087', '2020-10-16', 'Muh Sauqi Bahriyanto', '1999-12-01', '21', 'Laki-laki', 'Dsn Sira', 'Jember', 'Islam', '085749702439', 'Single', 'SMK', 'Multimedia', 79, 'SMKN 5 Jember', 'Tidak Ada', 'Tidak Ada', 'MitraTani 27 Jember', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-08.43(1).jpg', ''),
('PLM0088', '2019-12-12', 'Ranys Kristiyana', '1996-07-06', '24', 'Perempuan', 'Sumberejo , Yosoroti', 'Sumberbaru', 'Islam', '085746456584', 'Single', 'S1', 'Ekonomi Pembangunan', 3.8, 'Universitas Moch Sroedji Jember', 'Tidak Ada', 'Ms. Office', 'Jember Helm', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-08.43(2).jpg', ''),
('PLM0089', '2020-12-01', 'Isnaini', '2000-06-08', '20', 'Perempuan', 'Dusun Gerdu RT/RW 03/01 Tambakrejo', 'Tongas', 'Islam', '087761490418', 'Single', 'SMA/MA', 'Tidak Ada', 87, 'Nurul Jadid Paiton', 'Tidak Ada', 'Tidak Ada', 'Belum pernah', 'CR02', 'open', 'mendaftar', 'Seleksi Berkas', 'TapScanner 04-12-2020-08.43(3).jpg', ''),
('PLM0090', '2020-12-01', 'Marta Ayu Amalia Putri', '1992-03-15', '28', 'Perempuan', 'Dusun Gerdu RT/RW 03/01 Tambakrejo - Tonggas ', 'Probolinggo', 'Islam', '081238155292', 'Single', 'SMA/MA', 'Tidak Ada', 58.17, 'SMKN 5 Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Ada', 'CR01', 'open', 'mendaftar', 'Seleksi Berkas', 'TapScanner 04-12-2020-08.43(4).jpg', ''),
('PLM0091', '2020-11-30', 'Agus Ragil Saputra', '1995-08-22', '25', 'Laki-laki', 'Dusun Kedung Sumur RT/RW 001/004', 'PUGER', 'Islam', '088990000380', 'Single', 'SMA/MA', 'Tidak Ada', 7.92, 'Satya Dharma Balung', 'Tidak Ada', 'Tidak Ada', 'Belum Ada', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas ', 'TapScanner 04-12-2020-08.43(5).jpg', ''),
('PLM0092', '2019-12-09', 'Dara Kamaratih', '1996-08-27', '24', 'Perempuan', 'Jl. Sumatra VIII No.20 ', 'Jember', 'Islam', '085806877509', 'Single', 'S1', 'Ilmu Hukum', 3.44, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Ada', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-08.43(6).jpg', ''),
('PLM0093', '2019-12-03', 'Rusmita Yulindah Prastika', '1999-07-14', '21', 'Perempuan', 'Dusun Dukuhsia, RT/RW 06/03 Desa Rambigundam Kecamatan Rambipuji', 'Jember', 'Islam', '082233836627', 'Single', 'SMK', 'Pengolahan Hasil Pertanian', 80.8, 'SMKN 5 Jember', 'Tidak Ada', 'Tidak Ada', 'BTPN Syahriah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-08.43(7).jpg', ''),
('PLM0094', '2020-10-02', 'Hoirul Umam', '1999-08-05', '21', 'Laki-laki', 'Dusun Sumber Gebang RT/RW 001/013 Desa Langkap - Bangsalsari', 'Jember', 'Islam', '08813241835', 'Single', 'SMK', 'Akuntansi', 81, 'SMK Mambaúl Khoiriyah Islamiyah', 'Tidak Ada', 'Tidak Ada', 'Belum Ada', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-08.43(8) (1).jpg', ''),
('PLM0095', '2020-09-29', 'Sekar Wulan Amboro Kasih', '1997-10-05', '23', 'Perempuan', 'Dusun Tegal Kalong RT01/RW07 Kemuningsari Kidul - Jenggawah', 'Jember', 'Islam', '081230112033', 'Single', 'S1', 'Ilmu Ekonomi', 3.61, 'Universitas Negeri Jember', 'Tidak Ada', 'Ms. Office dan Akuntansi Umum', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-08.43(9).jpg', ''),
('PLM0096', '2019-12-07', 'Alvia Prestina Febrianti', '1997-02-18', '23', 'Perempuan', 'Jl. Tidar Karangbaru No 09 ', 'Jember', 'Islam', '085604889751', 'Single', 'S1', 'Fakultas Pertanian', 3.84, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-09.25.jpg', ''),
('PLM0097', '2020-08-06', 'Nur Azizah', '2002-08-20', '18', 'Perempuan', 'Dusun Tambakrejo RT02/RW04 Desa Sumberagung - Sumberbaru', 'Jember', 'Islam', '085730702915', 'Single', 'SMK', 'Rekaya Perangkat Lunak', 81, 'SMKN 6 Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-09.26.jpg', ''),
('PLM0098', '2020-11-01', 'Nabila Indriyani', '2001-03-21', '19', 'Laki-laki', 'Jalan Basuki Rahmat Gumuksari RT03/RW29 Tegalbesar , Kaliwates', 'Jember', 'Islam', '089644884522', 'Single', 'SMK', 'Usaha Perjalanan Wisata', 77.91, 'SMKN 3 Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-09.36.jpg', ''),
('PLM0099', '2019-12-09', 'Badiatul Khasanah', '1996-02-18', '24', 'Perempuan', 'Jalan Semeru RT01/RW13 Klatakan , Tanggul', 'Jember', 'Islam', '082228458329', 'Single', 'S1', 'Pendidikan Ekonomi', 3.4, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Staf Administrasi di PT Berlian Unggul Jaya', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-09.36(1).jpg', ''),
('PLM0100', '2019-12-09', 'Fandra Noviliana Putri', '1995-11-13', '25', 'Perempuan', 'Perum Villa Tegalbesar A.42 Kaliwates ', 'Jember', 'Islam', '082257859855', 'Single', 'S1', 'Pertanian', 3.58, 'Univeristah Muhammadiyah Jember', 'Program Kreativitas Pengembangan Diversifikasi', 'Ms. Office dan SPSS', 'PTPN XII (KebunKayumas)', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 04-12-2020-09.36(2).jpg', ''),
('PLM0101', '2020-03-02', 'Lailatus Syukriyah', '1997-06-22', '23', 'Perempuan', 'Dusun Krajan RT 004/ RW 002 Desa Rowowantu Kecamatan Rambipuji', 'Jember', 'Islam', '081259125501', 'Single', 'S1', 'Akuntansi', 3.32, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Seleksi Berkas', 'TapScanner 07-12-2020-08.53.jpg', ''),
('PLM0102', '2020-02-28', 'Ardi Prasetyo', '1997-10-22', '23', 'Laki-laki', 'Jalan Gajah Mada, XIX/No.66 Kaliwates', 'Jember', 'Islam', '083853502230', 'Single', 'S1', 'Ilmu Hukum', 3.22, 'Universitas Jember', 'Juara 1 Tim Basket Fakultas Hukum , PORMA UNEJ', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Seleksi Berkas', 'TapScanner 07-12-2020-08.57.jpg', ''),
('PLM0103', '2020-03-02', 'Maisuri Vikurniati', '1996-11-19', '24', 'Perempuan', 'Dusun PTPN XII RT.001/RW.011 Desa Bangsalsari', 'Jember', 'Islam', '082338610875', 'Single', 'S1', 'Agroteknologi', 3.77, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Seleksi Berkas', 'TapScanner 07-12-2020-09.00.jpg', ''),
('PLM0104', '2020-03-03', 'Adhitya Dwi Purbarani', '1995-11-10', '25', 'Perempuan', 'Jl. S Parman Perum Jember Permai 2L 19', 'Jember', 'Islam', '081231561744', 'Single', 'S1', 'Teknik', 3.54, 'Universitas Jember', 'Tidak Ada', 'Ms. Office , Ms. Project , Auto CAD 2D dan SAP 200', 'PT . Karisma IndoArgo Universal', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.03.jpg', ''),
('PLM0105', '2020-12-07', 'Dwi Ario Suseno Subagyo', '1991-12-11', '29', 'Laki-laki', 'Jl. Jaya Negara No 89 Dusun Krajan RT 02/RW03 Desa Pecoro - Rambipuji', 'Jember', 'Islam', '085748442880', 'Single', 'S1', 'Teknik Elektro Telekomunikasi ', 2.82, 'Universitas Jember', 'Juara 2 Pencak Silat', 'Tidak Ada', 'Sales TO PT. indomarco Adi Prima', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.05.jpg', ''),
('PLM0106', '2020-02-28', 'Nabila Nur Aisyah Al Ayyubi', '1996-09-14', '24', 'Perempuan', 'Jl. Danau Tondano No 194', 'Jember', 'Islam', '082245082500', 'Single', 'S1', 'Agroteknologi', 3.81, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.07.jpg', ''),
('PLM0107', '2020-03-02', 'Maulida NurHasanah', '1994-08-09', '26', 'Perempuan', 'Perumahan Griya Mangli Indah BC 58 RT01/RW18', 'Jember', 'Islam', '089563096084', 'Single', 'S1', 'Agroteknologi', 3.14, 'Universitas Jember', 'Penerima Dana Hibah Program Mahasiswa Wirausaha', 'Tidak Ada', 'Asisten Praktikum Dasar Ilmu Tanah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.09.jpg', ''),
('PLM0108', '2020-03-02', 'Sarah Hanifah Rosjadi', '1994-09-24', '26', 'Perempuan', 'Jl. Letjen Sutoyo 1 Blok JB 8 ', 'Jember', 'Islam', '085731097611', 'Single', 'S1', 'Pertanian', 3.38, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'BTPN Syariah Surabaya', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.11.jpg', ''),
('PLM0109', '2020-03-03', 'Ahmad Fauzan ', '1993-04-19', '27', 'Laki-laki', 'Jl. Tanjung Mangli RT 02/ RW 16 Kecamatan Kaliwates ', 'Jember', 'Islam', '082230336937', 'Single', 'S2', 'Manajemen Pendidikan', 3.76, 'IAIN', 'Tidak Ada', 'Tidak Ada', 'Muallim IAIN Jember', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.33.jpg', ''),
('PLM0110', '2020-12-07', 'Hadi Dwi Santoso', '1992-11-25', '28', 'Laki-laki', 'Jl. Dr. Sutomo X/8 RT 001 RW 003', 'Jember', 'Islam', '082144572455', 'Single', 'S1', 'Administrasi Bisnis', 3.21, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.34.jpg', ''),
('PLM0111', '2020-03-03', 'Alfis Yanuar Riski', '1998-01-18', '22', 'Laki-laki', 'Dusun Curah Buntu RT 001/ RW 009 Desa Jenggawah ', 'Jember', 'Islam', '081216447867', 'Single', 'S1', 'Ilmu Eknonomi', 3.21, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.36.jpg', ''),
('PLM0112', '2020-03-03', 'Ranys Kristiyana', '1997-07-06', '23', 'Perempuan', 'Sumberjo, Yosorati Sumberbaru', 'Jember', 'Islam', '085746456584', 'Single', 'S1', 'Ekonomi Pembangunan', 3.8, 'Universitas Moch. Sroedji Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.38.jpg', ''),
('PLM0113', '2020-03-03', 'Khoiri Rofiki Abdillah', '1996-05-23', '24', 'Laki-laki', 'Jl. Kasian Dsn. Curah Cabe RT/RW 002/002 Desa Gambirono Kecamatan Bangsalsari', 'Jember', 'Islam', '082234885883', 'Single', 'S1', 'Teknik Produksi Benih', 3.43, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.39.jpg', ''),
('PLM0114', '2020-12-07', 'Yussabbithnih', '1992-11-15', '28', 'Perempuan', 'Jl. Pocangan Dusun Krajan RT04 RW 04 Desa Dawuhan Mangli , Sukowono', 'Jember', 'Islam', '085258246241', 'Single', 'S1', 'Pertanian', 3.66, 'Universitas Muhammadiyah Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.41.jpg', ''),
('PLM0115', '2020-03-06', 'Muhammad Abdussyukur Wina ', '1996-03-17', '24', 'Laki-laki', 'Dusun Gayasan B RT 07 RW 07 Jenggawah', 'Jember', 'Islam', '081233518947', 'Single', 'S1', 'Pertanian', 3.83, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.43.jpg', ''),
('PLM0116', '2020-03-09', 'Arifatul Kamila', '1995-04-28', '25', 'Perempuan', 'Jl. KH. Wahid Hasyim XV/212', 'Jember', 'Islam', '082337508411', 'Single', 'D4', 'Teknik', 3.59, 'Politeknik Negeri Jember', 'Juara 3 Pencak Silat Bali', 'Pencak Silat', 'PT Karisma Indoargo Universal (General Affair Officer)', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.44.jpg', ''),
('PLM0117', '2020-03-10', 'Miftahul Huda', '1997-08-30', '23', 'Laki-laki', 'Kp. Suren Desa Tepos BanyuGlogor ', 'Situbondo', 'Islam', '085259109897', 'Single', 'S1', 'Ekonomi Syariah', 3.67, 'IAIN', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas ', 'TapScanner 07-12-2020-09.46.jpg', ''),
('PLM0118', '2020-03-11', 'Herlitscha Mayuri', '1997-08-27', '23', 'Perempuan', 'Dusun Semboro Pasar RT 03 RW 19 Semboro', 'Jember', 'Islam', '085655905695', 'Single', 'SMK', 'Rekayasa Perangkat Lunak', 83.8, 'SMKN 6 Jember', 'Tidak Ada', 'Tidak Ada', 'Salon', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.46(1).jpg', ''),
('PLM0119', '2020-03-10', 'Ahmad Faiz Lidinillah ', '1997-05-07', '23', 'Laki-laki', 'Jl. Nias 3 No 5 Sumbersari ', 'Jember', 'Islam', '081330373296', 'Single', 'D4', 'Teknologi Informasi', 3.63, 'Politeknik Negeri Jember', 'Tidak Ada', 'Ms. Office , PHP , HTML , SQL dan Ci', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.51.jpg', ''),
('PLM0120', '2020-03-09', 'Vivi Trisna Handini ', '1996-09-05', '24', 'Perempuan', 'Jl. Cempedak No 03 Lingkungan Krajan  RT 03 RW 08 Kreongan Patrang', 'Jember', 'Islam', '085334372032', 'Single', 'S1', 'Pertanian', 3.87, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'UPT. PSMBLT Jember', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.54.jpg', ''),
('PLM0121', '2020-03-03', 'Khoiri Rofiki Abdillah', '1996-05-23', '24', 'Laki-laki', 'Jalan Khasiyah Dusun Curah Cabe RT02 RW 02 Desa Gambirono - Bangsalsari', 'Jember', 'Islam', '082234885883', 'Single', 'D4', 'Teknik Produksi Benih', 3.43, 'Politeknik Negeri Jember', 'Tidak Ada', 'Ms. Office', 'PSBTPH Satgas V Jember', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-09.57.jpg', ''),
('PLM0122', '2020-12-07', 'Muhammad Nur Efendi', '1996-04-14', '24', 'Laki-laki', 'Dusun Krajan RT 022 RW 003 Desa Kedunggebang, Kecamatan Tegaldlimo', 'Banyuwangi', 'Islam', '085334240908', 'Single', 'S1', 'Ilmu Olahraga', 3.64, 'Universitas Negeri Surabaya', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.07.jpg', ''),
('PLM0123', '2020-04-01', 'Sun\'an Arifin', '1994-05-15', '26', 'Laki-laki', 'Sukorejo , Bangsalsari', 'Jember', 'Islam', '082337449191', 'Single', 'D3', 'Manajemen Informatika', 3.88, 'AMIK. IBRAHIMY', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.09.jpg', ''),
('PLM0124', '2020-12-07', 'Zahela Siti Aisyah', '1997-05-24', '23', 'Perempuan', 'Perum Bumi Tegal Besar Blok EI No.12 Kaliwates', 'Jember', 'Islam', '085895500708', 'Single', 'S1', 'Pertanian', 3.83, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'PT Benih Citra Asia Jember', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.11.jpg', ''),
('PLM0125', '2020-03-06', 'Rizky Febriansyah', '1993-02-11', '27', 'Laki-laki', 'Dusun Krajan RT 02 RW 01 Kalibaru Wetan ', 'Banyuwangi', 'Islam', '08113588089', 'Single', 'S1', 'Teknik Informasi', 3.2, 'Universitas Muhammadiyah Jember', 'Juara 1 Kejuaraan Futsal', 'Ms. Office', 'Pegawai Bank PT. BRI', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.13.jpg', ''),
('PLM0126', '2020-02-02', 'Agus Nur Wahid', '1991-08-18', '29', 'Laki-laki', 'Dusun Karangsono Desa Grenden Kecamatan Puger', 'Jember', 'Islam', '081333818328', 'Single', 'S1', 'Manajemen Ekonomi', 3.54, 'Universitas Gajahyana Malang', 'Tidak Ada', 'Ms. Office dan Corel Draw', 'Pegawai Bank PT. BRI', 'CR01', 'open', 'mendaftar', 'Gagal Seleski Berkas', 'TapScanner 07-12-2020-11.15.jpg', ''),
('PLM0127', '2020-12-07', 'Darkus Istain Baskoro', '1993-09-03', '27', 'Laki-laki', 'Jl. Mastrip Gang Masjid Sukowiryo ', 'Bondowoso', 'Islam', '085331904291', 'Single', 'S1', 'Teknik Informatika', 3.21, 'Universitas Gunadarma', 'Tidak Ada', 'Desain Grafis , Ms. Office , Delphi , Database dan', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.16.jpg', ''),
('PLM0128', '2020-03-11', 'Citra Kurnia Putri', '1997-02-24', '23', 'Perempuan', 'Dusun Semboro Pasar RT 03 RW 19 Semboro', 'Jember', 'Islam', '087851132126', 'Single', 'S1', 'Manajemen', 3.46, 'Universitas Jember', 'Tidak Ada', 'Ms. Office ', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_1.jpg', ''),
('PLM0129', '2020-03-18', 'DZ Bastomy Matara Fu\'adi', '1996-11-26', '24', 'Laki-laki', 'Dusun Krajan Umbul Rejo RT 13 RW 07 - Umbulsari', 'Jember', 'Islam', '081246926713', 'Single', 'SMK', 'Teknik Komputer dan Jaringan', 73, 'SMKN 8 Jember', 'Tidak Ada', 'Tidak Ada', 'PT Yamaha Electronics Manufacturing Indonesia', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_5.jpg', '');
INSERT INTO `tb_pelamar` (`id_pelamar`, `TglDaftar_pelamar`, `nama_pelamar`, `tgllahir_pelamar`, `umur_pelamar`, `jk_pelamar`, `alamat_pelamar`, `kota_pelamar`, `agama_pelamar`, `nohp_pelamar`, `status_pelamar`, `pdkterakhir_pelamar`, `jurusan_pelamar`, `nilai_pelamar`, `asalsekolah_pelamar`, `prestasi_pelamar`, `keahlian_pelamar`, `pengalamankerja_pelamar`, `loker_pelamar`, `statuslowongan_pelamar`, `tahapan_pelamar`, `notes_pelamar`, `Foto_pelamar`, `file_pelamar`) VALUES
('PLM0130', '2020-03-16', 'Poniman Muhammad Arisal', '1999-12-15', '21', 'Laki-laki', 'Dusun Krajan RT 03 RW 03 Pecoro ', 'Jember', 'Islam', '085334813546', 'Single', 'SMA/MA', 'IPA', 77, 'SMA Muhammadiyah 01 Rambipuji', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_2.jpg', ''),
('PLM0131', '2020-12-07', 'Ferry Julio Prabowo', '1997-07-07', '23', 'Laki-laki', 'Jalan Jambu No 14 A Patrang', 'Jember', 'Islam', '085100548240', 'Single', 'S1', 'Teknologi Industri Pertanian', 3.63, 'Universitas Jember', 'Tidak Ada', 'Ms. Office dan Adobe', 'Teller di PT Bank Mandiri Persero (TBK)', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas ', 'CamScanner 12-07-2020 10.46_3.jpg', ''),
('PLM0132', '2020-02-29', 'Diana Wahyuni', '1995-01-19', '25', 'Perempuan', 'Dusun Taman Glugo Desa Badean RT 02 RW 02 Bangsalsari', 'Jember', 'Islam', '081330598337', 'Single', 'D4', 'Gizi Klinik', 3.32, 'Politeknik Negeri Jember', 'Tidak Ada', 'Ms. Office', 'RSUD Dokter Soedono Madiun', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_6.jpg', ''),
('PLM0133', '2019-12-07', 'Dewanti', '1991-07-18', '29', 'Perempuan', 'Jl. KH. Abdus Syukur No 97 Ling. Krajan Timur Sumbersari', 'Jember', 'Islam', '081232148986', 'Married', 'SMA/MA', 'Komputer Aplikasi', 2.78, 'Wearnes Education Center', 'Tidak Ada', 'Tidak Ada', 'PT Unilever Indonesia', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_8.jpg', ''),
('PLM0134', '2020-04-21', 'M Fauzan Ali', '1999-12-27', '21', 'Laki-laki', 'Dsn Glagatan Rt 002 Rw 011 Ds Petung Bangsalsari', 'Jember', 'Islam', '085236362656', 'Single', 'SMA/MA', 'IPA', 78, 'SMA Muhammadiyah 1 Rambipuji', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_9.jpg', ''),
('PLM0135', '2020-10-22', 'Miftah Fajar Ashari', '1996-07-02', '24', 'Laki-laki', 'Dusun Krajan RT 02 RW 06 Manggisan - Tanggul', 'Jember', 'Islam', '085233978629', 'Single', 'S1', 'Eknonomi', 3.59, 'Universitas Muhammadiyah Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_10.jpg', ''),
('PLM0136', '2020-03-06', 'Catrin Nela Betistiyan', '1998-05-01', '22', 'Perempuan', 'Dusun Sidorejo RT 15 RW 07 Rowokangkung ', 'Lumajang', 'Islam', '082333829513', 'Single', 'S1', 'Matematika', 3.32, 'Universitas Jember', 'Tidak Ada', 'Ms. Office dan Matlab', 'Tentor Les Privat', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Jember', 'TapScanner 07-12-2020-11.30.jpg', ''),
('PLM0137', '2020-03-05', 'Siti Nur Aini', '1997-02-27', '23', 'Perempuan', 'Desa Gambirono - Bangsalsari', 'Jember', 'Islam', '085230751326', 'Single', 'S1', 'Pertanian', 3.76, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Asisten Lab Teknologi Benih', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.30(1).jpg', ''),
('PLM0138', '2020-03-09', 'Megawati Wahyu Sugito', '1993-05-21', '27', 'Perempuan', 'Jl. Kampung Baru 57 RT 02 RW 11 Sumberjo - Umbulsari', 'Jember', 'Islam', '085246344828', 'Single', 'S1', 'Kimia', 2.97, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Sales di PT Citra Van Titipan kilat', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.30(2).jpg', ''),
('PLM0139', '2020-03-05', 'Suci Nur Jannah', '1995-12-16', '25', 'Perempuan', 'Jl. A. Yani Gg. Perkutut RT/RW 002/001, Pakotan ', 'Kraksaan', 'Islam', '089542186113', 'Single', 'S1', 'Kimia', 3.02, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Asisten Praktikum di UNEJ', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.30(3).jpg', ''),
('PLM0140', '2020-03-05', 'Mutammimah', '1994-10-12', '26', 'Perempuan', 'Jl. Ahmad Yani RT 03 RW 07 Serutpanti', 'Jember', 'Islam', '082231087597', 'Single', 'S1', 'Sastra Inggris', 2.89, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Receptionist Customer Care Doho Homestay ', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_11.jpg', ''),
('PLM0141', '2020-04-06', 'Nurlaili Ika Mala', '2001-01-28', '19', 'Perempuan', 'Dusun Racekan Desa Sumber Narung ', 'Jember', 'Islam', '087774406595', 'Single', 'SMK', 'Teknik Kendaraan Ringan', 74.9, 'SMKN 07 Jember', 'Juara Lomba Pencak silat', 'Corel Draw', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_16.jpg', ''),
('PLM0142', '2020-03-08', 'Muhammad Lutfi', '1995-02-19', '25', 'Laki-laki', 'Dusun Sentong RT 03 RW 17 Karang Anyar - Ambulu', 'Jember', 'Islam', '085895893994', 'Married', 'S1', 'Ilmu Administrasi', 3.85, 'Universitas Islam Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_17.jpg', ''),
('PLM0143', '2020-03-05', 'Ravi Shangkar Talabani', '1996-07-25', '24', 'Laki-laki', 'Jl. Bangka II No 18 Sumbersari ', 'Jember', 'Islam', '087874478270', 'Single', 'S1', 'Agribisnis', 3.43, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Sebagai Barista di Cafe', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.30(4).jpg', ''),
('PLM0144', '2020-03-04', 'Rocky Andrianto', '1996-06-29', '24', 'Laki-laki', 'Dusun Cangkringbaru RT 02 RW 02 - Jenggawah', 'Jember', 'Islam', '083832392478', 'Single', 'S1', 'Teknik Pertanian', 3.43, 'Universitas Jember', 'Tidak Ada', 'Ms. Office , Photoshop dan Corel Draw', 'Surveyor di Lembaga Micro Tactics Consulting', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.30(5).jpg', ''),
('PLM0145', '2020-03-04', 'I Gede Ligar Dirgantara', '1996-02-13', '24', 'Laki-laki', 'Jl. Manggar IV/20B ', 'Jember', 'Islam', '082231476442', 'Single', 'S1', 'Teknologi Pertanian', 3.41, 'Universitas Jember', 'Tidak Ada', 'Ms. Office , ArcGIS', 'Micro Tactic Consulting', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.30(6).jpg', ''),
('PLM0146', '2020-03-03', 'Diyah Rahmawati', '1994-02-26', '26', 'Perempuan', 'Jl. Moh. Seruji Krajan Gambirono Bangsalsari', 'Jember', 'Islam', '085233219897', 'Single', 'S1', 'Ekonomi', 3.59, 'Sekolah Tinggi Ilmu Tinggi Mandala', 'Tidak Ada', 'Tidak Ada', 'CS Administrasi Advan Servis Center', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_18.jpg', ''),
('PLM0147', '2020-03-10', 'Moh. Bayu Eko Setyo Budi', '1996-12-14', '24', 'Laki-laki', 'Dusun Krajan Kulon RT. 008 RW. 002 Desa TanjungRejo - Wuluhan', 'Jember', 'Islam', '081330232801', 'Single', 'D4', 'Teknik Produksi Benih', 2.68, 'Politeknik Negeri Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_19.jpg', ''),
('PLM0148', '2020-03-10', 'Luthvi Anissa', '1996-07-19', '24', 'Perempuan', 'Desa Curah Malang - Rambipuji ', 'Jember', 'Islam', '082233863434', 'Single', 'S1', 'Sarjana Pertanian', 3.69, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'PT. Balakosa Jaya Sentosa', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_20.jpg', ''),
('PLM0149', '2020-03-10', 'Yustian Sheif Priambodo', '1993-01-09', '27', 'Laki-laki', 'Dusun KarangTemplek RT 03 RW 22 Andongsari - Ambulu', 'Jember', 'Islam', '089657054354', 'Single', 'S2', 'Teknologi Hasil Pertanian', 3.25, 'Universitas Brawijaya Malang', 'Tidak Ada', 'Tidak Ada', 'PT Indo Citra Tamasya', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_21.jpg', ''),
('PLM0150', '2020-03-09', 'Indra Wahyu Kurniawan', '1985-01-17', '35', 'Laki-laki', 'Jl. Cempeda No 22 Kreongan ', 'Jember', 'Islam', '081246748789', 'Married', 'S1', 'Teknik Sipil', 3.01, 'Universitas Udayana', 'Tidak Ada', 'Tidak Ada', 'PT SUKSESINDO', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_22.jpg', ''),
('PLM0151', '2020-03-10', 'Rizky Perdana Indra Cahya', '1995-08-09', '25', 'Laki-laki', 'Dusun Tekoan RT 03 RW 12 TanggulKulon', 'Jember', 'Islam', '082234037875', 'Single', 'S1', 'Ilmu Ekonomi', 3.41, 'Universitas Brawijaya', 'Tidak Ada', 'Ms. Office , Corel dan Photoshop', 'PT Bank Tabungan Pensiunan Nasional', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_23.jpg', ''),
('PLM0152', '2020-03-10', 'Muhammad Imam Gozali', '1993-06-02', '27', 'Laki-laki', 'Dusun Begelenan Desa Karangsono RT 01 RW 16 Bangsalsari', 'Jember', 'Islam', '085259359359', 'Single', 'S1', 'Agribisinis', 3.03, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'PGA di PT Dos Ni Roha Jember', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.30(7).jpg', ''),
('PLM0153', '2020-03-10', 'Fresha Aflahul Ula', '1995-05-17', '25', 'Laki-laki', 'Dusun Krajan I RT/RW 001/015 Badean Bangsalsari', 'Jember', 'Islam', '082335728812', 'Single', 'S1', 'Biologi', 3.59, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'TapScanner 07-12-2020-11.30(8).jpg', ''),
('PLM0154', '2019-09-30', 'Rahmad Setiawan', '1993-10-30', '27', 'Laki-laki', 'Dusun Pasar RT 02 RW 14 Ledokombo', 'Jember', 'Islam', '081237711827', 'Married', 'SMA/MA', 'IPA', 7.8, 'MA. Wahid Hasyim', 'Tidak Ada', 'Tidak Ada', 'PT Arabikka Tama Khatulistiwa Fishing Industry', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_32.jpg', ''),
('PLM0155', '2019-10-03', 'Ari Perdana Putra', '1993-07-01', '27', 'Laki-laki', 'Jl. Setot Prawirodirjo VI/50 Tegalsari', 'Jember', 'Islam', '089653488388', 'Married', 'SMP', 'Tidak Ada', 28.55, 'MTS Bustanul Ulum Kemiri', 'Tidak Ada', 'Tidak Ada', 'Travel Surya Jember', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_33.jpg', ''),
('PLM0156', '2019-11-02', 'Mahfud Hidayatullah', '1995-09-15', '25', 'Laki-laki', 'Jl. Merbabu Dusun Curah Bamban Tanggul Wetan', 'Jember', 'Islam', '0', 'Married', 'SMA/MA', 'Teknologi Pengolahan Hasil Pertanian', 5.6, 'SMKN 1 Sukorambi Jember', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_34.jpg', ''),
('PLM0157', '2019-09-04', 'Titik Hidayati', '1968-10-01', '52', 'Perempuan', 'Jl. Pemuda Gang 2 Gudangkarang - Rambipuji', 'Jember', 'Islam', '08993911157', 'Married', 'S1', 'Ekonomi Manajemen', 0, 'UNMUH', 'Tidak Ada', 'Tidak Ada', 'Guru di MA Darushola Jember', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_35.jpg', ''),
('PLM0158', '2019-11-21', 'Rofiatul Hasanah', '1995-09-27', '25', 'Perempuan', 'Dusun Karangsemanding RT 02 RW 05 Sukorejo - Bnagsalsari', 'Jember', 'Islam', '085608706235', 'Single', 'S1', 'Pertanian', 0, 'Universitas Islam Jember', 'Tidak Ada', 'Tidak Ada', 'Asisten Sekertaris PT Tempurejo TutulBalung', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_36.jpg', ''),
('PLM0159', '2019-10-01', 'Robi Sugara ', '1996-09-03', '24', 'Laki-laki', 'Dusun Krajan Baru RT 03 RW 02 Bedadung - Pakusari', 'Jember', 'Islam', '081231899274', 'Single', 'S1', 'Pertanian', 3.36, 'Universitas Negeri Jember', 'Tidak Ada', 'Ms. Office', 'Bendahara di Program PNPM', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_37.jpg', ''),
('PLM0160', '2019-10-03', 'Hamdan Yuwafi', '2000-10-07', '20', 'Laki-laki', 'Dusun Siraan Kecamatan Bangsalsari', 'Jember', 'Islam', '081333820907', 'Single', 'SMK', 'Pengawasan Mutu Hasil Pertanian dan Perikanan', 43.3, 'SMKN 5 Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-07-2020 10.46_38.jpg', ''),
('PLM0161', '2020-03-02', 'M. Amin Nudin', '1986-01-01', '34', 'Laki-laki', 'Dusun Rambutan Bangsalsari ', 'Jember', 'Islam', '085236506128', 'Married', 'S1', 'Akuntansi', 3.36, 'STIE Mandala', 'Tidak Ada', 'Tidak Ada', 'PT Pasific Paint', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.29_2.jpg', ''),
('PLM0162', '2020-01-30', 'Muhammad Lutfi ', '1995-10-10', '25', 'Laki-laki', 'Dusun KrAJAN RT 03 RW 02 Pecoro', 'Jember', 'Islam', '085334364512', 'Single', 'SMK', 'Rekayasa Perangkat Lunak', 9, 'SMK Teknologi Balung', 'Tidak Ada', 'Tidak Ada', 'Bekerja Sebagai Sopir', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.29_1.jpg', ''),
('PLM0163', '2020-03-04', 'Putri Dwi Aprilia', '1995-04-02', '25', 'Perempuan', 'Dusun Wetan Gunung RT 07 RW 02 Wonojati - Jenggawah', 'Jember', 'Islam', '081313313441', 'Single', 'S1', 'Teknik', 3.01, 'Universitas Telkom', 'Tidak Ada', 'Ms. Office , Visio dan Corel Draw', 'PT Telekomunikasi Indonesia', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.29_3.jpg', ''),
('PLM0164', '2020-03-04', 'Oky Mursidi Yanto', '1995-10-07', '25', 'Laki-laki', 'Jl. Hayam Muruk 1 No 216 ', 'Jember', 'Islam', '081217431145', 'Single', 'S1', 'Manajemen', 0, 'STIE Mandala', 'Tidak Ada', 'Tidak Ada', 'Koperasi RSU Kaliwates Jember', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.29_1 (1).jpg', ''),
('PLM0165', '2020-03-02', 'Arif Fahrizal ', '1992-12-19', '28', 'Laki-laki', 'Dusun Jatilawang RT 02 RW 07 Tegalwangi - Umbulsari', 'Jember', 'Islam', '082232768060', 'Single', 'S1', 'Ilmu Administrasi Negara', 3.05, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Hunter di Tokopedia', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.29_2 (1).jpg', ''),
('PLM0166', '2020-02-28', 'Dinda Emphy Agusta', '1994-08-05', '26', 'Perempuan', 'Dusun Besuk Kelurahan Wirowongso ', 'Jember', 'Islam', '082332007172', 'Single', 'D4', 'Gizi Klinik', 3.75, 'Politeknik Negeri Jember', 'Tidak Ada', 'Tidak Ada', 'Staf di PT BUGS GiliMeno', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.29_3 (1).jpg', ''),
('PLM0167', '2020-03-02', 'Rohmad Efendi', '1991-06-20', '29', 'Laki-laki', 'Dusun Krajan Lor Yosorati - Sumberbaru', 'Jember', 'Islam', '081336614655', 'Single', 'S1', 'Bahasa Inggris', 0, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.38_1.jpg', ''),
('PLM0168', '2020-12-08', 'Fathullah', '1995-06-14', '25', 'Laki-laki', 'Dusun Panguan RT 03 RW 04 Petung - Bangsalsari', 'Jember', 'Islam', '082336678771', 'Single', 'SMK', 'Teknik Komputer dan Jaringan', 8.28, 'SMK Raudlatul Malikiyah', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.38_2.jpg', ''),
('PLM0169', '2020-03-02', 'Azizatus Zahro', '1995-10-12', '25', 'Perempuan', 'Jl. Merapi No 35 RT 02 RW 05 Tisnogambar - Bangsalsari', 'Jember', 'Islam', '081357923830', 'Single', 'S1', 'Perbankan Syariah', 3.55, 'IAIN Jember', 'Tidak Ada', 'Ms. Office', 'CS di PT Inti Sumber Hasil Sempurna', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.38_3.jpg', ''),
('PLM0170', '2020-12-08', 'Syamsul Arifin', '1998-03-17', '22', 'Laki-laki', 'Dusun Krajan RT 01 RW 07 Petung - Bangsalsari', 'Jember', 'Islam', '085236234337', 'Single', 'SMA/MA', 'IPA', 79.75, 'MA Bustanul Ulum Bangsalsari', 'Tidak Ada', 'Tidak Ada', 'Karyawan di ROXY', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.43_1.jpg', ''),
('PLM0171', '2020-01-20', 'Joni Ilham Saputra', '1996-06-11', '24', 'Laki-laki', 'Jl. Airlangga Gg 18 RT 01 RW 09 Rambipuji', 'Jember', 'Islam', '085232211104', 'Single', 'SMK', 'Agrinisnis Tanaman Perkebunan', 79.9, 'SMKN 5 Jember', 'Tidak Ada', 'Tidak Ada', 'Koordinator Lapangan di PT Central Proteina', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.43_2.jpg', ''),
('PLM0172', '2020-02-18', 'Zaqi Mubarok', '1997-04-26', '23', 'Laki-laki', 'Dusun Siraan RT 01 RW 05 Tisnogambar - Bangsalsari', 'Jember', 'Islam', '082335129274', 'Single', 'SMK', 'Teknik Alat Berat', 173.7, 'SMK Istiqomah Muhammadiyah 4 Samarinda', 'Tidak Ada', 'Tidak Ada', 'Teknisi di Barometer Variasi Mobil', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.43_3.jpg', ''),
('PLM0173', '2020-09-05', 'Achmad Syamsul ', '1997-01-17', '23', 'Laki-laki', 'Dusun Sumber Ketangi RT 02 RW 26 Desa Tugu sari - Bangsalsari', 'Jember', 'Islam', '085886452540', 'Single', 'S1', 'Sejarah', 3.43, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.47_1.jpg', ''),
('PLM0174', '2020-12-08', 'Elfa Anna Safati', '1997-09-14', '23', 'Perempuan', 'Bataan RT 01 RW 01 Kel. Kalimas - Besuki', 'Situbondo', 'Islam', '085230311426', 'Single', 'D4', 'Manajemen Agroindustri', 3.67, 'Politeknik Negeri Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.47_2.jpg', ''),
('PLM0175', '2020-09-01', 'Moch Ainur Rohman', '2000-10-10', '20', 'Laki-laki', 'Jl. PB Sudirman Dusun Krajan RT 02 RW 20 Gambirono ', 'Jember', 'Islam', '082245474297', 'Single', 'SMK', 'Agribisnis Ternak Unggas', 80, 'SMKN 5 Jember', 'Tidak Ada', 'Tidak Ada', 'PT Semesta Mitra Sejahtera Kediri', 'CR02', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.47_3.jpg', ''),
('PLM0176', '2020-02-11', 'Anwar Fuadi', '2000-12-12', '20', 'Laki-laki', 'Dusun Krajan Sukorejo - Bnagsalsari', 'Jember', 'Islam', '081554286272', 'Single', 'SMK', 'Teknik Kendaraan Ringan', 88, 'SMK Teknologi Balung', 'Tidak Ada', 'Tidak Ada', 'Helper di Surabaya', 'CR01', 'open', 'mendaftar', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.51_1.jpg', ''),
('PLM0177', '2020-02-13', 'Fransiska Eko Wiantoro', '1996-01-06', '24', 'Laki-laki', 'Dusun Gumuk Kembar - Umbulsari ', 'Jember', 'Islam', '085695349875', 'Single', 'SMK', 'Teknik Kendaraan Ringan', 6.6, 'SMK PGRI 3 Tanggul', 'Tidak Ada', 'Tidak Ada', 'Kru PT Quick Chicken Indonesia', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.51_2.jpg', ''),
('PLM0178', '2020-02-19', 'Muhammad Iksan', '1982-05-03', '38', 'Laki-laki', 'Jl. Duku Duwur No 75 Pengambiran - Lemahwungkuk', 'Cirebon', 'Islam', '08976217558', 'Married', 'SMK', 'IPS', 0, 'Sekolah Kartika 3', 'Tidak Ada', 'Tidak Ada', 'PT Cinta Pamai Putra Bahagia', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.51_3.jpg', ''),
('PLM0179', '2020-02-15', 'Achmad Setiawan', '1992-01-03', '28', 'Laki-laki', 'Dusun Pejimangar RT 04 RW 01 Desa Lempeji - Mumbulsari', 'Jember', 'Islam', '085651943581', 'Married', 'SMA/MA', 'IPA', 0, 'SMAN Mumbulsari', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.51_4.jpg', ''),
('PLM0180', '2020-02-18', 'Sukronun Wafin', '2001-01-07', '19', 'Laki-laki', 'Tisnogambar Dusun Siraan RT 01 RW 04 - Bangsalsari', 'Jember', 'Islam', '081249815400', 'Single', 'SMK', 'Teknik Komputer dan Jaringan', 44.13, 'SMK Mambaul Khoiriyatil Islamiyah', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_1.jpg', ''),
('PLM0181', '2020-03-02', 'Diyah Ratna Sari', '1994-07-27', '26', 'Perempuan', 'Dusun Terate RT 02 RW 03 BanjarRejo - Gadiluwih', 'Kediri', 'Islam', '085708337433', 'Single', 'S1', 'Teknologi Hasil Pertanian', 3.53, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'Suveriror dan Enumerator di LSI ', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_3.jpg', ''),
('PLM0182', '2020-03-05', 'Mohammad Priya Aji Pratama', '1996-05-04', '24', 'Laki-laki', 'Jl. Ahmad Yani Wringin Telu - Puger', 'Jember', 'Islam', '085649847983', 'Single', 'S1', 'Ekonomi Manajemen', 3.49, 'Universitas Muhammadiyah Jember', 'Tidak Ada', 'Ms. Office', 'PT Kurnia Agung Mulia', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_2.jpg', ''),
('PLM0183', '2020-03-05', 'Winda Ruliyanti ', '1997-11-24', '23', 'Perempuan', 'Bangorejo RT 02 RW 06 ', 'Banyuwangi', 'Islam', '085748566625', 'Single', 'S1', 'Agroteknologi', 3.64, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Guru Les di Lembaga Bimbingan Belajar Zennit', 'CR02', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_4.jpg', ''),
('PLM0184', '2020-03-05', 'Tahta Alfina Dusturia', '1995-12-05', '25', 'Perempuan', 'Dusun Krajan Banyuanayar - Kalibaru', 'Banyuwangi', 'Islam', '083857725065', 'Single', 'S1', 'Agroteknologi', 3.23, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR02', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_5.jpg', ''),
('PLM0185', '2020-03-05', 'Rizki Yanti Faradina', '1996-08-24', '24', 'Perempuan', 'Jl. Sunan Giri No 3 Sumbertaman ', 'Probolinggo', 'Islam', '082234394117', 'Single', 'S1', 'Agroteknologi', 3.84, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_6.jpg', ''),
('PLM0186', '2020-03-05', 'Gita Ayu Dewanty', '1997-06-09', '23', 'Perempuan', 'Perumahan Griya Mangli Indah B120 ', 'Jember', 'Islam', '082331352858', 'Single', 'S1', 'Manajemen', 3.81, 'Universitas Brawijaya', 'Tidak Ada', 'Adobe Premier dan Ms. Office', 'Staf Event dan Finance Administration', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_7.jpg', ''),
('PLM0187', '2020-03-05', 'Nur Halimah Oktaviani', '1996-10-04', '24', 'Perempuan', 'Jl. Trunojoyo VIII No.136 Kepatihan Kaliwates', 'Jember', 'Islam', '082232354181', 'Single', 'S1', 'Ekonomi', 3.36, 'STIE Mandala', 'Tidak Ada', 'Ms. Office', 'Belum Pernah', 'CR02', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_8.jpg', ''),
('PLM0188', '2020-03-02', 'Adhitya Esa Sabilillah', '1996-03-17', '24', 'Laki-laki', 'Jl. Halmahera 1/5', 'Jember', 'Islam', '08975875864', 'Single', 'S1', 'Pertanian', 3.26, 'Universitas Jember', 'Tidak Ada', 'Ms. Office , Visio dan Corel Draw', 'Event Organizer Lomba Futsal', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_9.jpg', ''),
('PLM0189', '2020-01-27', 'Sofi Al Amin', '1996-05-02', '24', 'Laki-laki', 'Durenan RT 03 RW 06 Klompangan Kecamatan Ajung ', 'Jember', 'Islam', '089650749997', 'Single', 'S1', 'Teknik Pertanian', 3.43, 'Universitas Jember', 'Tidak Ada', 'Ms. Office dan Drone', 'Marketing Otomotif di PT Istana Mobil', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_10.jpg', ''),
('PLM0190', '2020-02-01', 'Yusuf Prasetio', '1991-02-19', '29', 'Laki-laki', 'Dusun Karangharjo RT 03 RW 04 Glenmore ', 'Banyuwangi', 'Islam', '085258807220', 'Single', 'S1', 'Pertanian', 3.32, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'PT East West Seed Indonesia', 'CR02', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_11.jpg', ''),
('PLM0191', '2020-12-08', 'Arifah Kartika Putri', '1993-01-29', '27', 'Perempuan', 'Jl. Sparman II No 172 ', 'Jember', 'Islam', '082244992993', 'Married', 'S1', 'Ilmu Hukum', 3.55, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'CS di PT Bank BRI', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_12.jpg', ''),
('PLM0192', '2020-09-03', 'Fany', '1996-04-09', '24', 'Perempuan', 'Jl. Kalijaten Taman Permata Indah G6 Taman Sepanjang ', 'Sidoarjo', 'Kristen', '085231367721', 'Single', 'S1', 'Ekonomi', 3.82, 'Universitas Surabaya', 'Tidak Ada', 'Tidak Ada', 'TAX Accounting Staff di PT Rembaka', 'CR02', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_13.jpg', ''),
('PLM0193', '2020-09-23', 'Syukron', '1995-05-05', '25', 'Laki-laki', 'Jl. Manyar Gg Antrokan RT 01 RW 04 Poreng - Slawu Patrang', 'Jember', 'Islam', '087875327512', 'Single', 'S1', 'Ekonomi Syahriah', 3.45, 'IAIN Jember', 'Tidak Ada', 'Tidak Ada', 'Karyawan di Jember Photo Studio', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_14.jpg', ''),
('PLM0194', '2020-09-23', 'Zulfikar Pandu Safetiantono', '1996-09-02', '24', 'Laki-laki', 'Perum Graha Citra Mas Blok T.6 Tegal Besar Kaliwates', 'Jember', 'Islam', '089632834140', 'Single', 'S1', 'Ekonomi Syariah', 3.74, 'IAIN Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_15.jpg', ''),
('PLM0195', '2020-10-02', 'Mariyatul Qiptiyah', '1993-03-28', '27', 'Perempuan', 'Dusun Kedungsoko RT 02 RW 30 Bangsalsari', 'Jember', 'Islam', '085338624184', 'Married', 'SMK', 'Administrasi Perkantoran', 0, 'SMKN 1 Tanggul', 'Tidak Ada', 'Tidak Ada', 'SPG Matahari', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_16.jpg', ''),
('PLM0196', '2020-03-03', 'Hafiz Syariful Hasan', '1999-07-07', '21', 'Laki-laki', 'Dusun Kramat Sukoharjo RT 05 RW 01 Tanggul', 'Jember', 'Islam', '085233999627', 'Single', 'SMA/MA', 'IPA', 86, 'SMAN 1 Tanggul', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_17.jpg', ''),
('PLM0197', '2020-03-02', 'Inayatur Rofi', '1990-01-23', '30', 'Perempuan', 'Jl. Agus Salim N0 16 Bangsalsari', 'Jember', 'Islam', '081217908460', 'Married', 'S1', 'Ekonomi', 3.54, 'Universitas Jember', 'Tidak Ada', 'Ms. Office', 'Administrator PT Sejahtera Motor', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_18.jpg', ''),
('PLM0198', '2020-03-02', 'Kasiyati', '1981-08-05', '39', 'Perempuan', 'Perum Taman Gading Blok Gg 17 ', 'Jember', 'Islam', '081358928622', 'Married', 'S1', 'Sarjana Politik', 3.19, 'Universitas Jember', 'Tidak Ada', 'Tidak Ada', 'Staff Administrasi PT MNC Vision', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_19.jpg', ''),
('PLM0199', '2020-12-08', 'Agus Prabowo', '1991-08-25', '29', 'Laki-laki', 'Jl. Papanggo 1 Gg Apel RT 03 RW 06 Tanjung Priok', 'Jakarta Utara', 'Islam', '085219878686', 'Married', 'SMK', 'Teknik Pemesinan', 27.33, 'SMK Kencana 1 Jakarta', 'Tidak Ada ', 'Tidak Ada', 'Hotel Gundamana', 'CR01', 'open', 'gagal', 'Gagal Seleksi Berkas', 'CamScanner 12-08-2020 08.34_20.jpg', ''),
('PLM0200', '2020-01-22', 'Achmad Priyono Adi Winarso', '1987-02-02', '33', 'Laki-laki', 'Jl. Letjen Sutoyo No 185 RT 01 RW 04 Kranjigan - Sumbersari', 'Jember', 'Islam', '085235725056', 'Married', 'SMK', 'Sekretaris ', 28.33, 'SMKN 4 Jember', 'Tidak Ada', 'Tidak Ada', 'PT FIF Group ', 'CR01', 'close', 'diterima', 'Diterima Sebagai Driver', 'CamScanner 12-08-2020 08.34_21.jpg', ''),
('PLM0201', '2019-10-03', 'Imam Hidayatulloh', '1993-11-15', '27', 'Laki-laki', 'Dusun Karanganyar RT 04/RW03 Desa Balung Lor, ', 'Jember', 'Islam', '081615705255', 'Married', 'SMA/MA', 'IPS', 73, 'SMA Nurul Huda', 'Tidak Ada', 'Tidak Ada', 'UD.Dorang  Jember', 'CR02', 'close', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 17-12-2020-10.44.jpg', ''),
('PLM0202', '2019-10-03', 'Abdul Aziz', '1991-11-08', '29', 'Laki-laki', 'Jl. Rambutan RT 03/RW 02 Pecoro Rambipuji', 'Jember', 'Islam', '081358438485', 'Married', 'SMA/MA', 'IPS', 68.7, 'MA Miftahul Ulum Banyuputih', 'Tidak ada', 'Tidak ada', 'Driver di CV Dieva Jaya Abadi', 'CR02', 'close', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 17-12-2020-11.06.jpg', ''),
('PLM0203', '2019-10-03', 'Dwi Ario Suseno Subagio', '1991-12-11', '29', 'Laki-laki', 'Jl. Jayanegara no.89, Dusun Krajan RT 02/ RW 03 Pecoro Rambipuji', 'Jember', 'Islam', '085748442880', 'Single', 'SMA/MA', '-', 0, 'SMAN 1 Rambipuji', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'close', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 17-12-2020-11.20.jpg', ''),
('PLM0204', '2019-10-02', 'Rega Fuad Yudo Fernando', '1992-06-12', '28', 'Laki-laki', 'Dsn Krajan II RT 03/RW 04 Grenden Puger', 'Jember', 'Islam', '082247431445', 'Single', 'SMK', 'IPS', 7.6, 'PGRI Kasiyan Jember', 'Tidak Ada', 'Tidak Ada', 'Driver Depo Bangunan', 'CR01', 'close', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 17-12-2020-11.36.jpg', ''),
('PLM0205', '2020-10-04', 'Yayan Pristianto', '1987-11-26', '33', 'Laki-laki', 'Jl. Tanjung No.37 RT 01/RW 12 Lingk. Krajan Mangli Kaliwates', 'Jember', 'Islam', '085755162997', 'Married', 'SMK', 'Management and Busines', 8, 'SMK 2 Pancasila', 'Tidak Ada', 'Puisi dan Drama', 'Driver ', 'CR01', 'close', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 17-12-2020-11.51.jpg', ''),
('PLM0206', '2019-10-02', 'Kukuh Eka Riyanto', '1984-12-14', '36', 'Laki-laki', 'Jl. piere Tendean GG.6 RT 02 RW 10 Karangrejo Sumbersari', 'Jember', 'Islam', '082330089394', 'Married', 'D3', 'Akademi Pariwisata', 0, 'Universitas Muhammadiyah Jember', 'Tidak Ada', 'Tidak Ada', 'Driver', 'CR02', 'close', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 17-12-2020-13.02.jpg', ''),
('PLM0207', '2019-10-03', 'Muhammad Rizal', '2000-04-09', '20', 'Laki-laki', 'Jl. Jumat Lingk. Karang Mluwo RT 02/ RW 06 Mangli Kaliwates', 'Jember', 'Islam', '081259769831', 'Single', 'SMA/MA', 'IPA', 158.5, 'SMA Islam Al-Hidayah', 'Tidak Ada', 'Tidak Ada', 'CV. Catering Sami Sae Mangli Jember', 'CR01', 'close', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 17-12-2020-13.19.jpg', ''),
('PLM0208', '2019-10-02', 'Joko Sunarto', '1985-03-27', '35', 'Laki-laki', 'Jl. PB Sudirman VIII/55 Patrang', 'Jember', 'Islam', '082257783508', 'Married', 'D4', 'Manajemen Agribisnis', 0, 'Politeknik Negeri Jember', 'Tidak Ada', 'Tidak Ada', 'Sopir PT Bayu Putra Trans', 'CR01', 'close', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 17-12-2020-13.25.jpg', ''),
('PLM0209', '2019-10-02', 'Septian Luqman Wijaya', '1992-09-10', '28', 'Laki-laki', 'Dusun Ajung Kulon RT 04/RW 10 Ajung', 'Jember', 'Islam', '081233136020', 'Single', 'SMK', 'IPS', 53.7, 'SMKN 5 Jember', 'Tidak Ada', 'Tidak Ada', 'Driver', 'CR02', 'close', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 17-12-2020-13.54.jpg', ''),
('PLM0210', '2019-10-03', 'Eko Budianto', '1981-03-22', '39', 'Laki-laki', 'Dusun Krajan RT 01 RW 08 Tisnogambar Bangsalsari', 'Jember', 'Islam', '085749366674', 'Married', 'SMK', 'Bangunan Gedung', 0, 'SMKN 2 Sumbersari', 'Tidak Ada', 'Tidak Ada', 'PT. Cahaya Bintang Plastindo', 'CR01', 'close', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 17-12-2020-14.02.jpg', ''),
('PLM0211', '2019-10-03', 'M. Aditia Qomarullah', '1999-06-10', '21', 'Laki-laki', 'Jl. Banyuwangi Dusun Krajan SumberJati Silo', 'Jember', 'Islam', '083852353282', 'Single', 'SMA/MA', 'MA AL-Amin Garaha Jati', 76, 'MAN 2 Jember', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'CR01', 'close', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 17-12-2020-14.54.jpg', ''),
('PLM0212', '2019-10-03', 'Nanang Moch. Nur Izqan', '1993-01-05', '27', 'Laki-laki', 'Dusun Langsepan RT 01 RW 04 Jenggawah', 'Jember', 'Islam', '082244148462', 'Single', 'SMA/MA', 'IPS', 68.3, 'MAN 1 Jember', 'Tidak Ada', 'Tidak Ada', 'Lembaga Pengembangan Jasa Konstruksi', 'CR01', 'close', 'gagal', 'Gagal Seleksi Berkas', 'TapScanner 21-12-2020-09.14.jpg', '');

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

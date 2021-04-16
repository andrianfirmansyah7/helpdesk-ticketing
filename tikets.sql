-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jan 2019 pada 07.11
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tikets`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `level`, `status`) VALUES
('A0001', 'd230d7274389ef27bc1678828901d79d', '4', 'Aktif'),
('A0002', 'bfa979396545edee06b67e768970d275', '3', 'Aktif'),
('A0004', 'dcc7663b0ec4e6649c053b22e24db8c3', '2', 'Aktif'),
('A0005', '6de5103c8ec3469d98214dc88f1ed5ba', '3', 'Aktif'),
('U0001', '5d9edb446c9d03666c5c7f1dfed637c3', '2', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_ticket` varchar(13) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `dari` varchar(10) NOT NULL,
  `untuk` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id_history`, `id_ticket`, `tanggal`, `status`, `deskripsi`, `dari`, `untuk`) VALUES
(1, 'T201707090001', '2017-07-09 22:13:34', 'Tiket Dibuat', '', '', ''),
(2, 'T201707090002', '0000-00-00 00:00:00', 'Tiket Dibuat', '', '', ''),
(3, 'T201707090001', '2017-07-09 23:23:27', 'Disetujui', '', '', ''),
(4, 'T201707090001', '2017-07-09 23:24:23', 'Disetujui', '', '', ''),
(5, 'T201707090001', '2017-07-09 23:24:24', 'Disetujui', '', '', ''),
(6, 'T201707090001', '2017-07-09 23:24:25', 'Disetujui', '', '', ''),
(7, 'T201707090001', '2017-07-09 23:36:05', 'Disetujui', '', '', ''),
(8, 'T201707090001', '2017-07-09 23:36:08', 'Disetujui', '', '', ''),
(9, 'T201707100003', '2017-07-10 10:01:37', 'Tiket Dibuat', '', '', ''),
(10, 'T201707100003', '2017-07-10 10:01:55', 'Disetujui', '', '', ''),
(11, 'T201707090002', '2017-07-10 10:03:41', 'Tidak', '', '', ''),
(12, 'T201707100004', '2017-07-10 10:21:54', 'Tiket Dibuat', '', '', ''),
(13, 'T201707100005', '2017-07-10 10:54:21', 'Tiket Dibuat', '', '', ''),
(14, 'T201707100004', '2017-07-10 11:14:04', 'Menunggu Disetujui Teknisi', '', 'A0004', 'A0001'),
(15, 'T201707100005', '2017-07-10 11:15:06', 'Menunggu Disetujui Teknisi', '', '', ''),
(16, 'T201707100006', '2017-07-10 11:56:49', 'Tiket Dibuat', '', '', ''),
(17, 'T201707100005', '2017-07-10 13:30:53', 'Proses Pengerjaan', '', '', ''),
(18, 'T201707100005', '2017-07-11 12:09:58', 'Proses Pengerjaan 80%', '', 'A0002', ''),
(19, 'T201707100005', '2017-07-11 12:12:10', 'Selesai', '', 'A0002', ''),
(20, 'T201707110007', '2017-07-11 13:31:40', 'Tiket Dibuat', '', '', ''),
(21, 'T201707110007', '2017-07-11 13:34:52', 'Menunggu Disetujui Teknisi', '', 'nik', ''),
(22, 'T201707100004', '2017-07-11 13:39:49', 'Dipending', '', 'A0003', 'A0001'),
(23, 'T201707100004', '2017-07-11 13:42:42', 'Proses Pengerjaan', '', 'A0003', ''),
(24, 'T201707110007', '2017-07-11 13:42:45', 'Dipending', '', 'A0003', ''),
(25, 'T201707100004', '2017-07-11 13:48:32', 'Proses Pengerjaan 30%', 'Mahal Ngan Komponenna', 'A0003', ''),
(26, 'T201707100004', '2017-07-11 13:49:05', 'Proses Pengerjaan 90%', 'Beres Sakedap Deui', 'A0003', ''),
(27, 'T201707100004', '2017-07-11 13:50:32', 'Selesai', 'Selesai, barang bisa diambil', 'A0003', ''),
(28, 'T201707100006', '2017-07-11 14:19:40', 'Menunggu Disetujui Teknisi', '', 'A0001', ''),
(29, 'T201707100006', '2017-07-11 14:22:38', 'Proses Pengerjaan', '', 'A0003', ''),
(30, 'T201707180008', '2017-07-18 11:55:44', 'Tiket Dibuat', '', '', ''),
(31, 'T201707180008', '2017-07-18 11:55:57', 'Menunggu Disetujui Teknisi', '', 'A0001', 'A0001'),
(32, 'T201707180008', '2017-07-18 12:12:59', 'Proses Pengerjaan', '', 'A0002', 'A0001'),
(33, 'T201707180008', '2017-07-18 12:15:08', 'Selesai', 'Selesai, barang bisa diambil', 'A0002', 'A0001'),
(34, 'T201707180009', '2017-07-18 12:20:27', 'Tiket Dibuat', '', '', ''),
(35, 'T201707180009', '2017-07-18 12:21:35', 'Menunggu Disetujui Teknisi', '', 'A0001', 'A0004'),
(36, 'T201707100006', '2017-07-18 12:23:01', 'Proses Pengerjaan 50%', 'Hahaha', 'A0003', 'A0001'),
(37, 'T201707100006', '2017-07-18 12:23:18', 'Selesai', 'Selesai, barang bisa diambil', 'A0003', 'A0001'),
(38, 'T201707180009', '2017-07-18 14:47:10', 'Proses Pengerjaan 70%', 'Mantap Faman', 'A0002', 'A0004'),
(39, 'T201707180009', '2017-07-18 14:52:17', 'Selesai', 'Selesai, barang bisa diambil', 'A0002', 'A0004'),
(40, 'T201707200010', '2017-07-20 12:44:14', 'Tiket Dibuat', '', '', ''),
(41, 'T201707200011', '2017-07-20 13:35:00', 'Tiket Dibuat', '', '', ''),
(42, 'T201707200010', '2017-08-09 13:09:06', 'Tidak', '', 'A0001', 'A0001'),
(43, 'T201708130012', '2017-08-13 23:08:32', 'Tiket Dibuat', '', '', ''),
(44, 'T201708130012', '2017-08-13 23:10:51', 'Menunggu Dikerjakan Teknisi', '', 'A0001', 'A0004'),
(45, 'T201707110007', '2017-08-13 23:11:35', 'Proses Pengerjaan', '', 'A0003', 'A0004'),
(46, 'T201707110007', '2017-08-13 23:11:45', 'Selesai', 'Selesai, barang bisa diambil', 'A0003', 'A0004'),
(47, 'T201708130012', '2017-08-13 23:11:52', 'Selesai', 'Selesai, barang bisa diambil', 'A0003', 'A0004'),
(48, 'T201708130013', '2017-08-13 23:12:50', 'Tiket Dibuat', '', '', ''),
(49, 'T201708130013', '2017-08-13 23:13:25', 'Menunggu Dikerjakan Teknisi', '', 'A0001', 'A0004'),
(50, 'T201708130013', '2017-08-13 23:27:37', 'Proses Pengerjaan', '', 'A0003', 'A0004'),
(51, 'T201707200011', '2017-08-24 10:14:39', 'Tidak', '', 'A0001', 'A0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `keterangan`) VALUES
(1, 'Programmer'),
(2, 'User'),
(3, 'Teknisi'),
(4, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama`, `alamat`, `jk`, `email`, `telepon`, `id_jabatan`, `gambar`) VALUES
('A0001', 'Alwy Akbar Arifin', 'Komplek Parahyangan Kencana', 'Laki-Laki', 'alwy@gmail.com', '089739271020', 4, 'alwy1.jpg'),
('A0002', 'Risma Artha Melvia', 'Soreang', 'Perempuan', 'risma@gmail.com', '', 3, 'vatar.png'),
('A0004', 'Khodijah Killah', 'Sukamenak', 'Perempuan', 'dijah@gmail.com', '', 3, 'vatar.png'),
('A0005', 'Andrian', 'Dunia', 'Laki-Laki', 'andrianf@fleckens.hu', '', 3, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Software'),
(2, 'Hardware');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `kondisi` varchar(25) NOT NULL,
  `waktu_respon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `kondisi`, `waktu_respon`) VALUES
(1, 'Mendesak', 1),
(2, 'Tinggi', 2),
(3, 'Sedang', 3),
(4, 'Rendah', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `id_teknisi` int(11) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `spesialis` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`id_teknisi`, `nik`, `spesialis`, `status`) VALUES
(1, 'A0002', 'Software', 'Menganggur'),
(2, 'A0003', 'Hardware', 'Bekerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` varchar(13) NOT NULL,
  `tanggal` datetime NOT NULL,
  `tanggal_proses` datetime NOT NULL,
  `tanggal_solved` datetime NOT NULL,
  `pelapor` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `subjek_masalah` varchar(50) NOT NULL,
  `detail_masalah` varchar(255) NOT NULL,
  `id_teknisi` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `progress` int(11) NOT NULL,
  `prioritas` varchar(15) NOT NULL,
  `attachment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `tanggal`, `tanggal_proses`, `tanggal_solved`, `pelapor`, `id_kategori`, `subjek_masalah`, `detail_masalah`, `id_teknisi`, `status`, `progress`, `prioritas`, `attachment`) VALUES
('T201707090001', '2017-07-09 22:13:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'A0001', 2, 'Mang Error Keyboard', 'Jadi Kieu mang, Wasit Pehul\r\n', '', 'Disetujui', 0, '2', ''),
('T201707090002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'A0001', 2, 'Kopi', 'Nang', '', 'Tidak Disetujui', 0, '4', ''),
('T201707100003', '2017-07-10 10:01:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'A0001', 2, 'sdfdsfdsf', 'dsfdsfdsf', '', 'Disetujui', 0, '1', ''),
('T201707100004', '2017-07-10 10:21:54', '2017-07-11 13:42:42', '2017-07-11 13:50:32', 'A0001', 2, 'dddd', 'dddd', 'A0003', 'Selesai', 10, '4', ''),
('T201707100005', '2017-07-10 10:54:21', '0000-00-00 00:00:00', '2017-07-11 12:12:10', 'A0001', 1, 'Error', 'Error', 'A0002', 'Selesai', 10, '2', ''),
('T201707100006', '2017-07-10 11:56:49', '2017-07-11 14:22:38', '2017-07-18 12:23:18', 'A0001', 2, 'Keyboard Jebbol', 'Kamu Sih', 'A0003', 'Selesai', 10, '2', ''),
('T201707110007', '2017-07-11 13:31:40', '2017-08-13 23:11:35', '2017-08-13 23:11:45', 'A0004', 2, 'Mouse Rusaak', 'Pak Mouse Rusak', 'A0003', 'Selesai', 10, '3', ''),
('T201707180008', '2017-07-18 11:55:44', '2017-07-18 12:12:59', '2017-07-18 12:15:08', 'A0001', 1, 'Permasalahan Hidup', 'Jadi Gini Pak, saya punya problem yang sangat besar. Mohon dibantu Pak', 'A0002', 'Selesai', 10, '2', ''),
('T201707180009', '2017-07-18 12:20:27', '0000-00-00 00:00:00', '2017-07-18 14:52:17', 'A0004', 1, 'Apapaap', 'apapapap', 'A0002', 'Selesai', 10, '3', ''),
('T201707200010', '2017-07-20 12:44:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'A0001', 1, 'Error Aplikasi', 'Pak Error', '', 'Tidak Disetujui', 0, '2', 'IMG_3875.JPG'),
('T201707200011', '2017-07-20 13:35:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'A0001', 2, 'Uvuvwe', 'jskjfkaj', '', 'Tidak Disetujui', 0, '3', 'IMG_4012.JPG'),
('T201708130012', '2017-08-13 23:08:32', '0000-00-00 00:00:00', '2017-08-13 23:11:52', 'A0004', 2, 'Pusing', 'Laporan Bikin Pusing gan', 'A0003', 'Selesai', 10, '4', '1.jpg'),
('T201708130013', '2017-08-13 23:12:50', '2017-08-13 23:27:37', '0000-00-00 00:00:00', 'A0004', 2, 'Laporan', 'Lieur', 'A0003', 'Proses Pengerjaan', 0, '3', 'ERD(2).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `jk_user` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `alamat_email` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `aplikasi` varchar(50) NOT NULL,
  `foto_profil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `jk_user`, `alamat`, `alamat_email`, `perusahaan`, `aplikasi`, `foto_profil`) VALUES
('U0001', 'Alwy Akbar Blake Griffin', 'Laki-Laki', 'Dunia', 'dakdh@hah.com', 'Apa Web', 'B''Mart', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id_teknisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

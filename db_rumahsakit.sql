-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2023 pada 19.48
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rumahsakit`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `query_pasienxkelurahan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `query_pasienxkelurahan` (
`id_pasien` varchar(50)
,`nama_pasien` varchar(255)
,`alamat` varchar(255)
,`no_telp` varchar(255)
,`RT` varchar(11)
,`RW` varchar(11)
,`tgl_lahir` varchar(255)
,`jk_pasien` varchar(255)
,`nama_kelurahan` varchar(255)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelurahan`
--

CREATE TABLE `tb_kelurahan` (
  `id_kelurahan` varchar(50) NOT NULL,
  `nama_kelurahan` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `nama_kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_kelurahan`
--

INSERT INTO `tb_kelurahan` (`id_kelurahan`, `nama_kelurahan`, `nama_kecamatan`, `nama_kota`) VALUES
('KEL0001', 'Margasari', 'Pasawahan', 'Purwakarta'),
('KEL0002', 'Nagri Kaler', 'Purwakarta', 'Purwakarta'),
('KEL0003', 'Cilegong', 'Jatiluhur', 'Purwakarta'),
('KEL0004', 'Kembangkuning', 'Jatiluhur', 'Purwakarta'),
('KEL0005', 'Sindangkasih', 'Purwakarta', 'Purwakarta'),
('KEL0006', 'Cipaisan', 'Purwakarta', 'Purwakarta'),
('KEL0007', 'Munjuljaya', 'Purwakarta', 'Purwakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `RT` varchar(11) NOT NULL,
  `RW` varchar(11) NOT NULL,
  `id_kelurahan` varchar(50) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `jk_pasien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `alamat`, `no_telp`, `RT`, `RW`, `id_kelurahan`, `tgl_lahir`, `jk_pasien`) VALUES
('20230700001', 'Akmal Ibnu Zein', 'Kaum Kaler', '08999992839', '009', '001', 'KEL0006', '2004-03-31', 'Laki Laki'),
('20230700002', 'Soni Herdiansyah', 'Jl. Lodaya 2 Sindangkasih', '0882989380480', '008', '007', 'KEL0005', '2000-05-02', 'Laki Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'operator', 'operator', 'Operator');

-- --------------------------------------------------------

--
-- Struktur untuk view `query_pasienxkelurahan`
--
DROP TABLE IF EXISTS `query_pasienxkelurahan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `query_pasienxkelurahan`  AS  select `tb_pasien`.`id_pasien` AS `id_pasien`,`tb_pasien`.`nama_pasien` AS `nama_pasien`,`tb_pasien`.`alamat` AS `alamat`,`tb_pasien`.`no_telp` AS `no_telp`,`tb_pasien`.`RT` AS `RT`,`tb_pasien`.`RW` AS `RW`,`tb_pasien`.`tgl_lahir` AS `tgl_lahir`,`tb_pasien`.`jk_pasien` AS `jk_pasien`,`tb_kelurahan`.`nama_kelurahan` AS `nama_kelurahan` from (`tb_pasien` join `tb_kelurahan`) where `tb_pasien`.`id_kelurahan` = `tb_kelurahan`.`id_kelurahan` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

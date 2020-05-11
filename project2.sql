-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mei 2020 pada 08.18
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `id_lokasi` int(10) NOT NULL,
  `barcode` varchar(100) NOT NULL,
  `qr` varchar(100) NOT NULL,
  `stok` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `id_kategori`, `tgl_masuk`, `pengirim`, `id_lokasi`, `barcode`, `qr`, `stok`) VALUES
(4, 'PULPEN', 1, '2020-04-06 00:00:00', 'JOJO', 2, 'PULPEN.2020-04-06 20:30:141.2.png', 'p', NULL),
(5, 'xx', 1, '2020-04-06 00:00:00', 'x', 2, 'xx.2020-04-06 20:31:091.2.png', 'p', NULL),
(7, 'xx', 1, '2020-04-06 00:00:00', 'JOJO', 2, 'xx.2020-04-06 20:35:381.2.png', 'p', NULL),
(9, 'pensil', 1, '2020-04-06 00:00:00', 'x', 2, 'pensil.2020-04-06 20:39:121.2.png', 'p', NULL),
(11, 'udang bakar', 1, '2020-04-06 00:00:00', '9', 2, 'udang bakar.2020-04-06 20:43:421.2.png', 'd', NULL),
(14, 'xx', 1, '2020-04-06 21:04:32', 'JOJO', 2, 'xx.2020-04-061.2.png', 'sdf', NULL),
(15, 'sampo', 1, '2020-04-07 07:20:51', 'x', 2, 'sampo.2020-04-071.2.png', '2', NULL),
(16, 'sate', 1, '2020-04-07 07:33:45', 'dedek', 2, 'sate.2020-04-071.2.png', 'sate.2020-04-071.2.png', NULL),
(17, 'cumi', 1, '2020-05-08 11:42:42', 'kopet', 2, 'cumi.2020-05-081.2.png', 'cumi.2020-05-081.2.png', NULL),
(18, 'cumi', 1, '2020-05-08 11:42:43', 'kopet', 2, 'cumi.2020-05-081.2.png', 'cumi.2020-05-081.2.png', NULL),
(19, 'ayam', 2, '2020-05-08 11:49:12', 'susi', 1, 'ayam.2020-05-082.1.png', 'ayam.2020-05-082.1.png', NULL),
(20, 'sabun', 1, '2020-05-11 02:25:59', 'papa', 2, 'sabun.2020-05-111.2.png', 'sabun.2020-05-111.2.png', NULL),
(21, 'tas', 2, '2020-05-11 02:40:11', 'bunda', 1, 'tas.2020-05-112.1.png', 'tas.2020-05-112.1.png', NULL),
(22, 'LINGGIS', 1, '2020-05-11 03:17:26', 'LIMBAD', 2, 'LINGGIS.2020-05-111.2.png', 'LINGGIS.2020-05-111.2.png', 20),
(23, 'handphone', 1, '2020-05-11 08:05:46', 'juned', 1, 'handphone.2020-05-111.1.png', 'handphone.2020-05-111.1.png', 10),
(24, 'hp', 2, '2020-05-11 08:08:32', 'tuyul', 1, 'hp.2020-05-112.1.png', 'hp.2020-05-112.1.png', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'barang_habispakai'),
(2, 'barang_modal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_rak` int(10) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_rak`, `lokasi`) VALUES
(1, 'rak a'),
(2, 'rak b'),
(3, 'rak c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_rak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_rak`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

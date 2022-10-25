-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 02:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_paket`, `qty`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 5),
(5, 2, 1, 1),
(6, 2, 2, 12),
(7, 2, 3, 11),
(8, 2, 4, 2),
(9, 2, 4, 12),
(10, 3, 1, 1),
(11, 3, 4, 23),
(12, 4, 1, 2),
(13, 4, 3, 1),
(14, 5, 2, 5),
(15, 6, 1, 1),
(16, 6, 2, 2),
(17, 6, 4, 100);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `alamat`, `jk`, `telp`) VALUES
(1, 'Axl Rhenanda Fanany', 'Sidoarjo', 'l', '082333874780'),
(2, 'Ananda Afriezta', 'Malang', 'l', '083117932865'),
(3, 'lucy', 'Batu', 'p', '08243534532');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `jenis` enum('kiloan','bedcover','selimut','kaos','') NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `jenis`, `deskripsi`, `harga`) VALUES
(1, 'kiloan', '10000/kg', 10000),
(2, 'selimut', '15000/selimut', 15000),
(3, 'bedcover', '12500/bedcover', 12500),
(4, 'kaos', '2000/kaos', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `batas_waktu` date NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `status_bayar` enum('belum_lunas','lunas') NOT NULL,
  `status_order` enum('baru','diproses','selesai','diambil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_member`, `id_user`, `tgl_transaksi`, `batas_waktu`, `tgl_bayar`, `status_bayar`, `status_order`) VALUES
(1, 1, 1, '2022-09-29 00:00:00', '0000-00-00', '2022-09-29 00:00:00', 'lunas', 'diambil'),
(2, 1, 1, '2022-09-29 00:00:00', '2022-10-06', '2022-09-29 00:00:00', 'lunas', 'diambil'),
(3, 1, 1, '2022-09-29 00:00:00', '2022-10-06', '2022-09-29 00:00:00', 'lunas', 'diambil'),
(4, 1, 2, '2022-09-29 00:00:00', '2022-10-06', '2022-09-29 00:00:00', 'lunas', 'diambil'),
(5, 3, 3, '2022-09-29 00:00:00', '2022-10-06', '2022-10-01 00:00:00', 'lunas', 'diambil'),
(6, 3, 3, '2022-10-18 00:00:00', '2022-10-25', '2022-10-18 00:00:00', 'lunas', 'diambil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `role` enum('admin','kasir','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Firdausa', 'daus123', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'Jokowi', 'jokow1', '202cb962ac59075b964b07152d234b70', 'kasir'),
(3, 'J Schlatt ', 'BIG MAN', 'a60c6c694491d75b439073b8cb05b139', 'admin'),
(4, 'Axl Rhenanda Fanany', 'Axl2354', '492dd761692377fe84cd9d0d3b17bd06', 'owner'),
(9, 'rafi', 'rafi1', '827ccb0eea8a706c4c34a16891f84e7b', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

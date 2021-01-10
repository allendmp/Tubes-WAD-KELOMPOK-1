-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 11:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansos`
--

-- --------------------------------------------------------

--
-- Table structure for table `databansos`
--

CREATE TABLE `databansos` (
  `id_databansos` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('Tersalurkan','Belum Tersalurkan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databansos`
--

INSERT INTO `databansos` (`id_databansos`, `nama`, `nik`, `alamat`, `status`) VALUES
(1, 'Dian', '122319312', 'Bandung', 'Belum Tersalurkan'),
(2, 'Rani', '122319313', 'Jakarta', 'Belum Tersalurkan'),
(3, 'Wendy', '1234231221', 'Jalan mawar', 'Tersalurkan'),
(4, 'Winter', '54333231213', 'Jalan jalan', 'Belum Tersalurkan');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `gaji` int(11) NOT NULL,
  `slip_gaji` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `nama`, `nik`, `alamat`, `pekerjaan`, `gaji`, `slip_gaji`) VALUES
(1, '4', '', '', 'd', 1331, '1842861791_screencapture-localhost-tagihan-edit-php-2020-12-04-16_35_44.png'),
(2, 'dian', '20201200', 'Bandung', 'Petani', 2000000, '793965799_17 (1).jpg'),
(3, 'sdfgd', '1234567890', 'Korea', 'asdasd', 23234, '252050015_939446.png');

-- --------------------------------------------------------

--
-- Table structure for table `swab`
--

CREATE TABLE `swab` (
  `id_swab` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bukti` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swab`
--

INSERT INTO `swab` (`id_swab`, `id_user`, `tgl`, `jumlah`, `bukti`, `status`) VALUES
(7, 7, '2020-12-15', 3, '1654508985_939446.png', 'Belum diproses'),
(8, 7, '2021-01-05', 3, '31755028_Screenshot (8).png', 'Sedang diproses');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `role` enum('rt','warga') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `nik`, `alamat`, `no_hp`, `email`, `password`, `role`) VALUES
(1, 'r', 'r', 'd@gmail.com', '0', 'a@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'rt'),
(2, 'dian', '20201205', 'Jakarta', '08962819190', 'dian@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'warga'),
(3, 'angga', '20201206', 'Jakarta', '08962819190', 'a@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'warga'),
(4, 'herman', '20201204', 'Jakartaa', '089628191909', 'a@gmail.comm', '827ccb0eea8a706c4c34a16891f84e7b', 'rt'),
(5, 'Dani', '20201203', 'Bandung', '08729130901', 'dani@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'warga'),
(6, 'Allen', '1202180139', 'Koreaa', '1234', 'allen@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'rt'),
(7, 'ghinaa', '1234567890', 'sdadas', '1234', 'aa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'warga'),
(8, 'eeeeeee', '11111', 'Korea', '1111', 'asa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'warga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databansos`
--
ALTER TABLE `databansos`
  ADD PRIMARY KEY (`id_databansos`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `swab`
--
ALTER TABLE `swab`
  ADD PRIMARY KEY (`id_swab`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databansos`
--
ALTER TABLE `databansos`
  MODIFY `id_databansos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `swab`
--
ALTER TABLE `swab`
  MODIFY `id_swab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

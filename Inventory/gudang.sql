-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 08:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `ID_Transaksi` int(11) NOT NULL,
  `Nama_Barang` varchar(200) NOT NULL,
  `Tipe_Gerakan_Barang` varchar(20) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`ID_Transaksi`, `Nama_Barang`, `Tipe_Gerakan_Barang`, `Jumlah`, `Keterangan`) VALUES
(1, 'Dompet Kulit', 'Masuk', 20, 'fashion pria'),
(2, 'Sisir Rambut', 'Masuk', 30, 'fashion'),
(3, 'Makanan Kucing', 'masuk', 30, 'Makanan'),
(4, 'Makanan Kucing', 'masuk', 5, 'Makanan'),
(5, 'Makanan Kucing', 'keluar', 5, 'Makanan'),
(6, 'Makanan Kucing', 'masuk', 5, 'Makanan'),
(7, 'Makanan Anjing', 'masuk', 10, 'Makanan'),
(8, 'Kartu Ucapan Ulang Tahun', 'masuk', 30, 'Kartu'),
(9, 'Korek Api', 'masuk', 20, 'Korek'),
(10, 'Dompet Kulit', 'keluar', 5, 'Fashion'),
(11, 'Sepatu Pria', 'masuk', 25, 'Fashion'),
(12, 'Baju Pria', 'masuk', 20, 'Fashion'),
(13, 'Celana Pria', 'masuk', 25, 'Fashion'),
(14, 'Baju Wanita', 'masuk', 30, 'Fashion'),
(15, 'Jaket Wanita', 'masuk', 25, 'Fashion'),
(16, 'Kaos Kaki', 'masuk', 15, 'Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `stok_barang`
--

CREATE TABLE `stok_barang` (
  `ID` int(11) NOT NULL,
  `Nama_Barang` varchar(200) NOT NULL,
  `Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_barang`
--

INSERT INTO `stok_barang` (`ID`, `Nama_Barang`, `Stock`) VALUES
(1, 'Dompet Kulit', 15),
(2, 'Sisir Rambut', 30),
(3, 'Makanan Kucing', 35),
(4, 'Makanan Anjing', 10),
(5, 'Kartu Ucapan Ulang Tahun', 30),
(6, 'Korek Api', 20),
(7, 'Sepatu Pria', 25),
(8, 'Baju Pria', 20),
(9, 'Celana Pria', 25),
(10, 'Baju Wanita', 30),
(11, 'Jaket Wanita', 25),
(12, 'Kaos Kaki', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`ID_Transaksi`);

--
-- Indexes for table `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `ID_Transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stok_barang`
--
ALTER TABLE `stok_barang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

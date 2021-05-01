-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 09:41 AM
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
-- Database: `trustedshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID_Customer` int(11) NOT NULL,
  `Nama_Customer` varchar(50) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_Telp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID_Customer`, `Nama_Customer`, `Alamat`, `No_Telp`) VALUES
(1, 'Wisnu Pardhana', 'Kota Tangerang Selatan', 2147483647),
(4, 'Ricad', 'gs', 11),
(5, 'steven', 'newton timur', 123321321);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID_Transaksi` varchar(255) NOT NULL,
  `ID_Barang` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID_Transaksi`, `ID_Barang`, `Quantity`) VALUES
('INV/20201119/XX/XI/678953794', 1, 1),
('INV/20201119/XX/XI/678954865', 3, 2),
('INV/20201119/XX/XI/678951111', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID_Product` int(11) NOT NULL,
  `ID_Vendor` int(11) NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL,
  `Harga_Beli` int(11) NOT NULL,
  `Harga_Jual` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID_Product`, `ID_Vendor`, `Nama_Barang`, `Deskripsi`, `Harga_Beli`, `Harga_Jual`, `Quantity`) VALUES
(1, 1, 'Kemeja Pria', 'Fashion', 10000000, 10500000, 1),
(2, 2, 'Gelang Helix', 'Gelang Berpola', 10000, 30000, 18),
(3, 1, 'Sepatu limited Edition', 'Sepatu', 9500000, 9800000, 3),
(4, 1, 'Celana pria', 'Celana Motif Bunga', 550000, 585000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID_Staff` int(11) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Tgl_Lahir` date DEFAULT NULL,
  `No_Telp` int(13) DEFAULT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID_Staff`, `Nama`, `Tgl_Lahir`, `No_Telp`, `Username`, `Password`) VALUES
(1, NULL, NULL, NULL, 'Admin', '$2y$10$3K8krmnDdvctbasgtQ87su9OvOO5WnbtTnQ7nwySajnvc.pPsRK7G'),
(2, 'Edly', '1998-08-24', 2147483647, 'edly', '$2y$10$qGV8bDVa43g5obsL9j09KeEZt2Zeh3xO2YCO1vI6J45B00.9mrbIW'),
(3, 'ss', '2019-05-28', 111111, 'ss', '$2y$10$ZWRhQltvoXzq85ErByCQUOoYyCWp2BYSHCooQLfAjsyhSAb/SUZB6');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_Transaksi` varchar(255) NOT NULL,
  `ID_Customer` int(11) NOT NULL,
  `ID_Staff` int(11) NOT NULL,
  `Tanggal_Transaksi` date NOT NULL,
  `Total_Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID_Transaksi`, `ID_Customer`, `ID_Staff`, `Tanggal_Transaksi`, `Total_Harga`) VALUES
('INV/20201119/XX/XI/678951111', 5, 3, '2021-01-03', 9800000),
('INV/20201119/XX/XI/678953794', 1, 1, '2020-11-19', 10500000),
('INV/20201119/XX/XI/678954865', 4, 3, '2020-10-20', 19600000);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `ID_Vendor` int(11) NOT NULL,
  `Nama_Vendor` varchar(50) NOT NULL,
  `Alamat_Vendor` varchar(100) NOT NULL,
  `No_Telp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`ID_Vendor`, `Nama_Vendor`, `Alamat_Vendor`, `No_Telp`) VALUES
(1, 'Fashion Shop', 'Tangerang Selatan', 123123),
(2, 'Accesoris Shop', 'pekanbaru', 123321),
(3, 'Shoe Shop', 'Jakarta', 123233);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID_Customer`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `ID_Barang` (`ID_Barang`),
  ADD KEY `ID_Transaksi` (`ID_Transaksi`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_Product`),
  ADD KEY `ID_Vendor` (`ID_Vendor`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID_Staff`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_Transaksi`),
  ADD KEY `ID_Customer` (`ID_Customer`),
  ADD KEY `ID_Staff` (`ID_Staff`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`ID_Vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID_Customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID_Product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID_Staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `ID_Vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ID_Barang`) REFERENCES `product` (`ID_Product`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`ID_Transaksi`) REFERENCES `transaksi` (`ID_Transaksi`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ID_Vendor`) REFERENCES `vendor` (`ID_Vendor`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`ID_Customer`) REFERENCES `customer` (`ID_Customer`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`ID_Staff`) REFERENCES `staff` (`ID_Staff`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

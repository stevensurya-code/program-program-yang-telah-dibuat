-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 12:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinjamruangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `TglLahir` date NOT NULL,
  `NoTelp` varchar(12) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Roll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Username`, `Password`, `TglLahir`, `NoTelp`, `Alamat`, `Roll`) VALUES
(1, 'steven', 'steven', '1998-09-30', '081291421238', 'Ruko Newton Timur No 8', 1),
(2, 'ss', 'ss', '2018-03-03', '087899313877', 'lampung', 2),
(3, 'rr', 'rr', '1998-12-24', '08912312312', 'alogio', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `RoomID` int(11) NOT NULL,
  `NamaRuangan` varchar(5) NOT NULL,
  `Harga` varchar(100) NOT NULL,
  `Fasilitas` varchar(100) NOT NULL,
  `Ukuran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`RoomID`, `NamaRuangan`, `Harga`, `Fasilitas`, `Ukuran`) VALUES
(4, 'D301', '50000', 'Proyektor,Ac,Jam,Komputer', '15X10M'),
(6, 'D1001', '5000000', 'Ac, Komputer, Macbook, Proyektor', '4X5 Meter');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `ShiftID` int(11) NOT NULL,
  `Keterangan` text NOT NULL,
  `Status` int(11) NOT NULL,
  `Peminjam` varchar(100) NOT NULL,
  `RoomID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`ShiftID`, `Keterangan`, `Status`, `Peminjam`, `RoomID`) VALUES
(16, '8-10', 2, '', 4),
(17, '10-12', 2, 'steven', 4),
(18, '12-14', 1, '0', 4),
(19, '14-16', 1, '0', 4),
(20, '16-18', 1, '0', 4),
(26, '8-10', 1, '0', 6),
(27, '10-12', 1, '0', 6),
(28, '12-14', 1, '0', 6),
(29, '14-16', 1, '0', 6),
(30, '16-18', 1, '0', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`RoomID`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`ShiftID`),
  ADD KEY `RoomID` (`RoomID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `ShiftID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shift`
--
ALTER TABLE `shift`
  ADD CONSTRAINT `RoomID` FOREIGN KEY (`RoomID`) REFERENCES `ruangan` (`RoomID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

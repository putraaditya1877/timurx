-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2021 at 06:23 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timur`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `namacustomer` varchar(30) DEFAULT NULL,
  `deskripsi` text,
  `gambarcustomer` varchar(50) DEFAULT NULL,
  `idtoko` int(1) DEFAULT NULL,
  `tanggalbuat` datetime DEFAULT NULL,
  `tanggalupdate` datetime DEFAULT NULL,
  `statustop` int(2) DEFAULT NULL,
  `waktu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `namacustomer`, `deskripsi`, `gambarcustomer`, `idtoko`, `tanggalbuat`, `tanggalupdate`, `statustop`, `waktu`) VALUES
(16, 'Customer 2', 'Ini merupakan customer dua', 'CST-1636786050u7ydNBvKQM', 1, '2021-11-13 13:47:30', NULL, 1, 1629855638),
(17, 'Customer 1', 'Ini merupakan customer satu', 'CST-1636940537ouhOAQRVPW', 1, '2021-11-15 08:42:17', NULL, 0, NULL),
(18, 'Customer 3', 'Ini merupakan customer tiga', 'CST-1636940560GR6dF71iKv', 1, '2021-11-15 08:42:40', '2021-11-16 09:30:36', 1, 1629858566),
(20, 'Customer 5', 'Ini merupakan customer lima', 'CST-1637029864TbcGoxOejY', 1, '2021-11-15 08:43:15', '2021-11-16 09:31:04', 0, NULL),
(21, 'Customer 4', 'Ini merupakan customer empat', 'CST-1637055334AH4dvgnbqE', 1, '2021-11-15 08:43:00', '2021-11-20 09:53:11', 1, 1630400998);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

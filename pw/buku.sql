-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 06:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_c_203040056_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul buku` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul buku`, `pengarang`, `gambar`, `harga`) VALUES
(1, 'kata', 'rintiksedu', '1.jpg', 59000),
(2, 'amorfati', 'syahid muhammad', '2.jpg', 70000),
(3, 'laut bercerita', 'leila s. chudori', '3.jpg', 85000),
(4, 'filosofi teras', 'henry manampiring', '4.jpg', 56000),
(5, 'i want to die but i want to eat tteoppoki', 'baek se hee', '5.jpg', 67000),
(6, 'saddha', 'syahid muhammad', '6.jpg', 95000),
(7, 'bumi', 'tere liye', '7.jpg', 80000),
(8, 'kim ji-yeong', 'cho nam joo', '8.jpg', 89000),
(9, 'atomic habist', 'james clear', '9.jpg', 99000),
(10, 'kala', 'syahid muhammad', '10.jpg', 98000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

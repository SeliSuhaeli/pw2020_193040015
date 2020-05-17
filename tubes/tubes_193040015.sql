-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 05:45 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040015`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id`, `foto`, `nama`, `ukuran`, `warna`, `stok`, `harga`) VALUES
(1, 'minidress.jpeg', 'Mini Dress', 'All Size', 'Dusty Pink, Navy, Lightblue', 321, 250000),
(2, 'celana.jpeg', 'Celana Boyfriend Wanita', 'M, L, XL', 'Navy, Black, Lightblue', 441, 130000),
(3, 'kemeja retro.jpg', 'Kemeja Retro Vintage', 'All Size', 'White, Black', 150, 95000),
(4, 'jumpsuit.jpeg', 'Jumpsuit', 'All Size', 'Moca, Coklat-susu, Milo, Grey', 200, 120000),
(5, 'overall.jpg', 'Overall Rok ', 'All Size', 'Navy, Baby-blue, Moca', 554, 100000),
(6, 'piyama.jpeg', 'Piyama', 'M, L', 'Yellow, Pink, Blue', 250, 80000),
(7, 'roktutu.jpg', 'Rok Tutu', 'All Size', 'Pink, Black, Cream, Grey', 542, 75000),
(8, 'rok.jpg', 'Korean Mini Skirt', 'All Size', 'Lightblue, Pink', 200, 150000),
(9, 'set.jpg', 'Sporty Set', 'All Size fit to XL', 'Milo, Dark-blue, Dark-grey, Pink', 250, 160000),
(10, 'hoodie.jpeg', 'Hoodie', 'All Size fit to XL', 'Black, White', 350, 250000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2020 pada 15.01
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040015`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Seli Suhaeli Septian', '193040015', 'selisuhaeliseptian25@gmail.com', 'Teknik Informatika', '1.png'),
(2, 'Zahra Dwi Ameilia', '193040027', 'zahradwiameilia1@gmail.com', 'Teknik Informatika', '1.png'),
(3, 'Yuni Setyawati', '193040021', 'yunisetyawati@gmail.com', 'Teknik Informatika', '1.png'),
(4, 'Yanida Nur Nabila', '193040022', 'yanidanur@gmail.com', 'Teknik Informatika', '1.png'),
(5, 'Kareena Kardin', '193040035', 'kareenakardin@gmail.com', 'Teknik Informatika', '1.png'),
(6, 'Dhiya Ulhaq Ramadhanty', '193040095', 'dhiyaulhaq@gmail.com', 'Teknik Informatika', '1.png'),
(7, 'Silvi Fitriawati', '193040028', 'silvifitriawati29@gmail.com', 'Teknik Informatika', '1.png'),
(8, 'Muhamad Rizky Fauzan', '193040014', 'rizky@gmail.com', 'Teknik Informatika', '1.png'),
(9, 'Fahri Arliansyah', '193040011', 'fahri@gmail.com', 'Teknik Informatika', '1.png'),
(10, 'M.Farhan As Siddiq', '193040010', 'farhan@gmail.com', 'Teknik Informatika', '1.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

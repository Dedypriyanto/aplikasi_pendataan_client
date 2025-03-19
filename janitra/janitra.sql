-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 06:41 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `janitra`
--

-- --------------------------------------------------------

--
-- Table structure for table `kedatangan`
--

CREATE TABLE `kedatangan` (
  `no` int(100) NOT NULL,
  `tanggal_kedatangan_jam` datetime NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan_terakhir` varchar(500) NOT NULL,
  `kota_asal` varchar(500) NOT NULL,
  `no_hp` varchar(40) NOT NULL COMMENT '(+62)',
  `keperluan` varchar(500) NOT NULL,
  `program_yang_diambil` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kedatangan`
--

INSERT INTO `kedatangan` (`no`, `tanggal_kedatangan_jam`, `nama`, `tanggal_lahir`, `pendidikan_terakhir`, `kota_asal`, `no_hp`, `keperluan`, `program_yang_diambil`) VALUES
(3, '2023-03-10 10:00:00', 'Cornelia Prastuti', '2001-05-04', 'SMK', 'Bogor', '082147483647', 'umum', 'bimbingan Psi'),
(4, '2023-03-20 10:30:10', 'Sidiq Narpati', '2001-05-04', 'D3', 'Manado', '082147483647', 'akpol', 'bimbingan Psi'),
(6, '2023-03-11 13:00:00', 'Andika Gumilang', '2000-03-02', 'S1', 'Jayapura', '089867675', 'Akpol', 'Bimbingan PSI'),
(15, '2023-01-09 13:23:00', 'Joevani Sifa', '1990-07-06', 'SMA', 'Banjarmasin', '0895339119090', 'Umum', 'Konsultasi PSI'),
(16, '2023-03-10 06:09:00', 'Sidiq Narmanti', '2001-03-01', 'D3', 'Medan', '0874574537343', 'Umum', 'Tes Bakat Minat'),
(18, '2023-03-10 06:09:00', 'Cornelia asa', '1990-05-10', 'D3', 'Medan', '0874574537343', 'Ikatan Dinas', 'Konsultasi PSI'),
(19, '2023-03-10 12:09:00', 'Ananda Amel', '2000-05-04', 'D3', 'Medan', '087457453734334', 'Akpol', 'Bimbingaan PSI'),
(20, '2023-03-03 14:57:00', 'Sidiq Narpato', '2000-03-03', 'S1', 'Medan', '0874574537343334', 'Bintara', 'Tes CAT Akademik'),
(21, '2023-03-13 19:02:00', 'Admin Sanjaya', '1983-12-13', 'D2', 'Semarang', '0895339119090', 'Akpol', 'Tes Bakat Minat'),
(23, '2023-03-14 20:40:00', 'Usyi Saraswati', '1990-05-10', 'D3', 'Surabaya', '08975555645345', 'Ikatan Dinas', 'Tes CAT Akademik'),
(24, '2023-03-15 08:22:00', 'Ahmad Sembiring', '1983-04-09', 'SMA', 'Pontianak', '0816252638182712', 'Bintara', 'Tes CAT Akademik'),
(25, '2023-03-15 10:21:00', 'Angel Maria', '1998-04-09', 'SMA', 'Surabaya', '08987626162812', 'Ikatan Dinas  STAN', 'Tes CAT Akademik'),
(27, '2023-03-17 07:26:00', 'Anto Van Java', '2023-03-17', 'SMA', 'Jepara', '062363716212', 'SIP', 'Bimbingaan PSI'),
(28, '2023-03-18 08:13:00', 'Dedy Priyantoro', '1995-03-08', 'SMK', 'Semarnag', '0874574537343', 'Ikatan Dinas AKPELI', 'Tes Bakat Minat'),
(29, '2023-03-18 21:32:00', 'Anas Tasya', '1982-04-16', 'SMA', 'Bengkulu', '089896756655', 'Akpol', 'Bimbingan Akademik'),
(31, '2023-03-19 10:30:00', 'Aji Santoso', '1996-03-06', 'SMK', 'Jepara', '087765657567', 'Ikatan Dinas STIN', 'Konsultasi PSI'),
(32, '2023-03-20 10:36:00', 'Anti Van', '1996-03-06', 'SMK', 'Semarang', '089179172323', 'Ikatan Dinas SIN', 'Bimbingan Akademik'),
(33, '2023-03-21 12:51:00', 'Adelia Ross', '1996-06-01', 'D3', 'Semarang', '089876767', 'Ikatan Dinas STAN', 'Konsultasi PSI'),
(34, '2023-03-22 11:23:00', 'Adelio Salasa', '1994-03-03', 'S1', 'Bogor', '08979898778', 'Ikatan Dinas', 'Konsultasi PSI'),
(37, '2023-03-26 18:22:00', 'Ade Fian', '1997-04-02', 'SMK', 'Boyolali', '08731313131', 'Ikatan Dinas', 'Konsultasi PSI'),
(38, '2023-03-28 07:53:00', 'Amanda Manopo', '1992-05-03', 'D1', 'Ambon', '082312121212', 'PAG', 'Konsultasi PSI'),
(39, '2023-03-28 14:32:00', 'Dedy Priyantr', '1997-03-06', 'SMK', 'Semarang', '08997766661', 'Akpol', 'Konsultasi PSI'),
(41, '2023-03-28 19:17:00', 'Anada Cii', '2000-04-21', 'Sma', 'Jepara', '0854237272', 'Ikatan Dinas Stan', 'Bimbingaan PSI'),
(42, '2023-03-29 20:14:00', 'Risko Amanata', '1992-03-12', 'SMA', 'Bogor', '085515151', 'PAG', 'Konsultasi PSI'),
(43, '2023-03-29 05:45:00', 'Dedy Priyantoro', '1999-03-17', 'Smk', 'Jambi', '0873772626262', 'Umum', 'Bimbingan Akademik'),
(44, '2023-05-30 06:41:00', 'Deny', '1993-01-12', 'SMK', 'Batang', '0897867675656', 'Ikatan Dinas', 'Konsultasi PSI'),
(45, '2023-06-05 10:33:00', 'AYU', '1976-06-05', 'SMU', 'SEMARANG', '000000000000', 'Umum', 'Tes Bakat Minat'),
(46, '2023-06-06 11:33:00', 'Sri hartati', '1962-01-17', 'SMA', 'Pemalang', '0898978868', 'Sespim Sipil', 'SAD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`, `level`) VALUES
(1, 'admin', 'Administrator', 'admin@admin.com', 'admin', 'admin'),
(4, 'user1', 'user1', 'user1@user.com', 'user', 'member'),
(6, 'user', 'user', 'user@user.com', 'user', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kedatangan`
--
ALTER TABLE `kedatangan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kedatangan`
--
ALTER TABLE `kedatangan`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

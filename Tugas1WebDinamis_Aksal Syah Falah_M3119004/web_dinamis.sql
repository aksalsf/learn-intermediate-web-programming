-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 07:10 PM
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
-- Database: `web_dinamis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `mhs_nim` char(8) NOT NULL,
  `mhs_nama` varchar(64) NOT NULL,
  `mhs_gender` char(1) NOT NULL,
  `mhs_birthdate` date NOT NULL,
  `mhs_birthloc` varchar(32) NOT NULL,
  `mhs_prodi` char(2) NOT NULL,
  `mhs_alamat` text NOT NULL,
  `mhs_phone` char(14) NOT NULL,
  `mhs_email` varchar(128) NOT NULL,
  `mhs_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`mhs_nim`, `mhs_nama`, `mhs_gender`, `mhs_birthdate`, `mhs_birthloc`, `mhs_prodi`, `mhs_alamat`, `mhs_phone`, `mhs_email`, `mhs_timestamp`) VALUES
('M3119004', 'Aksal Syah Falah', 'l', '2001-01-15', 'Jakarta', 'ti', 'Mojosongo', '+6289691783679', 'aksal.sf@gmail.com', '2020-12-10 18:03:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`mhs_nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

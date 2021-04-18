-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 10:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pusdiklat`
--

-- --------------------------------------------------------

--
-- Table structure for table `magang`
--

CREATE TABLE `magang` (
  `nim` int(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `khs` varchar(100) NOT NULL,
  `unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `magang`
--

INSERT INTO `magang` (`nim`, `nama`, `instansi`, `prodi`, `no_telp`, `email`, `waktu`, `khs`, `unit`) VALUES
(1810512028, 'Nurul Aini', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '085776808738', 'nurula@upnvj.ac.id', '', '', ''),
(1810512034, 'Yuli Febyola', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '081912404486', 'yulifebyola@upnvj.ac.id', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `penlit`
--

CREATE TABLE `penlit` (
  `nim_penlit` int(15) NOT NULL,
  `nama_penlit` varchar(255) NOT NULL,
  `instansi_penlit` varchar(255) NOT NULL,
  `prodi_penlit` varchar(255) NOT NULL,
  `no_telp_penlit` varchar(15) NOT NULL,
  `email_penlit` varchar(50) NOT NULL,
  `khs_penlit` varchar(100) NOT NULL,
  `abstraks` text NOT NULL,
  `judul` varchar(255) NOT NULL,
  `dosen_penlit` varchar(255) NOT NULL,
  `no_telp_dosen` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penlit`
--

INSERT INTO `penlit` (`nim_penlit`, `nama_penlit`, `instansi_penlit`, `prodi_penlit`, `no_telp_penlit`, `email_penlit`, `khs_penlit`, `abstraks`, `judul`, `dosen_penlit`, `no_telp_dosen`) VALUES
(1810512002, 'Muhammad Rio Pratama', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '081310215976', 'riopr@upnvj.ac.id', '', 'abcdefghijklmnopqrstuvwxyz', 'dkasjf sjnfka ndans', 'Andhika Octa', '08962098228'),
(1810512031, 'Khusnul Khotimah', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '087798563012', 'khusnulkh@upnvj.ac.id', '', 'abstrak adalah bla bla bla', 'judul adalah bla bla bla', 'Andhika Octa', '081234567890');

-- --------------------------------------------------------

--
-- Table structure for table `surat_magang`
--

CREATE TABLE `surat_magang` (
  `no_surat` varchar(50) NOT NULL,
  `surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_penlit`
--

CREATE TABLE `surat_penlit` (
  `no_surat_penlit` varchar(50) NOT NULL,
  `nama_surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `role`) VALUES
(1, 'admin_pusat', 'pusdiklat', 'Rina', 'admin'),
(2, 'admin_unit', 'pusdiklat123', 'Mytha', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `magang`
--
ALTER TABLE `magang`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `penlit`
--
ALTER TABLE `penlit`
  ADD PRIMARY KEY (`nim_penlit`);

--
-- Indexes for table `surat_magang`
--
ALTER TABLE `surat_magang`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `surat_penlit`
--
ALTER TABLE `surat_penlit`
  ADD PRIMARY KEY (`no_surat_penlit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

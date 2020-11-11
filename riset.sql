-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 17, 2020 at 05:56 AM
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
-- Database: `riset`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapeta`
--

CREATE TABLE `datapeta` (
  `id` int(11) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `nama_sekolah` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `luas_bangunan` varchar(1000) NOT NULL,
  `jml_siswa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapeta`
--

INSERT INTO `datapeta` (`id`, `lat`, `lng`, `nama_sekolah`, `alamat`, `photo`, `luas_bangunan`, `jml_siswa`) VALUES
(4, '-6.905010', '106.873521', 'Universitas Nusa Putra', 'Jl, Cibolang', 'home1597620686.jpg', '123M', '120ekor');

-- --------------------------------------------------------

--
-- Table structure for table `perminatan`
--

CREATE TABLE `perminatan` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(128) NOT NULL,
  `luas` varchar(128) NOT NULL,
  `jumlah siswa` varchar(128) NOT NULL,
  `gambar_sekolah` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perminatan`
--

INSERT INTO `perminatan` (`id`, `nama_sekolah`, `luas`, `jumlah siswa`, `gambar_sekolah`) VALUES
(1, 'Smk Assubandiyah', '123M', '120', 'jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `jumlah_siswa` varchar(1000) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kode_pos` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama_sekolah`, `jumlah_siswa`, `desa`, `kecamatan`, `kode_pos`, `is_active`, `role_id`) VALUES
(1, 'aga@gmail.com', '12345678', 'SMK ASSUBANDIYAH', '120', 'Pasirsuren', 'Pelabuhanratu', '43364', 1, 1),
(2, 'aga21@gmail.com', '12345678', 'SMK Yasippa', '100', 'Pasirsuren', 'Pelabuhanratu', '43362', 0, 0),
(3, 'test@gmail.com', '123', 'SMP1', '', 'Pasirsuren', 'Pelabuhanratu', '43364', 0, 0),
(4, 'lionsaputra81@yahoo.com', '1234', 'SMP12 pelabuhaanratu', '', 'Pasirsuren', 'Pelabuhanratu', '43364', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapeta`
--
ALTER TABLE `datapeta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perminatan`
--
ALTER TABLE `perminatan`
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
-- AUTO_INCREMENT for table `datapeta`
--
ALTER TABLE `datapeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perminatan`
--
ALTER TABLE `perminatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

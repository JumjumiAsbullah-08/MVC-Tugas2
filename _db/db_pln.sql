-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 05:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `gol_id` tinyint(3) NOT NULL,
  `gol_kode` varchar(10) NOT NULL,
  `gol_nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_golongan`
--

INSERT INTO `tb_golongan` (`gol_id`, `gol_kode`, `gol_nama`, `created_at`, `updated_at`) VALUES
(40, '001', 'Pascabayar', '2022-06-20 02:05:11', '0000-00-00 00:00:00'),
(46, '002', 'Prabayar', '2022-06-20 10:08:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `pel_id` int(11) NOT NULL,
  `pel_id_gol` tinyint(3) NOT NULL,
  `pel_no` varchar(20) NOT NULL,
  `pel_nama` varchar(50) NOT NULL,
  `pel_alamat` text NOT NULL,
  `pel_hp` varchar(20) NOT NULL,
  `pel_ktp` varchar(50) NOT NULL,
  `pel_ser` varchar(50) NOT NULL,
  `pel_meteran` int(11) NOT NULL,
  `pel_aktif` enum('Y','N') NOT NULL,
  `pel_id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`pel_id`, `pel_id_gol`, `pel_no`, `pel_nama`, `pel_alamat`, `pel_hp`, `pel_ktp`, `pel_ser`, `pel_meteran`, `pel_aktif`, `pel_id_user`, `created_at`, `updated_at`) VALUES
(1, 40, '001', 'Jumjumi Asbullah', 'Medan', '081262431205', '1220030808010004', '12345', 54321, 'Y', 3, '2022-06-20 03:00:16', '2022-06-20 05:00:15'),
(17, 46, '002', 'Asbullah Hr', 'Medan Timur', '082276549403', '1220030805755154', '654321', 654321, 'Y', 11, '2022-06-21 02:17:30', '2022-06-21 04:17:30'),
(18, 40, '003', 'Petrus Sanjaya', 'Kualanamu', '08126587546', '1220255748524568', '985642', 65789, 'N', 3, '2022-06-21 03:25:33', '2022-06-21 05:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_alamat` text NOT NULL,
  `user_hp` varchar(25) NOT NULL,
  `user_pos` varchar(5) NOT NULL,
  `user_role` tinyint(2) NOT NULL,
  `user_aktf` tinyint(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_email`, `user_password`, `user_nama`, `user_alamat`, `user_hp`, `user_pos`, `user_role`, `user_aktf`, `created_at`, `updated_at`) VALUES
(3, 'jumjumiasbullah8@gmail.com', 'jumjumi080801', 'jumjumiAsbullah08', 'Desa Pangirkiran Sumatera Utara', '81262431205', '22753', 2, 2, '2022-06-20 13:36:35', '0000-00-00 00:00:00'),
(11, 'asbullah_jumjumi@gmail.com', 'jumjumi080801', 'Asbullah Hr', 'Medan', '81262431205', '22753', 1, 0, '2022-06-20 13:34:04', '2022-06-20 15:34:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`gol_id`),
  ADD UNIQUE KEY `gol_kode_2` (`gol_kode`),
  ADD KEY `gol_kode` (`gol_kode`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`pel_id`),
  ADD UNIQUE KEY `pel_no_2` (`pel_no`),
  ADD KEY `pel_no` (`pel_no`),
  ADD KEY `pel_id_gol` (`pel_id_gol`),
  ADD KEY `pel_id_user` (`pel_id_user`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `user_email_2` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `gol_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `pel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`pel_id_gol`) REFERENCES `tb_golongan` (`gol_id`),
  ADD CONSTRAINT `tb_pelanggan_ibfk_2` FOREIGN KEY (`pel_id_user`) REFERENCES `tb_users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

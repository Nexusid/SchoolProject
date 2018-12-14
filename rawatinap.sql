-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 07:46 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawatinap`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `username` varchar(50) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`) VALUES
('user', 123);

-- --------------------------------------------------------

--
-- Table structure for table `rawat`
--

CREATE TABLE `rawat` (
  `id` int(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nomor_rekam_medis` int(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `asuransi` varchar(20) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawat`
--

INSERT INTO `rawat` (`id`, `nama`, `jenis_kelamin`, `nomor_rekam_medis`, `tgl_lahir`, `asuransi`, `spesialis`, `dokter`, `status`) VALUES
(1, 'Titah Arya Dewantara', 'Laki Laki', 2147483647, '19816197', 'Ya', 'Kaki', 'Toni', 'Rawat'),
(2, 'Rifqi Nur Fauzi', 'Laki Laki', 2147483647, '61165161', 'Ya', 'Kaki', 'Teddy sujady', 'Rawat Jalan'),
(3, 'Ambiya', 'Laki Laki', 445643131, '198165', 'Tidak', 'Tactical Shotgun', 'dr ninja ', 'Karantina'),
(4, 'M Rafli Saftari', 'Laki Laki', 2147483647, '65464', 'anti asuransi kleb', 'Bucin', 'drs.Matilda', 'Rawat Inap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rawat`
--
ALTER TABLE `rawat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rawat`
--
ALTER TABLE `rawat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

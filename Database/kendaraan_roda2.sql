-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2015 at 04:19 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kendaraan_roda2`
--

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE IF NOT EXISTS `motor` (
`id` int(11) NOT NULL,
  `kode_motor` varchar(20) NOT NULL,
  `merek_motor` text NOT NULL,
  `warna_motor` text NOT NULL,
  `harga_motor` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id`, `kode_motor`, `merek_motor`, `warna_motor`, `harga_motor`) VALUES
(34, 'K002', 'Honda Blade', 'Putih', '17.000.000'),
(35, 'K003', 'Yamaha Mio', 'Merah', '12.000.000'),
(37, 'K0006', 'Yamaha Nmax', 'Biru', '30.000.000'),
(36, 'K004', 'kawasaki Ninja', 'Silver', '45.000.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

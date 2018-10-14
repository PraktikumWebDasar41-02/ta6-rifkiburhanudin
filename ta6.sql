-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 04:58 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta6`
--

-- --------------------------------------------------------

--
-- Table structure for table `pribadi`
--

CREATE TABLE `pribadi` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `Hobi` varchar(50) NOT NULL,
  `Fakultas` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pribadi`
--

INSERT INTO `pribadi` (`nim`, `nama`, `kelas`, `jeniskelamin`, `Hobi`, `Fakultas`, `Alamat`) VALUES
('6701170100', 'rifki', 'D3SI-41-01', 'Perempuan', 'Bola,Musik', 'Pilih', 'dsdsds'),
('2131231277', 'tyty', 'D3SI-41-01', 'laki-laki', 'Bola volly', 'Fakultas Ilmu Terapan', 'hghj'),
('1234567890', 'angga', 'D3SI-41-03', 'laki-laki', 'Bola volly,basket', 'Fakultas Rekayasa Industri', 'hjsjda'),
('6781190188', 'agung', 'D3SI-41-01', 'Perempuan', 'renang', 'Fakultas Ekonomi Bisnis', 'pulon'),
('6701170200', 'adel', 'D3SI-41-04', 'laki-laki', 'Bola volly', 'Fakultas Ilmu Terapan', 'palu'),
('6701178190', 'gupin', 'D3SI-41-03', 'laki-laki', 'Bola,Musik,renang', 'Fakultas Rekayasa Industri', 'jhkjsdf'),
('6701178190', 'gupin', 'D3SI-41-03', 'laki-laki', 'Bola,Musik,renang', 'Fakultas Rekayasa Industri', 'jhkjsdf');

-- --------------------------------------------------------

--
-- Table structure for table `tambahan`
--

CREATE TABLE `tambahan` (
  `nim` varchar(10) NOT NULL,
  ` no_file` varchar(30) NOT NULL,
  `story` varchar(30) NOT NULL,
  `no_gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tambahan`
--

INSERT INTO `tambahan` (`nim`, ` no_file`, `story`, `no_gambar`) VALUES
('6701170100', '', 'jhjkhkj', 'editors-page-timor-island.adapt.1190.1.jpg'),
('6701170100', '', 'wewqeewqeqw', 'download.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

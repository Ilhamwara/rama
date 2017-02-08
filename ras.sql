-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost:33060
-- Generation Time: Dec 02, 2016 at 04:11 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ras`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `Renang` double NOT NULL,
  `Lari` double NOT NULL,
  `Pushup` double NOT NULL,
  `Pullup` double NOT NULL,
  `Situp` double NOT NULL,
  `Shuttlerun` double NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `Renang`, `Lari`, `Pushup`, `Pullup`, `Situp`, `Shuttlerun`, `tanggal`) VALUES
(2, 20, 20, 10, 15, 20, 15, '2016-11-27 13:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `personil`
--

CREATE TABLE `personil` (
  `id` int(11) NOT NULL,
  `nrp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `kesatuan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `renang` double NOT NULL,
  `lari` double NOT NULL,
  `pushup` double NOT NULL,
  `situp` double NOT NULL,
  `shuttlerun` double NOT NULL,
  `pullup` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `hasil` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personil`
--

INSERT INTO `personil` (`id`, `nrp`, `nama`, `pangkat`, `jabatan`, `kesatuan`, `alamat`, `renang`, `lari`, `pushup`, `situp`, `shuttlerun`, `pullup`, `status`, `hasil`) VALUES
(1, '1234', 'Ilham Wara Nugroho', 'kjahskjh', 'jashkj', 'hakjh', 'ahsjahsk', 78, 80, 80, 86, 44, 78, 1, 75.1),
(2, '1234', 'Ilham Wara Nugroho', 'kjahskjh', 'jashkj', 'hakjh', 'ahsjahsk', 78, 80, 80, 86, 44, 78, 0, 75.1),
(3, '1234', 'Ilham Wara Nugroho', 'kjahskjh', 'jashkj', 'hakjh', 'ahsjahsk', 78, 80, 80, 86, 44, 78, 2, 75.1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personil`
--
ALTER TABLE `personil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `personil`
--
ALTER TABLE `personil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

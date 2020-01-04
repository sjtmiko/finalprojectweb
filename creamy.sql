-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 02:42 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creamy`
--

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(255) NOT NULL,
  `kode_matkul` int(255) NOT NULL,
  `nama_matkul` text NOT NULL,
  `jumlah_sks` int(255) NOT NULL,
  `konsentrasi` varchar(255) NOT NULL,
  `semester` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id_krs`, `kode_matkul`, `nama_matkul`, `jumlah_sks`, `konsentrasi`, `semester`) VALUES
(1, 456, 'aljabar', 2, 'web', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendadaran`
--

CREATE TABLE `pendadaran` (
  `id_pendadaran` int(255) NOT NULL,
  `hari_tanggal` date NOT NULL,
  `jam` varchar(255) NOT NULL,
  `ruang` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nilai` int(255) NOT NULL,
  `status` text NOT NULL,
  `dosen_pendamping` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendadaran`
--

INSERT INTO `pendadaran` (`id_pendadaran`, `hari_tanggal`, `jam`, `ruang`, `nim`, `nilai`, `status`, `dosen_pendamping`) VALUES
(1, '2019-11-11', '09.00', '7.4.2', '18.01.4197', 80, 'LULUS', 'Sharazita');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `acc` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `Email`, `acc`) VALUES
(1, 'katon', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wisuda`
--

CREATE TABLE `wisuda` (
  `id_wisuda` int(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `jurusan` text NOT NULL,
  `jadwal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisuda`
--

INSERT INTO `wisuda` (`id_wisuda`, `nim`, `nama`, `jurusan`, `jadwal`) VALUES
(2, '18.01.4197', 'Hudanijhjnj', 'teknik informatika', '2019-12-18'),
(3, '18.01.4190', 'asf', 'dff', '2019-12-18'),
(7, '18.01.4255', 'sfs', 'dgsg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `yudisium`
--

CREATE TABLE `yudisium` (
  `id_yudisium` int(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `ipk` varchar(255) NOT NULL,
  `jumlah_sks` int(255) NOT NULL,
  `nilai_d` int(255) NOT NULL,
  `nilai_e` int(255) NOT NULL,
  `status` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yudisium`
--

INSERT INTO `yudisium` (`id_yudisium`, `nim`, `nama`, `ipk`, `jumlah_sks`, `nilai_d`, `nilai_e`, `status`, `ket`) VALUES
(1, '18.01.4193', 'Anu', '3.4', 54, 0, 0, 'LULUS', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indexes for table `pendadaran`
--
ALTER TABLE `pendadaran`
  ADD PRIMARY KEY (`id_pendadaran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisuda`
--
ALTER TABLE `wisuda`
  ADD PRIMARY KEY (`id_wisuda`);

--
-- Indexes for table `yudisium`
--
ALTER TABLE `yudisium`
  ADD PRIMARY KEY (`id_yudisium`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendadaran`
--
ALTER TABLE `pendadaran`
  MODIFY `id_pendadaran` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisuda`
--
ALTER TABLE `wisuda`
  MODIFY `id_wisuda` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `yudisium`
--
ALTER TABLE `yudisium`
  MODIFY `id_yudisium` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

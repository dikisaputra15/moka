-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 03:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_lbkb`
--

CREATE TABLE `tb_lbkb` (
  `NOMOR` double DEFAULT NULL,
  `IDPEL` double DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `BLTH` double DEFAULT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `TARIF` varchar(100) DEFAULT NULL,
  `DAYA` double DEFAULT NULL,
  `KDBACA` varchar(100) DEFAULT NULL,
  `KODE_RBM` varchar(100) DEFAULT NULL,
  `TGLBACA` varchar(100) DEFAULT NULL,
  `STAN_METER` double DEFAULT NULL,
  `STAN_BACA` double DEFAULT NULL,
  `PEMKWH` double DEFAULT NULL,
  `JAMNYALA` double DEFAULT NULL,
  `MUTASI` varchar(100) DEFAULT NULL,
  `UNITAP` double DEFAULT NULL,
  `UNITUP` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nip`, `nama`, `password`, `jabatan`, `unit`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'UP3 Banten Selatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2016 at 07:02 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coba1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '0cc175b9c0f1b6a831c399e269772661');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nama_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_nama_admin` (
`id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_nama_admin`
--

INSERT INTO `tbl_nama_admin` (`id_admin`, `nama_admin`) VALUES
(1, 'admin website');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
`id_pendaftar` int(255) NOT NULL,
  `skhun` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_pendaftar`, `skhun`) VALUES
(1, 90),
(2, 80),
(5, 90),
(6, 0),
(7, 0),
(8, 20),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(16, 0),
(17, 90),
(18, 90),
(22, 90),
(29, 0),
(28, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE IF NOT EXISTS `tbl_pendaftaran` (
`id_pendaftar` int(255) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `Tempat_lahir` varchar(100) NOT NULL,
  `Tanggal_lhir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `asalsekolah` varchar(50) NOT NULL,
  `alamatsekolah` varchar(50) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `orangtua` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id_pendaftar`, `nama`, `Tempat_lahir`, `Tanggal_lhir`, `jenis_kelamin`, `agama`, `alamat`, `kewarganegaraan`, `asalsekolah`, `alamatsekolah`, `tahun_ajaran`, `orangtua`, `pekerjaan`) VALUES
(18, 'suyoko heru p', 'Banyuwangi', '01 Januari 2016', 'laki - lak', 'islam', 'Desa Tamansari Kecamatan Licin', 'wni', 'smp 1 licin', 'Desa Licin', '2010', 'Sunariyo', 'Petani'),
(22, 'puput', 'banyuwangi', '01 februari 1998', 'perempuan', 'ismas', 'tamansari', 'indonesia', 'SMP', 'licin', '2011', 'sunariyo', 'petani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id_admin`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_nama_admin`
--
ALTER TABLE `tbl_nama_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
 ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
 ADD PRIMARY KEY (`id_pendaftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_nama_admin`
--
ALTER TABLE `tbl_nama_admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
MODIFY `id_pendaftar` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
MODIFY `id_pendaftar` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
ADD CONSTRAINT `tbl_admin_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tbl_nama_admin` (`id_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

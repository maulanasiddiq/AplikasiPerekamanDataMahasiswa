-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 09:12 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `semester` int(1) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `semester`, `prodi`, `alamat`, `no_hp`) VALUES
('16090048', 'Candra Septia Cahya', 'Laki-Laki', 4, 'D3 Teknik Mesin', 'Tegal', '0821321321321'),
('16090069', 'Rifai Abdul Ghani', 'Laki-Laki', 4, 'D4 Teknik Informatika', 'Brebes', '083213213321'),
('16090079', 'Fredy Nur Apriyanto', 'Laki-Laki', 4, 'D3 Teknik Komputer', 'Tegal', '0823132132123'),
('16090112', 'Maulana Abdul Siddiq', 'Laki-Laki', 4, 'D4 Teknik Informatika', 'Tegal', '0823212321321'),
('16090123', 'Firman Pamungkas', 'Laki-Laki', 4, 'D4 Teknik Informatika', 'Brebes', '0821326173821'),
('16090152', 'Septian Rizaldi', 'Laki-Laki', 4, 'D3 Teknik Elektro', 'Brebes', '08213271321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

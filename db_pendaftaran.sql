-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 07:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `status`) VALUES
(10111213, 'Elfira Satya', 'Jl. Probolinggo', 'P', 'Islam', 'SMA 1 Probolinggo', 'Cadangan'),
(10111214, 'Nia Amellya', 'Jl. Malang Selatan', 'P', 'Hindu', 'SMK 2 Malang', 'Diterima'),
(10111215, 'Fauzan Tri Aji', 'Jl. Jakarta', 'L', 'Islam', 'SMK 3 Jakarta', 'Diterima'),
(10111216, 'Nur Arafah', 'Jl. Bontang', 'L', 'Kristen', 'SMA 4 Bontang', 'Diterima'),
(10111217, 'Dio Darrell', 'Jl. Batu', 'L', 'Islam', 'SMK 5 Batu', 'Ditolak'),
(10111218, 'Ian Zacharia', 'Jl. Kalimantan', 'L', 'Budha', 'SMA 6 Kalimantan', 'Diterima'),
(10111219, 'Cindy Theresiawati', 'Jl. Batu', 'P', 'Islam', 'SMA 7 Batu', 'Diterima'),
(10111220, 'Michell Ratu Kencara', 'Jl. Mojokerto', 'P', 'Kristen', 'SMK 8 Mojokerto', 'Diterima'),
(10111221, 'Lisa Putri Riadi', 'Jl. Kediri', 'P', 'Kristen', 'SMK 9 Kediri', 'Cadangan'),
(10111222, 'Eunike Yosemary', 'Jl. Sidoarjo', 'P', 'Islam', 'SMA 10 Sidoarjo', 'Ditolak'),
(10111232, 'Novta Itaqi', 'Jl. Semanggi', 'P', 'Islam', 'SMAN 21 ', 'Pendaftar'),
(10111233, 'Triono', 'Jl. Pabean', 'L', 'Kristen', 'SMK 3 Jakarta', 'Pendaftar'),
(10111234, 'Bambang Sugiyono', 'Jl. Semanggi', 'L', 'Islam', 'SMA 35 Jakarta', 'Cadangan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `roles`) VALUES
(102, 'Eduardo Louis', 'louis', '12345', 'Admin'),
(103, 'Dini Winastuti', 'dini', '1234', 'User'),
(104, 'Triono Maurice', 'triono', '12345', 'User'),
(106, 'Evita Putri', 'evitapns', '12345', 'Admin'),
(107, 'Evita Putri Nauli Simanungkalit', 'evitaaja', '12345', 'User'),
(110, 'Ananda Fajar', 'fajar', '12345', 'User'),
(111, 'Bambang Sugiyono', 'bambang', '1234', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10111235;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

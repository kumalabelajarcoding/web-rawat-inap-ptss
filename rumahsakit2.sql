-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 07:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_dokter`
--

CREATE TABLE `tabel_dokter` (
  `id` int(5) NOT NULL,
  `namadokter` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `jadwal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_dokter`
--

INSERT INTO `tabel_dokter` (`id`, `namadokter`, `nohp`, `spesialis`, `jadwal`) VALUES
(34, 'sudin', '56575', 'gigi', '12-09');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kamar`
--

CREATE TABLE `tabel_kamar` (
  `kodekamar` int(3) NOT NULL,
  `namakamar` varchar(50) NOT NULL,
  `namagedung` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_kamar`
--

INSERT INTO `tabel_kamar` (`kodekamar`, `namakamar`, `namagedung`, `status`) VALUES
(66667, 'Cendana', 'Gedung Ali', 'Kosong');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pasien`
--

CREATE TABLE `tabel_pasien` (
  `noregistrasi` int(7) NOT NULL,
  `namapasien` varchar(50) NOT NULL,
  `sakit` varchar(50) NOT NULL,
  `tgldaftar` date NOT NULL,
  `jenisrawat` varchar(50) NOT NULL,
  `kamar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_pasien`
--

INSERT INTO `tabel_pasien` (`noregistrasi`, `namapasien`, `sakit`, `tgldaftar`, `jenisrawat`, `kamar`) VALUES
(67, 'yoga', 'sakit hati', '2024-09-19', 'inap', 'Anggrek'),
(8585, 'kumalla', 'njy', '2024-09-20', 'inap', 'Melati');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pembayaran`
--

CREATE TABLE `tabel_pembayaran` (
  `noregis` int(7) NOT NULL,
  `namapasien` varchar(50) NOT NULL,
  `sakit` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `tgldaftar` date NOT NULL,
  `tglkeluar` date NOT NULL,
  `jenisrawat` varchar(50) NOT NULL,
  `kamar` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_pembayaran`
--

INSERT INTO `tabel_pembayaran` (`noregis`, `namapasien`, `sakit`, `spesialis`, `tgldaftar`, `tglkeluar`, `jenisrawat`, `kamar`, `harga`) VALUES
(3, 'yoga', 'sakit hati', 'Kandungan', '2024-09-12', '2024-09-28', 'inap', 'Anggrek', 17000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_kamar`
--
ALTER TABLE `tabel_kamar`
  ADD PRIMARY KEY (`kodekamar`);

--
-- Indexes for table `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD PRIMARY KEY (`noregistrasi`);

--
-- Indexes for table `tabel_pembayaran`
--
ALTER TABLE `tabel_pembayaran`
  ADD PRIMARY KEY (`noregis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10014;

--
-- AUTO_INCREMENT for table `tabel_kamar`
--
ALTER TABLE `tabel_kamar`
  MODIFY `kodekamar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66674;

--
-- AUTO_INCREMENT for table `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  MODIFY `noregistrasi` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3210013;

--
-- AUTO_INCREMENT for table `tabel_pembayaran`
--
ALTER TABLE `tabel_pembayaran`
  MODIFY `noregis` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1110012;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2022 at 01:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasi_siswa`
--

CREATE TABLE `administrasi_siswa` (
  `nis` int(4) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `kelas` varchar(40) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `dpp` varchar(200) NOT NULL,
  `asuransi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrasi_siswa`
--

INSERT INTO `administrasi_siswa` (`nis`, `nama_siswa`, `kelas`, `jurusan`, `dpp`, `asuransi`) VALUES
(53762948, 'Made Arya Kurniawan', 'X MM 2', 'Multimedia', 'Rp. 600.000', 'Rp. 300.000'),
(55971673, 'I Kadek Mahesa Parwata Gandhi', 'X RPL 1', 'Rekayasa Perangkat Lunak', 'Rp. 750.000', 'Rp. 200.000'),
(56816530, 'I Kadek Darmayasa Adi Putra', 'X RPL 1', 'Rekayasa Perangkat Lunak', 'Rp. 2.500.000', 'Rp. 240.000');

-- --------------------------------------------------------

--
-- Table structure for table `kesiswaan`
--

CREATE TABLE `kesiswaan` (
  `nip` varchar(100) NOT NULL,
  `nama_admin` varchar(200) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telp` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kesiswaan`
--

INSERT INTO `kesiswaan` (`nip`, `nama_admin`, `pendidikan`, `alamat`, `telp`, `username`, `password`) VALUES
('198305162019211001', 'Muhammad Gandhi Abdullah', 'SMA', 'Jalan Sriwijaya', '087851021228', 'gandhi', '$2y$10$gaJHeOu/oDDwap7J25yCieJrEIkYXm8KeRgWavMVpRY9Fr1.nJOQq'),
('198305162019211002', 'I Made Adi Arnawa, S.M.', 'S1', 'Jalan Gunung Tambora', '085739062959', 'adiarnawa78', '$2y$10$NqMlPu1eDCZJkCq/MFRqi.Q1mhCp3Mfpbivk6LGjS6XvvjCbpaIou'),
('198305162019211003', 'Siti Mulyani, M.', 'S2', 'Jalan Kenyeri', '087860770966', 'sitimulyani', '$2y$10$NVb7MqCQHytkAhXUZo1ka.JaTwT1B4aReWO.9Mk0rRdEJ5pscxBDm');

-- --------------------------------------------------------

--
-- Table structure for table `rekeningsiswa`
--

CREATE TABLE `rekeningsiswa` (
  `tanggal_transaksi` varchar(50) DEFAULT NULL,
  `nama_siswa` varchar(200) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `nis` int(20) NOT NULL,
  `no_rekening` int(20) DEFAULT NULL,
  `riwayat_transaksi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekeningsiswa`
--

INSERT INTO `rekeningsiswa` (`tanggal_transaksi`, `nama_siswa`, `jurusan`, `kelas`, `nis`, `no_rekening`, `riwayat_transaksi`) VALUES
('26 April 2022', 'I Kadek Darmayasa Adi Putra', 'Rekayasa Perangkat Lunak', 'XI RPL 1', 5327, 111111, '+ Rp.50.000'),
('26 April 2022', 'I Kadek Mahesa Parwatha Gandhi', 'Rekayasa Perangkat Lunak', 'XI RPL 1', 5328, 222222, '+ Rp.60.000'),
('26 April 2022', 'Made Arya Kurniawan', 'Multimedia', 'X MM 2', 5329, 333333, '+ Rp.70.000');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(30) NOT NULL,
  `nama_siswa` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `agama` varchar(200) DEFAULT NULL,
  `jenis_kelamin` varchar(200) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama_siswa`, `alamat`, `agama`, `jenis_kelamin`, `jurusan`, `username`, `password`) VALUES
('0053762948', 'Made Arya Kurniawan', 'Jl. Trenggana No.6', 'Hindu', 'Laki-laki', 'Multimedia', 'arya', '$2y$10$S2camgTcK0WsC4Ut3L4OsOK4f0De7MTzvS8CvEl7ZrpaxlMTpgpVa'),
('0055971673', 'I Kadek Mahesa Parwata Gandhi', 'Jl. Tukad Citarum No.33', 'Hindu', 'Laki-laki', 'Rekayasa Perangkat Lunak', 'mahesa', '$2y$10$rIUarburK.eYWdVXFBwT/Oa/5.SO3slsl6kB1f9NRJC.zTLsBVoiq'),
('0056816530', 'I Kadek Darmayasa Adi Putra', 'Jl. Ratna Gg. Sandat No.2', 'Hindu', 'Laki-laki', 'Rekayasa Perangkat Lunak', 'kadekdarmayasa', '$2y$10$s.Qx2.i17kY1BGL3gf1V0.DaPN7kCHhABnhC8To91PqCJWSXEiqJW');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `tagihan_spp` varchar(100) DEFAULT NULL,
  `tagihan_osis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`nis`, `nama_siswa`, `jurusan`, `kelas`, `tagihan_spp`, `tagihan_osis`) VALUES
(5327, 'I Kadek Darmayasa Adi Putra', 'Rekayasa Perangkat Lunak', 'X RPL 1', 'Rp. 350.000', 'Rp. 40.000'),
(5328, 'I Kadek Mahesa Parwata Gandhi', 'Rekayasa Perangkat Lunak', 'X RPL 1', 'Rp. 700.000', 'Rp. 80.000'),
(5570, 'Made Arya Kurniawan ', 'Multimedia', 'X MM 2', 'Rp. 350.000', 'Rp. 40.000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `role`, `nama`, `email`, `username`, `password`) VALUES
(1, 2, 'I Kadek Darmayasa Adi Putra', 'darmayasadiputra@gmail.com', 'kadekdarmayasa', '$2y$10$msoOhCQRDQVSue8r0oVwC.go/oUL.qVLlkK73k8GE7CQGudrYlWXW'),
(2, 2, 'I Kadek Mahesa Parwata Gandhi', 'mahesaikadek@gmail.com', 'mahesa', '$2y$10$rIUarburK.eYWdVXFBwT/Oa/5.SO3slsl6kB1f9NRJC.zTLsBVoiq'),
(3, 2, 'Made Arya Kurniawan', 'arya12@gmail.com', 'arya', '$2y$10$S2camgTcK0WsC4Ut3L4OsOK4f0De7MTzvS8CvEl7ZrpaxlMTpgpVa'),
(4, 1, 'Muhammad Gandhi Abdullah', 'gandhi@gmail.com', 'gandhi', '$2y$10$gaJHeOu/oDDwap7J25yCieJrEIkYXm8KeRgWavMVpRY9Fr1.nJOQq'),
(5, 1, 'I Made Adi Arnawa, S.M.', 'adiarnawa78@gmail.com', 'adiarnawa78', '$2y$10$NqMlPu1eDCZJkCq/MFRqi.Q1mhCp3Mfpbivk6LGjS6XvvjCbpaIou'),
(6, 1, 'Siti Mulyani, M.', 'sitimulyani@gmail.com', 'sitimulyani', '$2y$10$NVb7MqCQHytkAhXUZo1ka.JaTwT1B4aReWO.9Mk0rRdEJ5pscxBDm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi_siswa`
--
ALTER TABLE `administrasi_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `kesiswaan`
--
ALTER TABLE `kesiswaan`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `rekeningsiswa`
--
ALTER TABLE `rekeningsiswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

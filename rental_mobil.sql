-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 08:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'Admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `name`, `value`) VALUES
(1, 'color', 'rgb(71, 56, 155)');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id_driver` int(11) NOT NULL,
  `nama_driver` varchar(30) NOT NULL,
  `tlp_driver` varchar(30) NOT NULL,
  `alamat_driver` varchar(30) NOT NULL,
  `status_driver` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id_driver`, `nama_driver`, `tlp_driver`, `alamat_driver`, `status_driver`) VALUES
(1, 'Dono', '0815xxx', 'Cimohong', 'Jomblo'),
(2, 'Kasino', '0815xxx', 'Kluwut', 'Jomblo'),
(3, 'Indro', '0815xxx', 'Jagapura', 'Jomblo'),
(5, 'Sumanto', '08008', 'Washington DC', 'Duda keren');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `nik` varchar(20) NOT NULL,
  `nama_member` varchar(30) NOT NULL,
  `alamat_member` text NOT NULL,
  `foto_member` varchar(30) NOT NULL,
  `tlp_member` varchar(30) NOT NULL,
  `ttl_member` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jaminan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`nik`, `nama_member`, `alamat_member`, `foto_member`, `tlp_member`, `ttl_member`, `username`, `password`, `jaminan`) VALUES
('123123123123123123', 'sarah', 'sewo', 'me.jpg', 'as12313', 'subagn', 'sarah', '123', 'Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(30) NOT NULL,
  `warna_mobil` varchar(30) NOT NULL,
  `foto_mobil` varchar(30) NOT NULL,
  `status_mobil` varchar(100) NOT NULL,
  `pajak` varchar(30) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `kapasitas` varchar(30) NOT NULL,
  `nopol` varchar(30) NOT NULL,
  `harga_mobil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama_mobil`, `warna_mobil`, `foto_mobil`, `status_mobil`, `pajak`, `tahun`, `kapasitas`, `nopol`, `harga_mobil`) VALUES
(1, 'Avanza', 'Biru', 'avanza.png', '<span style=\"color:green;\">Tersedia</span>', '12 Sep 2020', '2012', '8 Orang', 'H 555 RR', '200000'),
(2, 'Xenia', 'Silver', 'xenia.png', '<span style=\"color:green;\">Tersedia</span>', '15 Okt 2019', '2012', '8 Orang', 'H 000 TY', '200000'),
(3, 'Ertiga', 'Abu-abu', 'ertiga.png', '<span style=\"color:green;\">Tersedia</span>', '12 May 2019', '2012', '8 Orang', 'G 6780 UY', '200000'),
(4, 'Pajero', 'Putih', 'pajero.png', '<span style=\"color:green;\">Tersedia</span>', '11 Jan 2021', '2012', '8 Orang', 'G 4343 TI', '200000'),
(5, 'Mobilio', 'Maroon', 'mobilio.png', '<span style=\"color:green;\">Tersedia</span>', '15 Feb 2030', '2012', '8 Orang', 'G 666 OP', '200000'),
(6, 'Lamborghini', 'Orange', 'lamborghini.png', '<span style=\"color:green;\">Tersedia</span>', '20 Feb 2020', '2012', '8 Orang', 'G 123 RT', '200000'),
(7, 'Grand Livina', 'Cokelat', 'livina.png', '<span style=\"color:green;\">Tersedia</span>', '26 Des 2021', '2012', '8 Orang', 'G 333 DS', '200000'),
(8, 'Terios', 'Putih', 'terios.png', '<span style=\"color:green;\">Tersedia</span>', '28 Des 2030', '2012', '8 Orang', 'G 2121 SW', '200000'),
(9, 'Brio', 'Kuning', 'brio.png', '<span style=\"color:green;\">Tersedia</span>', '21 Feb 2023', '2012', '6 Orang', 'G 555 BT', '200000'),
(10, 'F1', 'Merah', 'f1.png', '<span style=\"color:green;\">Tersedia</span>', '21 Des 2020', '2011', '1 Orang', 'T 8989 HT', '200000'),
(11, 'Alfa Romeo', 'Merah', 'alfa_romeo.png', '<span style=\"color:green;\">Tersedia</span>', '22 Des 2020', '1910', '4 Orang', 'H 8989 TR', '200000'),
(12, 'Acura', 'Putih', 'acura.png', '<span style=\"color:green;\">Tersedia</span>', '22 Des 2021', '1986', '6 Orang', 'T 6565 WW', '200000'),
(13, 'Niva', 'Hijau', 'niva.png', '<span style=\"color:green;\">Tersedia</span>', '22 Des 2020', '2014', '4 Orang', 'T 8787 GT', '200000'),
(14, 'Opel', 'Gold', 'opel.png', '<span style=\"color:green;\">Tersedia</span>', '23 Feb 2021', '1862', '4 Orang', 'G 7676 HD', '200000'),
(15, 'Peugeot', 'Cokelat', 'peugeot.png', '<span style=\"color:green;\">Tersedia</span>', '25 Des 2021', '2014', '4 Orang', 'R 6565 HG', '200000'),
(16, 'Mercedes', 'Silver', 'mercedes.png', '<span style=\"color:green;\">Tersedia</span>', '23 Des 2020', '2014', '4 Orang', 'T 6565 FR', '200000'),
(17, 'Mazda', 'Abu-abu', 'mazda.png', '<span style=\"color:green;\">Tersedia</span>', '23 Des 2030', '2015', '4 Orang', 'T 6576 FR', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `durasi` varchar(30) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `durasi`, `biaya`) VALUES
(1, 'Beginner (Tanpa pintu)', '1 Hari', 200000),
(2, 'Pro (Tanpa spion)', '2 Hari', 300000),
(3, 'Expert (Rem blong)', '3 Hari', 400000),
(4, 'Brutal (Tutup mata)', '4 Hari', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `id_driver` int(11) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `tanggal_pemesanan` varchar(20) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nik`, `id_driver`, `id_mobil`, `id_paket`, `tanggal_pemesanan`, `bukti_pembayaran`) VALUES
(2, '123123123123123123', 3, 3, 4, '07 Oct 2019', 'Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pesanan` int(11) DEFAULT NULL,
  `tanggal_transaksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pesanan`, `tanggal_transaksi`) VALUES
(1, 2, '07 Oct 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_driver` (`id_driver`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `member` (`nik`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id_driver`),
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`),
  ADD CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

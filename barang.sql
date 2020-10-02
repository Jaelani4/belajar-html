-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 04:29 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `Kode_Barang` char(4) NOT NULL,
  `Nama_Barang` varchar(30) DEFAULT NULL,
  `Satuan` varchar(10) DEFAULT NULL,
  `Harga_Satuan` int(11) DEFAULT NULL,
  `warna` varchar(12) DEFAULT NULL,
  `Berat` varchar(20) DEFAULT NULL,
  `Ukuran` varchar(20) DEFAULT NULL,
  `Garansi` int(10) DEFAULT NULL,
  `Kategori` varchar(20) DEFAULT NULL,
  `Merk` varchar(30) DEFAULT NULL,
  `Stok` int(11) DEFAULT NULL,
  `Stok_Min` int(8) DEFAULT NULL,
  `Kondisi` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`Kode_Barang`, `Nama_Barang`, `Satuan`, `Harga_Satuan`, `warna`, `Berat`, `Ukuran`, `Garansi`, `Kategori`, `Merk`, `Stok`, `Stok_Min`, `Kondisi`) VALUES
('0001', 'Laptop HP 14s DK0073AU', 'Buah', 3729000, 'Putih', '1kg-3kg', '1366x768', 1, 'Laptop', 'HP', 37, 1, 'Baru'),
('0002', 'Laptop ASUS A420AU', 'Buah', 5499000, 'Silver', '1kg-3kg', '1366x768', 1, 'Laptop', 'Asus', 3, 1, 'Baru'),
('0003', 'Asus Zenfine Max M2', 'Buah', 1665000, 'Biru', '160 g', '158.4x76.3x7.7 mm', 1, 'Handphone', 'Asus', 14, 1, 'Baru'),
('0004', 'Headset Earphone Gaming Razer ', 'Buah', 269000, 'Hitam', '30g', '3.5mm', 1, 'Earphone', 'Asus', 456, 1, 'Baru'),
('0005', 'Asus RT-AC58U Dual-Band Gigabi', 'Buah', 1299000, 'Hitam', '260g', '11.6 inch', 3, 'Router', 'Asus', 6, 1, 'Baru'),
('0006', 'Samsung Gakaxy A71', 'Buah', 5755000, 'Putih', '179g', '163,5 x 76,0 x 7,7 m', 2, 'Handphone', 'Samsung', 0, 0, 'Baru'),
('0007', 'Charger Samsung 2A', 'Buah', 125000, 'Putih', '50g', '4x6 mm', 0, 'Charger', 'Samsung', 4, 0, 'Baru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Kode_Barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

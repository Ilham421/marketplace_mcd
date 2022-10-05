-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 10:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode_barang` varchar(11) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `kategori_barang` enum('Promo','Minuman','Happy Meal','Promo dan Minuman','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_barang`, `nama_barang`, `stok_barang`, `harga_barang`, `kategori_barang`) VALUES
('P-0001', 'HIMALAYAN LATTE FRAPPE', 230, 35000, 'Promo dan Minuman'),
('P-0002', 'HIMALAYAN LATTE FRAPPE WITH CAKE', 300, 56000, 'Promo dan Minuman'),
('P-0003', 'HIMALAYAN TEA FRAPPE', 350, 32500, 'Promo dan Minuman'),
('P-0004', 'HIMALAYAN FRAPPE WITH CAKE', 250, 56500, 'Promo dan Minuman'),
('P-0005', 'DOUBLE BIG MAC', 400, 48000, 'Promo'),
('P-0006', 'BIG MAC BEEF RASHER', 300, 39900, 'Promo'),
('P-0007', 'CHEESEBURGER MCFLAVOR FRIES WITH BEEF RASHER BITES', 300, 18500, 'Promo'),
('P-0008', 'ICED COFFEE', 600, 18000, 'Minuman'),
('P-0009', 'HAPPY MEAL EGG & CHEESE MUFFIN', 450, 39500, 'Promo'),
('P-0010', 'HAPPY MEAL AYAM', 500, 39500, 'Happy Meal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created_at`) VALUES
(1, 'Ilham', '$2y$10$LfgV./ikLuPnS6GKQ7pcJeGTSBLEeJLcJiR5jeWFpW.aekqoRlr1e', '2022-09-23'),
(2, 'Malika', '$2y$10$w5r7Hq7B6SL1r/pX/aPab.CJLG0b84OXectuDlIxf9uY0lQHTkGu6', '2022-09-23'),
(3, 'Bayu', '$2y$10$UmPnqY6mCfov31fr527z1.OUSxbvDVkSMbuErY3TiLYz9VSi2d.IG', '2022-09-23'),
(4, 'azizganteng', '$2y$10$NtAFmGzBORO/30RNis.EOOc2I7sRKT.xKZL6nbGehtS2soWli2Veu', '2022-09-23'),
(5, 'wibu', '$2y$10$8dhDgSPuVdSgVq6J2FCH/.867JjoiK0P/t./dzQH0vQxWiH.0xwye', '2022-09-27'),
(6, 'admin', '$2y$10$5ox0D40.daThMN3lfn8V3OVYlYj28y5bvKA61pYzZujJIXPnfMFjm', '2022-09-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

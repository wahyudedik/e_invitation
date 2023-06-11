-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 02:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_invitation`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan_keuangan`
--

CREATE TABLE `laporan_keuangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `jumlah` decimal(12,0) NOT NULL,
  `tgl_order` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_keuangan`
--

INSERT INTO `laporan_keuangan` (`id`, `nama`, `jenis`, `tema`, `jumlah`, `tgl_order`, `created_at`, `updated_at`) VALUES
(1, '12', '12', '12', '700002', '2023-06-11', '2023-06-11 11:49:54', '2023-06-11 11:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `produk_themes`
--

CREATE TABLE `produk_themes` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk_themes`
--

INSERT INTO `produk_themes` (`id`, `judul`, `deskripsi`, `video`, `thumbnail`, `kategori`, `created_at`, `updated_at`) VALUES
(4, '1', '1', 'localfile/videos/1.mp4', 'localfile/thumbnails/1.JPG', 'app', '2023-05-28 12:21:21', '2023-05-28 12:21:21'),
(5, '2', '2', 'localfile/videos/2.mp4', 'localfile/thumbnails/2.JPG', 'card', '2023-05-28 12:32:33', '2023-05-28 12:32:33'),
(6, '3', '3', 'localfile/videos/3.mp4', 'localfile/thumbnails/3.JPG', 'web', '2023-05-28 12:32:49', '2023-05-28 12:32:49'),
(8, '0', '0', 'localfile/videos/pexels-pixabay-855029-1920x1080-60fps.mp4', 'localfile/thumbnails/New Game Epsiodes Every Time.png', 'app', '2023-05-30 08:25:28', '2023-06-11 09:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'wahyu dedik dwi astono', 'wdedyk@gmail.com', '$2y$10$MZl969HKvnb6zaWtN0p4vON11bSJSwNLCd3OyGdlAjkkft24w1eR6', 'member'),
(2, 'mifthakul jannah', 'wahyu@gmail.com', '$2y$10$cbRRMkvPs9z3TRhpa5XTJefmwiBXRKrI25nIZwFY8aRsrlHamgu4m', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_themes`
--
ALTER TABLE `produk_themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk_themes`
--
ALTER TABLE `produk_themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 10:01 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` date NOT NULL,
  `sinopsis` varchar(2555) NOT NULL,
  `spek_buku` varchar(255) NOT NULL,
  `harga` int NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `judul_buku`, `penulis`, `penerbit`, `sinopsis`, `spek_buku`, `harga`, `gambar`) VALUES
(16, 'The Frog prin', 'james', '2020-06-03', 'The Frog Prince is the perfect introduction for young children to this classic fairy tale. Push, pull, slide and turn mechanisms bring the story to life and introduce the familiar characters of the young princess and the Frog Prince.', 'Terdapat 30 halaman', 75000, '6484686cb72db.jpg'),
(17, 'Busy Recycle', 'icha', '2023-06-10', 'Di tiap lembar halaman ada feature interactive nyaaa yg bisa bikin si kecil gak bosen2 meng-explore buku nyaaa.', 'terdapat 8 board pages', 79000, '64849347262fe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`) VALUES
(15, 'iki', '$2y$10$nRYThDNit2myzrsFnO6SSO/7Kts/7dK6dA8Euv/bj/7AJNUqIyPzW', 'iki@gmail.com', 'admin'),
(21, 'anisa', '$2y$10$JAG6PLUtv59cO/f/nfn8/e.A3xCNq/.fUBr.Lyk3uhwO40l5RZCX2', 'anisa123@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
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
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2023 at 12:01 PM
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
  `harga` double NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `judul_buku`, `penulis`, `penerbit`, `harga`, `gambar`) VALUES
(1, 'Filosofi teras', 'Henry Manamping', '2018-11-26', 75, 'CSMV5bgsR_Rekomendasi_Buku_Self_Improvement_(2) (1).jpg'),
(14, 'barby', 'nisa', '2023-06-07', 90, '6480a91b30429.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, '', '$2y$10$LFvaU6vO5MAqfkMDzHGWPuAChd85cBdCgF3R/PmfbE6Z8Sk.mD0dq', ''),
(2, '', '$2y$10$96iLD7Gu7r3vP.0wXdorn.n/aT5.WeUUGrsV.IOvJK8Ampq5k7/B6', ''),
(3, '', '$2y$10$YxNRVbmVoriJsYYTIUpl9e8PeNLVTJUejN4GFuyuCknLeLcONq/I2', ''),
(4, '', '$2y$10$QnfFiiR2xQAGerfX41xidOwa4FujgE6COU5YVgS7tvtwHlImKY7KC', ''),
(5, '', '$2y$10$kzxhnOxkO2oAZighAJeMCuZ41tDzRV1xs18C8xQ5ZoaaGXmaDEDNC', ''),
(6, '', '$2y$10$Fl7IrTNzc.MJRXfctHxz5Ov/hhCt.yodwlpllN6TucYQMG.EqAYVK', ''),
(7, '', '$2y$10$SpGFzV345y.YZmmzRyqM.OnrVzq4j3IIz4.Ttnzrx.vjzP3UEZLYC', ''),
(8, '', '$2y$10$f/eYHqwKmRMZDoDTd3NrHu6QpawDlNdNKw.Ts8qKvftTFP5VU219C', ''),
(9, 'anisa', '$2y$10$bJzWI9DKgfQswxeQe2tcx..4RvS9diyCuMD1H131cTcsK17k2V2ei', 'anisa123@gmail.com'),
(10, 'nisa', '$2y$10$OarkX2i1a.AstNpzcMeiGuxKMb.kh5VvaBnkTnAQ72xKfVCIDNHDO', 'anisa123@gmail.com'),
(11, 'nisaaa', '$2y$10$oko7qRXD8VFgYyKODFfvAOqTCebewNc/bIlLHzuffxpJExXgG6Xsm', 'nis2mail'),
(12, 'nisa123', '$2y$10$vfm5G.I28dylzxLTMYSyY.yxEuD3rrJhPLDfQ0qGCLSnwsbBZ0psG', 'anisa123@gmail.com'),
(13, 'minyoongi', '$2y$10$F0FEV.FW3Wxx5Fb6ACt0u.pkyafa2M/vdusjsGCkOgzyx5NgaSbmG', 'anisa123@gmail.com'),
(14, 'aldi', '$2y$10$jTMTAk.dpBB3oiZ616YybOtffgFqWSqJfeIUU/25vPidYF0Dm46Ee', 'paldi@gmail.com'),
(15, 'iki', '$2y$10$nRYThDNit2myzrsFnO6SSO/7Kts/7dK6dA8Euv/bj/7AJNUqIyPzW', 'iki@gmail.com'),
(16, 'yonggi123', '$2y$10$GkjiiL.gyTr9gbZcZmjCmOK0RO9O8N2FGCvLp5WUY4m4XhtdLIhuG', 'anisa123@gmail.com'),
(17, 'yoongi123', '$2y$10$CKXGt/5OdGfbgrbGqd22n.785WgwCEVbgPR.m0KDBB/ovW0/x9nym', 'anisa123@gmail.com'),
(18, 'yesi123', '$2y$10$28NDKeCXve1SIM8clOyO0u.nmaLpNL74eWv5y5wxZA91ySd0Bo5da', 'anisa123@gmail.com'),
(19, 'annisa', '$2y$10$HZ8E5RhWYphb9zuG48Tz6eYIkW/9GPpsBpmj5B9uJR9kqLLRZF15u', 'anisa123@gmail.com'),
(20, 'nisa12', '$2y$10$eQucWMGfWiLkO.UfLNxSue/VrmkKEb9rD9.o/laNp4dzXqTzAypwO', 'anisa123@gmail.com');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

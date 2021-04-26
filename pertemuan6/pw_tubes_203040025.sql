-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 04:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040025`
--

-- --------------------------------------------------------

--
-- Table structure for table `jamtangan`
--

CREATE TABLE `jamtangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jamtangan`
--

INSERT INTO `Jamtangan` (`id`, `nama`, `deskripsi`, `harga`, `type`, `gambar`) VALUES
(1, 'CASIO WATCH', 'CaSIO WAtch is a watch that suitable for you who can look simply beautiful but also want to be outstanding among the others.elegant and beautiful look.', 'Rp 400,000', 'JamTanganpria', '2.jpg'),
(2, 'DATEJUST 31','Precious Watch presents four versions of the Oyster Perpetual Datejust 31 in white Rolesor (combining Oystersteel and 18 ct white gold).', 'Rp 3,000,000', 'JamTanganpria', '3.jpg'),
(3, 'MILANESE DARK','Milanese dark is made to give appreciation for your lifestyle, fashion style, culture, and strong and smart personality. Combining attitude, elegance, comfort and maturity.', 'Rp 1,790,000', 'Jamtangan', '4.jpg'),
(4, 'LADY DATEJUST','The female version of the symbolic Datejust, launched in 1957. With all its timeless elegance and functionality, this watch is now offered in a tiny 28mm size.', 'Rp 2,285,000', 'Jam tangan wanita', 'cazio.jpg'),
(5, 'SUBMARINER','Precious Watch presents a new generation of the Oyster Perpetual Submariner and the Oyster Perpetual Submariner Date, watches that demonstrate the historic relationship between.', 'Rp 1,299,000', 'jamtangan', 'cluse.jpg')

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(5, 'ihsan', '$2y$10$zdyd61oAAyHjmwuI1gAk0.W3oMNHd4qnmue/CiHLlB8/uIEF3neva');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jamtanganr`
--
ALTER TABLE `jamtangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jamtangan`
--
ALTER TABLE `jamtangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
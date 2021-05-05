-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2021 pada 04.37
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

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
-- Struktur dari tabel `jamtangan`
--

CREATE TABLE `jamtangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jamtangan`
--

INSERT INTO `jamtangan` (`id`, `nama`, `deskripsi`, `harga`, `type`, `gambar`) VALUES
(1, 'SIENA LIGHT GOLD', 'Siena Light Gold is a watch that suitable for you who can look simply beautiful but also want to be outstanding among the others.elegant and beautiful look.', 'Rp.1.700.000', 'jam tangan pria', 'skmei.jpg'),
(2, 'DATEJUST 31', 'Precious Watch presents four versions of the Oyster Perpetual Datejust 31 in white Rolesor (combining Oystersteel and 18 ct white gold).', '1,300.000', 'jam tangan ', 'songdu.jpg'),
(3, 'MILANESE DARK\r\n', 'Milanese dark is made to give appreciation for your lifestyle, fashion style, culture, and strong and smart personality. Combining attitude, elegance, comfort and maturity.', 'Rp.1.100.000', 'jam tangan pria', 'jam112.jpg'),
(4, 'LADY DATEJUST\r\n\r\n\r\n', 'The female version of the symbolic Datejust, launched in 1957. With all its timeless elegance and functionality, this watch is now offered in a tiny 28mm size.\r\n\r\n', '1,220.000', 'jam tangan wanita', 'cazio.jpg'),
(5, 'SUBMARINER\r\n', 'Precious Watch presents a new generation of the Oyster Perpetual Submariner and the Oyster Perpetual Submariner Date, watches that demonstrate the historic relationship between.', 'Rp.1.500.000', 'jam tangan pria', 'jam 113.jpg'),
(6, 'CLUSE WATCH\r\n\r\n', 'is a timeless icon in name and function for high performance in the world of motor sports.The Cosmograph Daytona has remained in a class of its own among sports chronographs.\r\n\r\n', '1,700.000', 'jam tangan pria', 'cluse.jpg'),
(7, 'NEUTRA WATCH\r\n\r\n\r\n', 'Incorporating elements of Medieval architecture, this Neutra watch that comes with a chronograph movement has a balanced construction, decorated with a minimalist dial.\r\n\r\n', 'Rp.1.800.000', 'jam tangan pria', 'jam basah.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

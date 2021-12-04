-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2021 pada 15.59
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budgeting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `id_trx` int(11) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'D',
  `amount` int(11) NOT NULL DEFAULT 0,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`id_trx`, `type`, `amount`, `create_date`) VALUES
(1, 'D', 10000, '2021-12-03 16:06:57'),
(3, 'C', 10000, '2021-12-03 22:19:44'),
(4, 'C', 19000, '2021-12-03 22:20:12'),
(5, 'C', 11112, '2021-12-04 01:23:41'),
(6, 'C', 123, '2021-12-04 01:24:48'),
(7, 'C', 112344, '2021-12-04 01:24:51'),
(8, 'D', 110000, '2021-12-04 01:25:29'),
(9, 'D', 112355, '2021-12-04 02:09:49'),
(10, 'D', 126600, '2021-12-04 02:10:15'),
(11, 'D', 20000, '2021-12-04 02:38:20'),
(12, 'D', 400000, '2021-12-04 02:38:32'),
(13, 'C', 26000, '2021-12-04 02:39:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_trx`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_trx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

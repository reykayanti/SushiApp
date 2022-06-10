-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2022 pada 07.41
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sushi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id` int(12) NOT NULL,
  `jenis_menu` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` double NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id`, `jenis_menu`, `menu`, `keterangan`, `harga`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Sushi', 'Angry Dragon', 'Angry Dragon adalah sushi naga wkowkwo', 100000, '', '2022-06-10 07:31:46', '2022-06-10 07:31:46'),
(2, 'sushi', 'American dream', 'american dream.jpg', 100000, 'keterangan menu nya ini yg skrg make foto', '2022-06-10 00:34:37', '2022-06-10 00:34:37'),
(3, 'sushi', 'shrimp tempura roll', 'lalalalaa shrimp tempura roll', 4000, 'shrimp tempura roll.jpg', '2022-06-10 00:35:15', '2022-06-10 00:35:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

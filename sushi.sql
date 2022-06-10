-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2022 pada 18.27
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
(3, 'sushi', 'crab stick', 'lalalalaa shrimp tempura roll', 4000, 'CRAB STICK.jpg', '2022-06-10 00:35:15', '2022-06-10 10:51:00'),
(4, 'drink', 'lemnirelae', 'lemnirelaelemnirelaelemnirelae lemnirelaelemnirelae', 14000, 'lemnirelae.png', '2022-06-10 11:06:49', '2022-06-10 11:06:49'),
(5, 'sushi', 'surf and turt roll', 'surf and turt roll surf and turt roll surf and turt roll', 100000, 'surf and turt roll.jpg', '2022-06-10 11:07:08', '2022-06-10 11:07:08'),
(6, 'sushi', 'angry dragon', 'angry dragon angry dragon angry dragon', 34000, 'angry dragon.jpg', '2022-06-10 11:07:22', '2022-06-10 11:07:22'),
(7, 'drink', 'Fanta', 'Minuman soda segar', 5000, 'fanta.jpg', '2022-06-10 11:23:23', '2022-06-10 11:23:23'),
(8, 'sushi', 'Sunset blvd', 'ini adlaah suhsi lalala lilili yhuhuu yang mantaps', 80000, 'Sunset blvd.jpg', '2022-06-10 11:23:51', '2022-06-10 11:24:16');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

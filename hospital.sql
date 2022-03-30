-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2022 pada 21.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaspbw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `nama` varchar(36) NOT NULL,
  `jenis` varchar(36) NOT NULL,
  `alamat` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hospital`
--

INSERT INTO `hospital` (`id`, `nama`, `jenis`, `alamat`) VALUES
(12, 'Daffa', 'laki-laki', 'karawang timur no 41'),
(13, 'Dimas Fajar Maulana', 'laki-laki', 'jalan ahmad yani no 3 kecamatan cika'),
(14, 'falih', 'laki-laki', 'rumah 2'),
(15, 'Aryo', 'laki-laki', 'Bekasi Timur'),
(17, 'malih', 'laki-laki', 'bandung');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

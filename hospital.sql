-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2022 pada 22.06
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`) VALUES
(4, 'dimas fajar', 'dimas2', '$2y$10$uKUirJ7LxhT3YahZeF/Pv.Bs8dnduXdMBvZPAeUcMwYHvbYaGgWcG'),
(5, 'falih', 'falih1', '$2y$10$/R8OTzixZgYOvzLup0zUru5PNqmDDCU13MFS39Gy3jC/hsySwmdp6'),
(6, 'Dimas Fajar', 'dimjar', '$2y$10$WkSyBBpGa3HuuGk0g8A8OuKS23.7QlXSteaskYNeAxN/FZsr71Ir2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

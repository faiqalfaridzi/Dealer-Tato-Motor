-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2022 pada 02.49
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faiqal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_motor` int(11) NOT NULL,
  `username` text NOT NULL,
  `gambar_1_motor` text NOT NULL,
  `gambar_2_motor` text NOT NULL,
  `nama_motor` text NOT NULL,
  `harga_motor` text NOT NULL,
  `kelengkapan_motor` text NOT NULL,
  `pajak_motor` text NOT NULL,
  `kondisi_motor` text NOT NULL,
  `kilometer_motor` text NOT NULL,
  `transmisi_motor` text NOT NULL,
  `plat_motor` text NOT NULL,
  `alamat_motor` text NOT NULL,
  `status_motor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_motor`, `username`, `gambar_1_motor`, `gambar_2_motor`, `nama_motor`, `harga_motor`, `kelengkapan_motor`, `pajak_motor`, `kondisi_motor`, `kilometer_motor`, `transmisi_motor`, `plat_motor`, `alamat_motor`, `status_motor`) VALUES
(9, 'user', 'data_gambar/202209160409motor1.jpg', 'data_gambar/202209160409motor2.jpg', 'Beat 2010', '21.000.000', 'Lengkap', '2010', 'Normal', '20.100', 'Matic', 'Purwokerto', 'Purwokerto', 'terjual'),
(10, 'user', 'data_gambar/202209160415motor3.jpg', 'data_gambar/202209160415motor4.jpg', 'Satria 2012 Baru', '2.000.000', 'Normal', 'Hidup', 'Lengkap', '1000', 'Matic', 'Purwokerto', 'Purwokerto', 'belum terjual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` text NOT NULL,
  `no_telp` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `no_telp`, `password`, `status`) VALUES
(1, 'user', '1234', 'user', 'user'),
(4, 'owner', '1234', 'owner', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

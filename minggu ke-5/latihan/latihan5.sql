-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2021 pada 10.42
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `id_sopir`
--

CREATE TABLE `id_sopir` (
  `No` int(11) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `Telepon` char(12) DEFAULT NULL,
  `Sim` varchar(30) DEFAULT NULL,
  `Tarif` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `id_type`
--

CREATE TABLE `id_type` (
  `No` int(11) NOT NULL,
  `type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `no_ktp`
--

CREATE TABLE `no_ktp` (
  `No` int(11) NOT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `tarif` varchar(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `no_transaksi`
--

CREATE TABLE `no_transaksi` (
  `No` int(11) NOT NULL,
  `tanggal_pesan` date DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali_plan` date DEFAULT NULL,
  `tanggal_kembali_act` date DEFAULT NULL,
  `jam_kembali_plan` int(11) DEFAULT NULL,
  `jam_kembali_act` int(11) DEFAULT NULL,
  `denda` int(11) DEFAULT NULL,
  `kilometer_pinjam` int(11) DEFAULT NULL,
  `kilometer_kembali` int(11) DEFAULT NULL,
  `bbm_pinjam` int(11) DEFAULT NULL,
  `bbm_kembali` int(11) DEFAULT NULL,
  `kondisi_pinjam` varchar(100) DEFAULT NULL,
  `kondisi_kembali` varchar(100) DEFAULT NULL,
  `biaya_kerusakan` int(11) DEFAULT NULL,
  `biaya_bbm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `id_sopir`
--
ALTER TABLE `id_sopir`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `id_type`
--
ALTER TABLE `id_type`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `no_ktp`
--
ALTER TABLE `no_ktp`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `no_transaksi`
--
ALTER TABLE `no_transaksi`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `id_sopir`
--
ALTER TABLE `id_sopir`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `id_type`
--
ALTER TABLE `id_type`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `no_ktp`
--
ALTER TABLE `no_ktp`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `no_transaksi`
--
ALTER TABLE `no_transaksi`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

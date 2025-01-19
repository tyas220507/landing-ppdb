-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 19 Jan 2025 pada 21.50
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdbsmk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_pendaftaran`
--

CREATE TABLE `info_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Zonasi') DEFAULT NULL,
  `status_pendaftaran` enum('Diterima','Tidak Diterima','Dalam Proses') DEFAULT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `info_pendaftaran`
--

INSERT INTO `info_pendaftaran` (`id_pendaftaran`, `nisn`, `jalur_pendaftaran`, `status_pendaftaran`, `id_jurusan`) VALUES
(1, '12345678', 'Prestasi', 'Diterima', 1),
(2, '123456788997', 'Prestasi', 'Dalam Proses', 1),
(3, '1234444444', 'Reguler', 'Dalam Proses', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `info_pendaftaran`
--
ALTER TABLE `info_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `info_pendaftaran`
--
ALTER TABLE `info_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `info_pendaftaran`
--
ALTER TABLE `info_pendaftaran`
  ADD CONSTRAINT `info_pendaftaran_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`),
  ADD CONSTRAINT `info_pendaftaran_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

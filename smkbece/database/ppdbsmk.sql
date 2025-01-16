-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Jan 2025 pada 09.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `asal_sekolah`
--

CREATE TABLE `asal_sekolah` (
  `npsn` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `nama_sekolah` varchar(250) NOT NULL,
  `alamat_sekolah` varchar(250) NOT NULL,
  `nama_kepsek` varchar(150) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `jenis_dokumen` enum('KK','Pas Foto','Ijazah','KTP Ortu','Surat Keterangan Lulus') DEFAULT NULL,
  `path_dokumen` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
(1, 'Pengembangan Perangkat Lunak & Gim'),
(2, 'Teknik Bodi Kendaraan Ringan'),
(3, 'Layanan Kesehatan'),
(4, 'Tata Busana'),
(5, 'Samsung Technology Institute'),
(6, 'Desain Komunikasi Visual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_orang_tua` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nama_orang_tua` varchar(255) DEFAULT NULL,
  `hubungan` enum('Ayah','Ibu','Wali') DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `alamat_kerja` text DEFAULT NULL,
  `no_telepon_ortu` varchar(20) DEFAULT NULL,
  `email_ortu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `username`, `password`) VALUES
(1, 'bay', '$2y$10$spNuDf6hsNzRQmBtik/63ug70LH0pCQM2uYajiM5JIGKQOlIzq5Gy'),
(5, 'ayu', '$2y$10$xaSsdxiK0QiuV1L8UnB/2uaUcHV5QnaiYnTXTUgLEcFLQkLL0jcjK'),
(6, 'zik', '$2y$10$nS6Cig.LQXAd2qWr7eJGaeClT.5epLxF8t5WkAbGWkrYI.y714hbK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `tanggal_pendaftaran` date DEFAULT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Zonasi') DEFAULT NULL,
  `status_pendaftaran` enum('Diterima','Tidak Diterima','Dalam Proses') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `ttl` varchar(250) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `id_pendaftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nama_lengkap`, `jenis_kelamin`, `ttl`, `alamat`, `agama`, `no_telepon`, `email`, `asal_sekolah`, `id_jurusan`, `id_pendaftar`) VALUES
(13, '12345678899', 'geranjasda', 'P', 'Cirebon, 22 Juni 2005', 'jhsdassud', 'Islam', '087654789043', 'tyo@gmail.com', 'dweq', 3, 5),
(14, '12345678', 'Ahmad Adly', 'L', 'Cirebon, 22 Juni 2007', 'japura', 'Islam', '089656783452', 'agusmesem@gmail.com', 'Mts Anidhomiyah', 1, 1),
(15, '12345576787', 'Santoso', 'P', 'Cirebon, 22 Juni 2002', 'Atlantis', 'Islam', '08952341571', 'soft@gmail.com', 'SMP Bina Cendekia', 5, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `level` enum('admin','guru','panitia','kepsek') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `no_telepon`, `level`) VALUES
(14, 'Sofyan Swift', 'sof', '$2y$10$0Pv39PYwjnEQefRjM5A7v.di97rOufABLGO2JKwlCwTJJYus5a3g6', 'soft@gmail.com', '089656783452', 'admin'),
(15, 'kepsek', 'kep', '$2y$10$XyuZYVRV4MXGgcuo3sXZU.s0qAeuHfOJMQgPXaNgL72/CEUptpLXu', 'kepsek@gmail.com', '089656783452', 'guru'),
(16, 'yuyu', 'ayu', '$2y$10$GrhKBGk3w7n/zLjcHHuUPu4j5CgZVD7qm7XxCTg7fAQrVBozI9ThS', 'ay@gmail.com', '0878687', 'panitia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asal_sekolah`
--
ALTER TABLE `asal_sekolah`
  ADD PRIMARY KEY (`npsn`,`nisn`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`id_orang_tua`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `fk_siswa_pendaftar` (`id_pendaftar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id_orang_tua` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Ketidakleluasaan untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD CONSTRAINT `orang_tua_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswa_pendaftar` FOREIGN KEY (`id_pendaftar`) REFERENCES `pendaftar` (`id_pendaftar`),
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

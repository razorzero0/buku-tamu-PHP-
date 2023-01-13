-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2023 pada 06.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jam_masuk` datetime(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `jam_keluar` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `alamat` varchar(100) NOT NULL,
  `komentar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nama`, `email`, `jam_masuk`, `jam_keluar`, `alamat`, `komentar`) VALUES
(23, 'yayan', 'muhainun059@gmail.com', '2023-01-20 22:33:00.000000', '2023-01-11 22:36:00.000000', 'kediri', 'halo'),
(24, 'baru', 'jwacana@example.net', '2023-01-11 07:32:00.000000', '2023-01-19 07:32:00.000000', 'jj', 'mmm'),
(25, 'yayan', 'jwacana@example.net', '2023-01-18 19:36:00.000000', '2023-01-20 19:37:00.000000', 'kediri', 'aks'),
(26, 'ssas', 'sas', '2023-01-10 20:10:00.000000', '2023-01-14 20:10:00.000000', 'asa', 'sasa'),
(27, 'Nama', 'muhainun059@gmail.com', '2023-01-13 07:49:00.000000', '2023-01-13 07:49:00.000000', 'dd', 'sd'),
(28, 'NEW', 'jwacana@example.net', '2023-01-13 08:22:00.000000', '2023-01-13 08:24:00.000000', 'JJ', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` char(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_petugas`, `nama_petugas`, `username`, `password`) VALUES
(1, 'Petugas', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(8, 'yayan', 'yayan', '202cb962ac59075b964b07152d234b70'),
(9, 'a', 'a', '0cc175b9c0f1b6a831c399e269772661');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

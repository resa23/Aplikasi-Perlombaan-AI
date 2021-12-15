-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Feb 2021 pada 06.51
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lomba_ai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `ide` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `jenis_kelamin`, `asal_sekolah`, `nohp`, `alamat`, `ide`, `email`, `password`, `foto`) VALUES
(2, 'Natasya jihan', 'Perempuan', 'UNPAD', '081342765437', 'Jl.Kenari No 37, RT 004, RW 036, Desa Arjosari, Kecamatan Kalipare, Kabupaten Malang, Provinsi Jawa Timur, Kode Pos 65166', ' Membuat sesuatu yang belum banyak diketahui .......', 'natasya11@gmail.com', '12345', 'd8afa51fa66876ff4453484889a88340.jpg'),
(3, 'Budi tora', 'Laki-Laki', 'BRAWIJAYA', '087645231907', 'Jl.Merpati No 19, RT 001, RW 003, Desa Bojongsari, Kecamatan Kedung Waringin, Kabupaten Bekasi, Provinsi Jawa Barat. Kode Pos 17540', ' SAYA MEMPUNYAI GAGASAN SEBAGAI......', 'budi.tora@gmail.com', '12345', '52ab6e374403382f3be5d9c533148b17.jpeg'),
(4, 'muhammad ghifari', 'Laki-Laki', 'UB', '021543789024', 'Jl. Cendrawasih No.23, Surabaya, Jawa Timur, Indonesia', ' Dengan membuat suatu inovasi baru , maka saya yakin bahwa ........', 'ghifariM@gmail.com', '12345', '280d0031101b64e0a3c3dc335a456636.jpeg'),
(7, 'Resa Rianti', 'Perempuan', 'POLTEKPOS', '089652251589', 'PERUM GPI JLN. SAFIR 8 NO 10 RT 02/30', ' membuat robot sederhana membantu pekerjaan rumah', 'laresarianti23@gmail.com', '12345', 'a29d6c68aafaca16ac55a2e5a4fc581f.JPG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

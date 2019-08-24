-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2019 pada 15.46
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idmahasiswa` int(30) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `nim_mahasiswa` varchar(50) NOT NULL,
  `asal_kampus` varchar(100) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `tahun_angkatan` int(10) NOT NULL,
  `email` int(100) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idmahasiswa`, `nama_mahasiswa`, `nim_mahasiswa`, `asal_kampus`, `prodi`, `tahun_angkatan`, `email`, `no_telp`, `alamat`, `tempat_lahir`, `tanggal_lahir`) VALUES
(14, 'Wildana', '161652323', 'Institute Teknologi Telkom Purwokerto', 'Informatika', 2016, 0, 0, '', '', '0000-00-00'),
(15, 'Ramadhan', '1727236223', 'Institute Teknologi Telkom Purwokerto', '', 0, 0, 0, '', '', '0000-00-00'),
(16, 'Sujatmiko', '2252623', 'Universitas Jendral Soedirman', '', 0, 0, 0, '', '', '0000-00-00'),
(17, 'Herman', '262316512', 'Universitas Indonesia', '', 0, 0, 0, '', '', '0000-00-00'),
(18, 'Suneo', '261651212', 'Universitas Gajah Mada', '', 0, 0, 0, '', '', '0000-00-00'),
(19, 'Nobita', '2726232', 'Universitas Harapan Bangsa', '', 0, 0, 0, '', '', '0000-00-00'),
(20, 'Kiikii', '826273623', 'Universitas Indonesia', '', 0, 0, 0, '', '', '0000-00-00'),
(21, 'Kunyuk', '2562323', 'Universitas Muhamadiyah Purokerto', '', 0, 0, 0, '', '', '0000-00-00'),
(26, 'Fauzan Budi Pamungkas', '16102085', 'Institute Teknologi Telkom Purwokerto', '', 0, 0, 0, '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idmahasiswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `idmahasiswa` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2022 pada 03.30
-- Versi server: 10.4.21-MariaDB-log
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siptb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `armada`
--

CREATE TABLE `armada` (
  `no_armada` int(11) NOT NULL,
  `namaArmada` varchar(20) NOT NULL,
  `jenisBus` varchar(20) NOT NULL,
  `jumlahKursi` int(11) NOT NULL,
  `id_PO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `armada`
--

INSERT INTO `armada` (`no_armada`, `namaArmada`, `jenisBus`, `jumlahKursi`, `id_PO`) VALUES
(1, 'Lorena', 'pariwisata', 50, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `kodeJadwal` int(11) NOT NULL,
  `namaArmada` varchar(20) NOT NULL,
  `tanggalBerangkat` date NOT NULL,
  `kotaAsal` varchar(30) NOT NULL,
  `kotaTujuan` varchar(30) NOT NULL,
  `jamBerangkat` time NOT NULL,
  `no_armada` int(11) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`kodeJadwal`, `namaArmada`, `tanggalBerangkat`, `kotaAsal`, `kotaTujuan`, `jamBerangkat`, `no_armada`, `harga`) VALUES
(2, 'Lorena', '2022-05-18', 'Bandar Jaya', 'Surabaya', '07:00:00', 5, '800.000'),
(3, 'Puspa Jaya', '2022-05-19', 'Bandung', 'Malang', '09:00:00', 2, '600.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id_akun` int(11) NOT NULL,
  `namaKonsumen` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `tempatLahir` varchar(20) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id_akun`, `namaKonsumen`, `email`, `jenisKelamin`, `tempatLahir`, `tanggalLahir`, `no_ktp`, `alamat`, `no_hp`) VALUES
(1, 'Rosie', 'rosie97@gmail.com', 'Perempuan', 'Jakarta', '1997-02-11', '180208751341', 'Terbanggi Besar, Lampung Tengah', '081234567890');

-- --------------------------------------------------------

--
-- Struktur dari tabel `po`
--

CREATE TABLE `po` (
  `id_PO` int(11) NOT NULL,
  `namaPO` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `namaArmada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `po`
--

INSERT INTO `po` (`id_PO`, `namaPO`, `email`, `alamat`, `no_hp`, `namaArmada`) VALUES
(1, 'Lorena', 'lorena@gmail.com', 'Bandar Jaya', '082413463568', 'Lorena');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `kode_tiket` int(11) NOT NULL,
  `no_kursi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `kode_jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggalPembayaran` date NOT NULL,
  `statusPembayaran` varchar(20) NOT NULL,
  `jumlahPembayaran` varchar(20) NOT NULL,
  `jenisTransaksi` varchar(10) NOT NULL,
  `namaBank` varchar(20) NOT NULL,
  `namaKonsumen` varchar(50) NOT NULL,
  `kode_tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `armada`
--
ALTER TABLE `armada`
  ADD PRIMARY KEY (`no_armada`),
  ADD UNIQUE KEY `id_PO` (`id_PO`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kodeJadwal`),
  ADD UNIQUE KEY `no_armada` (`no_armada`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`id_PO`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`kode_tiket`),
  ADD UNIQUE KEY `id_transaksi` (`id_transaksi`),
  ADD UNIQUE KEY `id_akun` (`id_akun`),
  ADD UNIQUE KEY `kode_jadwal` (`kode_jadwal`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `kode_tiket` (`kode_tiket`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `armada`
--
ALTER TABLE `armada`
  MODIFY `no_armada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `kodeJadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `po`
--
ALTER TABLE `po`
  MODIFY `id_PO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `kode_tiket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`kode_tiket`) REFERENCES `konsumen` (`id_akun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2022 pada 03.08
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
(3, 'Puspa Jaya', '2022-05-19', 'Bandung', 'Malang', '09:00:00', 2, '600.000'),
(4, 'Eagle High', '2022-05-26', 'Bandar Lampung', 'Jakarta Pusat', '15:30:00', 4, '500.000'),
(5, 'Sempati Star', '2022-05-22', 'Rajabasa', 'Malang', '17:00:00', 6, '900.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `password` varchar(11) NOT NULL,
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

INSERT INTO `konsumen` (`password`, `namaKonsumen`, `email`, `jenisKelamin`, `tempatLahir`, `tanggalLahir`, `no_ktp`, `alamat`, `no_hp`) VALUES
('', '', '', '', '', '0000-00-00', '', '', ''),
('1a2b', 'Rosie', 'rosie97@gmail.com', 'Perempuan', 'Jakarta', '1997-02-11', '180208751341', 'Terbanggi Besar, Lampung Tengah', '081234567890'),
('1c2d', 'Tina', 'tina@gmail.com', 'Perempuan', 'Bandar Jaya', '2001-10-21', '12345678', 'Lampung Selatan', '0812345678'),
('1e2f', 'Jeffrey', 'jeffreyjung@gmail.com', 'Laki-laki', 'Jakarta', '1997-02-14', '180202891746', 'Bandar Jaya, Lampung Tengah', '088269188503'),
('1g2h', 'Jamal', 'jamal@gmail.com', 'Laki-laki', 'Terbanggi Besar', '1997-12-23', '1843419318498', 'Gunung Sugih, Lampung Tengah', '0882-8718-5324'),
('1m2n', 'Mark', 'mark@gmail.com', 'Laki-laki', 'Bandar Lampung', '1998-12-21', '108321383', 'Lampung, Indonesia', '0681276211'),
('2b3c', 'Dinaa', 'dina@gmail.com', 'Perempuan', 'Terbanggi Besar', '2022-05-18', '109273', 'Lampung Tengah', '081967283'),
('ab123', 'Jeka', 'jeka@gmail.com', 'Laki-laki', 'Bandar Jaya', '1997-09-18', '135791', 'Bandar Jaya', '08978664');

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
  `no_kursi` varchar(5) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `kode_jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`kode_tiket`, `no_kursi`, `no_ktp`, `kode_jadwal`) VALUES
(1, '12B', '180208751341', 2),
(2, '14B', '180202891746', 3),
(4, '', '', 0),
(5, '28A', '180208751341', 3),
(6, '', '', 0),
(7, '', '', 0),
(8, '', '', 0),
(9, '', '', 0),
(10, '', '', 0),
(11, '', '', 0),
(12, '', '', 0),
(13, '01A', '180208751341', 2),
(14, '', '', 0),
(15, '', '', 0),
(16, '15A', '180208751341', 2),
(17, '', '', 0),
(18, '', '', 0),
(19, '', '', 0),
(20, '', '', 0),
(21, '', '', 0),
(22, '', '', 0),
(23, '', '', 0),
(24, '', '', 0),
(25, '', '', 0),
(26, '21A', '180208751341', 3),
(27, '', '', 0);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tiketing`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tiketing` (
`kode_tiket` int(11)
,`namaKonsumen` varchar(50)
,`kotaAsal` varchar(30)
,`kotaTujuan` varchar(30)
,`no_hp` varchar(15)
,`tanggalBerangkat` date
,`jamBerangkat` time
,`no_kursi` varchar(5)
,`no_armada` int(11)
,`harga` varchar(20)
);

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
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggalPembayaran`, `statusPembayaran`, `jumlahPembayaran`, `jenisTransaksi`, `namaBank`, `namaKonsumen`, `kode_tiket`) VALUES
(3, '2022-05-17', '', '600.000', 'Tunai', '-', 'Rosie', 13),
(7, '2022-05-16', '', '800.000', 'Transfer', 'BNI', 'Rosie', 1),
(12, '2022-05-17', 'Lunas', '600.000', 'Transfer', 'BRI', 'Jeffrey', 2),
(33, '0000-00-00', '', '', '', '', '', 0),
(45, '2022-05-17', 'Lunas', '600.000', 'Transfer', 'BNI', 'Rosie', 26);

-- --------------------------------------------------------

--
-- Struktur untuk view `tiketing`
--
DROP TABLE IF EXISTS `tiketing`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tiketing`  AS SELECT `tiket`.`kode_tiket` AS `kode_tiket`, `konsumen`.`namaKonsumen` AS `namaKonsumen`, `jadwal`.`kotaAsal` AS `kotaAsal`, `jadwal`.`kotaTujuan` AS `kotaTujuan`, `konsumen`.`no_hp` AS `no_hp`, `jadwal`.`tanggalBerangkat` AS `tanggalBerangkat`, `jadwal`.`jamBerangkat` AS `jamBerangkat`, `tiket`.`no_kursi` AS `no_kursi`, `jadwal`.`no_armada` AS `no_armada`, `jadwal`.`harga` AS `harga` FROM ((`tiket` join `konsumen`) join `jadwal`) WHERE `jadwal`.`kodeJadwal` = `tiket`.`kode_jadwal` AND `konsumen`.`no_ktp` = `tiket`.`no_ktp` ;

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
  ADD PRIMARY KEY (`password`);

--
-- Indeks untuk tabel `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`id_PO`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`kode_tiket`);

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
  MODIFY `kodeJadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `po`
--
ALTER TABLE `po`
  MODIFY `id_PO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `kode_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

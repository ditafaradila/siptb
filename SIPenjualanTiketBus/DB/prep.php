<?php
require 'conn.php';
if (!$host) {
    die("Connection failed: " . mysqli_connect_error());
}

$errors = [];
$success = [];

$sql1 = "CREATE TABLE IF NOT EXISTS armada (
    no_armada int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    namaArmada varchar(20) NOT NULL,
    jenisBus varchar(20) NOT NULL,
    jumlahKursi int(11) NOT NULL,
    id_PO int(11) NOT NULL
  )";

$sql2 = "CREATE TABLE IF NOT EXISTS jadwal (
    kodeJadwal int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    namaArmada varchar(20) NOT NULL,
    tanggalBerangkat date NOT NULL,
    kotaAsal varchar(30) NOT NULL,
    kotaTujuan varchar(30) NOT NULL,
    jamBerangkat time NOT NULL,
    no_armada int(11) NOT NULL,
    harga varchar(20) NOT NULL
  )";

$sql3 = "CREATE TABLE IF NOT EXISTS konsumen (
    passwords varchar(11) NOT NULL PRIMARY KEY,
    namaKonsumen varchar(50) NOT NULL,
    email varchar(25) NOT NULL,
    jenisKelamin varchar(10) NOT NULL,
    tempatLahir varchar(20) NOT NULL,
    tanggalLahir date NOT NULL,
    no_ktp varchar(20) NOT NULL,
    alamat varchar(50) NOT NULL,
    no_hp varchar(15) NOT NULL
  )";

$sql4 = "CREATE TABLE IF NOT EXISTS po (
    id_PO int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    namaPO varchar(25) NOT NULL,
    email varchar(30) NOT NULL,
    alamat varchar(50) NOT NULL,
    no_hp varchar(15) NOT NULL,
    namaArmada varchar(20) NOT NULL
  )";

$sql5 = "CREATE TABLE IF NOT EXISTS tiket (
    kode_tiket int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    no_kursi varchar(5) NOT NULL,
    no_ktp varchar(20) NOT NULL,
    kode_jadwal int(11) NOT NULL
  )";

$sql6 = "CREATE TABLE IF NOT EXISTS tiketing (
    kode_tiket int(11),
    namaKonsumen varchar(50),
    kotaAsal varchar(30),
    kotaTujuan varchar(30),
    no_hp varchar(15),
    tanggalBerangkat date,
    jamBerangkat time,
    no_kursi varchar(5),
    no_armada int(11),
    harga varchar(20)
  )";

$sql7 = "CREATE TABLE IF NOT EXISTS transaksi (
    id_transaksi int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    tanggalPembayaran date NOT NULL,
    statusPembayaran varchar(20) NOT NULL,
    jumlahPembayaran varchar(20) NOT NULL,
    jenisTransaksi varchar(10) NOT NULL,
    namaBank varchar(20) NOT NULL,
    namaKonsumen varchar(50) NOT NULL,
    kode_tiket int(11) NOT NULL
  )";

$sql8 = "DROP TABLE IF EXISTS `tiketing`";
$sql9 = "CREATE OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` 
    SQL SECURITY DEFINER VIEW `tiketing`  AS SELECT `tiket`.`kode_tiket` 
    AS `kode_tiket`, `konsumen`.`namaKonsumen` AS `namaKonsumen`, `jadwal`.`kotaAsal` 
    AS `kotaAsal`, `jadwal`.`kotaTujuan` AS `kotaTujuan`, `konsumen`.`no_hp` 
    AS `no_hp`, `jadwal`.`tanggalBerangkat` AS `tanggalBerangkat`, `jadwal`.`jamBerangkat` 
    AS `jamBerangkat`, `tiket`.`no_kursi` AS `no_kursi`, `jadwal`.`no_armada` 
    AS `no_armada`, `jadwal`.`harga` AS `harga` FROM ((`tiket` join `konsumen`)
    join `jadwal`) WHERE `jadwal`.`kodeJadwal` = `tiket`.`kode_jadwal` 
    AND `konsumen`.`no_ktp` = `tiket`.`no_ktp`";

$sql10 = "ALTER TABLE `armada`
    ADD UNIQUE KEY IF NOT EXISTS `id_PO` (`id_PO`)";

$sql11 = "ALTER TABLE `jadwal`
    ADD UNIQUE KEY IF NOT EXISTS `no_armada` (`no_armada`)";

$sql12 = "ALTER TABLE `transaksi`
    ADD UNIQUE KEY IF NOT EXISTS `kode_tiket` (`kode_tiket`)";

$sqls = [$sql1, $sql2, $sql3, $sql4, $sql5, $sql6, $sql7, $sql8, $sql9, $sql10, $sql11, $sql12];

foreach($sqls as $k => $sql){
    $query = @$host->query($sql);

    if(!$query)
    $errors[] = "Table $k : Creation failed ($host->error)";
    else
    $success[] = "Table $k : Creation success";
}
  
foreach($errors as $msg) {
    echo "$msg <br>";
}
?>
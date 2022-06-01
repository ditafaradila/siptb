<!DOCTYPE html>
<?php require 'navbar_po.php'; ?>

<?php
require '../../DB/conn.php';
session_start();
$laporan = mysqli_query($host, "SELECT * FROM `transaksi`");

echo "<div class='alert alert-primary' role='alert' align='center'><h1> Data Transaksi </h1></div>";
echo "<table class='table'>";
echo "<thead class='thead-dark'>
      <tr align='center'>
        <th>Kode Transaksi</th>
        <th>Nama Konsumen</th>
        <th>Jumlah Pembayaran</th>
        <th>Jenis Pembayaran</th>
        <th>Tanggal Bayar</th>
        <th>Status Pembayaran</th>
        <th>Nama Bank</th>
        <th>Kode Tiket</th>
      </tr>
      </thead>";

while($row=mysqli_fetch_assoc($laporan)){
    echo "<tr align='center'>
            <td>".$row['id_transaksi']."</td>
            <td>".$row['namaKonsumen']."</td>
            <td>".$row['jumlahPembayaran']."</td>
            <td>".$row['jenisTransaksi']."</td>
            <td>".$row['tanggalPembayaran']."</td>
            <td>".$row['statusPembayaran']."</td>
            <td>".$row['namaBank']."</td>
            <td>".$row['kode_tiket']."</td>
            </tr>";
    echo "<br>";
}
echo "</table>";
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <?php require 'navbar_po.php'; ?>
</body>
</html>

<?php
require '../../DB/conn.php';
require '../../DB/prep.php';

$laporan = mysqli_query($host, "SELECT id_transaksi, namaKonsumen, jumlahPembayaran, jenisTransaksi, tanggalPembayaran
 FROM `transaksi`");

echo "<div class='alert alert-primary' role='alert' align='center'><h1> Laporan Pemesanan Tiket Bus </h1></div>";
echo "<table class='table'>";
echo "<thead class='thead-dark'>
      <tr align='center'>
        <th>Kode Transaksi</th>
        <th>Nama Konsumen</th>
        <th>Jumlah Pembayaran</th>
        <th>Jenis Pembayaran</th>
        <th>Tanggal Bayar</th>
      </tr>
      </thead>";

while($row=mysqli_fetch_assoc($laporan)){
    echo "<tr align='center'>
            <td>".$row['id_transaksi']."</td>
            <td>".$row['namaKonsumen']."</td>
            <td>".$row['jumlahPembayaran']."</td>
            <td>".$row['jenisTransaksi']."</td>
            <td>".$row['tanggalPembayaran']."</td>
            </tr>";
    echo "<br>";
}
echo "</table>";

$queryy = mysqli_query($host, "SELECT SUM(jumlahPembayaran) FROM transaksi");
$total = mysqli_fetch_array($queryy);
echo $total;

?>
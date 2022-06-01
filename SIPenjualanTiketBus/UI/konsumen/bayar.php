<?php require 'navbar.php'; ?>
<div align="center"><img src="../../Assets/siptbus.png" height="300"></div>

<!-- <?php
session_start();
require '../../DB/conn.php';
$id = $_SESSION['no_ktp'];
$tiket = mysqli_query($host, "SELECT tiket.kode_tiket, konsumen.namaKonsumen, jadwal.kotaAsal,
 jadwal.kotaTujuan, konsumen.no_hp, jadwal.tanggalBerangkat, jadwal.jamBerangkat, jadwal.harga, tiket.no_kursi,
  jadwal.no_armada FROM tiket, konsumen, jadwal WHERE konsumen.no_ktp = '$id'");

while($row=mysqli_fetch_assoc($tiket)){
    echo "<tr align='center'>
            <td>".$row['kode_tiket']."</td>
            <td>".$row['namaKonsumen']."</td>
            <td>".$row['kotaAsal']."</td>
            <td>".$row['kotaTujuan']."</td>
            <td>".$row['no_hp']."</td>
            <td>".$row['tanggalBerangkat']."</td>
            <td>".$row['jamBerangkat']."</td>
            <td>".$row['harga']."</td>
            <td>".$row['no_kursi']."</td>
            <td>".$row['no_armada']."</td>
            </tr>";
    echo "<br>";
}
echo "</table>";
?> -->

<div class="alert alert-success" role="alert"  align="center">
  <h1>Pembayaran Tiket Bus</h1>
</div>

<div align="center">
    <form action="bayar.php" method="post">
      Masukkan Kode Tiket Anda :
      <br>            
      <input type="text" name="kotik">
      <br>
      Masukkan Tanggal Pembayaran :
      <br>
      <input type="date" name="tglbyr">
      <br>
      Masukkan Status Pembayaran :
      <br>
      <input type="text" name="status">
      <br>
      Masukkan Jumlah Pembayaran :
      <br>
      <input type="text" name="jumlah" placeholder="1.000.000">
      <br>
      Masukkan Jenis Transaksi :
      <br>
      <input type="text" name="jenis" placeholder="Tunai atau Transfer">
      <br>
      Masukkan Nama Bank :
      <br>
      <input type="text" name="nama">
      <br>
      Masukkan Nama Anda :
      <br>
      <input type="text" name="namakonsumen">
      <br>
      <br>
      <input class="btn btn-primary" type="submit" value="Bayar">
    </form>
</div>

<?php
require '../../DB/conn.php';
error_reporting(0);
$kotik=$_POST['kotik'];
$tglbyr=$_POST['tglbyr'];
$status=$_POST['status'];
$jumlah=$_POST['jumlah'];
$jenis=$_POST['jenis'];
$nama=$_POST['nama'];
$namakonsumen=$_POST['namakonsumen'];

$transaksi = mysqli_query($host, "INSERT INTO transaksi VALUES ('', '$tglbyr', '$status', '$jumlah', '$jenis', '$nama', '$namakonsumen', '$kotik')");
$tbltransaksi = mysqli_query($host, "SELECT * FROM transaksi");

echo "<table class='table'>";
echo "<thead class='thead-dark'>
      <tr align='center'>
        <th>Kode Transaksi</th>
        <th>Tanggal Bayar</th>
        <th>Status Pembayaran</th>
        <th>Jumlah Pembayaran</th>
        <th>Jenis Pembayaran</th>
        <th>Nama Bank</th>
        <th>Nama Konsumen</th>
        <th>Kode Tiket</th>
      </tr>
      </thead>";

while($row=mysqli_fetch_assoc($tbltransaksi)){
    echo "<tr align='center'>
            <td>".$row['id_transaksi']."</td>
            <td>".$row['tanggalPembayaran']."</td>
            <td>".$row['statusPembayaran']."</td>
            <td>".$row['jumlahPembayaran']."</td>
            <td>".$row['jenisTransaksi']."</td>
            <td>".$row['namaBank']."</td>
            <td>".$row['namaKonsumen']."</td>
            <td>".$row['kode_tiket']."</td>
            </tr>";
    echo "<br>";
}
echo "</table>";

?>
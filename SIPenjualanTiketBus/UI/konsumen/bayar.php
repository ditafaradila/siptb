<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<?php require 'navbar_konsumen.php'; ?>

<div align="center"><img src="../../Assets/siptbus.png" height="300"></div>

<?php
require '../../DB/conn.php';

$tiket = mysqli_query($host, "SELECT tiket.kode_tiket, konsumen.namaKonsumen, jadwal.kotaAsal,
 jadwal.kotaTujuan, konsumen.no_hp, jadwal.tanggalBerangkat, jadwal.jamBerangkat, tiket.no_kursi,
  jadwal.no_armada, jadwal.harga FROM tiket, konsumen, jadwal WHERE jadwal.kodeJadwal
   = tiket.kode_jadwal AND konsumen.no_ktp = tiket.no_ktp;");

echo "<div class='alert alert-primary' role='alert' align='center'><h1> Pemesanan Tiket Bus </h1></div>";
echo "<table class='table'>";
echo "<thead class='thead-dark'>
      <tr align='center'>
        <th>Kode Tiket</th>
        <th>Nama</th>
        <th>Kota Asal</th>
        <th>Kota Tujuan</th>
        <th>Nomor Hp</th>
        <th>Tanggal Berangkat</th>
        <th>Jam Berangkat</th>
        <th>Harga</th>
        <th>Nomor Kursi</th>
        <th>Nomor Armada</th>
      </tr>
      </thead>";

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
?>

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
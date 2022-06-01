<!DOCTYPE html>
<?php require 'navbar.php'; ?>  
<div align="center"><img src="../../Assets/siptbus.png" height="300"></div>
<div >
      <h1 align="center">Cari Tiket</h1>
</div>
<div align="center">
<form action="cari.php" method="post">
        Tanggal Berangkat
        <br>            
        <input type="date" name="tanggal">
        <br>
        Kota Asal
        <br>       
        <input type="text" name="asal">
        <br>
        Kota Tujuan
        <br>    
        <input type="text" name="tujuan">
        <br>
        <br>
        <input type="submit" value="cari">
</form>
<table table class="table">
<thead class="thead-dark">
<tr align="center">
  <th>Kode</th>
  <th>Nama Armada</th>
  <th>Tanggal Berangkat</th>
  <th>Kota Asal</th>
  <th>Kota Tujuan</th>
  <th>Jam Berangkat</th>
  <th>Harga</th>
  <th>Nomor Armada</th>
</tr>
</div>
<?php
require '../../DB/conn.php';
error_reporting(0);
$tanggal=$_POST['tanggal'];
$info = mysqli_query($host, "select * from jadwal where tanggalBerangkat = '$tanggal'");
if(mysqli_num_rows($info)>0){
        while($row=mysqli_fetch_assoc($info)){
        echo "<tr align='center'>
                        <td>".$row['kodeJadwal']."</td>
                        <td>".$row['namaArmada']."</td>
                        <td>".$row['tanggalBerangkat']."</td>
                        <td>".$row['kotaAsal']."</td>
                        <td>".$row['kotaTujuan']."</td>
                        <td>".$row['jamBerangkat']."</td>
                        <td>".$row['harga']."</td>
                        <td>".$row['no_armada']."</td>
                </tr>";
        echo "<br>";
        }
} else {
        echo "<tr align='center'>
                        <td><b>--</b></td>
                        <td><b>--</b></td>
                        <td><b>--</b></td>
                        <td><b>--</b></td>
                        <td><b>--</b></td>
                        <td><b>--</b></td>
                        <td><b>--</b></td>
                        <td><b>--</b></td>
                </tr>";
}
  echo "</table>";
?>
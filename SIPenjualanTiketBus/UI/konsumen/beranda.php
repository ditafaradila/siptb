<!DOCTYPE html>
<?php require 'navbar.php'; ?>
<body>
    <div align="center"><img src="../../Assets/siptbus.png" height="300"></div>
    <form action='cari.php' method='post'>
      <input class='btn btn-success' type='submit' value='Cari Tiket'>
    </form>
</body>
</html>

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
<?php
  error_reporting(0);
  require '../../DB/conn.php';
  $info = mysqli_query($host, "select * from jadwal order by tanggalBerangkat asc");
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
  echo "</table>";
?>
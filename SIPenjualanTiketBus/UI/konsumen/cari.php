<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<?php require 'navbar_po.php'; ?>  
<div align="center"><img src="../../Assets/siptbus.png" height="300"></div>

<?php
require '../../DB/conn.php';
$tanggal=$_POST['tanggal'];

$info = mysqli_query($host, "select * from jadwal where tanggalBerangkat = '$tanggal'");

echo "<div><h1>Informasi Jadwal Bus</h1></div>";
echo "<table border=1>";
echo "<tr>
        <td>Kode</td>
        <td>Nama Armada</td>
        <td>Tanggal Berangkat</td>
        <td>Kota Asal</td>
        <td>kota Tujuan</td>
        <td>Jam Berangkat</td>
        <td>Harga</td>
        <td>Nomor Armada</td>";
while($row=mysqli_fetch_assoc($info)){
    echo "<tr>
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
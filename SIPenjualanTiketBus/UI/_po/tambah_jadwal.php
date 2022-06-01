<!DOCTYPE html>
<?php require 'navbar_po.php'; ?>
<body>
    <div>
    <h2 align="center">Tambah Jadwal</h2>
    <form action="tambah_jadwal.php" method="POST">
        <table border="0" align="center">
            <tr><td>Nama Armada </td><td><input type="text" name="namaArmada" size="20"/></td></tr>
            <tr><td>Tanggal Berangkat </td><td><input type="date" name="tanggalBerangkat" row="5" cols="31"></textarea></td></tr>
            <tr><td>Kota Asal </td><td><input type="text" size="20" name="kotaAsal"/></td></tr>
            <tr><td>Kota Tujuan </td><td><input type="text" size="20" name="kotaTujuan"/></td></tr>
            <tr><td>Jam Berangkat </td><td><input type="time" size="10" name="jamBerangkat"/></td></tr>
            <tr><td>Nomor Armada </td><td><input type="text" size="10" name="no_armada"/></td></tr>
            <tr><td>Harga </td><td><input type="text" size="10" name="harga"/></td></tr>
            <tr><td></td><td><input class="btn btn-primary" type="submit" value="Submit" align="rigth"><input type="reset" class="btn btn-danger" Value="Clear" ></td></tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
require '../../DB/conn.php';
if(isset($_POST['submit'])){
    $namaArmada=$_POST['namaArmada'];
    $tanggalBerangkat=$_POST['tanggalBerangkat'];
    $kotaAsal=$_POST['kotaAsal'];
    $kotaTujuan=$_POST['kotaTujuan'];
    $jamBerangkat=$_POST['jamBerangkat'];
    $no_armada=$_POST['no_armada'];
    $harga=$_POST['harga'];

    mysqli_query($host, "insert into jadwal value('', '$namaArmada', '$tanggalBerangkat', '$kotaAsal', '$kotaTujuan', '$jamBerangkat', '$no_armada', '$harga')");
    header("Location: data_jadwal.php");
}
?>
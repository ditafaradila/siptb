<?php require 'navbar.php'; ?>
<div align="center"><img src="../../Assets/siptbus.png" height="300"></div>

<div align="center">
    <form action="pesan_tiket.php" method="post">
        Nomor Kursi
        <input type="text" name="nokur" placeholder="ex : 12B">
        Nomor KTP
        <input type="text" name="noktp">
        Kode Jadwal
        <input type="text" name="kojad">
        <br><br>
        <input type="submit" name="submit" value="Pesan">
    </form>
</div>

<?php
require '../../DB/conn.php';
error_reporting(0);
$nokur=$_POST['nokur'];
$noktp=$_POST['noktp'];
$kojad=$_POST['kojad'];

$sql = "SELECT * FROM tiket WHERE no_kursi='$nokur' AND kode_jadwal='$kojad'";
$cek = mysqli_query($host, $sql);
if(isset($_POST['submit'])){
    if($cek->num_rows > 0){
            echo "<script>alert('Kursi Sudah Terpesan');</script>";
    } else {
            echo "<script>alert('Pemesanan Tiket Berhasil Silahkan Bayar Tiket!');</script>";
            mysqli_query($host, "insert into tiket values('', '$nokur','$noktp','$kojad')");
    }
}
?>
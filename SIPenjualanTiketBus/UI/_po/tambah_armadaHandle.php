<?php
require '../../DB/conn.php';
session_start();
$namaArmada=$_POST['namaArmada'];
$jenisBus=$_POST['jenisBus'];
$jumlahKursi=$_POST['jumlahKursi'];
$id_PO=$_SESSION['id_po'];
if(isset($_POST['submit'])){
    $query = "INSERT INTO armada VALUES ('', '$namaArmada', '$jenisBus', '$jumlahKursi', '$id_PO')";
    $result = mysqli_query($host, $query);
    if($result){
        echo "<script type='text/javascript'>alert('Sukses');
        window.location='data_armada.php';
        </script>";
    }else{
        echo "<script type='text/javascript'>alert('Gagal');
        window.location='tambah_armada.php';
        </script>";
    }
}
?>
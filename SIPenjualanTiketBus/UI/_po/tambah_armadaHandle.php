<?php
require '../../DB/conn.php';
$namaArmada=$_POST['namaArmada'];
$jenisBus=$_POST['jenisBus'];
$jumlahKursi=$_POST['jumlahKursi'];
$id_PO=$_POST['idPo'];
if(mysqli_query($host, "insert into armada value('', '$namaArmada', '$jenisBus', '$jumlahKursi', '$id_PO')")){
    echo "<script>alert('Data Armada Berhasil Ditambahkan');</script>";
}else{
    echo "<script>alert('Data Armada Gagal Ditambahkan');</script>";
}
header("location:data_armada.php");
?>
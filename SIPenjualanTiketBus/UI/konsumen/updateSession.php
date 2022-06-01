<?php
require '../../DB/conn.php';
$sid = session_id();
$id = $_SESSION['no_ktp'];
$sql = "SELECT * FROM konsumen WHERE no_ktp='$id'";
$result = mysqli_query($host, $sql);
while($row=mysqli_fetch_assoc($result)){
    $_SESSION['nama'] = $row['namaKonsumen'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['jk'] = $row['jenisKelamin'];
    $_SESSION['tempatlahir'] = $row['tempatLahir'];
    $_SESSION['tanggal'] = $row['tanggalLahir'];
    $_SESSION['alamat'] = $row['alamat'];
    $_SESSION['nohp'] = $row['no_hp'];
    $_SESSION['passwords'] = $row['passwords'];
}
?>
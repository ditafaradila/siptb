<?php
require '../../DB/conn.php';
$sidpo = session_id();
$idpo = $_SESSION['id_po'];
$sql = "SELECT * FROM po WHERE id_PO='$idpo'";
$result = mysqli_query($host, $sql);
while($row=mysqli_fetch_assoc($result)){
    $_SESSION['namaPO'] = $row['namaPO'];
    $_SESSION['no_hp'] = $row['no_hp'];
    $_SESSION['alamatPO'] = $row['alamat'];
    $_SESSION['namaArmada'] = $row['namaArmada'];
}
?>
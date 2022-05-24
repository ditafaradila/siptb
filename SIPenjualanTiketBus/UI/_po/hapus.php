<?php
require '../../DB/conn.php';
$id = $_GET['id'];
mysqli_query($host, "Delete from jadwal where kodejadwal = $id");
header("Location: data_jadwal.php");
?>
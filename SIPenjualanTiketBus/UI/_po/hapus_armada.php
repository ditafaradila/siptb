<?php
require '../../DB/conn.php';
$id = $_GET['id'];
mysqli_query($host, "Delete from armada no_armada = $id");
header("Location: data_armada.php");
?>
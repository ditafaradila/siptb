<?php
require '../../DB/conn.php';
$id = $_GET['id'];
mysqli_query($host, "DELETE from armada WHERE no_armada = $id");
header("Location: data_armada.php");
?>
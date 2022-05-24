<?php 
    require '../../DB/conn.php';
    $kojad=$_POST['id'];
    $namaArmada = $_POST['namaArmada'];
    $tanggalBerangkat = $_POST['tanggalBerangkat'];
    $kotaAsal = $_POST['kotaAsal'];
    $kotaTujuan = $_POST['kotaTujuan'];
    $jamBerangkat = $_POST['jamBerangkat'];
    $no_armada = $_POST['no_armada'];
    $harga = $_POST['harga'];
    $sql = "UPDATE jadwal SET namaArmada='$namaArmada', tanggalBerangkat='$tanggalBerangkat', 
            kotaAsal='$kotaAsal', kotaTujuan='$kotaTujuan', jamBerangkat='$jamBerangkat', no_armada=$no_armada, 
            harga='$harga' WHERE kodeJadwal='$kojad'";
    
    if ($host->query($sql) === TRUE) {
        header("Location: data_jadwal.php");
    } else {
        echo "Error: ".$sql."<br>".$host->error;
    }
?>
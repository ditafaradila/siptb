<?php 
    require '../../DB/conn.php';
    $idpo = $_POST['idpo'];
    $namaPO = $_POST['namaPO'];
    $no_hp = $_POST['no_hpPO'];
    $alamatPO = $_POST['alamatPO'];
    $namaArmada = $_POST['armadaFav'];
    $sql = "UPDATE po SET namaPO='$namaPO', no_hp='$no_hp', 
    alamat='$alamatPO', namaArmada='$namaArmada' WHERE id_PO='$idpo'";
    $result = mysqli_query($host, $sql);
    if($result){
        header("Location: profile_po.php");
    }else{
        echo "<script>alert('Data gagal diubah')</script>";
    }
?>
<?php 
    require '../../DB/conn.php';
    $id = $_POST['id'];
    $namaKonsumen = $_POST['namaKonsumen'];
    $emailKonsumen = $_POST['emailKonsumen'];
    $jk = $_POST['jk'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $passwords = $_POST['passwords'];
    $sql = "UPDATE konsumen SET namaKonsumen='$namaKonsumen', email='$emailKonsumen', jenisKelamin='$jk', tempatLahir='$tempatlahir', tanggalLahir='$tanggalLahir', alamat='$alamat', no_hp='$nohp', passwords='$passwords' WHERE no_ktp='$id'";
    $result = mysqli_query($host, $sql);
    if($result){
        header("Location: profile.php");
    }else{
        echo "<script>alert('Data gagal diubah')</script>";
    }
?>
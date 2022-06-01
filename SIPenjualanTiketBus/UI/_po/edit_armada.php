<!DOCTYPE html>
<?php 
require 'navbar_po.php'; 
session_start();
?>
<h2 align="left">Update Armada</h2>
<form action="edit_armada.php" method="post">		
    <table>
        <tr>
            <td>Nomor Armada</td>
            <td>
                <input type="text" name="id_armada">
        </tr>
        <tr>
            <td>ID PO</td>
            <td>
                <input type="text" name="id_po" value="<?php echo $_SESSION['id_po']; ?>" readonly>
        </tr>
        <tr>
            </td>	
            <td>Nama Armada</td>
            <td>
                <input type="text" name="namaArmada">
            </td>					
        </tr>	
        <tr>
            <td>Jenis Bus</td>
            <td><input type="text" name="jenisBus"></td>					
        </tr>	
        <tr>
            <td>Jumlah Kursi</td>
            <td><input type="text" name="jk"></td>					
        </tr>	
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>					
        </tr>				
    </table>
</form>
<?php 
    require '../../DB/conn.php';
    if(isset($_POST['submit'])){
        $idArmada=$_POST['id_armada'];
        $namaArmada = $_POST['namaArmada'];
        $jenisBus = $_POST['jenisBus'];
        $jk = $_POST['jk'];

        $sql = "UPDATE `armada` SET `namaArmada`='$namaArmada',`jenisBus`='$jenisBus',
        `jumlahKursi`='$jk' WHERE `no_armada`='$idArmada'";
        $result = mysqli_query($host, $sql);
        if ($result) {
            header("Location: data_armada.php");
        } else {
            echo "<script type='text/javascript'>alert('Error: '.$sql.'<br>'.$host->error');</script>";
            // echo "<script type='text/javascript'>alert('Gagal');
            // window.location='data_armada.php';
            // </script>";
        }
    }
?>
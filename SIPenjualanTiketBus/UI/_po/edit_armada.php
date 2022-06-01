<!DOCTYPE html>
<?php require 'navbar_po.php'; ?>
<form action="edit.php" method="post">		
    <table>
        <tr>
            <td>Nomor Armada</td>
            <td>
                <input type="text" name="id_armada" readonly>
        </tr>
        <tr>
            <td>ID PO</td>
            <td>
                <input type="text" name="id_po" readonly>
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
        $idpo = $_POST['id_po'];
        $namaArmada = $_POST['namaArmada'];
        $jenisBus = $_POST['jenisBus'];
        $jk = $_POST['jk'];
        $sql = "UPDATE jadwal SET namaArmada='$namaArmada', jenisBus='$jenisBus', jk='$jk' WHERE id_armada='$idArmada'";
        
        if ($host->query($sql) === TRUE) {
            header("Location: data_jadwal.php");
        } else {
            echo "Error: ".$sql."<br>".$host->error;
        }
    }
?>
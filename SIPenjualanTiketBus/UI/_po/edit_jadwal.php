<!DOCTYPE html>
<?php require 'navbar_po.php'; ?>
<form action="edit.php" method="post">		
    <table>
        <tr>
            <td>Kode Jadwal</td>
            <td>
                <input type="text" name="id" readonly>
        </tr>
        <tr>
            </td>	
            <td>Nama Armada</td>
            <td>
                <input type="text" name="namaArmada">
            </td>					
        </tr>	
        <tr>
            <td>Tanggal Berangkat</td>
            <td><input type="date" name="tanggalBerangkat"></td>					
        </tr>	
        <tr>
            <td>Kota Asal</td>
            <td><input type="text" name="kotaAsal"></td>					
        </tr>
        <tr>
            <td>Kota Tujuan</td>
            <td><input type="text" name="kotaTujuan"></td>					
        </tr>
        <tr>
            <td>Jam Berangkat</td>
            <td><input type="time" name="jamBerangkat"></td>					
        </tr>
        <tr>
            <td>Nomor Armada</td>
            <td><input type="text" name="no_armada"></td>					
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga"></td>					
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
    }
?>
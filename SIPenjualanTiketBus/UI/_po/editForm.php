<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <?php require 'navbar_po.php'; ?>
 
	<?php 
        require '../../DB/conn.php';
        $kojad = $_GET['id'];
        $update = mysqli_query($host, "SELECT * FROM jadwal WHERE kodeJadwal='$kojad'");
        while($data = mysqli_fetch_assoc($update)){
	?>
    <form action="edit.php" method="post">		
        <table>
            <tr>
                <td>Kode Jadwal</td>
                <td>
                    <input type="text" name="id" value="<?php echo $data['kodeJadwal'] ?>" readonly>
            </tr>
            <tr>
                </td>	
                <td>Nama Armada</td>
                <td>
                    <input type="text" name="namaArmada" value="<?php echo $data['namaArmada'] ?>">
                </td>					
            </tr>	
            <tr>
                <td>Tanggal Berangkat</td>
                <td><input type="date" name="tanggalBerangkat" value="<?php echo $data['tanggalBerangkat'] ?>"></td>					
            </tr>	
            <tr>
                <td>Kota Asal</td>
                <td><input type="text" name="kotaAsal" value="<?php echo $data['kotaAsal'] ?>"></td>					
            </tr>
            <tr>
                <td>Kota Tujuan</td>
                <td><input type="text" name="kotaTujuan" value="<?php echo $data['kotaTujuan'] ?>"></td>					
            </tr>
            <tr>
                <td>Jam Berangkat</td>
                <td><input type="time" name="jamBerangkat" value="<?php echo $data['jamBerangkat'] ?>"></td>					
            </tr>
            <tr>
                <td>Nomor Armada</td>
                <td><input type="text" name="no_armada" value="<?php echo $data['no_armada'] ?>"></td>					
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>					
            </tr>	
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>					
            </tr>				
        </table>
    </form>
	<?php } ?>
</body>
</html>
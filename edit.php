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

    <nav class="navbar navbar-expand-lg" style="background-color: #F4EEB1;">
        <img src="pngegg.png" height="80">
        <a class="navbar-brand" href="beranda_po.php">Beranda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link active" href="data_transaksi.php">Data Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="data_jadwal.php">Jadwal Bus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="data_armada.php">Data Armada</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="profile_po.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.html">Logout</a>
            </li>
          </ul>
        </div>
    </nav>
 
	<?php 
        $host=mysqli_connect("localhost","root","","siptb");
        $kojad = $_GET['kodeJadwal'];
        $update = mysqli_query($host, "SELECT * FROM jadwal WHERE kodeJadwal='$kojad'");
        $nomor = 1;
        while($data = mysqli_fetch_array($update)){
	?>
        <form action="edit.php" method="post">		
            <table>
                <tr>
                    <td>Nama Armada</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['kodeJadwal'] ?>">
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
<?php 
    $host=mysqli_connect("localhost","root","","siptb");
    $kojad = $_GET['kodeJadwal'];
    $namaArmada = $_GET['namaArmada'];
    $tanggalBerangkat = $_GET['tanggalBerangkat'];
    $kotaAsal = $_GET['kotaTujuan'];
    $kotaTujuan = $_GET['kotaTujuan'];
    $jamBerangkat = $_GET['jamBerangkat'];
    $no_armada = $_GET['no_armada'];
    $harga = $_GET['harga'];
    
    mysqli_query($host, "UPDATE jadwal SET namaArmada='$namaArmada', alamat='$alamat', tanggalBerangkat='$tanggalBerangkat', kotaAsal=$kotaAsal, kotaTujuan=$kotaTujuan, jamBerangkat=$jamBerangkat, no_armada=$no_armada, harga=$harga WHERE kodeJadwal='$kojad'");
?>
</html>
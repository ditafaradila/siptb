<!DOCTYPE html>
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

    <div>
    <h2 align="center">Tambah Jadwal</h2>
    <form action="tambah_armada.php" method="POST">
        <table border="0" align="center">
            <tr><td>Nama Armada </td><td><input type="text" name="namaArmada" size="20"/></td></tr>
            <tr><td>Jenis Bus </td><td><input type="text" name="jenisBus" size="15"></textarea></td></tr>
            <tr><td>Jumlah Kursi</td><td><input type="text" size="5" name="jumlahKursi"/></td></tr>
            <tr><td>ID PO </td><td><input type="text" size="20" name="id_PO"/></td></tr>
            <tr><td></td><td><input class="btn btn-primary" type="submit" value="Submit" align="rigth"><input type="reset" class="btn btn-danger" Value="Clear" ></td></tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
$host=mysqli_connect("localhost","root","","siptb");

$namaArmada=$_POST['namaArmada'];
$jenisBus=$_POST['jenisBus'];
$jumlahKursi=$_POST['jumlahKursi'];
$id_PO=$_POST['id_PO'];

mysqli_query($host, "insert into armada value('', '$namaArmada', '$jenisBus', '$jumlahKursi', '$id_PO')");
?>
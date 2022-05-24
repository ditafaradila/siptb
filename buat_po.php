<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg" style="background-color: #F4EEB1;">
        <img src="pngegg.png" height="80">
        <a class="navbar-brand" href="beranda_po.html">Beranda</a>
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
    <h2 align="center">Buat Akun PO</h2>
    <form action="buat_po.php" method="POST">
        <table border="0" align="center">
            <tr><td>Nama </td><td><input type="text" name="namaPO" size="30"/></td></tr>
            <tr><td>Email </td><td><input type="email" name="email" size="20"/></td></tr>
            <tr><td>Alamat </td><td><textarea name="alamat" row="5" cols="31"></textarea></td></tr>
            <tr><td>Nomor HP </td><td><input type="text" size="10" name="no_hp"/></td></tr>
            <tr><td>Nama Armada </td><td><input type="text" size="10" name="namaArmada"/></td></tr>
            <tr><td></td><td><input class="btn btn-primary" type="submit" value="Submit" align="rigth"><input type="reset" class="btn btn-danger" Value="Clear" ></td></tr>
        </table>
    </form>
</div>

<?php
$host=mysqli_connect("localhost","root","","siptb");

$nama=$_POST['namaPO'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$nohp=$_POST['no_hp'];
$namaArmada=$_POST['namaArmada'];

$ins = mysqli_query($host, "insert into po value('', '$nama', '$email', '$alamat', '$no_hp', '$namaArmada')");

echo"Akun berhasil dibuat!";
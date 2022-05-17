<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg" style="background-color: #F4EEB1;">
    <a class="navbar-brand" href="beranda.html">Beranda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link active" href="pesan_tiket.php">Pesan Tiket<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="bayar.php">Bayar Tiket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="profile.php">Profile</a>
            </li>
        </ul>
    </div>
</nav>
<div align="center"><img src="siptbus.png" height="300"></div>

<div>
    <h2 align="center">Buat Akun Siptibus</h2>
    <form action="buat.php" method="POST">
        <table border="0" align="center">
            <tr><td>Nama </td><td><input type="text" name="nama" size="30"/></td></tr>
            <tr><td>Email </td><td><input type="email" name="email" size="20"/></td></tr>
            <tr><td>Jenis Kelamin </td><td><input type="text" name="jk" size="10"></td></tr>
            <tr><td>Tempat Lahir </td><td><input type="text" name="tempatlahir" size="10"></td></tr>
            <tr><td>Tanggal Lahir </td><td><input type="date" name="tanggal"></td></tr>
            <tr><td>Nomor KTP </td><td><input type="text" name="noktp" size="10"></td></tr>
            <tr><td>Alamat </td><td><textarea name="alamat" row="5" cols="31"></textarea></td></tr>
            <tr><td>Nomor HP </td><td><input type="text" size="10" name="nohp"/></td></tr>
            <tr><td></td><td><input class="btn btn-primary" type="submit" value="Submit" align="rigth"><input type="reset" class="btn btn-danger" Value="Clear" ></td></tr>
        </table>
    </form>
</div>

<?php
$host=mysqli_connect("localhost","root","","siptb");
$nama=$_POST['nama'];
$email=$_POST['email'];
$jk=$_POST['jk'];
$tempatlahir=$_POST['tempatlahir'];
$tanggal=$_POST['tanggal'];
$noktp=$_POST['noktp'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];

$ins = mysqli_query($host, "insert into konsumen value('', '$nama', '$email', '$jk', '$tempatlahir',
'$tanggal', '$noktp', '$alamat', '$nohp')");

echo"Akun berhasil dibuat!";

?>
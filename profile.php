<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg" style="background-color: #F4EEB1;">
    <img src="pngegg.png" height="80">
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

<div align="center">
    <form action="profile.php" method="post">
      Masukkan Nomor KTP anda :
        <br>            
        <input type="text" name="noktp">
        <br>
      Masukkan Password akun anda :
        <br>
        <input type="password" name="password">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Cari">
        <br>
        atau
    </form>
    <form action="buat.php" method="post">
      <input class="btn btn-success" type="submit" value="Buat Akun">
    </form>
</div>

<?php
$host=mysqli_connect("localhost","root","","siptb");
$noktp=$_POST['noktp'];
$password=$_POST['password'];

$profil = mysqli_query($host, "select * from konsumen where password = '$password'");

echo "<table class='table'>";
echo "<thead class='thead-dark'>
      <tr align='center'>
        <th>Nama Konsumen</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Nomor KTP</th>
        <th>Alamat</th>
        <th>Nomor HP</th>
      </tr>
      </thead>";
while($row=mysqli_fetch_assoc($profil)){
    echo "<tr align='center'>
            <td>".$row['namaKonsumen']."</td>
            <td>".$row['email']."</td>
            <td>".$row['jenisKelamin']."</td>
            <td>".$row['tempatLahir']."</td>
            <td>".$row['tanggalLahir']."</td>
            <td>".$row['no_ktp']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['no_hp']."</td>
            </tr>";
    echo "<br>";
}
echo "</table>";

?>
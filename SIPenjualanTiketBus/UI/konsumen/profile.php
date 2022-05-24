<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<?php require 'navbar_konsumen.php'; ?>
<div align="center"><img src="../../Assets/siptbus.png" height="300"></div>

<div align="center">
    <form action="profile.php" method="post">
      Masukkan Nomor KTP anda :
        <br>            
        <input type="text" name="noktp">
        <br>
      Masukkan Passwords akun anda :
        <br>
        <input type="password" name="passwords">
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
$passwords=$_POST['passwords'];

$profil = mysqli_query($host, "select * from konsumen where passwords = '$passwords'");

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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<?php require 'navbar_po.php'; ?>

<div align="center">
    <form action="profile_po.php" method="post">
      Masukkan ID PO anda :
        <br>            
        <input type="text" name="id_PO">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Cari">
        <br>
        atau
    </form>
    <form action="buat_po.php" method="post">
      <input class="btn btn-success" type="submit" value="Buat Akun">
    </form>
</div>

<?php
require '../../DB/conn.php';
$id=$_POST['id_PO'];

$profil = mysqli_query($host, "select * from po where id_PO = '$id'");

echo "<table class='table'>";
echo "<thead class='thead-dark'>
      <tr align='center'>
        <th>ID PO</th>
        <th>Nama Po</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Nomor HP</th>
        <th>Nama Armada</th>
      </tr>
      </thead>";
while($row=mysqli_fetch_assoc($profil)){
    echo "<tr align='center'>
            <td>".$row['id_PO']."</td>
            <td>".$row['namaPO']."</td>
            <td>".$row['email']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['no_hp']."</td>
            <td>".$row['namaArmada']."</td>
            </tr>";
    echo "<br>";
}
echo "</table>";

?>
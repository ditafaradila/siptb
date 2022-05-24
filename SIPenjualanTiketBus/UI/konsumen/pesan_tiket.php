<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<?php require 'navbar_konsumen.php'; ?>
<div align="center"><img src="../../Assets/siptbus.png" height="300"></div>

<div align="center">
    <form action="pesan_tiket.php" method="post">
        Nomor Kursi
        <input type="text" name="nokur" placeholder="ex : 12B">
        Nomor KTP
        <input type="text" name="noktp">
        Kode Jadwal
        <input type="text" name="kojad">
        <br><br>
        <input type="submit" value="Pesan">
    </form>
</div>

<?php
$host=mysqli_connect("localhost","root","","siptb");
$nokur=$_POST['nokur'];
$noktp=$_POST['noktp'];
$kojad=$_POST['kojad'];

mysqli_query($host, "insert into tiket values ('', '$nokur', '$noktp', '$kojad')");
?>
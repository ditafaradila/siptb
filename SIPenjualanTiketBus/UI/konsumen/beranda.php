<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <?php require 'navbar_konsumen.php'; ?>

    <div align="center"><img src="../../Assets/siptbus.png" height="300"></div>
    <div >
      <h1 align="center">Cari Tiket</h1>
    </div>
    <div align="center">
      <form action="cari.php" method="post">
          Tanggal Berangkat
          <br>            
          <input type="date" name="tanggal">
          <br>
          Kota Asal
          <br>       
          <input type="text" name="asal">
          <br>
          Kota Tujuan
          <br>    
          <input type="text" name="tujuan">
          <br>
          <br>
          <input type="submit" value="cari">
      </form>
    </div>
</body>
</html>

<?php
require '../../DB/prep.php';
?>
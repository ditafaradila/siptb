<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <?php require 'navbar_po.php'; ?>
  
  <div>
    <div class='alert alert-primary' role='alert' align='center'><h1> JADWAL BUS </h1></div>
    <table table class="table">
      <thead class="thead-dark">
      <tr align="center">
        <th>No</th>
        <th>Nama Armada</th>
        <th>Tanggal Keberangkatan</th>
        <th>Kota Asal</th>
        <th>Kota Tujuan</th>
        <th>Jam Keberangkatan</th>
        <th>No Armada</th>
        <th>Harga Tiket</th>
      </tr>

      <?php 
        require '../../DB/conn.php';
        $no = 1;
        $jadwal = mysqli_query($host, "SELECT * FROM jadwal");
        while($d = mysqli_fetch_assoc($jadwal)){
      ?>
          <tr align="center">
            <td><?php echo $no++; ?></td>
            <td name="namaArmada"><?php echo $d['namaArmada']; ?></td>
            <td normalizer_is_normalized="tglBerangkat"><?php echo $d['tanggalBerangkat']; ?></td>
            <td id="kotaAsal"><?php echo $d['kotaAsal']; ?></td>
            <td id="kotaTujuan"><?php echo $d['kotaTujuan']; ?></td>
            <td id="jamBerangkat"><?php echo $d['jamBerangkat']; ?></td>
            <td id="noArmada"><?php echo $d['no_armada']; ?></td>
            <td id="harga"><?php echo $d['harga']; ?></td>
            <td>
              <a href="editForm.php?id=<?php echo $d['kodeJadwal']; ?>">EDIT</a>
              <a href="hapus.php?id=<?php echo $d['kodeJadwal']; ?>">HAPUS</a>
            </td>
          </tr>
          <?php 
            }
          ?>
    </table>
  </div>
</body>
</html>
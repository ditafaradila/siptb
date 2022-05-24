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
        $host=mysqli_connect("localhost","root","","siptb");
        $no = 1;
        $jadwal = mysqli_query($host, "SELECT * FROM jadwal");
        while($d = mysqli_fetch_array($jadwal)){
      ?>
          <tr align="center">
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['namaArmada']; ?></td>
            <td><?php echo $d['tanggalBerangkat']; ?></td>
            <td><?php echo $d['kotaAsal']; ?></td>
            <td><?php echo $d['kotaTujuan']; ?></td>
            <td><?php echo $d['jamBerangkat']; ?></td>
            <td><?php echo $d['no_armada']; ?></td>
            <td><?php echo $d['harga']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $d['kodeJadwal']; ?>">EDIT</a>
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
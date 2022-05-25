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
    <div class='alert alert-primary' role='alert' align='center'><h1> DATA AKUN PO </h1></div>
    <table table class="table">
      <thead class="thead-dark">
      <tr align="center">
        <th>ID PO</th>
        <th>Nama PO</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Nama Armada</th>
      </tr>

      <?php 
        $host=mysqli_connect("localhost","root","","siptb");
        $akun = mysqli_query($host, "SELECT * FROM po");
        while($d = mysqli_fetch_array($akun)){
      ?>
          <tr align="center">
            <td><?php echo $d['id_PO']; ?></td>
            <td><?php echo $d['namaPO']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['no_hp']; ?></td>
            <td><?php echo $d['namaArmada']; ?></td>
            <td>
              <a href="cadangkan.php?id=<?php echo $d['id_PO']; ?>">CADANGKAN</a>
              <a href="pulihkan.php?id=<?php echo $d['id_PO']; ?>">PULIHKAN</a>
            </td>
          </tr>
          <?php 
            }
          ?>
    </table>
    </div>
<br><br>
    <div>
    <div class='alert alert-primary' role='alert' align='center'><h1> DATA AKUN KONSUMEN </h1></div>
    <table table class="table">
      <thead class="thead-dark">
      <tr align="center">
        <th>Nama Konsumen</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Nomor KTP</th>
        <th>Alamat</th>
        <th>No HP</th>
      </tr>

      <?php 
        $host=mysqli_connect("localhost","root","","siptb");
        $konsumen = mysqli_query($host, "SELECT * FROM konsumen");
        while($d = mysqli_fetch_array($konsumen)){
      ?>
          <tr align="center">
            <td><?php echo $d['namaKonsumen']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['jenisKelamin']; ?></td>
            <td><?php echo $d['tempatLahir']; ?></td>
            <td><?php echo $d['tanggalLahir']; ?></td>
            <td><?php echo $d['no_ktp']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['no_hp']; ?></td>
            <td>
              <a href="cadangkankonsumen.php?id=<?php echo $d['no_ktp']; ?>">CADANGKAN</a>
              <a href="pulihkankonsumen.php?id=<?php echo $d['no_ktp']; ?>">PULIHKAN</a>
            </td>
          </tr>
          <?php 
            }
          ?>
    </table>
    </div>
<!DOCTYPE html>
<?php require 'navbar_po.php'; ?>
<body> <div>
  <div class='alert alert-primary' role='alert' align='center'><h1> JADWAL BUS </h1></div>
    <div>
      <form action="tambah_jadwal.php" method="post">
        <input class="btn btn-success" type="submit" value="Tambah Data Jadwal">
      </form>
    </div>
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
              <a href="edit_jadwal.php?id=<?php echo $d['kodeJadwal']; ?>">EDIT</a>
              <a href="hapus_jadwal.php?id=<?php echo $d['kodeJadwal']; ?>">HAPUS</a>
            </td>
          </tr>
          <?php 
            }
          ?>
    </table>
  </div>
</body>
</html>
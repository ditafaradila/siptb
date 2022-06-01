<!DOCTYPE html>
<?php require 
'navbar_po.php'; 
session_start();
?>
<body>
  <div>
    <div class='alert alert-primary' role='alert' align='center'><h1> DATA ARMADA </h1></div>
    <div>
      <form action="tambah_armada.php" method="post">
        <input class="btn btn-success" type="submit" value="Tambah Data Armada">
      </form>
    </div>
    <table table class="table">
      <thead class="thead-dark">
      <tr align="center">
        <th>No</th>
        <th>Nama Armada</th>
        <th>Jenis Bus</th>
        <th>Jumlah Kursi</th>
        <th>ID PO</th>
      </tr>

      <?php 
        require '../../DB/conn.php';
        $idpo = $_SESSION['id_po'];
        $armada = mysqli_query($host, "SELECT * FROM armada WHERE id_PO = '$idpo'");
        while($d = mysqli_fetch_array($armada)){
      ?>
          <tr align="center">
            <td><?php echo $d['no_armada']; ?></td>
            <td><?php echo $d['namaArmada']; ?></td>
            <td><?php echo $d['jenisBus']; ?></td>
            <td><?php echo $d['jumlahKursi']; ?></td>
            <td><?php echo $d['id_PO']; ?></td>
            <td>
              <a href="edit_armada.php?id=<?php echo $d['no_armada']; ?>">EDIT</a>
              <a href="hapus_armada.php?id=<?php echo $d['no_armada']; ?>">HAPUS</a>
            </td>
          </tr>
          <?php 
            }
          ?>
    </table>
  </div>
</body>
</html>
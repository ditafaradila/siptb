<!DOCTYPE html>
<?php require 'navbar_admin.php'; ?>

<div>
<div class='alert alert-primary' role='alert' align='center'><h1> DATA JADWAL PO </h1></div>
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
        </tr>
        <?php 
        }
    ?>
</table>
</div>
<br><br>
<div class='alert alert-primary' role='alert' align='center'><h1> DATA ARMADA </h1></div>
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
        $armada = mysqli_query($host, "SELECT * FROM armada");
        while($d = mysqli_fetch_array($armada)){
        ?>
            <tr align="center">
            <td><?php echo $d['no_armada']; ?></td>
            <td><?php echo $d['namaArmada']; ?></td>
            <td><?php echo $d['jenisBus']; ?></td>
            <td><?php echo $d['jumlahKursi']; ?></td>
            <td><?php echo $d['id_PO']; ?></td>
            </tr>
            <?php 
            }
        ?>
    </table>
</div>
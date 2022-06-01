<!DOCTYPE html>
<?php require 'navbar_admin.php'; ?>

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
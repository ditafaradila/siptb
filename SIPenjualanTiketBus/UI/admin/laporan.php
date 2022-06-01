<!DOCTYPE html>
<?php require 'navbar_admin.php'; ?>
<body>
    <div>
      <div class='alert alert-primary' role='alert' align='center'><h1> Laporan Pemesanan Tiket Bus </h1></div>
      <div>
        <form action='cetak.php' method='post'>
          <input class='btn btn-success' type='submit' value='Cetak'>
        </form>
      </div>
      <table table class="table">
      <thead class="thead-dark">
      <tr align="center">
        <th>Kode Transaksi</th>
        <th>Nama Konsumen</th>
        <th>Jumlah Pembayaran</th>
        <th>Jenis Pembayaran</th>
        <th>Tanggal Bayar</th>
      </tr>
        <?php
          error_reporting(0);
          require '../../DB/conn.php';
          $laporan = mysqli_query($host, "SELECT id_transaksi, namaKonsumen, jumlahPembayaran, jenisTransaksi, tanggalPembayaran
          FROM `transaksi`");
          while($row=mysqli_fetch_assoc($laporan)){
              echo "<tr align='center'>
                      <td>".$row['id_transaksi']."</td>
                      <td>".$row['namaKonsumen']."</td>
                      <td>".$row['jumlahPembayaran']."</td>
                      <td>".$row['jenisTransaksi']."</td>
                      <td>".$row['tanggalPembayaran']."</td>
                      </tr>";
              echo "<br>";
          }
          echo "</table>";

          $queryy = mysqli_query($host, "SELECT SUM(jumlahPembayaran) FROM transaksi");
          $total = mysqli_fetch_array($queryy);
          echo $total;
        ?>
    </div>
</body>
</html>
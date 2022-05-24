<?php

$host=mysqli_connect("localhost","root","","siptb");

echo "Tiket";

$sql="SELECT tiket.kode_tiket, konsumen.namaKonsumen, jadwal.kotaAsal,
jadwal.kotaTujuan, konsumen.no_hp, jadwal.tanggalBerangkat, jadwal.jamBerangkat, tiket.no_kursi,
 jadwal.no_armada, jadwal.harga FROM tiket, konsumen, jadwal WHERE jadwal.kodeJadwal
  = tiket.kode_jadwal AND konsumen.no_ktp = tiket.no_ktp;";
$hasil=mysqli_query($host,$sql);
echo "<table border=1>";
echo "<tr>
        <td>kode_tiket</td>
        <td>namaKonsumen</td>
        <td>kotaAsal</td>
        <td>kotaTujuan</td>
        <td>no_hp</td>
        <td>tanggalBerangkat</td>
        <td>jamBerangkat</td>
        <td>no_kursi</td>
        <td>no_armada</td>
        <td>harga</td>
        </tr>";
while($row=mysqli_fetch_assoc($hasil)){
    echo "<tr>
            <td>".$row['kode_tiket']."</td>
            <td>".$row['namaKonsumen']."</td>
            <td>".$row['kotaAsal']."</td>
            <td>".$row['kotaTujuan']."</td>
            <td>".$row['no_hp']."</td>
            <td>".$row['tanggalBerangkat']."</td>
            <td>".$row['jamBerangkat']."</td>
            <td>".$row['no_kursi']."</td>
            <td>".$row['no_armada']."</td>
            <td>".$row['harga']."</td>
            </tr>";
    echo "<br>";
}
echo "</table>";

?>
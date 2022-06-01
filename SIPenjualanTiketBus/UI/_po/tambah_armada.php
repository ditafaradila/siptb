<!DOCTYPE html>
<?php 
require 'navbar_po.php'; 
session_start();
?>
<body>

    <div>
    <h2 align="center">Tambah Armada</h2>
    <form action="tambah_armadaHandle.php" method="POST">
        <table border="0" align="center">
            <?php 
            require '../../DB/conn.php';
            $idPoList = mysqli_query($host, "SELECT id_PO FROM po");
            ?>
            <tr><td>Nama Armada </td><td><input type="text" name="namaArmada" size="20"/></td></tr>
            <tr><td>Jenis Bus </td><td><input type="text" name="jenisBus" size="15"></textarea></td></tr>
            <tr><td>Jumlah Kursi</td><td><input type="text" size="5" name="jumlahKursi"/></td></tr>
            <tr><td>ID PO </td><td><input type="text" size="5" name="idPo" readonly value="<?php echo $_SESSION['id_po']; ?>">
            <tr><td></td><td><input class="btn btn-primary" type="submit" name="submit" value="Submit" align="rigth"><input type="reset" class="btn btn-danger" Value="Clear" ></td></tr>
        </table>
    </form>
</div>
</body>
</html>
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
    <h2 align="center">Tambah Jadwal</h2>
    <form action="tambah_armadaHandle.php" method="POST">
        <table border="0" align="center">
            <?php 
            require '../../DB/conn.php';
            $idPoList = mysqli_query($host, "SELECT id_PO FROM po");
            ?>
            <tr><td>Nama Armada </td><td><input type="text" name="namaArmada" size="20"/></td></tr>
            <tr><td>Jenis Bus </td><td><input type="text" name="jenisBus" size="15"></textarea></td></tr>
            <tr><td>Jumlah Kursi</td><td><input type="text" size="5" name="jumlahKursi"/></td></tr>
            <tr><td>ID PO </td><td><select name="idPo">
                <?php while($row = mysqli_fetch_array($idPoList)){ ?>
                <option value="<?php echo $row['id_PO']; ?>"><?php echo $row['id_PO']; ?></option>
                <?php } ?>
            <tr><td></td><td><input class="btn btn-primary" type="submit" value="Submit" align="rigth"><input type="reset" class="btn btn-danger" Value="Clear" ></td></tr>
        </table>
    </form>
</div>
</body>
</html>
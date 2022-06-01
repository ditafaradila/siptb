<!DOCTYPE html>
<?php 
require 'navbar_po.php'; 
session_start();
?>
<body>
    <div class="container">
        <form action="updateHandle_po.php" method="post">
            <table>
                <tr>
                    <td>ID PO</td>
                    <td>
                        <input type="text" name="idpo" value="<?php echo $_SESSION['id_po']; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="emailPO" value="<?php echo $_SESSION['emailPO']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama PO</td>
                    <td>
                        <input type="text" name="namaPO" value="<?php echo $_SESSION['namaPO']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nomor</td>
                    <td><input type="text" name="no_hpPO" value="<?php echo $_SESSION['no_hp']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamatPO" value="<?php echo $_SESSION['alamatPO']; ?>"></td>
                </tr>
                <tr>
                    <td>Armada Fav</td>
                    <td><input type="text" name="armadaFav" value="<?php echo $_SESSION['namaArmada']; ?>"></td>
                </tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Simpan"></td>					
                </tr>				
            </table>
        </form>
    </div>
</body>
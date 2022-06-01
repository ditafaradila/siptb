<!DOCTYPE html>
<?php 
require 'navbar.php'; 
session_start();
?>
<body>
    <div class="container">
        <form action="updateHandle.php" method="post">
            <table>
                <tr>
                    <td>Nomor KTP</td>
                    <td>
                        <input type="text" name="id" value="<?php echo $_SESSION['no_ktp']; ?>" readonly>
                </tr>
                <tr>
                    </td>	
                    <td>Nama Konsumen</td>
                    <td>
                        <input type="text" name="namaKonsumen" value="<?php echo $_SESSION['nama']; ?>">
                    </td>					
                </tr>	
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="emailKonsumen" value="<?php echo $_SESSION['email']; ?>"></td>					
                </tr>	
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" name="jk" value="<?php echo $_SESSION['jk']; ?>"></td>					
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatlahir" value="<?php echo $_SESSION['tempatlahir']; ?>"></td>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggalLahir" value="<?php echo $_SESSION['tanggal']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $_SESSION['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>Nomor Handphone</td>
                    <td><input type="text" name="nohp" value="<?php echo $_SESSION['nohp']; ?>"></td>
                </tr>
                <tr>
                    <td>No Telp</td>
                    <td><input type="password" name="passwords" value="<?php echo $_SESSION['passwords']; ?>"></td>
                </tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Simpan"></td>					
                </tr>				
            </table>
        </form>
    </div>
</body>
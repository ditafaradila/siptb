<!DOCTYPE html>
<?php require 'style_po.php'; ?>
<html>
<body>
    <div class="container">
        <form action="login.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register PO</p>
            <div class="input-group">
                <input type="text" placeholder="Nama" name="namaPO" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Nama Armada" name="namaArmada" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Alamat" name="alamat" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Nomor HP" name="no_hp" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda Sudah punya akun? <a href="Login_po.php">Login</a></p>
        </form>
    </div>
</body>
</html>

<?php
require '../../DB/conn.php';

if(isset($_POST['submit'])){

    $nama=$_POST['namaPO'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['no_hp'];
    $namaArmada=$_POST['namaArmada'];

    $ins = mysqli_query($host, "insert into po value('', '$nama', '$email', '$alamat', '$nohp', '$namaArmada')");
    echo"Akun berhasil dibuat!";
    header("location: login_po.php");
}
?>
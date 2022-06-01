<!DOCTYPE html>
<?php require 'style.php'; ?>
<html>
<body>
    <div class="container">
        <form action="login.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register Konsumen</p>
            <div class="input-group">
                <input type="text" placeholder="Nama" name="nama" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Nomor KTP" name="noktp" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Kelamin" name="jk" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Tempat Lahir" name="tempatlahir" required>
            </div>
            <div class="input-group">
                <input type="date" placeholder="Tanggal Lahir" name="tanggal" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Alamat" name="alamat" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Nomor HP" name="nohp" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="passwords" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda Sudah punya akun? <a href="Login.php">Login</a></p>
        </form>
    </div>
</body>
</html>

<?php
require '../../DB/conn.php';

if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $passwords=$_POST['passwords'];
    $jk=$_POST['jk'];
    $tempatlahir=$_POST['tempatlahir'];
    $tanggal=$_POST['tanggal'];
    $noktp=$_POST['noktp'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    $ins = mysqli_query($host, "insert into konsumen value('$passwords', '$nama', '$email', '$jk', '$tempatlahir',
    '$tanggal', '$noktp', '$alamat', '$nohp')");
    echo"Akun berhasil dibuat!";
    header("location: login.php");
}
?>
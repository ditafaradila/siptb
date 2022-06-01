<!DOCTYPE html>
<?php require 'style.php'; ?>
<html>
<body>
    <div class="container">
        <form action="login.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Konsumen</p>
            <div class="input-group">
                <input type="text" placeholder="Nomor KTP" name="no_ktp" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="passwords" required>
            </div>
            <div class="input-group">
                <button name="submitLogin" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>

<?php 
session_start();
require '../../DB/conn.php';
require '../../DB/prep.php';
 
if (isset($_POST['submitLogin'])) {
    $noktp = $_POST['no_ktp'];
    $password = $_POST['passwords'];
    
    $sql = "SELECT * FROM konsumen WHERE no_ktp='$noktp' AND passwords='$password'";
    $result = mysqli_query($host, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row=mysqli_fetch_assoc($result)){
            $_SESSION['nama'] = $row['namaKonsumen'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['no_ktp'] = $row['no_ktp'];
            $_SESSION['jk'] = $row['jenisKelamin'];
            $_SESSION['tempatlahir'] = $row['tempatLahir'];
            $_SESSION['tanggal'] = $row['tanggalLahir'];
            $_SESSION['alamat'] = $row['alamat'];
            $_SESSION['nohp'] = $row['no_hp'];
            $_SESSION['passwords'] = $row['passwords'];
        }
        header("Location: beranda.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>
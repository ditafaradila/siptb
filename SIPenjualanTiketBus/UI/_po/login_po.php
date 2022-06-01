<!DOCTYPE html>
<?php require 'style_po.php'; ?>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login PO</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="PO ID" name="id_po" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register_po.php">Register</a></p>
        </form>
    </div>
</body>
</html>

<?php 
session_start();
require '../../DB/conn.php';
require '../../DB/prep.php';
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $idpo = md5($_POST['id_po']);
    
    $sql = "SELECT * FROM po WHERE email='$email' AND id_PO='$idpo'";
    $result = mysqli_query($host, $sql);
    if ($result > 0) {
        header("Location: beranda_po.php");
    } else {
        echo "<script>alert('Email atau ID PO Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>
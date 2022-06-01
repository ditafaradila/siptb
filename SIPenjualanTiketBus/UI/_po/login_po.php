<!DOCTYPE html>
<?php require 'style_po.php'; ?>
<body>
    <div class="container">
        <form action="login_po.php" method="POST" class="login-email">
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
    $emailpo = $_POST['email'];
    $idpo = $_POST['id_po'];

    $sql = "SELECT * FROM po WHERE email='$emailpo' AND id_PO='$idpo';";
    $result = mysqli_query($host, $sql);
    $cek = mysqli_query($host, "SELECT * FROM bekuakun where idBeku='$idpo'");
    if (mysqli_num_rows($result) > 0) {
        if(mysqli_num_rows($cek) > 0){
            echo "<script>alert('Akun Anda Terblokir Silahkan Hubungi Admin!');</script>";
        } else {
            while($row=mysqli_fetch_assoc($result)){
                $_SESSION['namaPO'] = $row['namaPO'];
                $_SESSION['emailPO'] = $row['email'];
                $_SESSION['id_po'] = $row['id_PO'];
                $_SESSION['alamatPO'] = $row['alamat'];
                $_SESSION['no_hp'] = $row['no_hp'];
                $_SESSION['namaArmada'] = $row['namaArmada'];
            }
            header("Location: beranda_po.php");
        }
    } else {
        echo "<script>alert('Email atau ID PO Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>
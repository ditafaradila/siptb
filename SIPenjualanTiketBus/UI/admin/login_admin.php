<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/style_1.css">
    <title>Admin</title>
    <link rel="shortcut icon" href="../../Assets/unila.ico"/>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login ADMIN</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="pass" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php 
require '../../DB/conn.php';
require '../../DB/prep.php';
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['pass']);
    
    $sql = "SELECT * FROM admin WHERE email_admin='$email' AND pass_admin='$password';";
    $result = mysqli_query($host, $sql);
    if ($result > 0) {
        header("Location: beranda_sistem.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>
<?php 
session_start();
require 'koneksi.php';

if (isset($_POST["login"])) {
	
$username = $_POST["username"];
$password = $_POST["password"];
$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username= '$username'");

if (mysqli_num_rows($result) === 1 ) {
	$row = mysqli_fetch_assoc($result);
	if (password_verify($password, $row["password"])) {
		header("Location: Home.php");
		$_SESSION["login"] = true;
		exit;

	}
}
$error = true;
}

?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Halaman Login</title>
</head>
<body>
<div class="alert alert-warning" role="alert">
<?php if (isset($error)) : ?> 
	<p style="color: red;" align="center"> Username/Password Anda Salah</p>
<?php endif; ?>
</div>
<div class="container">
<form action="" method="POST" class="login-email">
<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
<div class="input-group">
	<input type="text" placeholder="Username" name="username" id="username" style="width:330px;"></td>
</div>
<div class="input-group">
	<input type="password" placeholder="Password" name="password" id="password" style="width:330px"></td>
</div>
<div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="Registrasi.php">Register</a></p>
        </form>
    </div>
</body>
</html>
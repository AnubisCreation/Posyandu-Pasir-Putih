<?php 
require 'koneksi.php';

if (isset($_POST['register'])) {
if (register($_POST)> 0 ) {
	echo "<script> 
	alert ('Registrasi Anda Berhasil')
	document.location.href='login.php' </script>";
} else {
	echo mysqli_error($koneksi);
}

}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Halaman Registrasi</title>
</head>
<body>
<div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
			<input type="text" name="username" id="username" style="width: 330px;">
            </div>
            <div class="input-group">
			<input type="password" name="password" id="password" style="width: 330px;">
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
        </form>
    </div>
</body>
</html>
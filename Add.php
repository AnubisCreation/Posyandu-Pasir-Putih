<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'koneksi.php';


if (isset($_POST['Submit'])) {
if (tambah($_POST)> 0 ) {
	echo "<script> 
	alert ('Data Berhasil Ditambahkan') 
	document.location.href='timbang.php'</script>";
} else {
	echo "<script> 
	alert ('Data GAGAL Ditambahkan') 
	document.location.href='timbang.php'</script>";
}

}

?>

<!DOCTYPE html>
<html>
	<title>Tambah Data Timbang</title>
	<style type="text/css">
.{
	padding: 0;
	margin: 0;
	text-decoration: none;
	list-style: none;
	box-sizing: border-box;
	margin: auto;
	}
	body {
		margin: auto;
		width: 50%;
		background-size: 90%;
		background-position: center;
		background-color: pink;
		border-radius: 15px 15px;
		font-size: 25px;
		
</style>
<body>
<br>
<h1 align="center">Tambah Data Timbang</h1>
<form action="" method="POST">
	<table align="center">
		<tr>
		<td><label>Nama Bayi</label></td>
			<td><input type="text" name="nama_bayi" onkeypress="return hanyaHuruf(event);" required value=""></td>
			<script type="text/javascript">
				function hanyaHuruf(evt) {
					var charCode = (evt.which) ? evt.which : event.keyCode
					if (charCode > 31 && (charCode < 48 || charCode > 57))
						return true;
					return false;
				}
			</script>
		</tr>
		<tr>
			<td><label>Berat Badan (Kg)</label></td>
			<td><input type="number" name="berat_badan" required></td>
		</tr>

		<tr>
			<td><label>Tinggi Badan (Cm)</label></td>
			<td><input type="number" name="tinggi_badan" placeholder="" required></td>
		</tr>

<tr>
	<td></td>
	<td>
	<button type="Submit" name="Submit"> Tambah Data</button>
	<button name="Hapus"> <a href="timbang.php"> Kembali </a></button></td>
</tr>
</table>
<br>
<br>
<br>
<br>
</body>
</html>
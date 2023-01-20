<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
require 'koneksi.php';
if (isset($_POST['Submit'])) {
if (tambahimun($_POST)> 0 ) {
	echo "<script> 
	alert ('Data Berhasil Ditambahkan') 
	document.location.href='Imunisasi.php'</script>";
} else {
	echo "<script> 
	alert ('Data GAGAL Ditambahkan') 
	document.location.href='Imunisasi.php'</script>";
}

}

?>

<!DOCTYPE html>
<html>
	<title>Tambah Data</title>
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
		border-radius: 10px 10px;
		font-size: 25px;
		}
</style>
<body>
<br>
<h1 align="center">Tambah Data Imunisasi</h1>
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
			<td><label>Umur/Bulan</label></td>
			<td><input type="number" name="umur" required></td>
		</tr>

		<tr>
                    <td><label> Jenis Imunisasi </label></td>
                    <td><select type="text" name="jenis_imunisasi" placeholder="Imunisasi" require>
                    <option value="Campak">Campak</option>
                    <option value="Polio">Polio</option>
                    <option value="DPT-HB-Hib 1">DPT-HB-Hib 1</option>
                    <option value="DPT-HB-Hib 2">DPT-HB-Hib 2</option>
                    <option value="DPT-HB-Hib 3">DPT-HB-Hib 3</option>
                    <option value="BCG">BCG</option>
                    <option value="Tidak Ada">Tidak/Belum Diberikan Imunisasi</option></select></td>
                </tr>
<tr>
	<td></td>
	<td>
	<button type="Submit" name="Submit"> Tambah Data</button>
	<button name="Hapus"> <a href="Imunisasi.php"> Kembali </a></button></td>
</tr>
</table>
<br>
<br>
<br>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
 
require 'koneksi.php';

$id_bayi = $_GET["id_bayi"];
$bayi = query("SELECT * FROM tb_imunisasi WHERE id_bayi = $id_bayi")[0];

if (isset($_POST["submit"])) {
	if (ubahimun($_POST)> 0 ){
		echo "<script> 
		alert ('Data Berhasil Diupdate')
		document.location.href = 'Imunisasi.php'</script>";
	} else {
		echo "<script> alert ('Data Gagal Diupdate')document.location.href='Imunisasi.php'</script>";
	}

}
?>

<!DOCTYPE html>
<html>
	<title>Update Data </title>
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
		
</style>
<body>
<br>
<h1 align="center">Update Data Imunisasi </h1>
<form action="" method="POST">
	<table align="center">
	<tr>
	<td><input type="hidden" name="id_bayi" required value="<?= $bayi["id_bayi"] ?>"> </td>
	</tr>
	<tr>
			<td><label>Nama Bayi</label></td>
			<td><input type="text" name="nama_bayi" placeholder="Nama Lengkap" onkeypress="return hanyaHuruf(event);" required value="<?= $bayi["nama_bayi"] ?>"></td>
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
			<td><input type="number" name="umur" required value="<?= $bayi["umur"] ?>"></td>
		</tr>

		<tr>
                    <td><label> Jenis Imunisasi </label></td>
                    <td><select type="text" name="jenis_imunisasi" placeholder="Imunisasi" require value="<?= $bayi["jenis_imunisasi"] ?>">
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
	<button type="submit" name="submit"> Simpan </button>
	<button name="hapus"><a href="Imunisasi.php"> Kembali </a> </button>
	</td>
	</tr>
	</table>
<br>
<br>
</body>
</html>
<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'koneksilogin.php';



$id_bayi = $_GET["id_bayi"];
$bayi = query("SELECT * FROM tb_anggota WHERE id_bayi = $id_bayi")[0];

if (isset($_POST["submit"])) {
	if (ubah($_POST)> 0 ){
		echo "<script> 
		alert ('Data Berhasil Diupdate')
		document.location.href = 'Anggota.php'</script>";
	} else {
		echo "<script> alert ('Data Gagal Diupdate')document.location.href='Anggota.php'</script>";
	}

}
?>

<!DOCTYPE html>
<html>
	<title>Update Data Anggota</title>
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
<h1 align="center">Update Data Anak </h1>
<form action="" method="POST">
	<table align="center">
	<tr>
	<td><input type="hidden" name="id_bayi" required value="<?= $bayi["id_bayi"] ?>"> </td>
	</tr>
	<tr>
			<td><label>Nama Anda</label></td>
			<td><input type="text" name="nama_bayi" onkeypress="return hanyaHuruf(event);" required value="<?= $bayi["nama_bayi"] ?>"></td>
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
    	<td>Jenis Kelamin </td>
    	<td>
    	<select name="jenis_kelamin">
    	<option value="#">Jenis Kelamin</option>
    	<option value="L">Laki-laki</option>
    	<option value="P">Perempuan</option>
    	</select></td>
  		</tr>

		<tr>
			<td><label>Tempat Lahir</label></td>
			<td><input type="text" name="tempat_lahir" placeholder="" required value="<?= $bayi["tempat_lahir"] ?>"></td>
		</tr>

		<tr>
			<td><label>Tanggal Lahir</label></td>
			<td><input type="date" name="tanggal_lahir" placeholder="" required value="<?= $bayi["tanggal_lahir"] ?>"></td>
		</tr>

		<tr>
			<td><label>Nama Ibu</label></td>
			<td><input type="text" name="nama_ibu" onkeypress="return hanyaHuruf(event);" required value="<?= $bayi["nama_ibu"] ?>"></td>
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
			<td><label>Alamat</label></td>
			<td><input type="text" name="alamat" placeholder="" required value="<?= $bayi["alamat"] ?>"></td>
		</tr>

	<tr>
	<td></td>
	<td>
	<button type="submit" name="submit"> Simpan </button>
	<button name="hapus"><a href="Anggota.php"> Kembali </a> </button>
	</td>
	</tr>
	</table>
	<br>
</body>
</html>
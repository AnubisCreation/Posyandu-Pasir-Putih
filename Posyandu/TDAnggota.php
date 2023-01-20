<!DOCTYPE html>
<html>
	<title>Tambah Data Anggota</title>

<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
require 'koneksilogin.php';

if (isset($_POST['Submit'])) {
if (tambah($_POST)> 0 ) {
	
		echo("<script> 
		alert ('Data Berhasil Ditambahkan') 
		document.location.href='Anggota.php'</script>");
		}
	else
 	{
		echo "<script> 
		alert ('Inputan Anda Salah! Silahkan Diisi Ulang!!!') 
		document.location.href='TDAnggota.php'</script>";

	}  
	}
	
?>
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
<h1 align="center">Tambah  Data Anggota</h1>
<form action="" method="POST">
	<table align="center">
		<tr> 
			<td><label>Nama Bayi</label></td>
			<td><input type="text" name="nama_bayi" onkeypress="return hanyaHuruf(event);"  required value=""></td>
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
			<td><input type="text" name="tempat_lahir" placeholder="Tempat Lahir" required></td>
		</tr>

		<tr>
			<td><label>Tanggal Lahir</label></td>
			<td><input type="date" name="tanggal_lahir" placeholder="" required></td>
		</tr>

		<tr> 
			<td><label>Nama Ibu</label></td>
			<td><input type="text" name="nama_ibu" onkeypress="return hanyaHuruf(event);"  required value=""></td>
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
			<td><input type="text" name="alamat" placeholder="Alamat" required></td>
		</tr>

<tr>
	<td></td>
	<td>
	<button type="Submit" name="Submit"> Tambah Data</button>
	<button name="Hapus"> <a href="Anggota.php"> Kembali </a></button></td>
</tr>
</table>
<br>
<br>
</body>
</html>
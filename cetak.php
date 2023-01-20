<!DOCTYPE html>
<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
require 'koneksilogin.php';

$bayi= query("SELECT * FROM tb_anggota");

?>

<html>
<head>
<title>Halaman Data Anggota Posyandu Pasir Putih</title>
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
		width: 100%;
		background-size: 100%;
		background-position: center;
		background-color: pink;
		border-radius: 20px 20px;
		}
	.tabel1 {
		background-color: white;
		padding-left: 5px;
		padding-right: 30px;
		text-align: justify-all;
		padding-top: 5px;
		font-family: arial;
	}
</style>
</head>
<body>
<h1 align="center"><b>Daftar Anggota Posyandu Pasir Putih</b></h1>
<h4 align="right"><?php echo date("l, d F Y");?></h4>
<table border="1" cellpadding="2" cellspacing="0" align="center"> 
<tr>
	<th>No.</th>
	<th>Nama Bayi</th>
	<th>Jenis Kelamin</th>
	<th>Tempat Lahir</th>
	<th>Tanggal Lahir</th>
	<th>Nama Ibu</th>	
	<th>Alamat</th>
</tr>

<?php $i= 1; ?>
<?php foreach ( $bayi as $row) : ?>
	<tr>
	<td> <?php echo $i; ?></td>
	<td><?php echo $row["nama_bayi"]; ?></td>
	<td><?php echo $row["jenis_kelamin"]; ?></td>
	<td><?php echo $row["tempat_lahir"]; ?></td>
	<td><?php echo $row["tanggal_lahir"]; ?></td>
	<td><?php echo $row["nama_ibu"]; ?></td>
	<td><?php echo $row["alamat"]; ?></td>
	</tr>
	</div>
	<?php $i++; ?>
<?php endforeach; ?>
</table>

<br><br>

<form>
	<script type="text/javascript">
        window.print();
    </script>
</form>
</body>
</html>
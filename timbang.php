<?php
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
 
require 'koneksi.php';


$bayi= query("SELECT * FROM tb_timbang");

if (isset($_POST["cari"])) {
	$bayi = cari($_POST["keyword"]);
}
?>

<html>
<head>
<title>Halaman Data Anggota Posyandu Teratai</title>
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
		width: 60%;
		background-size: 90%;
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
	.sticky {
			position: sticky;
			top: 2px;
			padding: 5px;
			border: 2px solid #4CAF50;
			background-color: sandybrown;
			border-radius: 10px 10px;
			width: 99%;
			height: 40px;
		}
	.cetak1 {
		position: relative;
		text-align: right;
	}
	a{
		text-decoration: none;
	}
</style>
</head>
<body>
<h1 align="center"><b>Data Kesehatan Anak</b></h1>
<table border="1" cellpadding="2" cellspacing="0" align="center" bgcolor="white"> 
<tr bgcolor="silver">
	<th>No.</th>
	<th>Operator</th>
	<th>Nama Bayi</th>
	<th>Berat Badan (KG)</th>
	<th>Panjang Badan (CM)</th>
</tr>

<?php $i= 1; ?>
<?php foreach ($bayi as $row) : ?>
	<tr>
	<td> <?php echo $i; ?></td>
	<td>
		<button><a href="Ubah.php?id_bayi=<?php echo $row["id_bayi"]; ?>"> Update</a></button>  
		<button><a href="Del.php?id_bayi=<?php echo $row["id_bayi"]; ?> " onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?');">Hapus</a>
		</td> 
	<td><?php echo $row["nama_bayi"]; ?></td>
	<td><?php echo $row["berat_badan"]; ?></td>
	<td><?php echo $row["tinggi_badan"]; ?></td>
	</tr>


	<?php $i++; ?>
<?php endforeach; ?>
</table>
<table align="center">
	<tr>
<td><button><a href="Add.php">Tambah Data</a></button></td>
<td><button><a href="Home.php"> Kembali</a></button></td>
<td><button><a href="cetak1.php" target="_blank">CETAK</a></button></td>
</tr>
</table>
</body>
</html>
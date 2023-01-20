<?php
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
require 'koneksilogin.php';

$bayi= query("SELECT * FROM tb_anggota");

if (isset($_POST["cari"])) {
	$bayi = cari($_POST["keyword"]);
}

?>

<html>
<head>
<title>Halaman Data Anak Posyandu Pasir Putih</title>
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
		width: 90%;
		background-size: 90%;
		background-position: center;
		background-color: pink;
		border-radius: 20px 20px;
		}
	.cetak {
		position: relative;
		text-align: right;
	}
	a{
		text-decoration: none;
	}
</style>
</head>
<body align="center">
<h1 align="center"><u> Daftar Anak di Posyandu Pasir Putih Walakiri </u></h1>
<table border="1" cellpadding="2" cellspacing="0" align="center" bgcolor="white"> 
<tr bgcolor="silver">
	<th>No.</th>
	<th>Operator</th>
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
	<td>
		<button><a href="Update-1.php?id_bayi=<?php echo $row["id_bayi"]; ?>">Update</a></button>  
		<button><a href="HapusData.php?id_bayi=<?php echo $row["id_bayi"]; ?> " onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?');">Hapus</a>
		</td> 
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
<table align="center">
	<tr>
<td><button><a href="TDAnggota.php">Tambah Data</a></button></td>
<td><button><a href="Home.php"> Kembali</a></button></td>
<td><button><a href="cetak.php" target="_blank">Cetak</a></button></td>
</tr>
</table>
</body>
</html>
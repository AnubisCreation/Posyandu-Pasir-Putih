<!DOCTYPE html>
<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
require 'koneksi.php';
 
$bayi= query("SELECT * FROM tb_imunisasi");

?>

<html>
<head>
<title>Halaman Data Imunisasi</title>
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
		text-align: center;
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
</style>
</head>
<body>
<h1 align="center"><b>Data Imunisasi</b></h1>
<br>

<br>
<h4 align="right"><?php echo date("l, d F Y");?></h4>
<table border="1" cellpadding="2" cellspacing="0" align="center"> 
<tr>
	<th>No.</th>
	<th>Nama Bayi</th>
	<th>Umur/Bulan</th>
	<th>Jenis Imunisasi</th>
	</tr>

<?php $i= 1; ?>
<?php foreach ( $bayi as $row) : ?>
	<tr>
	<td> <?php echo $i; ?></td>
	<td><?php echo $row["nama_bayi"]; ?></td>
	<td><?php echo $row["umur"]; ?></td>
	<td><?php echo $row["jenis_imunisasi"]; ?></td>
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
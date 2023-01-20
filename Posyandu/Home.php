<?php
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
require 'koneksi.php';
?>
	<html>
	<head><title>Posyandu Pasir Putih</title>
	<style type="text/css">
	body {
		margin: auto;
		width: 80%;
		height: 60%;
		background-color: pink;
		border-radius: 10px;
		}
		.menubar{
			width: 81%;
			background-color: grey;
			height: 50px;
			position: sticky;
			border-radius: 15px;
			margin: auto;

		}

		.menubar ul li{
			float: right;
			margin-top: 11px;
			text-decoration: none;
			padding: 5px;
			list-style: none;
		}

		.menubar ul li a{
			color: white;
			text-decoration: none;
			padding: 0 15px;
		}

		.menubar ul li:hover a{
			background-color: red;
			padding: 10px;
			border-radius: 10px 10px;
		}

		.header{
			margin: auto;
		}

		.gambar{
			height: 50%;
			width: 100%;
			border-radius: 8px 8px;
			padding: 10px;
			margin-top: 10px;
		}
		.footer{
			width: 101%;
			background-color: grey;
			height: 50px;
			margin-bottom: 10px;
			border-radius: 15px;
		}

		span{
		color: white;
		
		}
	</style>
	</head>
	<body>
		<br>
		<div class="header">
		<h1 align="center"> Selamat Datang Di Sistem Informasi Posyandu Pasir Putih</h1>
		<h3 align="center"> Walakiri, Kelurahan Watumbaka, Kecamatan Pandawai</h3>
	</div>
		<div class="menubar">
		<table align="center" border="0">
		<ul>
			<li><a href="logout.php"> Logout</a></li>
			<li><a href="Imunisasi.php"> Data Imunisasi</a></li>
            <li><a href="timbang.php"> Data Penimbangan</a></li>
            <li><a href="Anggota.php"> Data Anggota</a></li>
			<li><a href="Home.php"> Dashboard</a></li>
		</ul>
		<br><br>
		
	</div>
	<div class="gambar" align="center">
	<img src="Posyandu balita-1.jpg" width="97%" height="590px">
</div>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="footer" align="center">
<br><span>Kelompok 3 <b>Copyright@2023 Posyandu Pasir Putih</b></span>
</div>
</body>
</html>
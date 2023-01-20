<!DOCTYPE html>
<?php 
require'Imunisasi.php';

$koneksi = mysqli_connect("localhost","root","","posyandu");
if (isset($_GET['id_bayi'])) {
	mysqli_query($koneksi, "DELETE FROM tb_imunisasi WHERE id_bayi = '$_GET[id_bayi]' ");
	echo "<script> alert ('Data Berhasil Hapus') document.location.href ='Imunisasi.php' </script>";
}

?>
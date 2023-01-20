<!DOCTYPE html>
<?php 
require'timbang.php';


$koneksi = mysqli_connect("localhost","root","","posyandu");
if (isset($_GET['id_bayi'])) {
	mysqli_query($koneksi, "DELETE FROM tb_timbang WHERE id_bayi = '$_GET[id_bayi]' ");
	echo "<script> alert ('Data Berhasil Hapus') document.location.href ='timbang.php' </script>";
}

?>
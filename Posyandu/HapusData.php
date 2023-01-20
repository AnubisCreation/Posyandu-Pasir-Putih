<!DOCTYPE html>
<?php 

require 'Anggota.php';
$koneksilogin = mysqli_connect("localhost", "root", "", "posyandu");
if (isset($_GET['id_bayi'])) {
	mysqli_query($koneksilogin, "DELETE FROM tb_anggota WHERE id_bayi = '$_GET[id_bayi]' ");
	echo "<script> alert('Data Berhasil Di Hapus') document.location.href='Anggota.php' </script>";
}
?>

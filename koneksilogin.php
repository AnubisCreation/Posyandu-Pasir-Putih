<?php 
$koneksilogin = mysqli_connect("localhost","root","","posyandu");

function query ($query) {
	global $koneksilogin;
	$result = mysqli_query($koneksilogin, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah ($data) {
	global $koneksilogin;
	$nama_bayi = htmlspecialchars($data["nama_bayi"]);
	$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
	$tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$nama_ibu = htmlspecialchars($data["nama_ibu"]);
	$alamat = htmlspecialchars($data["alamat"]);

	$query1 = "INSERT INTO tb_anggota VALUES ('', '$nama_bayi', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$nama_ibu', '$alamat')";
	mysqli_query($koneksilogin, $query1);

	return mysqli_affected_rows ($koneksilogin);
}

function ubah ($data) {
	global $koneksilogin;
	$id_bayi = ($data["id_bayi"]);
	$nama_bayi = htmlspecialchars($data["nama_bayi"]);
	$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
	$tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$nama_ibu = htmlspecialchars($data["nama_ibu"]);
	$alamat = htmlspecialchars($data["alamat"]);

	$query2 = "UPDATE tb_anggota SET nama_bayi ='$nama_bayi', jenis_kelamin = '$jenis_kelamin', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', nama_ibu = '$nama_ibu', alamat = '$alamat' WHERE id_bayi = $id_bayi";
	mysqli_query($koneksilogin, $query2);

	return mysqli_affected_rows($koneksilogin);

}

function cari ($keyword){
	$query3 = "SELECT * FROM tb_anggota WHERE nama_bayi LIKE '%$keyword%' OR nama_ibu LIKE '%$keyword%' OR alamat LIKE '%$keyword%' ";
	return query($query3);
}

?>
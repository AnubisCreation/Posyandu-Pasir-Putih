<?php 
$koneksi = mysqli_connect("localhost","root","","posyandu");
function query ($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah ($data) {
	global $koneksi;
	$nama_bayi = htmlspecialchars($data["nama_bayi"]);
	$berat_badan = htmlspecialchars($data["berat_badan"]);
	$tinggi_badan = htmlspecialchars($data["tinggi_badan"]);

	$query1 = "INSERT INTO tb_timbang VALUES ('', '$nama_bayi', '$berat_badan', '$tinggi_badan')";
	mysqli_query($koneksi, $query1);

	return mysqli_affected_rows ($koneksi);
}

function ubah ($data) {
	global $koneksi;
	$id_bayi = ($data["id_bayi"]);
	$nama_bayi = htmlspecialchars($data["nama_bayi"]);
	$berat_badan = htmlspecialchars($data["berat_badan"]);
	$tinggi_badan = htmlspecialchars($data["tinggi_badan"]);

	$query2 = "UPDATE tb_timbang SET nama_bayi ='$nama_bayi', berat_badan ='$berat_badan', tinggi_badan = '$tinggi_badan' WHERE id_bayi = $id_bayi";
	mysqli_query($koneksi, $query2);

	return mysqli_affected_rows($koneksi);
}

function cari ($keyword){
	$query3 = "SELECT * FROM tb_timbang WHERE nama_bayi LIKE '%$keyword%' OR berat_badan LIKE '%$keyword%' OR tinggi_badan LIKE '%$keyword%' ";
	return query($query3);
}

function tambahkeluh ($data) {
	global $koneksi;
	$nama_bayi = htmlspecialchars($data["nama_bayi"]);
	$keluhan = htmlspecialchars($data["keluhan"]);
	$obat = htmlspecialchars($data["obat"]);

	$query4 = "INSERT INTO tb_keluhan VALUES ('', '$nama_bayi', '$keluhan', '$obat')";
	mysqli_query($koneksi, $query4);

	return mysqli_affected_rows ($koneksi);
}

function ubahkeluh ($data) {
	global $koneksi;
	$id_bayi = ($data["id_bayi"]);
	$nama_bayi = htmlspecialchars($data["nama_bayi"]);
	$keluhan = htmlspecialchars($data["keluhan"]);
	$obat = htmlspecialchars($data["obat"]);

	$query5 = "UPDATE tb_keluhan SET nama_bayi ='$nama_bayi', keluhan ='$keluhan', obat = '$obat' WHERE id_bayi = $id_bayi";
	mysqli_query($koneksi, $query5);

	return mysqli_affected_rows($koneksi);
}

function carikeluh ($keyword){
	$query6 = "SELECT * FROM tb_keluhan WHERE nama_bayi LIKE '%$keyword%' OR keluhan LIKE '%$keyword%' OR obat LIKE '%$keyword%' ";
	return query($query6);
}

function tambahimun ($data) {
	global $koneksi;
	$nama_bayi = htmlspecialchars($data["nama_bayi"]);
	$umur = htmlspecialchars($data["umur"]);
	$jenis_imunisasi = htmlspecialchars($data["jenis_imunisasi"]);

	$query7 = "INSERT INTO tb_imunisasi VALUES ('', '$nama_bayi', '$umur', '$jenis_imunisasi')";
	mysqli_query($koneksi, $query7);

	return mysqli_affected_rows ($koneksi);
}

function ubahimun ($data) {
	global $koneksi;
	$id_bayi = ($data["id_bayi"]);
	$nama_bayi = htmlspecialchars($data["nama_bayi"]);
	$umur = htmlspecialchars($data["umur"]);
	$jenis_imunisasi = htmlspecialchars($data["jenis_imunisasi"]);

	$query8 = "UPDATE tb_imunisasi SET nama_bayi = '$nama_bayi', umur = '$umur', jenis_imunisasi = '$jenis_imunisasi' 
	WHERE id_bayi = $id_bayi";
	mysqli_query($koneksi, $query8);

	return mysqli_affected_rows($koneksi);
}

function carimun ($keyword){
	$query9 = "SELECT * FROM tb_imunisasi WHERE nama_bayi LIKE '%$keyword%' OR umur LIKE '%$keyword%' OR jenis_imunisasi LIKE '%$keyword%' ";
	return query($query9);
}

function register ($data) {
	global $koneksi;
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi,$data["password"]);
	
	


//cek username yang sama
$result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
if (mysqli_fetch_assoc($result)) {
	echo "<script>
	alert ('Username sudah pernah digunakan');
	</script>";
	return false;
}

//enkripsi password
$password =password_hash($password, PASSWORD_DEFAULT);


//tambahkan ke database
mysqli_query($koneksi, "INSERT INTO user VALUES('','$username','$password')");
return mysqli_affected_rows($koneksi);

}

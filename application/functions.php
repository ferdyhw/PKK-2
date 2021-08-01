<?php
// Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "pkk_2");

//Mengambil Querry
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
	}
	return $rows;
}

//Fungsi Komentar 1
function komentar($data) {
	global $conn;

	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];

	$query = "INSERT INTO comment_1 VALUES('', '$nama', '$komentar', NOW())";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//Fungsi Komentar 2
function komentar2($data) {
	global $conn;

	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];

	$query = "INSERT INTO comment_2 VALUES('', '$nama', '$komentar', NOW())";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//Fungsi Komentar 3
function komentar3($data) {
	global $conn;

	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];

	$query = "INSERT INTO comment_3 VALUES('', '$nama', '$komentar', NOW())";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//Fungsi Komentar 4
function komentar4($data) {
	global $conn;

	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];

	$query = "INSERT INTO comment_4 VALUES('', '$nama', '$komentar', NOW())";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//Fungsi Komentar 5
function komentar5($data) {
	global $conn;

	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];

	$query = "INSERT INTO comment_5 VALUES('', '$nama', '$komentar', NOW())";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//Fungsi Komentar 6
function komentar6($data) {
	global $conn;

	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];

	$query = "INSERT INTO comment_6 VALUES('', '$nama', '$komentar', NOW())";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//Fungsi Sign Up
function registrasi($data){
	global $conn;

	$username = strtolower(stripslashes($data['username']));
	$password = mysqli_real_escape_string($conn, $data['password']);
	$password2 = mysqli_real_escape_string($conn, $data['password2']);

	//Cek Username
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result) ) {
		echo "<script>
			alert('Username sudah terdafar!');
		</script>";
	return false;

	}

	if($password !== $password2) {
		echo "<script>
			alert('Konfirmasi Password tidak sesuai!');
		</script>";
		return false;
	}

	//Enkripsi Password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//Tambah Ke database
	mysqli_query($conn, "INSERT INTO user (id, username, password) VALUES (NULL, '$username', '$password')");
	return mysqli_affected_rows($conn);
}

?>
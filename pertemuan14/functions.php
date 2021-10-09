<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data)
{
	global $conn;
	//ambil data dari ttiap elemen dalam form
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

	//upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	//query insert data
	$query = "INSERT INTO mahasiswa
				VALUES
				('','$nrp','$nama','$email','$jurusan', '$gambar')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function upload()
{

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo "<script>
			alert('Gambar tidak terupload'); 
		</script>";
		return false;
	}

	//cek gambar atau bukan
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambarValid));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
			alert('Yang anda upload bukan gambar'); 
		</script>";
		return false;
	}

	//cek jika ukuran terlalu besar
	if ($ukuranFile > 1000000) {
		echo "<script>
			alert('ukuran gambar terlalu besar'); 
		</script>";
		return false;
	}

	//lolos pengecekan, gambar siap diupload
	move_uploaded_file($tmpName, 'img/' . $namaFile);
	return $namaFile;
}



function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($conn);
}


function ubah($data)
{
	global $conn;
	//ambil data dari ttiap elemen dalam form
	$id = $data["id"];
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	//query insert data
	$query = "UPDATE mahasiswa SET 
				nrp = '$nrp',
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar' WHERE id = '$id'

	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function cari($keyword)
{
	$query = "SELECT * FROM mahasiswa
				WHERE 
				nama LIKE '%$keyword%' OR 
				nrp LIKE '%$keyword%' OR 
				email LIKE '%$keyword%' OR 
				jurusan LIKE '%$keyword%'

	";
	return query($query);
}


function registrasi($data)
{
	global $conn;

	$username = stripslashes(strtolower($data['username']));
	$password = mysqli_real_escape_string($conn, $data['password']);
	$password2 = mysqli_real_escape_string($conn, $data['password2']);

	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
                alert('username sudah digunakan');
            </script>";
		return false;
	}

	//cek konfirmasi password
	if ($password2 !== $password) {
		echo "<script>
                alert('pastikan kedua password sama');
            </script>";
		return false;
	}
	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
	return mysqli_affected_rows($conn);
}

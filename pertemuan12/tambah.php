<?php 
require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	
	// cek apakah data berhasil ditambahkan atau tidak
	if (tambah($_POST) > 0) {
		echo"
			<script>
				alert('Data Berhasil ditambahkan');
				document.location.href='index.php';
			</script>
		";
	}else{
		echo"
			<script>
				alert('Data Gagal ditambahkan');
				document.location.href='index.php';
			</script>
		";
	}
	
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Mahasiswa</title><br>
	<a href="index.php">Kembali ke Index</a>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="nrp">NRP : </label>
				<input type="text" name="nrp" id="nrp" required>
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required>
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>
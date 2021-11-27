<?php
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
}

require 'functions.php';

//ambil data di url
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

	// cek apakah data berhasil diubah atau tidak
	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert('Data Berhasil diubah');
				document.location.href='index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data Gagal diubah');
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
	<title>Ubah Mahasiswa</title><br>
	<a href="index.php">Kembali ke Index</a>
</head>

<body>
	<h1>Ubah Data Mahasiswa</h1>

	<form action="" method="POST">

		<input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">

		<ul>

			<li>
				<label for="nrp">NRP : </label>
				<input type="text" name="nrp" id="nrp" required value="<?php echo $mhs["nrp"]; ?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required value="<?php echo $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required value="<?php echo $mhs["email"]; ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required value="<?php echo $mhs["jurusan"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required value="<?php echo $mhs["gambar"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>
	</form>

</body>

</html>
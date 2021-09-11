<?php 
//redireksi latihan 2 biar jangan langsung dibuka dari url
if (!isset($_GET["nama"])|| !isset($_GET['nim'])|| !isset($_GET['alamat'])|| !isset($_GET['email'])|| !isset($_GET['mtk'])|| !isset($_GET['fisika'])) {
	// code...
	header("Location: latihan1.php");
	exit();
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hasil Mahasiswa</title>
</head>
<body>
	<ul>
		<li><?php echo $_GET["nama"]; ?></li>
		<li><?php echo $_GET["nim"]; ?></li>
		<li><?php echo $_GET["alamat"]; ?></li>
		<li><?php echo $_GET["email"]; ?></li>
		<li><?php echo $_GET["mtk"]; ?></li>
		<li><?php echo $_GET["fisika"]; ?></li>
	</ul>
<a href="latihan1.php">Kembali Ke Latihan 1</a>	
</body>
</html>
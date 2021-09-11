<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POST</title>
</head>
<body>


<?php if (isset($_POST["nama"])): ?>
	<h1>Selamat Datang, <?php echo $_POST["nama"]; ?></h1>
<?php endif ?>

<form action="" method="POST">
	Masukkan nama: 
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">KIRIM!</button>
</form>


</body>
</html>
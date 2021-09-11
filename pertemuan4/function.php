<?php
function salam($waktu = "Datang", $nama = "User")
{
	return "SELAMAT $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>LATIHAN FUNCTION</title>
</head>

<body>
	<h1><?php echo salam("Siang", "Ruben Hidayat"); ?></h1>
</body>

</html>
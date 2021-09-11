<?php $mahasiswa = [["Ruben Hidayat", "061940832951", "Kertapati", "rubenhidayat02@gmail.com"], ["Yusron Hartoyo", "061940832950", "Pakjo", "Yusron2@gmail.com"]] ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan Daftar Mahasiswa</title>
</head>
<body>
	<h1>DAFTAR MAHASISWA</h1>

	<?php foreach($mahasiswa as $mhs): ?>
		<ul>
			<li>Nama	: <?= $mhs[0]; ?></li>
			<li>NIM		: <?= $mhs[1]; ?></li>
			<li>Alamat	: <?= $mhs[2]; ?></li>
			<li>Email	: <?= $mhs[3]; ?></li>
		</ul>
	<?php endforeach ?>
</body>
</html>
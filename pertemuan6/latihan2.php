<?php $mahasiswa=[
	[
		"nama" => "Ruben Hidayat", 
		"nim" => "061940832951", 
		"alamat" => "Kertapati", 
		"email" => "rubenhidayat02@gmail.com",
		"tugas"=>["mtk"=>90, "fisika"=>70],
		"gambar"=> "1.JPG"
	],
	[
		"nama" =>"Yusron Hartoyo",
		"nim" =>"061940832952", 
		"alamat" =>"Pakjo", 
		"email" => "yusron2@gmail.com",
		"tugas"=>["mtk"=>100, "fisika"=>90],
		"gambar"=>"2.JPG"
	]
];

// echo $mahasiswa[1]["tugas"][2];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach ($mahasiswa as $mhs): ?>
		<ul>
			<li><?= $mhs["nama"] ?></li>
			<li><?= $mhs["nim"] ?></li>
			<li><?= $mhs["alamat"] ?></li>
			<li><?= $mhs["email"] ?></li>
			<li><?= $mhs["tugas"]["mtk"] ?></li>
			<li><?= $mhs["tugas"]["fisika"] ?></li>
			<li>
				<img src="img/<?php $mhs["gambar"]; ?>">
			</li>
		</ul> 
	<?php endforeach; ?>
</body>
</html>

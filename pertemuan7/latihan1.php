<?php 
// SUPERGLOBALS 
// variable global milik php
// merupakan array associative

//$_GET
$mahasiswa=[
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

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>GET</title>
 </head>
 <body>
 	<ul>
 		<?php foreach ($mahasiswa as $mhs): ?>
 			<li>
 				<a href="latihan2.php?nama=<?php echo $mhs["nama"] ?>&nim=<?php echo $mhs["nim"]; ?>&alamat=<?php echo $mhs["alamat"] ?>&email=<?php echo $mhs["email"]; ?>&mtk=<?php echo $mhs["tugas"]["mtk"];?>&fisika=<?php echo $mhs["tugas"]["fisika"]; ?>"><?php echo $mhs["nama"]; ?></a>
 			</li>
 			
 		<?php endforeach; ?>
 	</ul>
 </body>
 </html>
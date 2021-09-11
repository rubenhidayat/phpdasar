<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari mahasiswa / query
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");
if (!$result) {
	echo mysqli_error($conn);
}

//ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row()  // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array assosiatif
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() //menampilkan objek

///while ($mhs = mysqli_fetch_assoc($result)){
//	var_dump($mhs);
//}


// ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>
</head>
<body>


<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
	
	<tr>
		<th>No. </th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>
<?php $i = 1; ?>
<?php while( $row = mysqli_fetch_assoc($result)): ?>
	<tr>

		<td><?php echo $i; ?></td>
		<td>
			<a href="">ubah</a> | 
			<a href="">hapus</a>
		</td>
		<td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
		<td><?php echo $row["nrp"]; ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["jurusan"]; ?></td>
	</tr>
<?php $i++; ?>
<?php endwhile; ?>
</table>


</body>
</html>
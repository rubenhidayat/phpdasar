<?php
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
}

require 'functions.php';

//pagination
//konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
//ternary
$halamanAktif = (isset($_GET['p'])) ? $_GET['p'] : 1;
// var_dump($halamanAktif);
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

//HALAMAN AKTIF
// if (isset($_GET['p'])) {
// 	$halamanAktif = $_GET["p"];
// } else {
// 	$halamanAktif = 1;
// }


//navigasi



$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");


//tombol cari ditekan
if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>
</head>

<body>
	<a href="logout.php">Logout</a>

	<h1>Daftar Mahasiswa</h1>
	<br>
	<a href="tambah.php">Tambah Data Mahasiswa</a>
	<br>
	<a href="registrasi.php">Registrasi</a>
	<br>


	<form action="" method="POST">

		<input type="text" name="keyword" autofocus placeholder="Masukkan Keyword" autocomplete="off">
		<button type="submit" name="cari">CARI</button>
		<br><br>

	</form>
	<a href="?p=1">RESET TABEL</a><br>


	<!-- NAVIGATOR -->
	<?php if (!isset($_POST['cari'])) : ?>
		<?php if ($halamanAktif > 1) : ?>
			<a href="?p=<?php echo $halamanAktif - 1; ?>">&laquo;</a>
		<?php endif; ?>

		<?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
			<?php if ($i == $halamanAktif) : ?>
				<a href="?p=<?php echo $i ?>" style="font-weight: bold; color: red"><?php echo $i; ?></a>
			<?php else : ?>
				<a href="?p=<?php echo $i ?>"><?php echo $i; ?></a>
			<?php endif; ?>
		<?php endfor; ?>

		<?php if ($halamanAktif < $jumlahHalaman) : ?>
			<a href="?p=<?php echo $halamanAktif + 1; ?>">&raquo;</a>
		<?php endif; ?>
	<?php endif; ?>



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

		<?php if (count($mahasiswa) > 0) { ?>
			<?php foreach ($mahasiswa as $row) : ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td>
						<a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> |
						<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Apakah anda ingin menghapus data <?php echo $row["nama"] ?>??')">hapus</a>
					</td>
					<td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
					<td><?php echo $row["nrp"]; ?></td>
					<td><?php echo $row["nama"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["jurusan"]; ?></td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
		<?php } else { ?>
			<tr>
				<td colspan="7">tidak ada data</td>
			</tr>
		<?php } ?>


	</table>
</body>

</html>
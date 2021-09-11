<?php 
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	// cek username dan password
	if ($_POST["username"]=="admin" && $_POST["password"]=="admin123") {
		header("Location: admin.php");
		
	}else{
		// jika salah, tampilkan pesan kesalahan
		$error = true;
	}
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN</title>
</head>
<body>
	<h1>Login Admin</h1>

	<?php if (isset($error)):?>
		<p style="color: red; font-style: italic;">Username/Password Anda Salah!</p>
	<?php endif ?>

	<form action="" method="POST">
		<li>
			<label for="username">Username :</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
		</li>
		<button type="submit" name="submit">LOGIN!</button>
	</form>
	 
	


</body>
</html>
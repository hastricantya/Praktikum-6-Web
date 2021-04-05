<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database</title>
</head>
<body>
	<h1>Demo koneksi database</h1>
	<?php
	$conn = mysqli_connect("localhost","root","","myDB1");
	// cek koneksi
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit();
	}
	else{
		echo "Sudah Connect Database";
	}
?>
</body>
</html>
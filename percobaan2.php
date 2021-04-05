<?php
$servername = "localhost";
$username = "root";
$password = "";

//buat koneksi
$conn = mysqli_connect($servername, $username, $password);
//cek koneksi
if (!$conn) {
	die("connection failed :" .mysqli_connect_error());
}
// buat database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
	echo "Database Created Successfully";
}
else{
	echo "Error Creating database: " .mysqli_error($conn);
}
mysqli_close($conn);
?>
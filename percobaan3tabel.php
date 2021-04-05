<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	//buat koneksi
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	//cek koneksi
	if (!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}
	// memberi perintah query sql insert ke tabel liga
	$sql = "INSERT INTO liga (kode, negara, champion) values ('Jer', 'Jerman','4') , ('Spa', 'Spanyol','3'), ('Eng', 'English','3')";
	if (mysqli_query($conn, $sql)) {
		echo "new record created successfully";
	}
	else{
		echo "Error: " .$sql."<br>". mysqli_error($conn);
	}
	mysqli_close($conn);
?>
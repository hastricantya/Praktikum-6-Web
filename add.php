<html>
<head>
	<!-- title untuk memberi judul pada jendela browser -->
	<title>Tambah Data Pegawai</title>
</head>
<body>
	<!-- mengarahkan ke index.php ketika diklik -->
	<a href="index.php">Kembali Ke Menu Awal</a>
	<br/><br/>
	<!-- menggunakan form dengan method post -->
	<form action="add.php" method="post" name="form1">
		<!-- membuat tabel -->
		<table width="25%" border="0">
			<!-- Membuat input text untuk nama -->
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
			<!-- Membuat input text untuk email -->
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
			<!-- Membuat input text untuk nomor hp -->
				<td>Nomor HP</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr> 
			<!-- membuat button input tambah data pegawai -->
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	<?php
	// Mengecek apakah form berhasil ditambah dan memasukkan data ke database.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		// include koneksi database dengan file config.php
		include_once("config.php");		
		// memasukkan data pegawai ke database
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
		// print pegawai baru berhasil ditambah
		echo "Pegawai Baru Berhasil Ditambah. <a href='index.php'>Lihat Data Pegawai</a>";
	}
	?>
</body>
</html>
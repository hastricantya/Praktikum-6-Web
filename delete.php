<?php
// include koneksi database dengan file config.php
include_once("config.php");
// menghapus id yang sebagai primary key dengan get
$id = $_GET['id'];
// menghapus pegawai berdasarkan id
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");
// Setelah menghapus langsung redirect ke Home, sehingga daftar pegawai terbaru ditampilkan.
header("Location:index.php");
?>

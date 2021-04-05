<?php
// memuat include file config.php
include_once("config.php");
// memanggil data pegawai dengan sql
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<html>
<head>
    <!-- title untuk memberi judul pada jendela browser  -->
    <title>Homepage</title>
</head>
<body>
    <!-- mengarahkan link add.php -->
    <a href="add.php">Klik Disini Untuk Tambah Data Pegawai</a><br/><br/>
    <!-- membuat table -->
    <table width='100%' border=7>
        <!-- mengisi sel -->
    <tr>
        <th>Nama</th> <th>Nomor HP</th> <th>Email</th> <th>Aksi</th>
    </tr>
    <?php
    // menggunakan method post dengan mysqli array 
    $posts = array();
    while($user_data = mysqli_fetch_array($result))
{
        // menampilkan isi sel dengan data array yang akan dimasukkan pada add.php dan mengarahkan ubah dan hapus ketika diklik
        echo "<tr>
        <td>".$user_data['name']."</td>
        <td>".$user_data['mobile']."</td>
        <td>".$user_data['email']."</td>
        <td><a href='edit.php?id=$user_data[id]'>Ubah</a> | <a href='delete.php?id=$user_data[id]'>Hapus</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>
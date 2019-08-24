<?php 
include 'koneksi.php';
    $id = $_POST['id'];
    $nama_barang = $_POST['nama'];
    $nim_mahasiswa = $_POST['nim_mahasiswa'];

mysql_query("UPDATE user SET nama='$nama', nim_mahasiswa='$nim_mahasiswa' WHERE id='$id'");

header("location:index.php?pesan=update");

?>
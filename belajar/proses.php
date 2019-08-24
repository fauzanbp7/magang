<?php 
include 'koneksi.php';
if (isset($_POST ['tambah'])) {
	$nama_mahasiswa = $_POST['nama_mahasiswa'];
	$nim_mahasiswa = $_POST['nim_mahasiswa'];
	$asal_kampus = $_POST['asal_kampus'];
	$prodi = $_POST['prodi'];
	$tahun_angkatan = $_POST['tahun_angkatan'];
	mysqli_query($koneksi, "INSERT INTO barang (nama_mahasiswa, nim_mahasiswa, asal_kampus, prodi, tahun_angkatan) 
		VALUES('$nama_mahasiswa','$nim_mahasiswa', '$asal_kampus', '$prodi', '$tahun_angkatan')");
	header("location:index.php");
}

if (isset($_POST['edit'])) {
	$nama_mahasiswa = $_POST['nama_mahasiswa'];
	$nim_mahasiswa = $_POST['nim_mahasiswa'];
	$asal_kampus = $_POST['asal_kampus'];
	$idmahasiswa=$_POST['idmahasiswa'];
	$prodi = $_POST['prodi'];
	$tahun_angkatan = $_POST['tahun_angkatan'];
	mysqli_query($koneksi,"UPDATE barang set nama_mahasiswa='$nama_mahasiswa',nim_mahasiswa='$nim_mahasiswa',asal_kampus= '$asal_kampus', prodi ='$prodi', tahun_angkatan='$tahun_angkatan' where idmahasiswa=$idmahasiswa");
	header("location:index.php");
}

if (isset($_GET['id'])) {
	$idmahasiswa=$_GET['id'];
	mysqli_query($koneksi,"DELETE from barang where idmahasiswa=$idmahasiswa");
	header("location:index.php");
}
?>
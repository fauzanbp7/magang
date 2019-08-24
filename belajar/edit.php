<?php require 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<?php 
	
	$idmahasiswa = $_GET['id'];
	$data = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM barang WHERE idmahasiswa='$idmahasiswa'"));
	?>
	
	<form action="proses.php" method="POST">		
		<table>
			<tr>
				<td>Nama Mahasiswa</td>
				<td>
					<input type="hidden" name="idmahasiswa" value="<?php echo $data['idmahasiswa'] ?>">
					<input type="text" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Asal Mahasiswa</td>
				<td><input type="text" name="nim_mahasiswa" value="<?php echo $data['nim_mahasiswa'] ?>"></td>					
			</tr>
				<tr>
				<td>Asal Kampus</td>
				<td><input type="text" name="asal_kampus" value="<?php echo $data['asal_kampus'] ?>"></td>
			</tr>
				<tr>
				<td>Prodi</td>
				<td><input type="text" name="prodi" value="<?php echo $data['prodi'] ?>"></td>
			</tr>
			<tr>
				<td>Tahun Angkatan</td>
				<td><input type="text" name="tahun_angkatan" value="<?php echo $data['tahun_angkatan'] ?>"></td>
			</tr>		
		
			<tr>

				<td></td>
				<td><input type="submit" name="edit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>

</body>
</html>
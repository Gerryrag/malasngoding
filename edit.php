<!DOCTYPE html>
<html>
<head>
	<title>Data Sekolah</title>
	<link rel="stylesheet" type="text/css" href="input.css">
</head>
<body>
	<div class="judul">		
		<h1>DATA SEKOLAH</h1>
	</div>
	
	<br/>
	<center>
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h2>Edit data</h2>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from user where id='$id'");
	while($d = mysqli_fetch_array($data)){
	?>
	<form action="update.php" method="post" id=<?php echo $id;?> enctype="multipart/form-data">		
		<table>
			<tr>
				<td>Tahun</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
					<input type="text" name="tahun" value="<?php echo $d['tahun'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Nama Sekolah</td>
				<td><input type="text" name="nama_sekolah" value="<?php echo $d['nama_sekolah'] ?>"></td>					
			</tr>	
			<tr>
				<td>Nama Kepsek</td>
				<td><input type="text" name="nama_kepsek" value="<?php echo $d['nama_kepsek'] ?>"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Jumlah Guru</td>
				<td><input type="text" name="jumlah_guru" value="<?php echo $d['jumlah_guru'] ?>"></td>					
			</tr>	
			<tr>
				<td>Jumlah Murid</td>
				<td><input type="text" name="jumlah_murid" value="<?php echo $d['jumlah_murid'] ?>"></td>					
			</tr>	
			<tr>
				<td>Foto</td>
				<td><input type="file" name="foto" value="<?php echo $d['foto'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>
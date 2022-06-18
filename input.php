<!DOCTYPE html>
<html>
<head>
	<title>Data Sekolah</title>
	<link rel="stylesheet" type="text/css" href="input.css">
</head>
<body>
	<div class="judul">		
		<h1>Input Data Sekolah</h1>
	</div>
	
	<br/>
	<center>
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	
	<h2>Input data baru</h2>
	<form action="input-aksi.php" method="post" enctype="multipart/form-data">	
		<table>
			<tr>
				<td>Tahun</td>
				<td><input type="text" name="tahun"></td>					
			</tr>	
			<tr>
				<td>Nama Sekolah</td>
				<td><input type="text" name="nama_sekolah"></td>					
			</tr>	
			<tr>
				<td>Nama KepSek</td>
				<td><input type="text" name="nama_kepsek"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td>Jumlah Guru</td>
				<td><input type="text" name="jumlah_guru"></td>					
			</tr>	
			<tr>
				<td>Jumlah Murid</td>
				<td><input type="text" name="jumlah_murid"></td>					
			</tr>	
			<tr>
				<td>Foto</td>
				<td><input type="file" name="foto"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>
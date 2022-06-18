<!DOCTYPE html>
<html>
<head>
	<title>Data Sekolah</title>
	<link rel="stylesheet" type="text/css" href="input.css">
</head>
<body>
	<div class="judul">		
		<h1>Registrasi</h1>
    </div>
	<center>
	<h2>Input data baru</h2>
	<form action="registrasi-aksi.php" method="post" enctype="multipart/form-data">	
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>					
			</tr>	
			<tr>
				<td>password</td>
				<td><input type="text" name="password"></td>									
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>
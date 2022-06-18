<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:login.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Sekolah</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<h1>Yay! Selamat datang : <?php echo $_SESSION['nama']; ?></h1>


<a href="logout.php">Klik disini untuk logout.</a>
	<div class="judul">		
		<h1>DATA DATA SEKOLAH</h1>
	</div>
	<center>
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br>
	<br>
	<center>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
	<h2>Data user</h2>
	<table border= 1 class="table">
		<tr>
			<th>No</th>
			<th>Tahun</th>
			<th>Nama Sekolah</th>
			<th>Nama Kepsek</th>
			<th>Alamat</th>
			<th>Jumlah Guru</th>
			<th>Jumlah Murid</th>
			<th>Foto</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['tahun']; ?></td>
			<td><?php echo $d['nama_sekolah']; ?></td>
			<td><?php echo $d['nama_kepsek']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td><?php echo $d['jumlah_guru']; ?></td>
			<td><?php echo $d['jumlah_murid']; ?></td>
			<td><img src="image/<?php echo $d['foto'] ?>"width="130" height="100"></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
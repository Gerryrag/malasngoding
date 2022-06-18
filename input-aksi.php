<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tahun = $_POST['tahun'];
$nama_sekolah = $_POST['nama_sekolah'];
$nama_kepsek = $_POST['nama_kepsek'];
$alamat = $_POST['alamat'];
$jumlah_guru = $_POST['jumlah_guru'];
$jumlah_murid = $_POST['jumlah_murid'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){	
                $xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'image/'.$rand.'_'.$filename);
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$tahun','$nama_sekolah','$nama_kepsek ','$alamat','$jumlah_guru','$jumlah_murid','$xx')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
          }   
        }
        
?>

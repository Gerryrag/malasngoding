<?php 

include 'koneksi.php';
$id = $_POST['id'];
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
    }
}

mysqli_query($koneksi,"update user set tahun='$tahun', nama_sekolah='$nama_sekolah', nama_kepsek='$nama_kepsek', alamat='$alamat', jumlah_guru='$jumlah_guru', jumlah_murid='$jumlah_murid', foto='$xx' 
WHERE id='$id'");

header("location:index.php?pesan=update");
?>
<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
mysqli_query($koneksi,"insert into users values('','$nama','$username','$password')");

// mengalihkan halaman kembali ke index.php
header("location:login.php");
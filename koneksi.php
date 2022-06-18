<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "malasngoding";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi) {
	die("Koneksi gagal : " .mysql_connect_error());
}
$koneksi = mysqli_connect("localhost","root","","malasngoding");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
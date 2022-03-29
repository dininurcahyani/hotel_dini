<?php  
$koneksi = mysqli_connect("localhost", "root","", "reservasi.sql");

// Check Connection
if(mysqli_connect_errno()){
	echo "Koneksi database gagal" . mysql_connect();
}


?>
<?php 
$koneksi = mysqli_connect("localhost","root","","sistem_pakar_bullying");
$koneksiLogin = mysqli_connect("localhost","root","","akademik");
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
$query = "SELECT jenisKelamin, AVG(persentase) as number FROM data GROUP BY jenisKelamin";
?>
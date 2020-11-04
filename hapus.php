<?php 
include 'koneksi_db.php';
$no = $_GET['no'];
mysqli_query($koneksi,"delete from data where no='$no'");
header("location:ghstf4538jdabdkjwqe924823.php"); 
?>
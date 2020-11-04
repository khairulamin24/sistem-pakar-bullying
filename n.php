<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data_Excel_Bullying.xls");
 
// Tambahkan table
include 'ghstf4538jdabdkjwqe924823.php';
?>
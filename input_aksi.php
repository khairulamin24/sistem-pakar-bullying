<?php 
// koneksi database
include 'koneksi_db.php';

// menangkap data yang di kirim dari form

    $nomor1 = $_POST['soal1']; 
     $nomor2 = $_POST['soal2']; 
      $nomor3 = $_POST['soal3']; 
       $nomor4 = $_POST['soal4']; 
        $nomor5 = $_POST['soal5']; 
         $nomor6 = $_POST['soal6']; 
          $nomor7 = $_POST['soal7']; 
           $nomor8 = $_POST['soal8']; 
            $nomor9 = $_POST['soal9']; 
             $nomor10 = $_POST['soal10']; 
              $nomor11 = $_POST['soal11']; 
               $nomor12 = $_POST['soal12']; 
                $nomor13 = $_POST['soal13']; 
                 $nomor14 = $_POST['soal14']; 
                  $nomor15 = $_POST['soal15']; 
                   $nomor16 = $_POST['soal16']; 
                    $nomor17 = $_POST['soal17']; 
                     $nomor18 = $_POST['soal18']; 
                      $nomor19 = $_POST['soal19']; 
                       $nomor20 = $_POST['soal20']; 
                        $nomor21 = $_POST['soal21']; 
                         $nomor22 = $_POST['soal22']; 
                          $nomor23 = $_POST['soal23']; 
                           $nomor24 = $_POST['soal24']; 
                            $nomor25 = $_POST['soal25']; 
                             $nomor26 = $_POST['soal26']; 
                              $nomor27 = $_POST['soal27']; 
                               $nomor28 = $_POST['soal28']; 
                               
                                $angka = array($nomor1,$nomor2,$nomor3,$nomor4,$nomor5,$nomor6,$nomor7,$nomor8,$nomor9,$nomor10,$nomor11,$nomor12,$nomor13,$nomor14,$nomor15,$nomor16,$nomor17,$nomor18,$nomor19,$nomor20,$nomor21,$nomor22,$nomor23,$nomor24,$nomor25,$nomor26,$nomor27,$nomor28);



$check=" ";
for($i=0; $i < count($angka); $i++){
     //ini penjumlahan isi dalam array
     // echo $angka[$i];
      $jumlah=$angka[$i]+$jumlah;
}
   if ($jumlah<74){
   	$check ="Rendah";
   }
   else if ($jumlah >=74 && $jumlah <94){
   	$check ="Sedang";
   }
   else if ($jumlah >=94){
 $check ="Tinggi";
   }
 //$k=$jumlah/11200;
$nama=$_POST['nama']; 
$jenisKelamin=$_POST['jenis']; 
$masaKerja=$_POST['masaKerja']; 
$profesi=$_POST['profesi'];


$hasil=$check;
$persen=100;
$v=112;
$persentase=($jumlah/$v)*$persen;



// menginput data ke database
mysqli_query($koneksi,"insert into data values('','$nama','$jenisKelamin','$masaKerja','$profesi','$nomor1','$nomor2','$nomor3','$nomor4','$nomor5','$nomor6','$nomor7','$nomor8','$nomor9','$nomor10','$nomor11','$nomor12','$nomor13','$nomor14','$nomor15','$nomor16','$nomor17','$nomor18','$nomor19','$nomor20','$nomor21','$nomor22','$nomor23','$nomor24','$nomor25','$nomor26','$nomor27','$nomor28','$persentase','$hasil')");

// mengalihkan halaman kembali ke index.php
header("location:ghstf4538jdabdkjwqe924823.php");

?>
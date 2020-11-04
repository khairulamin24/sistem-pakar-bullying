	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=dataSistemPakar.xls");
	
$link = mysqli_connect('localhost', 'root', '', 'sistem_pakar_bullying');
	
echo "Data Hasil Penelitian Sistem Pakar"; 
	

   
       

$result = mysqli_query($link, "SELECT * FROM data");
while ($row = mysqli_fetch_array($result))
{
echo '
        (Nomor-'.$row['no'].'
            Nama='.$row['nama'].'
            Jenis Kelamin ='.$row['jenisKelamin'].'
           Masa Kerja='.$row['masaKerja'].'
           Profesi='.$row['profesi'].'
              Soal-1='.$row['soal1'].'
              Soal-2='.$row['soal2'].'
              Soal-3='.$row['soal3'].'
              Soal-4='.$row['soal4'].'
              Soal-5='.$row['soal5'].'
              Soal-6='.$row['soal6'].'
              Soal-7='.$row['soal7'].'
              Soal-8='.$row['soal8'].'
              Soal-9='.$row['soal9'].'
              Soal-10='.$row['soal10'].'
              Soal-11='.$row['soal11'].'
              Soal-12='.$row['soal12'].'
              Soal-13='.$row['soal13'].'
              Soal-14='.$row['soal14'].'
              Soal-15='.$row['soal15'].'
              Soal-16='.$row['soal16'].'
              Soal-17='.$row['soal17'].'
              Soal-18='.$row['soal18'].'
              Soal-19='.$row['soal19'].'
              Soal-20='.$row['soal20'].'
              Soal-21='.$row['soal21'].'
              Soal-22='.$row['soal22'].'
              Soal-23='.$row['soal23'].'
              Soal-24='.$row['soal24'].'
              Soal-25='.$row['soal25'].'
              Soal-26='.$row['soal26'].'
              Soal-27='.$row['soal27'].'
              Soal-28='.$row['soal28'].'            
           Persentase='.$row['persentase'].'
            Kategori Bullying='.$row['hasil'].')
        ';
       
}


?>
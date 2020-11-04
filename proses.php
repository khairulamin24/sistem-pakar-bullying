<!doctype html>
<html lang="en">
  <head>
    <title>Output Sistem</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/desaim.css">
    
    <title>Akhir</title>
  </head>  
  <body>

<?php
  $link = mysqli_connect('localhost', 'root', '', 'sistem_pakar_bullying');
    
  // buat prepared statements
  $stmt = mysqli_prepare($link, "INSERT INTO data VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

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
$jumlah=0;
for($i=0; $i < count($angka); $i++){
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
        
        mysqli_stmt_bind_param($stmt, "issssiiiiiiiiiiiiiiiiiiiiiiiiiiiiss", $no, $nama, $jenisKelamin, $masaKerja ,$profesi,$nomor1,$nomor2,$nomor3,$nomor4,$nomor5,$nomor6,$nomor7,$nomor8,$nomor9,$nomor10,$nomor11,$nomor12,$nomor13,$nomor14,$nomor15,$nomor16,$nomor17,$nomor18,$nomor19,$nomor20,$nomor21,$nomor22,$nomor23,$nomor24,$nomor25,$nomor26,$nomor27,$nomor28, $persentase,$hasil);
        $nama=$_POST['nama']; 
        $jenisKelamin=$_POST['jenis']; 
        $masaKerja=$_POST['masaKerja']; 
        $profesi=$_POST['profesi'];
        $persentase=($jumlah/112)*100;

        $hasil=$check;
          
        // jalankan query
        mysqli_stmt_execute($stmt);
          
        // cek hasil query
        if (!$stmt) {
          die('Query Error : '.mysqli_errno($link).' - '.mysqli_error($link));
        }else {
          ?>
          <div class="alert alert-success" role="alert">Penambahan <?php echo mysqli_stmt_affected_rows($stmt);?> data berhasil</div><br/>
          <?php
        }
            
        mysqli_stmt_close($stmt);
          
        mysqli_close($link);
?>

<div class="container">
     <div class="row">
          <div class="col-sm-3">
               <!---->
          </div>
          
          <div class="col-sm-6">
               <table class="table table-striped tableAtas">
                         <thead>
                              <tr>
                              <th scope="col" colspan="3">Terimakasih <font color='red'>
                                <?php
                                  echo $nama;
                                ?>
                                </font>sudah menggunakan sistem kami
                              </th>

                              </tr>
                         </thead>
                         <tbody>
                         <tr>
                              <th scope="row" width="40%">Nama Anda</th>
                              <td>=</td>
                              <td><?php
                                  echo $nama;
                                ?>
                                </td>
                              
                         </tr>
                         <tr>
                              <th scope="row">Jenis Kelamin</th>
                              <td>=</td>
                              <td><?php
                                  echo $jenisKelamin;
                                  ?>
                                </td>
                              
                         </tr>
                         <tr>
                              <th scope="row">Masa Kerja</th>
                              <td>=</td>
                              <td><?php
                                  echo $masaKerja;
                                ?>
                                </td>
                              
                         </tr>
                         <tr>
                              <th scope="row">Profesi</th>
                              <td>=</td>
                              <td><?php
                                  echo $profesi;
                                ?>
                                </td>
                              
                         </tr>
                         <tr>
                              <th scope="col" colspan="2">
                                Persentase Perilaku Bullying :
                              </th>                              
                                <td><font color='blue'>
                                <h1 class="h1">                                  
                                  <?php
                                    echo round($persentase, 2)."%";
                                  ?>
                              </font>
                               
                                </h1>
                              </td>
                          </tr>
                          <tr>
                            <th scope="col" colspan="2">
                              <em>Secara Persepsi tingkat Bullying : </em>
                            </th>
                            <td>
                              <h1>
                                <font color='black'>
                                  <?php
                                        echo $check ;
                                  ?>
                                  </font> 
                              </h1>
                            </td>
                          </tr>
                          <thead>
                              <tr>
                              <th scope="col" colspan="3"><font color='blue'><a href='index.php'><h5> Kembali ke Menu</h5></a></font>
                             
                              </th>
                              </tr>
                         </thead>
                    </tbody>
                    
                  </table>
          </div>
     </div>
</div>
<h3>
  <center>

    Apa itu Bullying di Tempat Kerja ?
  </center>
</h3>
<center>
<button type="button" class="baca_selengkapnya btn btn-primary btn-lg">
      Informasi Bullying >>

    </button>
  </center>
     <div class="pesan">
          <div class="container">
            <justify>
<p class="text-justify">
&nbsp;&nbsp;&nbsp;&nbsp; Salah satu faktor yang relevan dengan lingkungan kerja adalah bullying atau intimidasi (Mundbjerg Eriksen, Hogh, & Hansen, 2016). Lebih dari satu diantara sepuluh responden mengalami bullying di tempat kerja menunjukkan masalah absensi (Bentley et al., 2012). Jika dampak bullying mengarah kepada masalah kesehatan yang parah seperti depresi, ada kemungkinan individu akan menderita sakit jangka panjang (Duru, Ocaktan, Çelen, & Örsal, 2018), yang menghambat produktifitas karyawan dan kinerja organisasi (Tu, 2016). Bullying melibatkan perilaku negatif dan menyebabkan beberapa kerusakan pada target yang diintimidasi (Saunders, Huynh, & Goodman-delahunty, 2007).
</p>
<p class="text-justify">
&nbsp;&nbsp;&nbsp;&nbsp; Bullying di tempat kerja adalah tentang tindakan berulang-ulang dan praktek yang diarahkan terhadap satu atau lebih pekerja, yang tidak diinginkan oleh korban, yang mungkin dilakukan dengan sengaja atau tidak sadar, tetapi jelas menyebabkan penghinaan, pelanggaran dan kesusahan,dapat mengganggu kinerja, serta menyebabkan lingkungan kerja menjadi tidak menyenangkan (Einarsen, Hoel, Zapf, & Cooper, 2010). Rayner dan Hoel mengelompokkan perilaku bullying di tempat kerja ke dalam bentuk-bentuk sebagai berikut (Cowie, Naylor, Rivers, Smith, & Pereira, 2002):
</p>
<p class="text-justify">
a.	Ancaman pada status profesional, seperti mempermalukan di depan publik, menyalahkan karena kurangnya usaha.
</p>
<p class="text-justify">
b.	Ancaman pada pribadi, seperti memberi nama ledekan, menghina, mengintimidasi dan merendahkan seseorang karena usianya.
</p>
<p class="text-justify">
c.	Mengisolasi, seperti mencegah pegawai mengakses kesempatan, mengisolasi secara fisik dan sosial dan menahan informasi.
</p>
<p class="text-justify">
d.	Beban kerja yang berlebihan, seperti tekanan yang terus menerus, batas waktu yang tidak mungkin terpenuhi.
</p>
<p class="text-justify">
e.	Perbuatan yang menyebabkan ketidakstabilan, seperti memberikan tugas yang tidak berguna, penghapusan tanggung jawab, mengingat ulang kesalahan dan menyiapkan untuk gagal.
</p>
<p class="text-justify">
Ada berbagai alasan yang menyebabkan seseorang melakukan perilaku bullying  di tempat kerja, yaitu :
</p>
<p class="text-justify">
a)	Kekuasaan; seseorang dapat menggunakan posisi kekuasaan atau dominasi fisik mereka atas orang lain yang dianggap lebih lemah. Bullying sering tergantung pada perasaan memiliki kekuatan yang lebih dibandingkan korban mereka(Hermann, 2017).
</p>
<p class="text-justify">
b)	Penghargaan diri; pelaku bullyingmengintimidasi dan merendahkan orang lain dengan tujuan untuk meningkatkan harga diri dan kepercayaan diri untuk membantu mengatasi perasaan tidak mampu pada diri mereka sendiri(McMahon, 2000).
</p>
<p class="text-justify">
c)	Perbedaan; seorang individu atau kelompok dapat menjadi target intimidasi dan bullyingdi tempat kerja karena orang lain menganggap mereka sebagai seseorang yang baru atau berbeda(Saunders et al., 2007). 
</p>
<p class="text-justify">
d)	Ancaman; beberapa orang menggertak orang lain karena orang lain dianggap sebagai ancaman bagi mereka baik secara pribadi atau posisi mereka dalam perusahaan(Attell et al., 2017).
</p>
<p class="text-justify">
e)	Budaya Organisasi yang sering ditunjukkan oleh adanya nilai-nilai, keyakinan dan apa yang dianggap perilaku normal. Ketika budaya positif, mendorong individu mengadopsi perilaku yang tepat yang mempromosikan penghormatan orang lain. Sebaliknya, karyawan mungkin menemukan diri mereka dalam budaya negatif di mana perilaku yang tidak pantas dan sikap didorong atau dibiarkan oleh manajemen dan intimidasi dipandang sebagai perilaku normal untuk mayoritas orang di tempat kerja(An & Kang, 2016).
</p>
<p class="text-justify">
f)	Faktor Organisasi(Helmy, Labib, & AbouKahf, 2014; Imran, Rasli, & Zaman, 2014); orang mungkin melecehkan atau menggertak orang lain karena ketidakpuasan dengan peraturan organisasi. Faktor-faktor yang termasuk di dalamnya adalah ketidakamanan kerja, restrukturisasi atau perampingan, adanya perubahan seperti manajer atau supervisor baru, daftar nama baru atau prosedur baru, pengawasan yang tidak memadai, perubahan kepemilikan, pengenalan teknologi baru, praktek inisiasi yang tidak sesuai, dukungan atau pelatihan yang tidak memadai, kurangnya keterampilan dan praktek dalam manajemen, pengaturan pekerjaan yang berarti individu atau kelompok kerja bekerja secara terpisah dari supervisor di tempat kerja. Hal ini dapat memungkinkan perilaku bullying menjadi tidak terdeteksi dan mencegah efektif monitoring dan kepemimpinan
</p>
<p class="text-justify">
g)	Kontak dengan klien atau pelanggan dalam beberapa industri bisa mengancam atau mengganggu karyawan(Nielsen & Einarsen, 2018). Jika ini diidentifikasi sebagai risiko, maka harus dikendalikan dengan cara yang sama sebagai risiko yang teridentifikasi lainnya. Pelatihan staf dalam menangani pelanggan yang sulit, prosedur penarikan dari situasi yang berisiko dan akses untuk  konseling atau pembekalan semua dapat membantu untuk mengendalikan risiko ini.
</p>

      </justify>
          </div>
      </div>
        <br>
        <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".pesan").hide();
        $(".baca_selengkapnya").click(function(){
          $(".pesan").slideDown('slow');
          $(this).hide();
        })
      });
    </script> 
      </body>
      </html>
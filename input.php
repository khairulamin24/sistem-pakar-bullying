

<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/desaim.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <title>Form Pertanyaan</title>
</head>

<body>
    <center><h4 style="border:2px solid Tomato;"><b>JAWABLAH PERTANYAAN DIBAWAH INI</b></h4>
<!-- menu biodata -->
<div class="container">
<form method="POST" action="proses.php" id="validasi">
     <div class="row">
          <div class="col-sm-3">
          </div>

<!-- table -->
          <div class="col-sm-6">
     <table class="table table-striped tableAtas">
     <ul class="pagination">
        <li>
     <thead>
          <tr>
               <th scope="col" colspan="3">Silahkan isi terlebih dahulu :</th>
          </tr>
     </thead>
          <tr>
               <th scope="row">Nama Lengkap</th>
               <td>:</td>
               <td><input class="form-control required" type="text" placeholder="Nama Lengkap" name="nama" id="nama" maxlength="30" size="15"/></td>
               
          </tr>
          <tr>
               <th scope="row">Jenis Kelamin</th>
               <td>:</td>
               <td><input type="radio" name="jenis" value="Laki-Laki" /><font color='blue'>Laki-Laki  &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="jenis" value="Perempuan" /><font color='red'>Perempuan </td>
               
          </tr>
          <tr>
               <th scope="row">Masa Kerja</th>
               <td>:</td>
               <td><input class="form-control" type="number" placeholder="(tahun)" name="masaKerja"/></td>
               
          </tr>
          <tr>
               <th scope="row">Profesi</th>
               <td>:</td>
               <td><input class="form-control" type="text" placeholder="profesi" name="profesi"/></td>
               
          </tr>
          </tbody>
     </table>
          </div>
<!-- Akhir table -->
     </div>
</div>
<!-- Akhir menu biodata -->


<div class="container">
          <div class="alert alert-success" role="alert">
               <sub> 
               Pilihlah salah satu dari empat jawaban yang ada dan paling sesuai dengan memilih salah satu pada radio button yang tersedia!</h4>          
               </sub>
          </div>
          <div class="row">
               <div class="col-sm-3">
               </div>
               <div class="form-check col-sm-2">
                    Keterangan
               </div>
                    <div class="form-check col-sm-2">
                         :
                    </div>
                              <div class="form-check col-sm-3">
                              <div class="radioDisable">
                                   <input class="form-check-input" type="radio"  disabled>
                                        <label class="form-check-label" for="exampleRadios3">
                                        <font color='red'>SS	:  Sangat Sesuai</font>
                                        </label>
                              </div>
                         <div class="radioDisable">
                              <input class="form-check-input" type="radio"  disabled>
                                   <label class="form-check-label" for="exampleRadios3">
                                   <font color='red'>S	:  Sesuai</font>
                                   </label>
                         </div>
                              <div class="radioDisable">
                                   <input class="form-check-input" type="radio"  disabled>
                                        <label class="form-check-label" for="exampleRadios3">
                                        <font color='red'>TS	:  Tidak Sesuai</font>
                                        </label>
                              </div>
                         <div class="radioDisable">
                              <input class="form-check-input" type="radio"  disabled>
                                   <label class="form-check-label" for="exampleRadios3">
                                   <font color='red'>STS	:  Sangat Tidak Sesuai</font>
                                   </label>
                         </div>
                         </div>
          </div>
</div>
     
<!-- Akhir menu input -->
<!-- menu input -->
<!-- tombol utama -->

          <div class="container">
          <!-- awal tabel 1-->
     <div class="tab-content" id="myTabContent">
     <div class="tab-pane fade show active" id="satu" role="tabpanel" aria-labelledby="satu-tab">
     <table class="table table-striped">
          <tr >
            <td>1. Saya sering mengkritik pekerjaan teman saya di depan umum.  </td>
            <td width="22%">
            <input type="radio" name="soal1" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal1" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal1" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal1" value="1" /><font color='black'>STS</font>             
        </td>        
        </tr>

          <tr >
            <td>2. Saya berani mengungkap kejelekan orang lain dalam forum rapat.  </td>
            <td>
            <input type="radio" name="soal2" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal2" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal2" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal2" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>

          <tr >
            <td>3. Saya marah bila menemukan sesuatu yang tidak sesuai dengan keinginan saya. </td>
            <td>
            <input type="radio" name="soal3" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal3" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal3" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal3" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>
   <tr >
            <td>4. Saya marah kepada rekan kerja yang tidak mencapai target kerja. </td>
            <td>
            <input type="radio" name="soal4" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal4" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal4" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal4" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>

            <tr >
            <td>5. Saya senang menjuluki teman dengan sebutan jeleknya. </td>
            <td>
            <input type="radio" name="soal5" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal5" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal5" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal5" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>

         <tr >
            <td>6. Saya senang mengejek teman yang lebih jelek secara fisik dari saya. </td>
            <td>
            <input type="radio" name="soal6" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal6" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal6" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal6" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>
   <tr >
            <td>7. Saya tidak suka jika karyawan membicarakan kejelekan orang lain. </td>
            <td>
            <input type="radio" name="soal7" value="1" /><font color='black'>SS</font>
            <input type="radio" name="soal7" value="2" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal7" value="3" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal7" value="4" /><font color='black'>STS</font>
             
        </td>        
        </tr>
          <tr >
            <td>8. Saya memusuhi rekan kerja yang tidak sopan kepada saya.</td>
            <td>
            <input type="radio" name="soal8" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal8" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal8" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal8" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>
         <tr >
            <td>9. Saya tidak suka menghina orang lain. </td>
            <td>
            <input type="radio" name="soal9" value="1" /><font color='black'>SS</font>
            <input type="radio" name="soal9" value="2" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal9" value="3" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal9" value="4" /><font color='black'>STS</font>
             
        </td>        
        </tr>
     <tr >
            <td>10. Saya mengancam rekan kerja untuk segera menyelesaikan pekerjaannya. </td>
            <td>
            <input type="radio" name="soal10" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal10" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal10" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal10" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>
        </table>
        <!-- 10 -->
        </div>
     <div class="tab-pane fade show" id="dua" role="tabpanel" aria-labelledby="dua-tab">
        <table class="table table-striped">
        <tr >
            <td>11. Saya tidak berani mengancam rekan kerja. </td>
            <td>
            <input type="radio" name="soal11" value="1" /><font color='black'>SS</font>
            <input type="radio" name="soal11" value="2" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal11" value="3" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal11" value="4" /><font color='black'>STS</font>             
        </td>        
        </tr>

         <tr >
            <td>12. Saya tidak menanggapi pendapat dari karyawan muda.  </td>
            <td>
            <input type="radio" name="soal12" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal12" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal12" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal12" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>

       <tr >
            <td>13.Saya menghargai pendapat orang lain, meskipun lebih muda dari saya. </td>
            <td>
            <input type="radio" name="soal13" value="1" /><font color='black'>SS</font>
            <input type="radio" name="soal13" value="2" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal13" value="3" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal13" value="4" /><font color='black'>STS</font>
             
        </td>        
        </tr>

        <tr >
            <td>14. Keluhan dari karyawan muda merupakan hal yang tidak penting.</td>
            <td>
            <input type="radio" name="soal14" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal14" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal14" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal14" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>
   <tr >
            <td>15. Saya berusaha mencegah karyawan lain mendapatkan bonus. </td>
            <td>
            <input type="radio" name="soal15" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal15" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal15" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal15" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>

          <tr >
            <td>16.Saya malas bertemu dengan rekan kerja yang kurang saya sukai.</td>
            <td>
            <input type="radio" name="soal16" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal16" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal16" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal16" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>
   <tr >
            <td>17. Saya mengajak karyawan lain untuk  menjauhi rekan kerja yang tidak saya sukai. </td>
            <td>
            <input type="radio" name="soal17" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal17" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal17" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal17" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>
       <tr >
            <td>18. Saya tidak mau bekerja dalam satu tim dengan rekan kerja yang saya benci.</td>
            <td>
            <input type="radio" name="soal18" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal18" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal18" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal18" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>
          <tr >
            <td>19. Saya akan mengucilkan rekan kerja yang tidak saya sukai.</td>
            <td>
            <input type="radio" name="soal19" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal19" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal19" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal19" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>
         <tr >
            <td>20. Saya berani membela rekan kerja yang tidak melakukan kesalahan. </td>
            <td>
            <input type="radio" name="soal20" value="1" /><font color='black'>SS</font>
            <input type="radio" name="soal20" value="2" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal20" value="3" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal20" value="4" /><font color='black'>STS</font>
             
        </td>        
        </tr>

          </table>
     </div>
     <div class="tab-pane fade show" id="tiga" role="tabpanel" aria-labelledby="tiga-tab">
        <table class="table table-striped">
        <tr >
            <td>21. Saya tidak mau memberikan informasi kepada rekan kerja yang tidak saya sukai. </td>
            <td>
            <input type="radio" name="soal21" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal21" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal21" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal21" value="1" /><font color='black'>STS</font>             
        </td>        
        </tr>
   <tr >

            <td>22. Saya tidak mau memberitahukan jadwal apapun, kecuali jika ada yang bertanya. </td>
            <td>
            <input type="radio" name="soal22" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal22" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal22" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal22" value="1" /><font color='black'>STS</font>
             
          <!-- awal tabel -->
        </td>        
        </tr>

      <tr >
            <td>23. Saya memaksa rekan kerja untuk mengerjakan pekerjaan saya. </td>
            <td>
            <input type="radio" name="soal23" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal23" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal23" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal23" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>

      <tr >
            <td>24.Saya memberikan pekerjaan yang sulit kepada rekan kerja.</td>
            <td>
            <input type="radio" name="soal24" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal24" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal24" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal24" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>

            <tr >
            <td>25. Dengan adanya deadline waktu, karyawan dapat bekerja maksimal. </td>
            <td>
            <input type="radio" name="soal25" value="1" /><font color='black'>SS</font>
            <input type="radio" name="soal25" value="2" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal25" value="3" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal25" value="4" /><font color='black'>STS</font>
             
        </td>        
        </tr>

           <tr >
            <td>26. Saya selalu memberikan pekerjaan kepada rekan kerja, meskipun pekerjaan tersebut tidak penting. </td>
            <td>
            <input type="radio" name="soal26" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal26" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal26" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal26" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>
   <tr >
            <td>27. Jika saya melakukan kesalahan, saya akan menyalahkan teman kerja saya.</td>
            <td>
            <input type="radio" name="soal27" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal27" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal27" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal27" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>
      
        <tr >
            <td>28. Saya menyimpan dendam kepada rekan kerja.</td>
            <td>
            <input type="radio" name="soal28" value="4" /><font color='black'>SS</font>
            <input type="radio" name="soal28" value="3" /><font color='black'>S&nbsp;&nbsp;</font>
            <input type="radio" name="soal28" value="2" /><font color='black'>TS&nbsp;</font>
             <input type="radio" name="soal28" value="1" /><font color='black'>STS</font>
             
        </td>        
        </tr>
        <tr>
        <td colspan="2"><center>
    <input type="submit"  value="Simpan" class="btn btn-outline-primary"/>
     <input type="reset" name="reset" value="Reset" class="btn btn-outline-secondary"/>
        </td>
        </tr>
</center>

          </table>
     </div>
     </div>
     <div class="btn-group btn-group-toggle" data-toggle="buttons">

     <nav class="nav nav-pills" id="myTab" role="tablist">
     <!-- <ul class="nav nav-tabs" id="myTab" role="tablist"> -->
          <a class="nav-item nav-link btn-primary" id="satu-tab" data-toggle="tab" href="#satu" role="tab" aria-controls="satu" aria-selected="true">1-10</a>
          &nbsp;&nbsp;&nbsp;<a class="nav-item nav-link btn-primary" id="dua-tab" data-toggle="tab" href="#dua" role="tab" aria-controls="dua" aria-selected="true">11-20</a>
          &nbsp;&nbsp;&nbsp;<a class="nav-item nav-link btn-primary" id="tiga-tab" data-toggle="tab" href="#tiga" role="tab" aria-controls="tiga" aria-selected="true">21-Selesai</a>
     <!-- </ul> -->
     </nav>
     </div>
<!-- akhir tombol utama -->
     </form>
     </div>
    </body>
		</html>
	
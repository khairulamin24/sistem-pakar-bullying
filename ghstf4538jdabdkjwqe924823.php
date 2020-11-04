<?php  
include 'koneksi_db.php';
$result = mysqli_query($koneksi, $query);  
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Data Hasil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/desaim.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
     <script type="text/javascript" src="chartjs/Chart.js"></script>
<!-- <style>
body{
     background-color:rgba(200,200,100, 0.5);
}
</style> -->
          <!-- diagram pie -->
           <script type="text/javascript">  
               google.charts.load('current', {'packages':['corechart']});  
               google.charts.setOnLoadCallback(drawChart);  
               function drawChart()  
               {  
                    var data = google.visualization.arrayToDataTable([  
                              ['Gender', 'Number'],  
                              <?php  
                              while($row = mysqli_fetch_array($result))  
                              {  
                                   echo "['".$row["jenisKelamin"]."', ".$row["number"]."],";  
                              }  
                              ?>  
                              ]
                              );  
                    var options = {  
                         title: 'Persentase Data Masuk',  
                         pieHole: 0.2  
                         };  
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                    chart.draw(data, options);  
               }  
          </script>
          <!-- Akhir diagram pie -->
     </head>

<body class="gambar">
	<br/><p><a href="input.php"><button type="button" class="btn btn-outline-secondary">TAMBAH DATA</button></a></p>
<!-- class diagram -->
	<div class="row">
     <!-- interface bar -->
          <div class="col-sm-6">
               <h5 align="center">JUMALAH DATA TINGKAT BULLYING BERDASARKAN JENIS KELAMIN</h5>  
               <div style="width: 400px;margin: 0px auto;">
                    <canvas id="myChart"></canvas>
               </div>
          </div>
     <!-- Akhir interface bar -->
     <!-- interface pie -->
          <div class="col-sm-6">
               <h5 align="center">RARA-RATA PRILAKU BULLYING BERDASARKAN JENIS KELAMIN</h5>  
               <div style="width: 400px;margin: 0px auto;">
                    <div id="piechart"></div>    
               </div>
          </div>
     <!-- Akhir interface pie -->
	</div>  
<!-- Akhir class diagram -->

<button type="button" class="baca_selengkapnya btn btn-primary btn-sm">Lihat Semua Data</button>
<div class="pesan">
<!-- tabel -->
	<table class="table table-bordered">
		<tr>
               <th colspan="36"><center><h1>DATA YANG TELAH MENGGUNAKAN SISTEM PAKAR BULLYING</h1></center></th>
		</tr>
		<tr>
               <th rowspan="2">No</th>
            	<th rowspan="2">Nama</th>
               <th rowspan="2">Jenis Kelamin</th>
               <th rowspan="2">Masa Kerja</th>
               <th rowspan="2">Profesi</th>
               <th colspan="28"><center>Soal</center></th>
               <th rowspan="2">Persentase</th>
               <th rowspan="2">Hasil</th>
               <th rowspan="2">Tindakan</th>
		</tr>
		<tr>
                <th> 1</th>
                <th> 2</th>
                <th> 3</th>
                <th> 4</th>
                <th> 5</th>
                <th> 6</th>
                <th> 7</th>
                <th> 8</th>
                <th> 9</th>
                <th> 10</th>
                <th> 11</th>
                <th> 12</th>
                <th> 13</th>
                <th> 14</th>
                <th> 15</th>
                <th> 16</th>
                <th> 17</th>
                <th> 18</th>
                <th> 19</th>
                <th> 20</th>
                <th> 21</th>
                <th> 22</th>
                <th> 23</th>
                <th> 24</th>
                <th> 25</th>
                <th> 26</th>
                <th> 27</th>
                <th> 28</th>
          </tr>

<?php
include 'koneksi_db.php';
$nomor = 1;

$data = mysqli_query($koneksi,"select * from data");
while($d = mysqli_fetch_array($data)){
     ?>
          <tr>
               <td><?php echo $nomor++; ?></td>
               <td><?php echo $d['nama']; ?></td>
               <td><?php echo $d['jenisKelamin']; ?></td>
               <td><?php 
                    // $d['masaKerja'];
                    $str = $d['masaKerja'];
                         $num = '';
                         for ($i = 0; $i < strlen($str); $i++) {
                         if (is_numeric($str[$i])) {
                              $num .= $str[$i];
                         }
                         }
                         echo $num;
               // echo $d['masaKerja']; 
               ?></td>
               <td><?php echo $d['profesi']; ?></td>
               <td><?php echo $d['soal1']; ?></td>
               <td><?php echo $d['soal2']; ?></td>
               <td><?php echo $d['soal3']; ?></td>
               <td><?php echo $d['soal4']; ?></td>
               <td><?php echo $d['soal5']; ?></td>
               <td><?php echo $d['soal6']; ?></td>
               <td><?php echo $d['soal7']; ?></td>
               <td><?php echo $d['soal8']; ?></td>
               <td><?php echo $d['soal9']; ?></td>
               <td><?php echo $d['soal10']; ?></td>
               <td><?php echo $d['soal11']; ?></td>
               <td><?php echo $d['soal12']; ?></td>
               <td><?php echo $d['soal13']; ?></td>
               <td><?php echo $d['soal14']; ?></td>
               <td><?php echo $d['soal15']; ?></td>
               <td><?php echo $d['soal16']; ?></td>
               <td><?php echo $d['soal17']; ?></td>
               <td><?php echo $d['soal18']; ?></td>
               <td><?php echo $d['soal19']; ?></td>
               <td><?php echo $d['soal20']; ?></td>
               <td><?php echo $d['soal21']; ?></td>
               <td><?php echo $d['soal22']; ?></td>
               <td><?php echo $d['soal23']; ?></td>
               <td><?php echo $d['soal24']; ?></td>
               <td><?php echo $d['soal25']; ?></td>
               <td><?php echo $d['soal26']; ?></td>
               <td><?php echo $d['soal27']; ?></td>
               <td><?php echo $d['soal28']; ?></td>
               <td><?php echo $d['persentase']."%"; ?></td>
               <td><?php echo $d['hasil']; ?></td>
               <td>					
                    <a href="hapus.php?no=<?php echo $d['no']; ?>">HAPUS</a>
               </td>
          </tr>
			<?php 
		}
		?>
	</table>
<br>
	<p><a href="n.php"><button type="button" class="btn btn-success">Export Data ke Excel</button></a></p>
	<p><a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a></p><br><br>
	</div>
          </table>
<!-- Akhir tabel -->
	
<!-- tombol lanjut -->
	<script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
          <script type="text/javascript">
               $(document).ready(function() {
               $(".pesan").hide();
               $(".baca_selengkapnya").click(function(){
                    $(".pesan").slideDown('slow');
                    $(this).hide();
               })
          });
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
                    title: 'Persentase Data Masuk',
				labels: ["Laki-laki", "Perempuan", "Jumlah"],
				datasets: [{
                         
                         label: '',
					data: [
					<?php 
					$jumlah_laki = mysqli_query($koneksi,"select * from data where jenisKelamin='Laki-Laki'");
					echo mysqli_num_rows($jumlah_laki);
					?>, 
					<?php 
					$jumlah_perempuan = mysqli_query($koneksi,"select * from data where jenisKelamin='Perempuan'");
					echo mysqli_num_rows($jumlah_perempuan);
					?>, 
					<?php 
					$jumlah_total = mysqli_query($koneksi,"select * from data");
					echo mysqli_num_rows($jumlah_total);
					?>
					],
					backgroundColor: [
					'rgba(50, 50, 255, 0.5)',
                         'rgba(255, 50, 50, 0.5)',
					'rgba(50, 255, 50, 0.5)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
                         'rgba(125,19,32,0.1)',
					'rgba(54, 162, 235, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
<!-- Akhir diagram bar -->
</body>
</html>
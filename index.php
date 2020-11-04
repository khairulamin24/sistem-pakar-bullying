
<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- <link href="./css/bootstrap-responsive.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./css/desaim.css">
    
    <title>Menu Utama</title>
  </head>  
  <body>
<!-- cek login -->
      <?php 
if(isset($_GET['pesan'])){
  if($_GET['pesan'] == "gagal"){
    echo "Login gagal! username dan password salah!";
  }else if($_GET['pesan'] == "logout"){
    echo "Anda telah berhasil logout";
  }else if($_GET['pesan'] == "belum_login"){
    echo "Anda harus login untuk mengakses halaman admin";
  }
}
?>
<!-- Akhir cek login -->


      <div class="container containerAtas">
          <div class="row">
            <div class="col-lg-1">
            </div>
              <div class="col-lg-10">  
                <div class="jumbotron border border-dark rounded kepala">
                  <center>
                    <!-- Universitas Abdurrab<p class="text-justify">Dosen Fakultas Teknik</p><p class="text-justify">Prodi Teknik Informatika</p><i>Ira Puspita Sari, S.Kom, MMSI </i> -->
                    <h3>
                        SISTEM PAKAR
                      </h3> 
                      <h5 class="border-bottom border-secondary">
                        PENGUKURAN BULLYING DI TEMPAT KERJA BERBASIS GENDER
                        <!-- <hr class="GarisAtas"> -->
                    </h5>
                  </center>
              </div>
            </div>
          </div>       
  
          <div class="container-fluid">
            <div class="row-fluid">
              <div class="col-lg-3">
                <!--Sidebar content-->
                      <form method="post" action="cek_login.php">
                          <div class="form-group">
                            <label for="username">Username Admin</label>
                            <input type="text" name="username" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Masukan Username Admin">
                            <small id="usernameHelp" class="form-text text-muted">
                              Kami tidak akan pernah membagikan data Anda</small>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                          </div>
                          <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </form>
              </div>
              <div class="col-lg-9">
                <!--Body content-->
                  <center><hr>
                    <h4>PETUNJUK PENGISIAN</h4>
                    <hr class="GarisAtas">
                  </center>
                  <div class="container">
                  <p class="text-justify">
                    
                    1. Bacalah pernyataan-pernyataan pada lembar berikut, kemudian jawablah dengan sungguh-sungguh sesuai dengan keadaan yang sebenarnya.
                  </p>
                    </p>
                    <p class="text-justify">
                      2. Tidak ada jawaban yang dianggap salah, semua adalah benar jika diisi dengan jujur sesuai dengan keadaan saat ini.
                    </p>
                    <p class="text-justify">
                      3. Pilihlah salah satu dari empat jawaban yang Anda anggap paling sesuai dengan keadaan Anda, kemudian Klik pada Button yang tersedia.
                    </p>
                    <p class="text-justify">
                      4. Periksalah kembali semua jawaban dan pastikan telah terisi semua.
                    </p>
                    <p class="text-justify">
                      5. Atas partisipasi dan kerja sama yang baik dari Anda, saya ucapkan terima kasih.
                    </p>
              </div>
                    <nav aria-label="Page navigation example">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                              <a class="nav-link active" href="input.php">Mulai Menjawab</a>
                            </li>
                      </nav>
            </div>
          </div>
  
          <div class="row jumbotron textAtas">
                  <div class="col-sm-4 textAtas">
                    <div class="container">
                      <br><br>

                      </div>
                  </div>
              <div class="col-sm-8 bagisnTengah">   
                <div class="container">

                  </div>
                </div> 
          </div>
        </div>
    </div>
</body>
</html>
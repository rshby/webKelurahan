<?php 
//cek CAPIL
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://datawarehouse.jogjakota.go.id/index.php/capilrt",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => array('no_prop' => '34','no_kab' => '71','no_kec' => '13','no_kel' => '1007','no_rw' => '013'),
  CURLOPT_HTTPHEADER => array(
    "Content-Type: multipart/form-data; boundary=--------------------------666621199432571326402521"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

echo "<br> <br>";

$url='https://layananupik.jogjakota.go.id/lumen/public/api/get-poi-category';
$json = file_get_contents($url);
$data = json_decode($json,true);

var_dump($data['data'][0]);

$data = $data["data"][0];


foreach( $data as $row) :
  echo $row["kategori"];
  echo "<br>";
endforeach;

?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="pemkot.png"/>
  <title>Tempat Strategis</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light border border-dark">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <a class="navbar-brand" href="#">
            <img src="pemkot.png" width="40" height="50" class="d-inline-block align-top" alt="">
          </a>    
        </div>
        <div class="col-9">
          <p class="judul-navbar">Pemerintahan Kota <br>Yogyakarta</p>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="gambaranumum.php">Gambaran Umum<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="masalah.php">Masalah dan Potensi SDM</a>
          <a class="nav-item nav-link" href="lembaga.php">Lembaga</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sarana dan Prasarana
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="potensi_sarpras.php">Potensi Prasarana dan Sarana</a>
              <a class="dropdown-item" href="kesehatan_sarpras.php">Kesehatan</a>
              <a class="dropdown-item" href="pendidikan_sarpras.php">Pendidikan</a>
              <a class="dropdown-item" href="hiburan_sarpras.php">Hiburan dan Wisata</a>
              <a class="dropdown-item" href="kebersihan_sarpras.php">Kebersihan</a>
            </div>
          </li>
          <a class="nav-item nav-link active nav-aktif" href="tempat_strategis.php">Tempat Strategis / Lokasi Penting</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="tulisan-bergerak">
    <?php
      $tanggal = mktime(date('m'), date("d"), date('Y'));
      date_default_timezone_set("Asia/Jakarta");
      $jam = date ("H:i:s");
    ?>
    <marquee>♦ Tanggal : <b> <?=date("d-m-Y", $tanggal )?> </b>♦ ♦ Pukul : <b>  <?php echo $jam ?> ♦ ♦</b> Sawiji Ing Greget Raharjo Awit Karep : Satu Dalam Tekad dan Semangat, Sukses Sejahtera Karena Kemauan ♦ ♦ Jam Pelayanan Senin - Kamis Pukul 08:00 - 15:00 WIB , Jumat Pukul 08:00 - 11:30 WIB dan 13:00 - 14:00 WIB ♦</marquee>
  </div>

  <div class="container">

    <div class="row">
      <div class="col-9">

        <!-- Menu Lembaga Pendidikan -->
        <div class="menu rounded-lg">
          <h4 class="tulisan-menu">Tempat Strategis</h4>
        </div>
        <br>
        <div class="row isi">

          <div class="col-sm">
            <h5>Tempat Strategis di Dekat Kelurahan Ini</h5>
            <br>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="bilah border border-dark rounded-lg">

          <div class="menu-samping rounded-lg">
            <h6 class="tulisan-samping">Recent Post</h6>
          </div>
          <div class="isi-samping border border-dark rounded-lg">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
         </div>

         <div class="menu-samping rounded-lg">
          <h6 class="tulisan-samping">Jadwal Terdekat</h6>
        </div>
        <div class="isi-samping border border-dark rounded-lg">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
       </div> 

       <div class="menu-samping rounded-lg">
        <h6 class="tulisan-samping">Sosial Media</h6>
      </div>
      <div class="isi-samping border border-dark rounded-lg">
        <center>
          <a href="#"><img src="instagram.png" width="150px"></a>
          <p>@xxxx</p>
        </center> 
      </div>        
    </div>
  </div>
</div>

</div>

<!-- Footer -->
<div class="footer">
  <center>
    <p style="font-weight: bold;">Kelurahan Cokrodiningratan Kecamatan Jetis © 2018 ~ 2020 Pemerintah Kota Yogyakarta</p>
    <p>Kelurahan Cokrodiningratan Jt.2/129 Kecamatan Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55233 Telp. (0274) 517609 Fax. (0274) 517609 Email : cokrodiningratan@jogjakota.go.id</p>
  </center>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
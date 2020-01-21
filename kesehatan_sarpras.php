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
  <title>Sarana dan Prasarana</title>
  <script type="text/javascript" src="assets/Chart.js"></script>
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
          <p class="judul-navbar"> Kelurahan <br>Yogyakarta</p>
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
          <li class="nav-item dropdown active nav-aktif">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sarana dan Prasarana
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="potensi_sarpras.php">Potensi Prasarana dan Sarana</a>
              <a class="dropdown-item active nav-aktif" href="kesehatan_sarpras.php">Kesehatan</a>
              <a class="dropdown-item" href="pendidikan_sarpras.php">Pendidikan</a>
              <a class="dropdown-item" href="hiburan_sarpras.php">Hiburan dan Wisata</a>
              <a class="dropdown-item" href="kebersihan_sarpras.php">Kebersihan</a>
            </div>
          </li>
          <a class="nav-item nav-link" href="tempat_strategis.php">Tempat Strategis</a>
        </div>
      </div>
    </div>
  </nav>
    <div class="tulisan-bergerak">
    <script type="text/javascript">
      function jam() {
        var time = new Date(),
        hours = time.getHours(),
        minutes = time.getMinutes(),
        seconds = time.getSeconds();
        document.querySelectorAll('.jam')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);

        function harold(standIn) {
          if (standIn < 10) {
            standIn = '0' + standIn
          }
          return standIn;
        }
      }
      setInterval(jam, 1000);
    </script>
    <?php
      $tanggal = mktime(date('m'), date("d"), date('Y'));
      date_default_timezone_set("Asia/Jakarta");
      function tglIndonesia($str){
       $tr   = trim($str);
       $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
       return $str;
        }
    ?>

    <div class="container">
      <div class="row">
        <div class="col-4">
          <b> <?php echo tglIndonesia(date('D, d F Y')); ?> </b>/<b>  <span class="jam">/</span> WIB</b>
        </div>
        <div class="col-8">
          <marquee> Sawiji Ing Greget Raharjo Awit Karep : Satu Dalam Tekad dan Semangat, Sukses Sejahtera Karena Kemauan ♦ ♦ Jam Pelayanan Senin - Kamis Pukul 08:00 - 15:00 WIB , Jumat Pukul 08:00 - 11:30 WIB dan 13:00 - 14:00 WIB ♦</marquee>   
        </div>
      </div>
    </div>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-9">

        <div class="menu rounded-lg">
          <h4 class="tulisan-menu">Prasarana dan Sarana Kesehatan</h4>
        </div>
        <div class="row isi">

          <div class="col-sm">
            <h5>Prasarana Kesehatan</h5>
            <h6>Puskesmas</h6>
            <p>Jumlah Kunjungan Per Puskesmas</p>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" style="text-align: center;">Prasarana</th>
                  <th scope="col" style="text-align: center;">Jumlah</th>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <td scope="row">Poliklinik/Balai Pengobatan</td>
                </tr>
                <tr>
                  <td scope="row">Apotik</td>
                </tr>
                <tr>
                  <td scope="row">Posyandu</td>
                </tr>
                <tr>
                  <td scope="row">Rumah/Kantor Praktek Dokter</td>
                </tr>
                <tr>
                  <td scope="row">Rumah Bersalin</td>
                </tr>
              </tbody>           
            </table> <br>

            <h5>Sarana Kesehatan</h5>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" style="text-align: center;">Sarana</th>
                  <th scope="col" style="text-align: center;">Jumlah</th>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <td scope="row">Dokter Umum</td>
                </tr>
                <tr>
                  <td scope="row">Dokter Gigi</td>
                </tr>
                <tr>
                  <td scope="row">Bidan</td>
                </tr>
                <tr>
                  <td scope="row">Perawat</td>
                </tr>
                <tr>
                  <td scope="row">Dokter Praktek</td>
                </tr>
                <tr>
                  <td scope="row">Laboratorium Kesehatan</td>
                </tr>
              </tbody>           
            </table>

            <h5>Data Kesehatan Keluarga</h5>
            <h6>Status Gizi</h6>
            <h7>Grafik Status Gizi Balita</h7>
            <div style="width: 500px;height: 300px">
            <canvas id="myChart"></canvas>
            </div>

          <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'pie',
              data: {
                labels: ["Sangat Pendek", "Pendek", "Normal", "Tinggi"],
                datasets: [{
                  label: 'Grafik Status Gizi Balita',
                  data: [7, 13, 5, 13],
                  backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 1)'
                  ],
                  borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)'
                  ],
                  borderWidth: 2
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

            <h7>Grafik Status Gizi Baduta</h7>
            <div style="width: 500px;height: 300px">
            <canvas id="myChart1"></canvas>
            </div>

          <script>
            var ctx1 = document.getElementById("myChart1").getContext('2d');
            var myChart1 = new Chart(ctx1, {
              type: 'pie',
              data: {
                labels: ["Sangat Pendek", "Pendek", "Normal", "Tinggi"],
                datasets: [{
                  label: 'Grafik Status Gizi Baduta',
                  data: [7, 13, 5, 20],
                  backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 1)'
                  ],
                  borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)'
                  ],
                  borderWidth: 2
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

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" style="text-align: center;">Status Gizi</th>
                  <th scope="col" style="text-align: center;">Normal</th>
                  <th scope="col" style="text-align: center;">Pendek</th>
                  <th scope="col" style="text-align: center;">Sangat Pendek</th>
                  <th scope="col" style="text-align: center;">Tinggi</th>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <td scope="row">Balita</td>
                </tr>
                <tr>
                  <td scope="row">Baduta</td>
                </tr>
              </tbody>           
            </table> <br>
            <h6>Ibu Hamil</h6>
            <p>Jumlah: </p> <br>
            <h6>Remaja Wanita</h6>
            <p>Jumlah: </p> <br>

            <h6>10 Penyakit Terbesar</h6>
            <h7>Grafik 10 Penyakit Terbesar</h7>
            <div style="width: 500px;height: 300px">
            <canvas id="myChart2"></canvas>
            </div>

          <script>
            var ctx2 = document.getElementById("myChart2").getContext('2d');
            var myChart2 = new Chart(ctx2, {
              type: 'pie',
              data: {
                labels: ["Batuk", "Flu", "Demam", "Diabetes", "Hipertensi", "Katarak", "Usus Buntu", "Anemia", "Asma", "Asam Lambung"],
                datasets: [{
                  label: 'Grafik 10 Penyakit Terbesar',
                  data: [7, 13, 5, 13, 11, 12, 50, 20, 23, 15],
                  backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(75, 50, 50, 100)',
                  'rgba(75, 100, 100, 1)',
                  'rgba(75, 150, 150, 1)',
                  'rgba(250, 100, 100, 1)',
                  'rgba(255, 0, 0, 1)',
                  'rgba(100, 200, 200, 1)'
                  ],
                  borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(75, 50, 50, 100)',
                  'rgba(75, 100, 100, 1)',
                  'rgba(75, 150, 150, 1)',
                  'rgba(250, 100, 100, 1)',
                  'rgba(255, 0, 0, 1)',
                  'rgba(100, 200, 200, 1)'
                  ],
                  borderWidth: 2
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

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" style="text-align: center;">Nama Penyakit</th>
                  <th scope="col" style="text-align: center;">Jumlah</th>
                </tr>
              </thead>
              
              <tbody>

              </tbody>           
            </table> <br>
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
          <a href="https://www.instagram.com/kominfodiy/"><img src="instagram.png" width="150px"></a>
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
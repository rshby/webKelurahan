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
  <title>Masalah dan Potensi SDM</title>
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
          <p class="judul-navbar">Pemerintah Kota <br>Yogyakarta</p>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="gambaran_umum.php">Gambaran Umum<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active nav-aktif" href="masalah.php">Masalah dan Potensi SDM</a>
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
          <a class="nav-item nav-link" href="tempat_strategis.php">Tempat Strategis / Lokasi Penting</a>
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

      <!-- Menu Masalah yang Ditemukan -->
      <div class="menu rounded-lg">
        <h4 class="tulisan-menu">Masalah yang Ditemukan</h4>
      </div>
      <br>
      <div class="row isi">
        <div class="col">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" style="text-align: center;">Jenis</th>
                <th scope="col" style="text-align: center;">Jumlah</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row">Lansia (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Difabel (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Kronis (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Tidak Bersekolah Lagi Usia 7-18 Thn (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Penduduk Berpendapatan Rp 300.000,- Usia 15-60 Thn (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Rumah Tidak Layak Huni</th>
              </tr>
            </tbody>           
          </table>
          <br>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" style="text-align: center;">Jenis</th>
                <th scope="col" style="text-align: center;">Jumlah</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row">Sumber Air Minum Kurang Sehat (KK)</th>
              </tr>
              <tr>
                <th scope="row">Penerangan Utama Listrik Non-PLN (KK)</th>
              </tr>
              <tr>
                <th scope="row">Penerangan Utama Bukan Listrik (KK)</th>
              </tr>

            </tbody>           
          </table>
          <br>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" style="text-align: center;">Jenis</th>
                <th scope="col" style="text-align: center;">Jumlah</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row">Energi Utama Untuk Memasak Bukan Listrik/GAS (KK)</th>
              </tr>
              <tr>
                <th scope="row">Energi Utama Untuk Memasak GAS 3 KG (KK)</th>
              </tr>
              <tr>
                <th scope="row">Jaban Tidak Aman (KK)</th>
              </tr>
              <tr>
                <th scope="row">Peserta Program KKS/KPS (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Peserta Program KIP/BSM (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Peserta Program KIS/BPJS Kesehatan (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Peserta BPJS Kesehatan Peserta Mandiri (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Peserta Program BPJS Ketenagakerjaan (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Peserta Program Pemilik Kartu Asuransi Lainnya (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Peserta Program PKH (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Peserta Program Raskin/BPNT (Jiwa)</th>
              </tr>
              <tr>
                <th scope="row">Peserta Program KUR (Jiwa)</th>
              </tr>
            </tbody>           
          </table>
          <br>
        </div>
      </div>

      <!-- Menu Potensi Sumber Daya Manusia -->
      <div class="menu rounded-lg">
        <h4 class="tulisan-menu">Potensi Sumber Daya Manusia</h4>
      </div> 
      <div class="row isi">
        <div class="col">
          <center>
            <a href="" class="btn btn-info" style="margin-top: 20px;">Jenis kelamin</a>
            <a href="" class="btn btn-info" style="margin-top: 20px;">Pendidikan</a>
            <a href="" class="btn btn-info" style="margin-top: 20px;">Pekerjaan</a>
            <a href="" class="btn btn-info" style="margin-top: 20px;">Usia Kerja</a>
          </center>
          <div class="chart py-3">
            <span class="text-center" id="loadMsg"><h4><i class="fa fa-circle-o-notch fa-spin"></i>&nbsp; Memuat, mohon tunggu ...</h4></span>
            <canvas id="myChart" <?=$param['type'] == "horizontalBar" ? "" : "height='60vh' width='80vw'";?>></canvas>
          </div>

          <div class="data-table mt-3">
            <div class="py-4 text-center">
              <h4>Data <?=$param['name']?></h4>
            </div>
            <table class="table bstable table-bordered" id="table-statistik-warga" data-url="<?=base_url('chart_data/getChartData/'.$param['url'].'/'.$loc);?>" data-pagination="false" data-locale="id-ID" data-sort-order="desc" data-row-style="rowStyle">
              <thead>
                <tr>
                  <th data-field="<?=$param['url'];?>" data-sortable="true"><?= $param['name']?></th>
                  <th data-field="jumlah" data-sortable="true" data-align="right">Jumlah</th>
                </tr>
              </thead>
            </table>
          </div>

        </div>

        <?php 
        $tipe = array(
          "pie" => "type: '".$param['type']."',
          options: {
            responsive: true,
            title: {
              display: true,
              fontSize: 18,
              text: '".$param['name']."'
              },
              legend: {
                display: true
                },
                showAllTooltips: true
              },"
              ,
              "horizontalBar" => "type: '".$param['type']."',
              options: {
                title: {
                  display: true,
                  fontSize: 18,
                  text: '".$param['name']."'
                  },
                  legend: {
                    display: false
                    },
                    tooltips: {
                      callbacks: {
                        label: function(tooltipItem) {
                          return tooltipItem.xLabel;
                        }
                      }
                      },
                      scales: {
                        xAxes: [{
                          ticks: {
                            //suggestedMin: 0,
                            //suggestedMax: 100,
                            min: 0
                          }
                          }]
                          },

                          showAllTooltips: true
                        },"
                        ,
                        "bar" => "type: '".$param['type']."',
                        options: {
                          responsive: true,
                          title: {
                            display: true,
                            fontSize: 18,
                            text: '".$param['name']."'
                            },
                            legend: { display: false},
                            showAllTooltips: true
                          },"
                          ,
                        ); 

        $tipe = $tipe[$param['type']];
        ?>

        <script>
          $(document).ready(function() {
            $(function() {
              $("#table-statistik-warga").bootstrapTable();
            });

            $.ajax({
              url: "<?= base_url('profil/statistik_sdm/getChartData/'.$param['url'].'/'.$loc);?>",
              method: "GET",
              timeout: 600000,
              success: function(result) {
                $("#loadMsg").html("");
                var data = JSON.parse(result);
                var <?= $param['url']?> = [];
                var jumlah = [];
                var warna = [];
                var tepi = [];
                var total = 0;

                for(var i = 0; i < data.length; i++) {
                  <?php echo $param['url']?>.push(data[i].<?php echo $param['url']?>);
                  jumlah.push((data[i].jumlah == 0) ? 0 : data[i].jumlah );
                  total += data[i].jumlah;
                  warna.push(dynamicColors("0.5"));
                  tepi.push(warna[i].replace("0.5", "1"));
                }

                if ("<?php echo $param['type'];?>" == "horizontalBar") {
                  $("#myChart").attr("height", (data.length *15+40)+"px");
                }

                var chartdata = {
                  labels: <?php echo $param['url']?>,
                  datasets : [
                  {
                    label: '<?php echo $param['name']?>',
                    fillColor: dynamicColors("0.5"),
                    strokeColor: dynamicColors(),
                    pointColor: dynamicColors(),
                    backgroundColor: warna,
                    borderColor: tepi,
                    borderWidth: 1,
                    data: jumlah
                  }
                  ]
                };

                var ctx = $("#myChart");
                var barGraph = new Chart(ctx, {
                  <?=$tipe;?>
                  data: chartdata
                });
                // ctx.generateLegend();
                setTimeout(function() {
                  var count = '<tr><td class="text-right">JUMLAH</td><td class="text-right">'+ total +'</td></tr>';
                  $('#table-statistik').find('tbody').append(count);
                }, 1000);

              },
              error: function(data) {
                $("#loadMsg").html("Gagal mengambil data. Coba muat ulang halaman dengan menekan F5.");
              }
            });


            var dynamicColors = function(a="1") {
              var r = Math.floor(Math.random() * 255);
              var g = Math.floor(Math.random() * 255);
              var b = Math.floor(Math.random() * 255);
              return "rgba(" + r + "," + g + "," + b + "," + a + ")";
            }

          });
        </script>
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
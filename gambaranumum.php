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
	<title>Gambaran Umum</title>
</head>
<body>
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
	</div>

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
					<a class="nav-item nav-link active nav-aktif" href="kp.php">Gambaran Umum<span class="sr-only">(current)</span></a>
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
					<a class="nav-item nav-link" href="tempat_strategis.php">Tempat Strategis / Lokasi Penting</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="tulisan-bergerak">
		<?php
		$tanggal = mktime(date('m'), date("d"), date('Y'));
		date_default_timezone_set("Asia/Jakarta");
		?>
		<div class="container">
			<div class="row">
				<div class="col-3">
					<b> <?=date("d-m-Y", $tanggal )?> </b>/<b>  <span class="jam"></span></b>
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

				<!-- Menu Profil Lurah -->
				<div class="menu rounded-lg">
					<h4 class="tulisan-menu">Profil Lurah</h4>
				</div>
				<div class="row isi">
					<div class="col-4" id="foto-lurah">
						<!-- Data foto ditampilkan lewat file profil-lurah.js -->
					</div>
					<div class="col-8">
						<div class="row isi-profil">
							<!-- Isi ditampilkan lewat profil-lurah.js -->
						</div>
					</div>
				</div>

				<!-- Menu Data Lembaga Kemasyarakatan -->
				<div class="menu rounded-lg">
					<h4 class="tulisan-menu">Data Lembaga Kemasyarakatan</h4>
				</div> 
				<br>
				<div class="row isi" id="data_lpmk">
					
				</div>

				<!-- Menu Tematik dan Potensi Wilayah -->
				<div class="menu rounded-lg">
					<h4 class="tulisan-menu">Tematik dan Potensi Wilayah</h4>
				</div>
				<div class="isi">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
						<h6 class="tulisan-samping">Sosian Media</h6>
					</div>
					<div class="isi-samping border border-dark rounded-lg">
						<center>
							<a href="https://www.instagram.com/kominfodiy/"><img src="instagram.png" width="150px"></a>
							<p>@kominfodiy</p>
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
	<script
	src="https://code.jquery.com/jquery-3.4.1.js"
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- Script untuk data lurah -->
	<script type="text/javascript">
		$(document).ready(function(){
			let form = new FormData();
			let settings = {
				"url": "https://webservice.jogjakota.go.id/simpeg/instansi_atasan?id=110",
				"method": "GET",
				"timeout": 0,
				"processData": false,
				"mimeType": "multipart/form-data",
				"contentType": false,
				"data": form
			};

			$.ajax(settings).done(function (response) {
				if(response.status == "true")
				{
					let hasil = response.data;

					$.each(hasil, function(i, data){
						$('#foto-lurah').append(`
							<img src="`+ data.foto +`" class="gambar" style="width: 200px;">
							`);

						$('.isi-profil').append(`
							<div class="col-4">
							Nama <br>
							NIP <br>
							Tempat Lahir <br>
							Tanggal Lahir <br>
							Agama <br>
							Pendidikan Terakhir <br>
							Alamat Rumah <br>
							Telepon
							</div>

							<div class="col-8">
							: `+ data.nama +` <br>   
							: `+ data.nip +` <br>
							: `+ data.tempat_lahir +` <br>
							: `+ data.tanggal_lahir +`<br>
							: `+ data.agama +` <br>
							: `+ data.pendidikan +` <br>
							: `+ data.alamat +` <br>
							: `+ data.hp +`
							</div>
							`);	
					});
				}else
				{
					$('.isi-profil').html(`
						<h3 class="text-center">`+ response.msg +`</h3>
						`);
				}

			});
		});
	</script>

	<!-- Script untuk lpmk -->
	<script type="text/javascript">
		$(document).ready(function(){
  					// Ambil data json
  					let form = new FormData();
  					form.append("no_prop", "34");
  					form.append("no_kab", "71");
  					form.append("no_kec", "2");
  					form.append("no_kel", "1003");

  					let settings = {
  						"url": "https://datawarehouse.jogjakota.go.id/index.php/capillistrw/",
  						"method": "POST",
  						"timeout": 0,
  						"headers": {
  							"Content-Type": "multipart/form-data; boundary=--------------------------185297033549165871591147"
  						},
  						"processData": false,
  						"mimeType": "multipart/form-data",
  						"contentType": false,
  						"data": form
  					};

  					$.ajax(settings).done(function (data_rw) 
  					{
  						// buat variabel untuk menamping nilai jumlah
  						let jumlah_rw = 0;
  						let jumlah_rt = 0;

						// perulangan setiap banyaknya data
  						for (let i = 0; i < data_rw.length; i++) 
  						{
  							jumlah_rw = i+1;
  							jumlah_rt += data_rw[i].jml_rt;
  						}

  						// sisipkan html di div dengan id=data_lpmk
  						$('#data_lpmk').html(`
  							<div class="col">
	  							<h5>Lembaga Pemberdayaan Masyarakat Kelurahan (LPMK)</h5>
	  							<h6 style="padding-left: 10px">Jumlah :</h6>
	  							<br>
	  							<h5>Jumlah RT : `+ jumlah_rt +`</h6> 
	  							<br>
	  							<h5>Jumlah RW : `+ jumlah_rw +`</h6>
  							</div>
  							`);
  					});
  				});
  			</script>
  		</body>
  		</html>
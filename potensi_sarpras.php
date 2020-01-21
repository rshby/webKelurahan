<?php 

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
	<title>Sarana dan Prasarana</title>
	<script type="text/javascript" src="Chart.js"></script>
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
					<p class="judul-navbar"> <?=$listTitle?> <br>Yogyakarta</p>
				</div>
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="kp.html">Gambaran Umum<span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="masalah.html">Masalah dan Potensi SDM</a>
					<a class="nav-item nav-link" href="lembaga.html">Lembaga</a>
					<li class="nav-item dropdown active nav-aktif">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Sarana dan Prasarana
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="potensi_sarpras.html">Potensi Prasarana dan Sarana</a>
							<a class="dropdown-item" href="kesehatan_sarpras.html">Kesehatan</a>
							<a class="dropdown-item" href="pendidikan_sarpras.html">Pendidikan</a>
							<a class="dropdown-item" href="hiburan_sarpras.html">Hiburan dan Wisata</a>
							<a class="dropdown-item" href="kebersihan_sarpras.html">Kebersihan</a>
						</div>
					</li>
					<a class="nav-item nav-link" href="#">Tempat Strategis / Lokasi Penting</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="tulisan-bergerak">
		<marquee>♦ Sawiji Ing Greget Raharjo Awit Karep : Satu Dalam Tekad dan Semangat, Sukses Sejahtera Karena Kemauan ♦ ♦ Jam Pelayanan Senin - Kamis Pukul 08:00 - 15:00 WIB , Jumat Pukul 08:00 - 11:30 WIB dan 13:00 - 14:00 WIB ♦</marquee>
	</div>

	<div class="container">

		<div class="row">
			<div class="col-9">

				<div class="menu rounded-lg">
					<h4 class="tulisan-menu">Potensi Prasarana dan Sarana</h4>
				</div>
				<div class="row isi">

					<div class="col-sm">
						<h5>Prasarana Peribadatan</h5>

						<!-- Membuat Tempat untuk chartnya -->
						<div style="width: 500px;height: 260px">
							<canvas id="myChart"></canvas>
						</div>

						<script>
							// Membuat Warna secara Random
							var dynamicColors = function(a="1") 
							{
								var r = Math.floor(Math.random() * 255);
								var g = Math.floor(Math.random() * 255);
								var b = Math.floor(Math.random() * 255);
								return "rgba(" + r + "," + g + "," + b + "," + a + ")";
							}

							//Set Variabel Data yg akan ditampilkan
							var data = JSON.parse(result);
							var <?= $param['url']?> = [];
							var jumlah = [];
							var warna = [];
							var tepi = [];
							var total = 0;

							//Memngambil data yang akan ditampilkan
							for(var i = 0; i < data.length; i++) 
							{
								<?php echo $param['url']?>.push(data[i].<?php echo $param['url']?>);
								jumlah.push((data[i].jumlah == 0) ? 0 : data[i].jumlah );
								total += data[i].jumlah;
								warna.push(dynamicColors("0.5")); //menganbil warna
								tepi.push(warna[i].replace("0.5", "1")); //set Tepi
							}

							//Membuat variabel untuk isi di dalam data chart
							var isidata = 
							{
								labels:<?=$param['url']?>,
								datasets:
								[{
									label = "<?=$param['name']?>",
									data = jumlah,
									backgroundColor: warna,
									borderColor: tepi,
									borderWidth:1	
								}]
							};

							// Membuat variabel chart
							var ctx = document.getElementById("myChart").getContext('2d');
							var myChart = new Chart(ctx, {
								type: 'bar',
								data: isidata, //memanggil variabel isidata
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
									<th scope="col" style="text-align: center;">Tempat Peribadatan</th>
									<th scope="col" style="text-align: center;">Jumlah</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">Masjid</th>
								</tr>
								<tr>
									<th scope="row">Langgar/Surau/Mushola</th>
								</tr>
								<tr>
									<th scope="row">Gereja Kristen Protestan</th>
								</tr>
							</tbody>           
						</table> <br>

						<!-- Chart Prasarana Olahraga -->
						<h5>Prasarana Olahraga</h5>

						<div style="width: 500px;height: 260px">
							<canvas id="myChart1"></canvas>
						</div>


						<script>
							//Membuat isi data untuk datasets
							var isidata1 = 
							{
									labels: ["Lap. Bulu Tangkis", "Meja Pingpong", "Lap. Tenis", "Lap. voli", "Lap. Basket", "Pst. Kebugaran", "Lap.Futsal"],
									datasets: [{
										label: '# of Votes',
										data: jumlah,
										backgroundColor: warna,
										borderColor: tepi,
										borderWidth: 1
									}]
							};

							var ctx1 = document.getElementById("myChart1").getContext('2d');
							var myChart1 = new Chart(ctx1, {
								type: 'pie',
								data: isidata1,
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
									<th scope="col" style="text-align: center;">Tempat Olahraga</th>
									<th scope="col" style="text-align: center;">Jumlah</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">Lapangan Bulu Tangkis</th>
								</tr>
								<tr>
									<th scope="row">Meja Pingpong</th>
								</tr>
								<tr>
									<th scope="row">Lapangan Tenis</th>
								</tr>
								<tr>
									<th scope="row">Lapangan Voli</th>
								</tr>
								<tr>
									<th scope="row">Lapangan Basket</th>
								</tr>
								<tr>
									<th scope="row">Pusat Kebugaran</th>
								</tr>
								<tr>
									<th scope="row">Lapangan Futsal</th>
								</tr>
							</tbody>           
						</table>
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
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
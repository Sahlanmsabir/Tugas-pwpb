<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	$nama_sahlan = "Sahlan M. Sabir";
	$umur_sahlan = 16;
	$tinggi_badan_sahlan = 161;
	$hobi_sahlan = "Main bola";

	$nama_rani = "Rani Amalia";
	$umur_rani = 16;
	$tinggi_badan_rani = 155;
	$hobi_rani = "Membaca novel";

	$nama_seny = "Seny Septia Normayanih";
	$umur_seny = 16;
	$tinggi_badan_seny = 162;
	$hobi_seny = "Membaca,Berenang";

	$rata_rata_tinggi_badan = ($tinggi_badan_sahlan+$tinggi_badan_rani+$tinggi_badan_seny)/3;
?>
	<div class="wrap">
		<div class="header">
			<h1>PWPB (Pemrograman Web Perangkat Bergerak)</h1>
		</div>
		<div class="nav">
			<a href="index.php">Beranda</a>
			<a href="tgspertama.php">Tugas Pertama</a>
			<a href="tgskedua.php">Tugas kedua</a>
			<a href="tgskeempat.php">Tugas keempat</a>
		</div>
		<div class="main">
			<div class="content">
		<ul>
			<center>
				<h1> <marquee> DATA DIRI KELOMPOK 11</h1> </marquee>
			</center>
		</ul>
		<br>
		<div class="border">
		<div class="img">
		<center>
			<img src="img/sahlan.jpg" width="200" height="200">
			<?php 
			echo "<br> <b>Nama : $nama_sahlan </b>";
			echo "<br> <b>Umur : $umur_sahlan tahun </b>";
			echo "<br> <b>Tinggi badan : $tinggi_badan_sahlan cm </b>";
			echo "<br> <b>Hobi : $hobi_sahlan </b>"; 
			?>
		</center>
		<br>
		<br>
		<br>
		<br>
		<div class="border">
		<div class="img">
		<center>
			<img src="img/rani.jpg" width="200" height="200">
			<?php
			echo "<br> <b>Nama : $nama_rani </b>";
			echo "<br> <b>Umur : $umur_rani tahun  </b>";
			echo "<br> <b>Tinggi badan : $tinggi_badan_rani cm </b>";
			echo "<br> <b>Hobi : $hobi_rani </b>";
			?>
		</center>
		<br>
		<br>
		<br>
		<br>
		<div class="border">
		<div class="img">
		<center>
			<img src="img/seny.jpg" width="200" height="200">
			<?php 
			echo "<br> <b>Nama : $nama_seny </b>";
			echo "<br> <b>Umur : $umur_seny tahun </b>";
			echo "<br> <b>Tinggi badan : $tinggi_badan_seny cm </b>";
			echo "<br> <b>Hobi : $hobi_seny</b>"; 
			?>
		</center>
		<br>
		<br>
		<?php
		echo "<br> <b>Rata-rata tinggi badan =  $rata_rata_tinggi_badan cm</br> </b>";
		?>
		<br>
		<br>
			<div class="clear"></div>

		</div>

			<div class="footer">
				<center><p>Copyright &copy; 2019
				Kelompok 11</p></center>
			</div>

	</div>
</body>
</html>
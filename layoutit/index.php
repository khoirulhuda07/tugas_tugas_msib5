<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>profile</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="src/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="aos-2/dist/aos.css" />
	<?php $nama = "Khoirul Huda";
	$alamat = "Lamongan, Jawa Timur";
	$jk = "Laki - Laki";
	$hobi = "Bermain";
	$nH = "085791417251";
	$umur = "20 Tahun";
?>
  </head>
  <body>
    <div class="container-fluid body"> 
		<div class="row bg-info">
			<div class="col-md-12">
				<div class="page-header">
					<h1 class="text-center">Huda Web</h1>
				</div>
			</div>
		</div>
		<div class="page-header">
			<div class="d-flex justify-content-center" data-aos="fade-down" data-aos-duration="1000">
				<div class="mx-3">
					<a class="nav-link active font-weight-bold hover" href="#">Home</a>
				</div>
				<div>
					<a class="nav-link font-weight-bold hover" href="src/portofolio.php">Portofolio</a>
				</div>
				<div class="mx-3">
					<a class="nav-link font-weight-bold hover" href="src/contact.php">contact</a>
				</div>
			</div>
		</div>
			<div class="row justify-content-center mt-5 content align-items-md-center">
					<div data-aos="fade-right" data-aos-duration="2000" data-aos-delay="200" class="col-12 col-md-4 bg-info shadow rounded">
						<h2 class="text-center">Biodata Saya</h2>
						<table>
							<tr>
								<td class="font-weight-bold">Nama Lengkap</td>
								<td class="font-weight-bold">:</td>
								<td><?php echo $nama ?></td>
							</tr>
							<tr>
								<td class="font-weight-bold">alamat</td>
								<td class="font-weight-bold">:</td>
								<td ><?php echo $alamat?></td>
							</tr>
							<tr>
								<td class="font-weight-bold">Jenis Kelamin</td>
								<td class="font-weight-bold">:</td>
								<td><?php echo $jk ?></td>
							</tr>
							<tr>
								<td class="font-weight-bold">Hobi</td>
								<td class="font-weight-bold">:</td>
								<td ><?php echo $hobi?></td>
							</tr>
							<tr>
								<td class="font-weight-bold">Nomor Hp</td>
								<td class="font-weight-bold">:</td>
								<td><?php echo $nH ?></td>
							</tr>
							<tr>
								<td class="font-weight-bold">Umur</td>
								<td class="font-weight-bold">:</td>
								<td><?php echo $umur?></td>
							</tr>
						</table>
					</div>
					<div data-aos="fade-left" data-aos-duration="2000" data-aos-delay="200" class="col-12 col-md-2 jpg mt-2 ">
						<center>
							<div class="gambar ">
								<img src="src/R.png" alt="">
							</div>
						</center>
		</div>
	</div>
	<div class="row justify-content-center fixed-bottom" >
			<div class="mx-1">
				<p class="footer font-weight-bold" style="font-size: 20px;">Created By : </p>
			</div>
			<div class="">
				<p class=" footer font-weight-bold" style="font-size: 20px;">Khoirul Huda</p>
			</div>
		</div>
	</div>
		
	</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
	<script src="aos-2/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
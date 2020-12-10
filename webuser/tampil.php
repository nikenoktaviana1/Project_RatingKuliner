<!DOCTYPE html>
<html lang="en">
<head>
	<title>Culinary of Yogyakarta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/fonts/icomoon/style.css">
	<link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<script type="text/javascript" language="JavaScript">
      function coba(val,val1){
        window.alert("Anda Telah memberi penilaian");
        window.location.href = "rating.php?rating=" + val+"&no="+val1; 
    }
    </script>

    


</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">




	<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
				<ul class="navbar-nav">

					<li class="nav-item"><a class="nav-link" href="index.html" onClick="window.location.href='index.html'">Home</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="site-section" id="section-temkul">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="section-heading text-center">
						<h2><font color="white"><strong>Tempat Kuliner di Yogyakarta</strong></font></h2>
					</div>
				</div>
			</div>

			<div class="row">
				<?php
				include 'koneksi.php';
				$sqltampil = mysqli_query($connect, "select * from tempat_kuliner");
				$id = 1;
                while ($b=mysqli_fetch_array($sqltampil)) {
                $id++; 
                $no = $b['idkuliner']; ?>

				<div class="col-sm-6 col-lg-4 mb-4">
					<div class="blog-entry">
						<a href="detail.php?no=<?php echo $no; ?>">
							<?php
								echo "<img src='../webadmin/images/".$b['nama_gambar']."' width='350' height='250'/>";
							?>
						</a>
						<br>
						<div class="rating">
				            <span class="fa fa-star" onclick="coba(5,<?=$no?>)"></span><span class="fa fa-star" onclick="coba(4,<?=$no?>)"></span><span class="fa fa-star" onclick="coba(3,<?=$no?>)"></span><span class="fa fa-star" onclick="coba(2,<?=$no?>)"></span><span class="fa fa-star" onclick="coba(1,<?=$no?>)"></span>
				        </div>
						<div class="blog-entry-text">
							<h4><a href="detail.php?no=<?php echo $no; ?>"> <?php echo $b['namatempat']; ?></a></h4>
							<h5><a href="detail.php?no=<?php echo $no; ?>"><font color="white"> <?php echo $b['alamat']; ?></font></a></h5>
						</div>
					</div>
				</div>
				<?php } ?>

			</div>
		</div>
	</section>

	
	<footer class="site-footer">
		<div class="container">

			<div class="row mb-5">
				<p class="col-12 text-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This culinary <i class="icon-heart text-danger" aria-hidden="true" ></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">CoYogya</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
			
			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<p>
						<a href="#" class="social-item"><span class="icon-facebook2"></span></a>
						<a href="#" class="social-item"><span class="icon-twitter"></span></a>
						<a href="#" class="social-item"><span class="icon-instagram2"></span></a>
						<a href="#" class="social-item"><span class="icon-linkedin2"></span></a>
						<a href="#" class="social-item"><span class="icon-vimeo"></span></a>
					</p>
				</div>
			</div>
			
		</div>
	</footer>




	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/vendor/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>

	<script src="js/vendor/jquery.easing.1.3.js"></script>

	<script src="js/vendor/jquery.stellar.min.js"></script>
	<script src="js/vendor/jquery.waypoints.min.js"></script>

	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="js/custom.js"></script>

	<!-- Google Map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    	<script src="js/google-map.js"></script> -->

    </body>
    </html>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">

	<style>
      /* Make the image fully responsive */
        .carousel-inner img {
        width: 1200px;
        height: 500px;
        }
        .carousel-caption{
        color: black;
        }
        div.transbox{
          width:400px;
          height:100px;
          margin-left:200px;
          background-color:#ffffff;
          opacity:0.6;
          filter:alpha(opacity=60); 
        }
  
      </style>



   

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
						<h2><font color="white"><strong>Top Rekomendasi Tempat Kuliner di Yogyakarta</strong></font></h2>

					</div>
					<!-- Page Content -->
		    <div class="container">

		    <div id="demo" class="carousel slide" data-ride="carousel">

		    <!-- Indicators -->
		    <ul class="carousel-indicators">
		      <li data-target="#demo" data-slide-to="0" class="active"></li>
		      <li data-target="#demo" data-slide-to="1"></li>
		      <li data-target="#demo" data-slide-to="2"></li>
		      <li data-target="#demo" data-slide-to="3"></li>
		      <li data-target="#demo" data-slide-to="4"></li>
		    </ul>
		     <?php
			    include 'koneksi.php';
			    $x=0;
			    $sql=mysqli_query($connect,"SELECT * FROM tempat_kuliner ORDER BY rating DESC LIMIT 5 ") or die("error");
			    while ($data=mysqli_fetch_array($sql)) { 
			    	$gambar[$x]=$data['nama_gambar'];
			    	$nama[$x]=$data['namatempat'];
			    	$x++;
			    } ?>

		  <div class="carousel-inner">
		    
		    <div class="carousel-item active">
		      <?php
					echo "<img src='../webadmin/images/".$gambar[0]."' width='1100' height='400'/>";
	  			?>
	  			<div class="carousel-caption">
		        <div class="transbox">
		          <h3>Top Rating 1</h3> 
		          <h2>"<?php echo $nama[0] ?>"</h2>
		        </div>
		      </div>
		    </div>

		    <div class="carousel-item">
		      <?php
					echo "<img src='../webadmin/images/".$gambar[1]."' width='1100' height='400'/>";
	  			?>
		      <div class="carousel-caption">
		        <div class="transbox">
		          <h3>Top Rating 2</h3> 
		          <h2>"<?php echo $nama[1] ?>"</h2>
		        </div>
		      </div>
		    </div>

		    <div class="carousel-item">
		      <?php
					echo "<img src='../webadmin/images/".$gambar[2]."' width='1100' height='400'/>";
	  			?> 
	  			<div class="carousel-caption">
		        <div class="transbox">
		          <h3>Top Rating 3</h3> 
		          <h2>"<?php echo $nama[2] ?>"</h2>
		        </div>
		      </div>
		    </div>
		     <div class="carousel-item">
		      <?php
					echo "<img src='../webadmin/images/".$gambar[3]."' width='1100' height='400'/>";
	  			?> 
	  			<div class="carousel-caption">
		        <div class="transbox">
		          <h3>Top Rating 4</h3> 
		          <h2>"<?php echo $nama[3] ?>"</h2>
		        </div>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <?php
					echo "<img src='../webadmin/images/".$gambar[4]."' width='1100' height='400'/>";
	  			?> 
	  			<div class="carousel-caption">
		        <div class="transbox">
		          <h3>Top Rating 5</h3> 
		          <h2>"<?php echo $nama[4] ?>"</h2>
		        </div>
		      </div>
		    </div>

		  </div>
		  
		    <!-- Left and right controls -->
		    <a class="carousel-control-prev" href="#demo" data-slide="prev">
		      <span class="carousel-control-prev-icon"></span>
		    </a>
		    <a class="carousel-control-next" href="#demo" data-slide="next">
		      <span class="carousel-control-next-icon"></span>
		    </a>
		  </div>

				</div>

			</div>

			

			<div class="row">
				<?php
				include 'koneksi.php';
				$sqltampil = mysqli_query($connect, "select * from tempat_kuliner ORDER BY rating DESC");
				$id = 1;
				$top=0;
                while ($b=mysqli_fetch_array($sqltampil)) {
                $id++; 
                $top++;
                $no = $b['idkuliner']; ?>

				<div class="col-sm-6 col-lg-4 mb-4">
					<div class="blog-entry">
						
						<a href="detail.php?no=<?php echo $no; ?>">
							<?php
								echo "<img src='../webadmin/images/".$b['nama_gambar']."' width='350' height='250'/>";
							?>
						</a>
						<br>
						<div class="blog-entry-text">
							<h4><center><a href="detail.php?no=<?php echo $no; ?>"> <?php echo "TOP ".$top; ?></a></center></h4>
							<h5><center><a href="detail.php?no=<?php echo $no; ?>"> <?php echo $b['namatempat']; ?></a></center></h5>
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

    </body>
    </html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Culinary of Yogyakarta</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <script type="text/javascript" language="JavaScript">
      function coba(val,val1){
        window.alert("Anda Telah memberi penilaian");
        window.location.href = "rating.php?rating=" + val+"&no="+val1; 
    }
    </script>

  <!-- Navigation -->
        
    <!-- Page Content -->
    <div class="container"> 
      <div class="row">
             <?php 
               include "koneksi.php";
               $no = $_GET['no'];
               $query = mysqli_query($connect,"SELECT * FROM tempat_kuliner where idkuliner=$no");
               while ($details = mysqli_fetch_array($query)) 
               {
             ?>
        <div class="col-md-8">
          <h1 class="mt-4"><?php echo $details['namatempat']?></h1>
          <p class="lead">
            by Admin
          </p>
          <?php
                echo "<img src='../webadmin/images/".$details['nama_gambar']."' width='750' height='300'/>";?>

          <hr>
          <p class="lead">
            Alamat : <?php echo $details['alamat']; ?><br>
          </p>
          <p style="text-align: justify;">&nbsp; &nbsp; &nbsp;<?php echo $details['detail']; ?></p>  
        </div>
         
       <div class="col-md-4" style="padding-top: 100px; padding-left: 30px;">
          <div class="card my-4">   
            <center><h5 class="card-header">Rating Stars</h5></center>
           
            <div class="card-body">
               <div class="rating">
                <span class="fa fa-star" onclick="coba(5,<?=$no?>)"></span><span class="fa fa-star" onclick="coba(4,<?=$no?>)"></span><span class="fa fa-star" onclick="coba(3,<?=$no?>)"></span><span class="fa fa-star" onclick="coba(2,<?=$no?>)"></span><span class="fa fa-star" onclick="coba(1,<?=$no?>)"></span>
              </div>
              Video :
              <iframe width="300" height="250" src="<?php echo $details['video'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              Location :
              <iframe  src="<?php echo $details['maps'];?>"  width="300" height="250" frameborder="0" style="border:0" allowfullscreen ></iframe>
          </div>
        </div>
      </div>
    </div>

    <?php  }?>

    </body>
    </html>
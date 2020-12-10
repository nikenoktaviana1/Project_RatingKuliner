<!doctype html>
<html lang="en">

<head>
  <title>Hello, admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="shortcut icon" href="assets/img/culinarylogo.png">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a class="simple-text logo-mini">
          CA
        </a>
        <a class="simple-text logo-normal">
          Culinary Admin
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dataadmin.php">
              <i class="material-icons">person</i>
              <p>Data Admin</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kuliner.php">
              <i class="material-icons">restaurant</i>
              <p>Tempat Kuliner</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="datatraining.php">
              <i class="material-icons">book</i>
              <p>Data Training</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="predikdataset.php">
              <i class="material-icons">list</i>
              <p>Prediksi Dataset</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="analisis.php">
              <i class="material-icons">description</i>
              <p>Halaman Analisis</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="loginadmin.html">
              <i class="material-icons">arrow_back</i>
              <p>Logout</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Halaman Analisis</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
    <div class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Halaman Analisis</h3>
              <p class="card-category">Cek analisis sentimen</p>
            </div>
            <div class="card-body">
                  <form id="form" method="post">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">masukkan ulasan</label>
                          <input type="text" id="myInput" class="form-control">
                        </div>
                      </div>
                    </div>
                    <input type="button" id="btnanalisis" name="btn" class="btn btn-primary py-2 px-10" value="Proses dan Analisis" data-toggle="modal" data-target="#hasilanalisis">
                  </form>
            </div>
        </div>
      </div>
    </div>

    <div class="modal" id="hasilanalisis" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
       
          <div class="modal-header">
            <h5 class="modal-title">Hasil Preprocessing dan Prediksi</h5>

          <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">

            <div style="text-align: center;" id="loading_div"> 
              <h5> Loading .... </h5><br>
              <center>
              <div class="loader"></div>
              </center>
            </div>
            <div id="analisis" style=" display: none;" class="form-group">
              <center>
              <small style="font-weight: bold;">Data Awal</small><br>
              <small id="test"></small><br>
              <small style="font-weight: bold;">Case Folding</small><br>
              <small id="case_folding"></small><br>
              <small style="font-weight: bold;">Remove Punctuation</small><br>
              <small id="remove_punct"></small><br>
              <small style="font-weight: bold;">Remove Number</small><br>
              <small id="remove_num"></small><br>
              <small style="font-weight: bold;">Hapus Huruf Triple/Lebih</small><br>
              <small id="hapus_katadouble"></small><br>
              <small style="font-weight: bold;">Slangword</small><br>
              <small id="slangword"></small><br>
              <small style="font-weight: bold;">Tokenizing</small><br>
              <small id="hasil_token"></small><br>
              <small style="font-weight: bold;">Stopword</small><br>
              <small id="remove_stop_words"></small><br>
              <small style="font-weight: bold;">Stemming</small><br>
              <small id="stemming"></small><br>
              <small style="font-weight: bold;">Hasil Preprocessing</small><br>
              <small id="text_final"></small><br>
              <small style="font-weight: bold;">Prediksi Sentimen SVM</small><br>
              <small id="prediksisvm"></small><br>
              <small style="font-weight: bold;">Probabilitas Sentimen SVM</small><br>
              <small id="probabilitassvm"></small><br>
              <small style="font-weight: bold;">Prediksi Kategori SVM</small><br>
              <small id="prediksisvm"></small><br>
              <small style="font-weight: bold;">Probabilitas Kategori SVM</small><br>
              <small id="probabilitassvm"></small><br>
              <small style="font-weight: bold;">Prediksi Sentimen NBC</small><br>
              <small id="prediksinbc"></small><br>
              <small style="font-weight: bold;">Probabilitas Sentimen NBC</small><br>
              <small id="probabilitasnbc"></small><br>
              <small style="font-weight: bold;">Prediksi Kategori NBC</small><br>
              <small id="prediksinbc"></small><br>
              <small style="font-weight: bold;">Probabilitas Kategori NBC</small><br>
              <small id="probabilitasnbc"></small><br>
              <br>
              <?php 
                $ambil=$koneksi->query("SELECT * FROM analisis ORDER BY idanalisis DESC LIMIT 1");
                $cek=$ambil->fetch_assoc();
                $idanalisis = $cek['idanalisis'] + 1 ;
              ?>
              </center>
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
          </div>
        </div>
      </div>
    </div>
          
        </div>
        </form>
      </div>
    </div>
  </div>

      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a>
                  Culinary Admin
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Culinary Admin</a> perut kenyang hatipun senang.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
  

  <script>

   $( document ).ready(function() {
      
      var btn_kirim = $('#btnanalisis').on('click',function(){
        $.get('prosesanalisis.php?text='+$("#myInput").val(),function(data,status){
         
          var hasil = JSON.parse(data);
          console.log(hasil)
          $('#test').text(hasil.status)
          $('#case_folding').text(hasil.case_folding)
          $('#remove_punct').text(hasil.remove_punct)
          $('#remove_num').text(hasil.remove_num)
          $('#hapus_katadouble').text(hasil.hapus_katadouble)
          $('#slangword').text(hasil.slangword)
          $('#hasil_token').text(hasil.hasil_token)
          $('#remove_stop_words').text(hasil.remove_stop_wordsstopword)
          $('#stemming').text(hasil.stemming)
          $('#text_final').text(hasil.text_final)
          $('#prediksisvm').text(hasil.prediksisvm)
          $('#probabilitassvm').text(hasil.probabilitassvm)
          $('#prediksikategorisvm').text(hasil.prediksikategorisvm)
          $('#probabilitaskategorisvm').text(hasil.probabilitaskategorisvm)
          $('#prediksinbc').text(hasil.prediksinbc)
          $('#probabilitasnbc').text(hasil.probabilitasnbc)
          $('#prediksikategorinbc').text(hasil.prediksikategorinbc)
          $('#probabilitaskategorinbc').text(hasil.probabilitaskategorinbc)
          $("#loading_div").hide()
          $("#content_prediksi").show()


        });
      })
      })
  </script>
</body>

</html>
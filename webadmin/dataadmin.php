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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
          <li class="nav-item active">
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
          <li class="nav-item">
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
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Data Admin</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambahkan Admin</button>
                    <div class="modal fade" role="dialog" id="tambah">
                      <div  class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Tambah Admin</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                        
                          <div class="modal-body">
                            <form method='POST' action='prosesdataadmin.php'>
                            <div class="form-group">
                              <label class="control-label" for="namalengkap">Nama Lengkap</label>
                                <input type="text" name="namalengkap" class="form-control" id="namalengkap" required>
                            </div>
                            <div class="form-group">
                              <label class="control-label" for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                              <label class="control-label" for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" required>
                            </div>
                            <div class="form-group">
                              <label class="control-label" for="pass">Password</label>
                                <input type="text" name="pass" class="form-control" id="pass" required>
                            </div>
                            <div class="modal-footer">
                              <input type="reset" class="btn btn-danger" name="reset" value="Reset">
                              <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                            </div>
                          </form>
                          </div> 
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <p></p>
            <p></p>
            <p></p>
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th> No </th>
                  <th> Nama Lengkap </th>
                  <th> Email  </th>
                  <th> Username</th>
                  <th> Password </th>
                  <th> Aksi </th>
                </thead>
                <tbody>
                  <?php
                    include 'koneksi.php';
                    $no = 1;
                    $sqltampil = mysqli_query($connect, "select * from admin");
                    while ($b=mysqli_fetch_array($sqltampil)) { ?>
                    <tr>
                      <td> <?php echo $no++ ;?></td>
                      <td> <?php echo $b['namalengkap'] ;?></td>
                      <td> <?php echo $b['email'] ;?></td>
                      <td> <?php echo $b['username'] ;?></td>
                      <td> <?php echo $b['pass'] ;?></td>
                      <td>
                        <a href="edit.php?id=<?php echo $b['id']; ?>" class="btn btn-warning">Edit</a>
                        <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ?')){ location.href='hapus.php?id=<?php echo $b['id']; ?>' }" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                  <?php } ?>  
                </tbody>
              </table>
            </div>
          </div>
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
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="beranda.js"></script>
</body>

</html>
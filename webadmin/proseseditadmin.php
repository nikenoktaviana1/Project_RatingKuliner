<?php
include "koneksi.php";
$idadmin = $_GET['idadmin'];
$namalengkap = $_POST['namalengkap'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['pass'];

$sql = "UPDATE admin SET namalengkap='$namalengkap', email='$email', username='$username', pass='$pass' WHERE idadmin='$idadmin'";
$query = mysqli_query($connect, $sql);

if( $query ) {
        header('Location: dataadmin.php');
    }else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='dataadmin.php'>Kembali Ke Form</a>";
}
?>
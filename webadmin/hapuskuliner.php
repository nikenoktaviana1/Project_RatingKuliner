<?php 
include 'koneksi.php';
 
$idkuliner = $_GET['idkuliner'];
 
 
mysqli_query($connect,"delete from tempat_kuliner where idkuliner='$idkuliner'");
 
header("location:kuliner.php");
 
?>
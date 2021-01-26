<?php 
include 'koneksi.php';
 
$idadmin = $_GET['idadmin'];
 
 
mysqli_query($connect,"delete from admin where idadmin='$idadmin'");
 
header("location:dataadmin.php");
 
?>
<?php
	include 'koneksi.php';
	$namalengkap = $_POST['namalengkap'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$pass = $_POST['pass'];

	$sql = mysqli_query($connect,"INSERT INTO `admin`(`idadmin`, `namalengkap`, `email`, `username`, `pass`) VALUES ('','$namalengkap','$email','$username','$pass')") or die (mysqli_error($connect));
	
if ($sql) {
		echo "<script>alert('berhasil'); window.location='dataadmin.php';</script>";}
else 
	{
		echo "<script>alert('coba lagi')";}
?>

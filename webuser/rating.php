<?php
	include 'koneksi.php';
	$rating_baru=$_GET['rating'];
	$no=$_GET['no'];
	$send=$_GET['send'];
	$sql=mysqli_query($connect,"select * from tempat_kuliner where idkuliner='$no'");
	$data=mysqli_fetch_array($sql);
	$rating=$data['rating'];
	$rating=$rating+$rating_baru;
	
	$update=mysqli_query($connect,"UPDATE tempat_kuliner SET `rating`='$rating' WHERE `idkuliner`='$no'") or die("error");
	if ($send=='home'){
		header("location:tampil.php");
	} else {
		header("location:detail.php?no=$no");
	}
	
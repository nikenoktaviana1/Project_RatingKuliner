<?php

		session_start();
		include 'koneksi.php';

		$username = $_POST['username'];
		$pass = $_POST['pass'];

		$query = mysqli_query($connect, "SELECT * FROM admin WHERE username = '$username' AND pass = '$pass'");
		$count = mysqli_num_rows($query);

		if ($count > 0) {
			header ("location:index.php");
		}
		else {
			header ("location:login.php?pesan=gagal");
		}
?>
	
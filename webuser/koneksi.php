<?php
	$hostname = "localhost"; //aplikasi db yang digunakan
	$username = "root"; //username dari aplikasi db
	$password = ""; //password dari aplikasi db
	$database = "kuliner"; //db yang digunakan
	$connect = mysqli_connect($hostname, $username, $password, $database) or die ("Connection Failed");
?>
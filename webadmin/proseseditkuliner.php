<?php
	include 'koneksi.php';
	$idkuliner = $_POST['idkuliner'];
	$namatempat = $_POST['namatempat'];
	$alamat = $_POST['alamat'];
	$namagambar = $_POST['gambar'];
	$maps = $_POST['maps'];
	$video = $_POST['video'];
	$detail = $_POST['detail'];


				$query = "UPDATE tempat_kuliner SET namatempat='".$namatempat."', alamat='".$alamat."',  nama_gambar='".$namagambar."', maps='".$maps."',  video='".$video."', detail='".$detail."' WHERE idkuliner='".$idkuliner."' ";

				$sql = mysqli_query($connect,$query);

				if($sql)
				{ // Cek jika proses simpan ke database sukses atau tidak
        			// Jika Sukses, Lakukan :
        			header("location: kuliner.php"); // Redirectke halaman index.php
      			}
			    else
			    {
			        // Jika Gagal, Lakukan :
			        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			        echo "<br><a href='kuliner.php'>Kembali Ke Form</a>";
			    }
?>
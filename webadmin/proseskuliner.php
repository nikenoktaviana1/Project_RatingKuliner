<?php
	include 'koneksi.php';
	$namatempat = $_POST['namatempat'];
	$alamat = $_POST['alamat'];
	$namagambar = $_FILES['gambar']['name'];
	$ukuran = $_FILES['gambar']['size'];
	$tipe = $_FILES['gambar']['type'];
	$tmp_file = ($_FILES['gambar']['tmp_name']);
	$maps = $_POST['maps'];
	$video = $_POST['video'];
	$detail = $_POST['detail'];

	$path = "images/".$namagambar;

	if ($tipe =="image/jpeg" || $tipe == "image/jpg" || $tipe == "image/png")
	{
		if ($ukuran <= 1000000)
		{
			if (move_uploaded_file($tmp_file, $path)) 
			{

				$query = "INSERT INTO `tempat_kuliner` VALUES ('','".$namatempat."','".$alamat."','".$namagambar."','".$tmp_file."','".$ukuran."','".$tipe."','".$maps."','".$video."','','".$detail."')";
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
    		}
    		else
    		{
		      // Jika gambar gagal diupload, Lakukan :
		      echo "Maaf, Gambar gagal untuk diupload.";
		      echo "<br><a href='kuliner.php'>Kembali Ke Form</a>";
    		}
  		}
  		else
  		{
		    // Jika ukuran file lebih dari 1MB, lakukan :
		    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
		    echo "<br><a href='kuliner.php'>Kembali Ke Form</a>";
		}
	}
	else
	{
		  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
		  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
		  echo "<br><a href='kuliner.php'>Kembali Ke Form</a>";
	}
?>
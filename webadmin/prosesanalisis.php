<?php
	include 'koneksi.php';
	if(isset($_GET['text'])){
		$data = $_GET['text'];
		$array = array('data' => $data);
		$hasil = shell_exec("python prepdata/analisis_sentimen/prediksiduakelas.py" . base64_encode(json_encode($array)));
		$hasil = json_decode($hasil);
		$data = addslashes($data);
		$case_folding = implode(' ', $hasil->case_folding);
		$remove_punct = implode(' ', $hasil->remove_punct);
		$remove_num = implode(' ', $hasil->remove_num);
		$hapus_katadouble = implode(' ', $hasil->hapus_katadouble);
		$slangword = addslashes($hasil->slangword);
		$hasil_token = addslashes($hasil->hasil_token);
		$remove_stop_words = addslashes($hasil->remove_stop_words);
		$stemming = addslashes($hasil->stemming);
		$text_final = addslashes($hasil->text_final);
		$prediksisvm = $hasil->prediksisvm;
		$probabilitassvm = $hasil->probabilitassvm;
		$prediksikategorisvm = $hasil->prediksikategorisvm;
		$probabilitaskategorisvm = $hasil->probabilitaskategorisvm;
		$prediksinbc = $hasil->prediksinbc;
		$probabilitasnbc = $hasil->probabilitasnbc;
		$prediksikategorinbc = $hasil->prediksikategorinbc;
		$probabilitaskategorinbc = $hasil->probabilitaskategorinbc;
		
		$koneksi->query("INSERT INTO analisis VALUES ('','$data','$case_folding','$remove_punct','$remove_num','$hapus_katadouble','$slangword','$hasil_token','$remove_stop_words','$text_final','$prediksisvm','$probabilitassvm','$prediksikategorisvm','$probabilitaskategorisvm','$prediksinbc','$probabilitasnbc','$prediksikategorinbc','$probabilitaskategorinbc')");
		$output = array(
			'status' => 'sukses',
			'text_send' =>$data,
			'case_folding' => $hasil->case_folding,
			'remove_punct' => $hasil->remove_punct,
			'remove_num' => $hasil->remove_num,
			'hapus_katadouble' => $hasil->hapus_katadouble,
			'slangword' => $hasil->slangword,
			'hasil_token' => $hasil->hasil_token,
			'remove_stop_words' => $hasil->remove_stop_words,
			'stemming' => $hasil->stemming,
			'text_final' => $hasil->text_final,
			'prediksisvm' => $hasil->prediksisvm,
			'probabilitassvm' => $hasil->probabilitassvm,
			'prediksikategorisvm' => $hasil->prediksikategorisvm,
			'probabilitaskategorisvm' => $hasil->probabilitaskategorisvm,
			'prediksinbc' => $hasil->prediksinbc,
			'probabilitasnbc' => $hasil->probabilitasnbc,
			'prediksikategorinbc' => $hasil->prediksikategorinbc,
			'probabilitaskategorinbc' => $hasil->probabilitaskategorinbc
		);
		
	}else{
		$output = array('status' => 'error, empty');
	}

	echo json_encode($output);
	
?>
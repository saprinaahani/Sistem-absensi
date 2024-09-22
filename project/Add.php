<?php


class pegawai{}

if($_SERVER['REQUEST_METHOD']=='POST'){


	$data = json_decode(file_get_contents('php://input'), true);

	//Mendapatkan Nilai Variable
	$NomorJari = $data['NomorJari'];

	//Pembuatan Syntax SQL
	$sql = "INSERT INTO tbl_peminjaman (NomorJari) VALUES ('$NomorJari')";

	//Import File Koneksi database
	require_once('koneksi.php');

	//Eksekusi Query database
	if(mysqli_query($con,$sql)){
		$response = new pegawai();
		$response->success = 1;
		$response->message = "Data berhasil di simpan";
		die(json_encode($response));
	}else{
		$response = new pegawai();
		$response->success = 0;
		$response->message = "Data gagal di simpan";
		die(json_encode($response));
	}

	mysqli_close($con);
	}
?>

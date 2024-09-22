<?php
	class pegawai{}
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$data = json_decode(file_get_contents('php://input'), true);
		$NomorJari = $data['NomorJari'];
		$sql = "update tbl_peminjaman set waktu_keluar = CURRENT_TIMESTAMP where waktu_masuk=waktu_keluar and NomorJari = $NomorJari";
		require_once('koneksi.php');
		if(mysqli_query($con,$sql)){
			$response = new pegawai();
			$response->success = 1;
			$response->message = "Data berhasil di update";
			die(json_encode($response));
		}else{
			$response = new pegawai();
			$response->success = 0;
			$respons->message = "Data gagal di update";
			die(json_encode($response));
		}
		
		mysqli_close($con);
	}
?>
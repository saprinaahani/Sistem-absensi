<?php
    class pegawai{}

    if($_SERVER['REQUEST_METHOD']=='POST'){

        //Mendapatkan Nilai Variabel
        $nomorJari = $_POST ['nomorJari'];
        $waktu_masuk = $_POST ['waktu_masuk'];
        //Pembuatan Syntax SQL
        $sql = "INSERT INTO tbl_peminjaman (nomorJari, waktu_masuk, waktu_keluar) VALUES ('$nomorJari', '$waktu_masuk', '$waktu_keluar')";

        //import File Koneksi database
        require_once('koneksi.php');

        //Eksekusi Query database
        if(mysqli_query($con,$sql)){
            $response = new pegawai();
            $response->success = 1;
            $response->message = "Data berhasil di simpan";
            die(json_encode($response));
        } else {
            $response = new pegawai();
            $response->success = 0;
            $response->message = "Data gagal di simpan";
            die(json_encode($response));
        }
        mysqli_close($con);
    }
?>
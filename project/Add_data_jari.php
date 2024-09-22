<?php
    class pegawai{}

    if($_SERVER['REQUEST_METHOD']=='POST'){

        //Mendapatkan Nilai Variabel
        $NIM = $_POST ['NIM'];
        $NomorJari = $_POST ['NomorJari'];
        $Nama = $_POST ['Nama'];
        $Kelas = $_POST ['Kelas'];
        $Jurusan = $_POST ['Jurusan'];
        $Angkatan = $_POST ['Angkatan'];

        //Pembuatan Syntax SQL
        $sql = "INSERT INTO tbl_data_jari (NIM, NomorJari, Nama, Kelas, Jurusan, Angkatan) VALUES ('$NIM', '$NomorJari','$Nama','$Kelas','$Jurusan','$Angkatan')";

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
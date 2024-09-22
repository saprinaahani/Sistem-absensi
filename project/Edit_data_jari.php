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
        $Id = $_POST ['Id'];
        //Pembuatan Syntax SQL
        $sql = "update tbl_data_jari NIM='$NIM', NomorJari='$NomorJari', Nama='$Nama', Kelas='$Kelas', Jurusan='$Jurusan', Angkatan='$Angkatan' where Id='$Id'";
        
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
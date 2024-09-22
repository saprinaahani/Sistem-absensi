<?php
    class pegawai{}

    if($_SERVER['REQUEST_METHOD']=='POST'){

        //Mendapatkan Nilai Variabel
        $Username = $_POST ['Username'];
        $Password = $_POST ['Password'];
        //Pembuatan Syntax SQL
        $sql = "INSERT INTO tbl_user (Username, Password) VALUES ('$Username', '$Password')";

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
<?php
    class pegawai{}
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nomorJari = $_POST['nomorJari'];
        $waktu_masuk = $_POST['waktu_masuk'];
        $waktu_keluar = $_POST['waktu_keluar'];
        $Id = $_POST['Id'];
        $sql = "update tbl_user set nomorJari='$nomorJari', waktu_masuk='$waktu_masuk', waktu_keluar='$waktu_keluar' where Id='$Id'";
        require_once('koneksi.php');
        if(mysqli_query($con,$sql)){
            $response = new pegawai();
            $response->success = 1;
            $response->message = "Data berhasil di Update";
            die(json_encode($response));
        } else {
            $response = new pegawai();
            $response->success = 0;
            $response->message = "Data gagal di Update";
            die(json_encode($response));
        }
        mysqli_close($con);
    }
?>
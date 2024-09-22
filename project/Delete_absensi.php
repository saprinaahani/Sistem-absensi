<?php
    class pegawai{}
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $Id = $_POST['Id'];
        $sql = "delete from tbl_peminjaman where Id = '$Id'";
        require_once('koneksi.php');
        if(mysqli_query($con,$sql)){
            $response = new pegawai();
            $response->success = 1;
            $response->message = "Data berhasil di hapus";
            die(json_encode($response));
        } else {
            $response = new pegawai();
            $response->success = 0;
            $response->message = "Data gagal di hapus";
            die(json_encode($response));
        }
        mysqli_close($con);
    }
?>
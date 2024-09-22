<?php
    class pegawai{}
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $Id = $_POST['Id'];
        $sql = "update tbl_user set Username='$Username', Password='$Password' where Id='$Id'";
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
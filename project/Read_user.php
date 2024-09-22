<?php
class pegawai{}
$sql = "Select * from tbl_user";
require_once('koneksi.php');
$r = mysqli_query($con,$sql);
$json = array();
while($row = mysqli_fetch_assoc($r)){
    $json[] = $row;
}
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

?>
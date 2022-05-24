<?php
if (!$host = mysqli_connect("localhost", "root", "", "siptb")) {
    $hosting = mysqli_connect("localhost", "root", "");
    mysqli_query($hosting, "CREATE DATABASE siptb");
    if(!$hosting){
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
}
?>
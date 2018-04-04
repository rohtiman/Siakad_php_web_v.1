<?php
    $server_db="localhost"; //ip address
    $user_db="root";
    $pass_db="";
    $nama_db="db_futsal";

    $koneksi=mysqli_connect($server_db, $user_db, $pass_db, $nama_db) 
            or die(mysqli_error($koneksi));
?>


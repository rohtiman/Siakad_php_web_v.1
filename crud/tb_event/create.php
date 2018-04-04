<?php 
    include("../../dbo.php"); 

    $tb_event = $_POST['tb_event'];
    $tb_futsal = $_POST['tb_futsal'];
	$tb_login = $_POST['tb_login'];
    $tb_registrasi_event = $_POST['tb_registrasi_event'];
	$tb_user = $_POST['tb_user'];
    $sql = mysqli_query($koneksi, "insert INTO tbevent VALUES ('$tb_event', '$tb_futsal')" ) 
            or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=tb_futsal&insert=success");	
    }else {
    	header("location:../../index.php?page=tb_futsal&insert=fail");
    }
?>


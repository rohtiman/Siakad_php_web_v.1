<?php 
    include("../../dbo.php"); 

    $tb_event = $_POST['tb_event'];
    $tb_event = $_POST['tb_event'];
    $sql = mysqli_query($koneksi, "update tbevent set tb_event='$tb_futsal' where tb_event='tb_event' " ) 
            or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=tb_futsal&update=success");	
    }else {
    	header("location:../../index.php?page=tb_futsal&update=fail");
    }
?>


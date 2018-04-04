<?php
    include '../../dbo.php';
    $id=$_GET["id"];
    $query = "delete from tbevent where tb_event='$id'";
    $result = mysqli_query($koneksi, $query) or die("Query failed with error: ".mysqli_error($query));
    if ($result) {
        header("location:../../index.php?page=tb_futsal&delete=success");	
    }else {
    	header("location:../../index.php?page=tb_futsal&delete=fail");	
    }
?>


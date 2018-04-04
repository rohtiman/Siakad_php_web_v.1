<?php
    include '../../dbo.php';
    $id=$_GET["id"];
    $query = "delete from tbfutsal where id_futsal='$id'";
    $result = mysqli_query($koneksi, $query) or die("Query failed with error: ".mysqli_error($sql));
    if ($result) {
        header("location:../../index.php?page=futsal&delete=success");	
    }else {
    	header("location:../../index.php?page=futsal&delete=fail");
    }
?>

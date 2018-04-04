<?php
    include '../../dbo.php';
    $id=$_GET["id"];
    $query = "delete from tbregistrasi_event where no_reg='$id'";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        header("location:../../index.php?page=tb_registrasi_event&delete=success");	
    }else {
    	header("location:../../index.php?page=tb_registrasi_event&delete=fail");
    }
?>


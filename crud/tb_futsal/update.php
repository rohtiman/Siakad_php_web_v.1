<?php 
    include("../../dbo.php"); 

    $id_futsal = $_POST['id_futsal'];
    $nama_galery = $_POST['nama_galery'];
    $alamat = $_POST['alamat'];
    $latitude = $_POST['latitude'];
    $longtitude = $_POST['longtitude'];
    $pemilik = $_POST['pemilik'];
    $no_hp = $_POST['no_hp'];
    
    
    $sql = mysqli_query($koneksi, "update tbfutsal set id_futsal='$id_futsal', nama_galery='$nama_galery', alamat = '$alamat', latitude='$longtitude',pemilik='$no_hp' " ) 
            or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=tb_futsal&update=success");	
    }else {
        header("location:../../index.php?page=tb_futsal&update=fail");
    }
?>


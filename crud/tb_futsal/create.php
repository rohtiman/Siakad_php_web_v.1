<?php 
    include("../../dbo.php"); 

    $id_futsal = $_POST['id_futsal'];
    $nama_galery = $_POST['nama_galary'];
    $alamat = $_POST['alamat'];
    $latitude = $_POST['latitude'];
    $longtitude = $_POST['longtitude'];
    $pemilik = $_POST['pemilik'];
    $no_hp = $_POST['no_hp'];
    
    
    $sql = mysqli_query($koneksi, "insert INTO tbfutsal VALUES ('$id_futsal', '$nama_galery','$alamat','$latitude','$longtitude','$pemilik')" ) 
            or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=tb_futsal&insert=success");	
    }else {
        header("location:../../index.php?page=tb_futsal&insert=fail");
    }
?>


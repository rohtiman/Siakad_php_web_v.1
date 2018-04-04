<?php 
    include("../../dbo.php"); 

    $id_user = $_POST['id_user'];
    $nik = $_POST['nik'];
	$nama = $_POST['nama'];
    $pass = md5($_POST['pass']);
    $jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$email = $_POST['email'];
    $sql = mysqli_query($koneksi, "insert INTO tbuser VALUES ('$id_user', '$nik', '$nama', '$pass', '$jk', '$alamat', '$no_hp', '$email)" );
    if ($sql) {
            header("location:../../index.php?page=user&insert=success");	
    }else {
        header("location:../../index.php?page=user&insert=fail");
    }
?>
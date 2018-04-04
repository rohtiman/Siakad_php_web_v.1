<?php 
    include("../../dbo.php"); 

    $id_user = $_POST['id_user'];
    $nik  = $_POST['nik'];
    $nama = $_POST['nama']);
	$pass = md5($_POST['pass']);
	$jk   = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$no_hp  = $_POST['no_hp'];
	$email = $_POST['email'];
    $sql = mysqli_query($koneksi, "update tbuser set nik='$nik', nama='$nama', pass='$pass',jk='$jk', alamat=',alamat',no_hp=',no_hp',email=',email where id_user='$id_user' " );
    if ($sql) {
            header("location:../../index.php?page=user&update=success");	
    }else {
        header("location:../../index.php?page=user&update=fail");
    }
?>
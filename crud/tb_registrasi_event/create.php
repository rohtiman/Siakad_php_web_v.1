<?php 
    include("../../dbo.php"); 

    $no_reg = $_POST['no_reg'];
    $tgl_reg= $_POST['tgl_reg'];
    $id_event = $_POST['id_event'];
	$id_user = $_POST['id_user'];
	$nama_klub = $_POST['nama_klub'];
	$koordinator = $_POST['koordinator'];
	$status_registrasi = $_POST['status_registrasi'];
    $sql = mysqli_query($koneksi, "insert INTO tbregistrasi_event VALUES ('$no_reg', '$tgl_reg', '$id_event', '$id_user', '$nama_klub', '$koordinator', '$status_registrasi)" );
    if ($sql) {
            header("location:../../index.php?page=registrasi_tabel&insert=success");	
    }else {
    	header("location:../../index.php?page=registrasi_tabel&insert=fail");
    }
?>


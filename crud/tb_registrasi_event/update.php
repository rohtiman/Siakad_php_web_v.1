<?php 
    include("../../dbo.php"); 

    $registrasi_event_prodi = $_POST['no_reg'];
    $tgl_reg = $_POST['tgl_reg'];
    $id_event = $_POST['id_event'];
    $sql = mysqli_query($koneksi, "update tb_registrasi_event set `='$no_reg', tgl_reg='$tgl_reg' where no_reg='$no_reg' " );
    if ($sql) {
            header("location:../../index.php?page=tgl_reg&update=success");	
    }else {
    	header("location:../../index.php?page=tgl_reg&update=fail");
    }
?>


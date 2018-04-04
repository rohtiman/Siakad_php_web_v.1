<?php 
        error_reporting(0);
        
        if($_GET["page"] == "user"){
            include("tabel.php");
        }else if($_GET["form-user"] == "add"){
            include("form.php");
        }else if($_GET["form-user"] == "edit"){
            include("form.php");
        }else if($_GET["page"] == "tb_event"){
            include("tabel.php");
        }else if($_GET["form-tb_event"] == "add"){
            include("form.php");
        }else if($_GET["form-tb_event"] == "edit"){
            include("form.php");
        }else if($_GET["page"] == "tb_registrasi_event"){
            include("tabel.php");
        }else if($_GET["form-tb_registrasi_event"] == "add"){
            include("form.php");
        }else if($_GET["form-tb_registrsi_event"] == "edit"){
            include("form.php");
        }else if($_GET["page"] == "tb_futsal"){
            include("tabel.php");
        }else if($_GET["form-tb_futsal"] == "add"){
            include("form.php");
        }else if($_GET["form-tb_futsal"] == "edit"){
            include("form.php");
        }else if($_GET["laporan"] == "tb_futsal"){
            include("laporan.php");
        }else if($_GET[""] ==""){
            include("content-menu.php");
        }
    ?>


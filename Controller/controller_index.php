<?php
    include '../connect.php';

    session_start();

    if(isset($_SESSION['usr_id'])!="") {
	    header("Location: ../views/index/index.php");
    }
	
    include ('../views/index/index.php');
?>
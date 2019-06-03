<?php

    session_start();
    
    include '../connect.php';
    include 'C:\xampp\htdocs\dai\Models\user.php';

    $users = User::all_users();



    IF(ISSET($_GET['destroy'])){
        session_start();
        session_destroy();
        header('Location: Contoller/controller_login.php');
    }






    include ('../views/index/dashboard.php');


?>
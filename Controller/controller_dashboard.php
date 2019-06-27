<?php

    session_start();
    
    include '../utils/connect.php';
    include '../Models/user.php';

    $users = User::all_users();

    if (session_destroy()) {
        include '../views/login/login.php';
    } else {
        include '../views/index/dashboard.php';   
    }


?>
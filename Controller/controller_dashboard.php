<?php

    session_start();
    
    include 'C:\xampp\htdocs\dai\utils\connect.php';
    include 'C:\xampp\htdocs\dai\Models\user.php';

    $users = User::all_users();

    if (session_destroy()) {
        include('../views/login/login.php');
    } else {
        include('../views/index/dashboard.php');   
    }


?>
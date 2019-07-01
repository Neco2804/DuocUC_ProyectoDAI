<?php

include '../Utils/connect.php';
include '../Models/user.php';
include '../Models/commune.php';
include '../Models/professions.php';

$profs = Professions::all_professions();
session_start();
$email = $_SESSION["user_id"];
$user = User::get_user($email);
include '../Views/user_main/user_visit_rqst.php';
    


?>
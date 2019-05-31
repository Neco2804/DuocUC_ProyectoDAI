<?php

include 'connect.php';
include 'C:\xampp\htdocs\dai\models\user.php';

$todos = User::get_user('13274933');

echo $todos->NAME;


?>
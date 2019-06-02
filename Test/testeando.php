<?php

include 'connect.php';
include 'C:\xampp\htdocs\dai\models\professions.php';

$todos = Professions::all_professions();

echo gettype($todos);


?>
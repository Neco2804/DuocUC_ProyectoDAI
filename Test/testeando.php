<?php

include 'connect.php';
include 'C:\xampp\htdocs\dai\models\commune.php';

$search = Commune::get_commune('1');

echo $search->COD_NAME_COMM;

?>
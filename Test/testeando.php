<?php

include 'connect.php';
include 'C:\xampp\htdocs\dai\models\commune.php';

$comuna_lp = Commune::all_communes();

echo count($comuna_lp);
?>
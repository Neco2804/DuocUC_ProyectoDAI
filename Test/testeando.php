<?php

include 'connect.php';
include 'C:\xampp\htdocs\dai\models\professions.php';
include 'C:\xampp\htdocs\dai\models\user.php';
include 'C:\xampp\htdocs\dai\models\client.php';

$datos = array('RUT'=>'12345679','DV'=>'9','NAME'=>'Pepe','LAST_NAME'=>'Tapia','DIRECTION'=>'Las Rejas 1', 'COMMUNE'=>'1', 'EMAIL'=>'pepe@tapia.cl', 'PASSWORD'=>'admin', 'TYPE_USER'=>'1', 'RATING'=>' ');
$persona = new User($datos);
$persona->save();
echo $persona->TYPE_USER;

?>
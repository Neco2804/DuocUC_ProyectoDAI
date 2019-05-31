<?php

include 'connect.php';
include 'C:\xampp\htdocs\dai\models\commune.php';

$data_lp = array('COD_COMUNNE'=>'1', 'COD_NAME_COMM'=>'Pedro Aguirre Cerda');
$lo_prado = new Commune($data_lp);
$lo_prado->save();

?>
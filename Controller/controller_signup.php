<?php




    include 'C:\xampp\htdocs\dai\connect.php';
    include 'C:\xampp\htdocs\dai\Models\commune.php';

    session_start();
    if(isset($_SESSION['usr_id'])!="") {
	    header("Location: ../Controller/controller_index.php");
    }

    $comms = Commune::all_communes();

    include '..\Views\signup\signup_client.php';

  /*
    $firstName = $_POST[];
    $lastName = $_POST[];
    $email = $_POST[];
    $rut = $_POST[];
    $address = $_POST[];
    $commune = $_POST[];
    $password = $_POST[];

*/


?>
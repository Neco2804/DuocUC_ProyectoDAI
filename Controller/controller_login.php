<?php
    include '../connect.php';

    session_start();

    if(isset($_SESSION['usr_id'])!="") {
	    header("Location: ../Controller/controller_index.php");
    }
	
	include ('../views/login/login.php');

        //Comprobar de envío el formulario
        if (isset($_POST['login'])) {
	        $link = connect();
	        $email = mysqli_real_escape_string($link, $_POST['email']);
	        $password = mysqli_real_escape_string($link, $_POST['password']);
	        $result = mysqli_query($link, "SELECT * FROM user WHERE EMAIL = '" . $email. "' and PASSWORD = '" . $password . "'");

	        if ($row = mysqli_fetch_array($result)) {
				header('Location: ../Controller/controller_index.php');
		    }else {
				$errormsg = "Datos incorrectos";
				echo "Datos incorrectos";
				trigger_error("Datos ingresado son incorrectos", E_USER_ERROR);
	        }
		}          
		
?>
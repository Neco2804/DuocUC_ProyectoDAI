<?php
    include '../connect.php';

    session_start();

    if(isset($_SESSION['usr_id'])!="") {
	    header("Location: ../index.php");
    }
	
	include ('../views/login.php');

    //function envioFormulario(){

        //Comprobar de envío el formulario
        if (isset($_POST['login'])) {
	        $link = connect();
	        $email = mysqli_real_escape_string($link, $_POST['email']);
	        $password = mysqli_real_escape_string($link, $_POST['password']);
	        $result = mysqli_query($link, "SELECT * FROM user WHERE EMAIL = '" . $email. "' and PASSWORD = '" . $password . "'");

	        if ($row = mysqli_fetch_array($result)) {
				echo "Usuario conectado correctamente";
				include ('../index.php');
		    }else {
				$errormsg = "Datos incorrectos";
	        }
        }          

    //}

?>
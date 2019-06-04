<?php
	include 'C:\xampp\htdocs\dai\utils\connect.php';
	
		// Comiendo de la sesión
		session_start();

	include ('../views/login/login.php');

        //Comprobar de envío el formulario
        if (isset($_POST['login'])) {
	        $link = connect();
	        $email = mysqli_real_escape_string($link, $_POST['email']);
	        $password = mysqli_real_escape_string($link, $_POST['password']);
	        $result = mysqli_query($link, "SELECT * FROM user WHERE EMAIL = '" . $email. "' and PASSWORD = '" . $password . "'");

	        if ($row = mysqli_fetch_array($result)) {
								// Guardar datos de sesión
								$_SESSION["usuario"] = $email;
								echo "Sesión iniciada y establecido nombre de usuario!" . "<br>";
				header('Location: ../Controller/controller_index.php');
		    }else {
				$errormsg = "Datos incorrectos";
				echo "Datos incorrectos";
				trigger_error("Datos ingresado son incorrectos", E_USER_ERROR);
	        }
		}          
		
?>
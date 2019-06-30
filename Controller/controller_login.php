<?php
	include '../Utils/connect.php';
	include '../Models/user.php';

        //Comprobar de envío el formulario
        if (isset($_POST['login'])) {
	        $link = connect();
	        $email = mysqli_real_escape_string($link, $_POST['email']);
			$password = mysqli_real_escape_string($link, $_POST['password']);
	        $result = mysqli_query($link, "SELECT * FROM user WHERE EMAIL = '" . $email. "' and PASSWORD = '" . $password . "'");

	        if ($row = mysqli_fetch_array($result)) {
								// Guardar datos de sesión
								$_SESSION["user_id"] = $email;
								$user = User::get_user($email);

								include '../Views/user_main/user_main.php';
		    }else {
				//$errormsg = "Datos incorrectos";
				//echo "Datos incorrectos";
				//trigger_error("Datos ingresado son incorrectos", E_USER_ERROR);
				include '../Views/login/login.php';
				include '../Utils/wrongPassword.php';

				

			}
		}else{
			include '../Views/login/login.php';
		}          
		
?>
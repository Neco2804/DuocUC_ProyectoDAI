<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: index.php");
}

include_once 'connect.php';

//Comprobar de envío el formulario
if (isset($_POST['login'])) {
	$link = connect();
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$password = mysqli_real_escape_string($link, $_POST['password']);
	$result = mysqli_query($link, "SELECT * FROM user WHERE EMAIL = '" . $email. "' and PASSWORD = '" . $password . "'");

	if ($row = mysqli_fetch_array($result)) {
			echo "Usuario conectado correctamente";
		}else {
		$errormsg = "Datos incorrectos";
	}
}

?>
<html>
<head>
	<title>Inicio de session</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>

	<nav class="navbar navbar-invisible"></nav>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 well">
				<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
					<fieldset>

						<div class="form-group">
							<label for="name">E-mail</label>
							<input type="text" name="email" placeholder="Ingresar Email" required class="form-control" />
						</div>

						<div class="form-group">
							<label for="name">Contraseña</label>
							<input type="password" name="password" placeholder="Ingresar Contraseña" required class="form-control" />
						</div>

						<div class="form-group">
							<input type="submit" name="login" value="Iniciar Sesion" class="btn btn-primary" />
							<input type="reset" value="Limpiar" class="btn btn-default" >
						</div>
					</fieldset>
				</form>
				<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">	
			No tienes cuenta? <a href="register.php">Regitrate aqui</a>
			</div>
		</div>
	</div>

	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>
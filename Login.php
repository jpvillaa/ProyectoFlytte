<?php
session_start();
include ('includes/clases.php');
if(isset($_GET['menu'])){
	if($_GET['menu']=='ingreso'){
		$correo=$_POST['correo'];
		$contrasena=$_POST['contra'];
		$registro=new registro();
		$sw=$registro->Buscar($correo,$contrasena);
		if ($sw==1) {
			header('location:principal.php');
		}
		elseif ($sw==3) {
			$label="<div class=\"alert alert-danger\" role=\"alert\">Su contraseña es erronea</div>";
		}
		elseif ($sw==2) {
			$label="<div class=\"alert alert-danger\" role=\"alert\">Este ususario no existe, porfavor registrate</div>";
		}
	}
} ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Iniciar sesión</title>
	<link rel="icon" type="image/png" href="img/logoFlytte.png">
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="s/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	 <link href="css/log.css" rel="stylesheet">
</head>
<body>
	<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="index.html">Regresar a inicio</a>
	<br><br>
<div class="container">
	<div class="d-flex justify-content-center">
		<div class="card" style="height: 20rem;">
			<div class="card-header">
				<h3><meta charset="UTF-8">Iniciar sesión</h3>
				<div class="d-flex justify-content-end social_icon">
				</div>
			</div>
			<div class="card-body">
				<form action='?menu=ingreso' method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Correo" name="correo" required="true">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña" name="contra" required="true" >
					</div>
					<div class="form-group">
						<input type="submit" value="Iniciar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					¿No tienes una cuenta?<a href="registro.php">Regístrate</a>
				</div>
				<div class="d-flex justify-content-center links">
					<a href="resetPassword.php">¿Olvidaste tu contraseña?</a>
				</div>
			</div>
			<?php 
				if (isset($label)) {
					echo $label;
				}
			?>
		</div>
	</div>
</div>
</body>
</html>
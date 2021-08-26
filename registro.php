<?php include ('includes/clases.php');
if(isset($_GET['menu'])){
	if($_GET['menu']=='ingreso'){
		$nombre=$_POST['nombre'];
		$empresa=$_POST['codEmpresa'];
		$telefono=$_POST['telefono'];
		$correo=$_POST['correo'];
		$contrasena=$_POST['contra'];
		$registro=new registro();
		$sw=$registro->Datos($nombre,$empresa,$telefono,$correo,$contrasena);
		if ($sw==2) {
			header('location:Login.php');
		}elseif ($sw==1) {
			$label="<div class=\"alert alert-danger\" role=\"alert\">El correo ya existe</div>";
			}elseif ($sw==3) {
			$label="<div class=\"alert alert-danger\" role=\"alert\">El codigo de empresa es invalido</div>";
			}
		}	
} ?>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Registro</title>
	<link rel="icon" type="image/png" href="img/logoFlytte.png">
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	 <link href="css/registro.css" rel="stylesheet">
</head>
<body>
	<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="index.html">Regresar a inicio</a>
	<br><br>
<div class="container">
	<div class="d-flex justify-content-center">
		<div class="card" style="height: 29rem;">
			<div class="card-header">
				<h3><meta charset="UTF-8">Regístrate</h3>
				<h6 style="color:#FFFFFF"><meta charset="UTF-8">Si no tienes una empresa, registra 0</h6>
				<div class="d-flex justify-content-end social_icon">
				</div>
			</div>
			<div class="card-body">
				<form action='?menu=ingreso' method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Nombre" name="nombre" required="true">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-building"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Codigo de empresa" name="codEmpresa" required="true">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="#Telefono" name="telefono" required="true">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Correo" name="correo" required="true">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña" name="contra" required="true" id="myInput">
					</div>

						<div class="row align-items-center remember">
							<input type="checkbox" onclick="myFunction()">Mostrar contraseña
						</div>
					<div class="form-group">
						<input type="submit" value="Registrarse" class="btn float-right login_btn">
					</div>
				</form>
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
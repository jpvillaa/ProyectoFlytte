<?php include ('includes/clases.php');
if(isset($_GET['menu'])){
	if($_GET['menu']=='ingreso'){
		$placa=$_POST['placa'];
		$correo=$_POST['correo'];
		$modelo=$_POST['modelo'];
		$color=$_POST['color'];
		$lugarSalida=$_POST['lugarSalida'];
		$lugarLlegada=$_POST['lugarLlegada'];
		$hora=$_POST['hora'];
		$precio=$_POST['precio'];
		$registro=new carro();
		$sw=$registro->Datos($placa,$correo,$modelo,$color,$lugarSalida,$lugarLlegada,$hora,$precio);
		if (!$sw) {
			header('location:Login.php');
		}
	}	
} ?>

<?php 
session_start();
if (isset($_SESSION['CORREO'])) {
 ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Registrar Carro</title>
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
	 <link href="css/carro.css" rel="stylesheet">
</head>
<body>
	<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="principal.php">Regresar a inicio</a>
	<br><br>
<div class="container">
	<div class="d-flex justify-content-center">
		<div class="card" style="height: 36rem;">
			<div class="card-header">
				<h3>Regístra tu carro</h3>
			</div>
			<div class="card-body">
				<form action='?menu=ingreso' method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-font"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Placa" name="placa" required="true">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Correo" name="correo" required="true">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-car"></i></span>
						</div>
							<select class="form-control" name="modelo" required="true">
								<option>Modelo</option>
  								<option>Chevrolet Spark GT</option>
  								<option>Nissan March</option>
  								<option>Kia Rio</option>
  								<option>Renault Stpeway</option>
  								<option>Chevrolet Tracker</option>
  								<option>Mazda 3</option>
  								<option>Kia Picanto</option>
  								<option>Renault Sandero</option>
  								<option>Renault Logan</option>
  								<option>Renault Duster</option>
  								<option>Chevrolet Sail</option>
							</select>
						</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-fill-drip"></i></span>
						</div>
							<select class="form-control" name="color" required="true">
								<option>Color</option>
  								<option>Negro</option>
  								<option>Blanco</option>
  								<option>Gris</option>
  								<option>Rojo</option>
  								<option>Amarillo</option>
  								<option>Azul</option>
  								<option>Verde</option>
  								<option>Morado</option>
  								<option>Naranja</option>
  								<option>Marron</option>
							</select>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-store-alt"></i></span>
						</div>
							<select class="form-control" name="lugarSalida" required="true">
								<option>Lugar de salida</option>
  								<option>Viva envigado</option>
  								<option>Estación Envigado</option>
  								<option>Estación Ayura</option>
  								<option>Estación Aguacatala</option>
  								<option>Estación Poblado</option>
							</select>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-building"></i></span>
						</div>
							<select class="form-control" name="lugarLlegada" required="true">
								<option>Lugar de llegada</option>
  								<option>Universidad EIA-Palmas</option>
  								<option>Universidad EIA-Zunñiga</option>
							</select>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-clock"></i></span>
						</div>
							<select class="form-control" name="hora" required="true">
								<option>Hora de llegada</option>
                  				<option>6:00 am</option>
                  				<option>8:00 am</option>
                  				<option>10:00 am</option>
                  				<option>12:00 am</option>
                 				<option>1:00 pm</option>
                  				<option>3:00 pm</option>
                  				<option>5:00 pm</option>
                  				<option>7:00 pm</option>
							</select>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-wallet"></i></span>
						</div>
							<select class="form-control" name="precio" required="true">
								<option>Precio del trayecto</option>
                  				<option>500 pesos</option>
                  				<option>1000 pesos</option>
                  				<option>1500 pesos</option>
                  				<option>2000 pesos</option>
                 				<option>2500 pesos</option>
                  				<option>3000 pesos</option>
                  				<option>3500 pesos</option>
                  				<option>4000 pesos</option>
							</select>
					</div>


					<div class="form-group">
						<input type="submit" value="Registrar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<?php
}else{
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Registrar Carro</title>
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
	 <link href="css/carro.css" rel="stylesheet">
</head>
<body>
	<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="index.html">Regresar a inicio</a>
<div class="container">
	<div class="d-flex justify-content-center">
		<div class="card" style="height: 36rem;">
			<div class="card-header">
				<h3>Regístra tu carro</h3>
			</div>
			<div class="card-body">
				<form action='?menu=ingreso' method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-font"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Placa" name="placa" required="true">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Correo" name="correo" required="true">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-car"></i></span>
						</div>
							<select class="form-control" name="modelo" required="true">
								<option>Modelo</option>
  								<option>Chevrolet Spark GT</option>
  								<option>Nissan March</option>
  								<option>Kia Rio</option>
  								<option>Renault Stpeway</option>
  								<option>Chevrolet Tracker</option>
  								<option>Mazda 3</option>
  								<option>Kia Picanto</option>
  								<option>Renault Sandero</option>
  								<option>Renault Logan</option>
  								<option>Renault Duster</option>
  								<option>Chevrolet Sail</option>
							</select>
						</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-fill-drip"></i></span>
						</div>
							<select class="form-control" name="color" required="true">
								<option>Color</option>
  								<option>Negro</option>
  								<option>Blanco</option>
  								<option>Gris</option>
  								<option>Rojo</option>
  								<option>Amarillo</option>
  								<option>Azul</option>
  								<option>Verde</option>
  								<option>Morado</option>
  								<option>Naranja</option>
  								<option>Marron</option>
							</select>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-store-alt"></i></span>
						</div>
							<select class="form-control" name="lugarSalida" required="true">
								<option>Lugar de salida</option>
  								<option>Viva envigado</option>
  								<option>Estación Envigado</option>
  								<option>Estación Ayura</option>
  								<option>Estación Aguacatala</option>
  								<option>Estación Poblado</option>
							</select>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-building"></i></span>
						</div>
							<select class="form-control" name="lugarLlegada" required="true">
								<option>Lugar de llegada</option>
  								<option>Universidad EIA-Palmas</option>
  								<option>Universidad EIA-Zunñiga</option>
							</select>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-clock"></i></span>
						</div>
							<select class="form-control" name="hora" required="true">
								<option>Hora de llegada</option>
                  				<option>6:00 am</option>
                  				<option>8:00 am</option>
                  				<option>10:00 am</option>
                  				<option>12:00 am</option>
                 				<option>1:00 pm</option>
                  				<option>3:00 pm</option>
                  				<option>5:00 pm</option>
                  				<option>7:00 pm</option>
							</select>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-wallet"></i></span>
						</div>
							<select class="form-control" name="precio" required="true">
								<option>Precio del trayecto</option>
                  				<option>500 pesos</option>
                  				<option>1000 pesos</option>
                  				<option>1500 pesos</option>
                  				<option>2000 pesos</option>
                 				<option>2500 pesos</option>
                  				<option>3000 pesos</option>
                  				<option>3500 pesos</option>
                  				<option>4000 pesos</option>
							</select>
					</div>


					<div class="form-group">
						<input type="submit" value="Registrar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<<?php } ?>
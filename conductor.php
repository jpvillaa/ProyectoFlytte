<?php 
session_start();
if (isset($_SESSION['CORREO'])) {
	$id=$_GET['id'];
	include 'includes/Connection.php';
	$c = new Connection();

	$sql_usuario1 = $c->query("SELECT * FROM registro r INNER JOIN carro c on c.idconductor=r.idregistro where r.correo = '".$id."'");
	$result_register1 = mysqli_fetch_array($sql_usuario1);
 ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Conductor</title>
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
	 <link href="css/conductor.css" rel="stylesheet">
</head>
<body>
	<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="principal.php#portfolio">Regresar a inicio</a>
<div class="container">
	<div class="d-flex justify-content-center">
    	<div class="card" style="height: 40rem;">
			<div class="card-header">
				<h3><?php echo $result_register1['nombre'] ?></h3>
			</div>
			<div class="card-body">
				<!-- <div><h4 class="text-warning">Ruta:</h4></div>
				 <p class="text-white">Pasa por el Viva de Envigado, sube por el parque de Envigado, utiliza la vía escobero para tomar la transversal de la montaña y finalmente palmas.</p> -->
				<div><h4 class="text-warning">Vehiculo:</h4></div>
				 <p class="text-white"><?php echo $result_register1['modelo'] ?> - <?php echo $result_register1['placa'] ?> - <?php echo $result_register1['color'] ?></p>
				<div><h4 class="text-warning">Lugar de salida:</h4></div>
				 <p class="text-white"><?php echo $result_register1['lugarSalida'] ?></p>
				<div><h4 class="text-warning">Lugar de llegada:</h4></div>
				 <p class="text-white"><?php echo $result_register1['lugarLlegada'] ?></p>
				 <div><h4 class="text-warning">Hora de llegada:</h4></div>
				 <p class="text-white"><?php echo $result_register1['hora'] ?></p>
				<div><h4 class="text-warning">Precio:</h4></div>
				 <p class="text-white"><?php echo $result_register1['precio'] ?> pesos por trayecto.</p>
				 <div><h4 class="text-warning">Telefono:</h4></div>
				 <p class="text-white"><?php echo $result_register1['telefono'] ?></p>
			</div>
			<div class="card-footer">
				<input type="submit" value="Mapa" class="btn float-right login_btn">
			</div>
		</div>
    </div>
  </div>
</div>
</body>
</html>

<?php
}else{
  header('location:Login.php');
}
?>
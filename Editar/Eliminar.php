<?php 
session_start();
include ('../includes/clases.php');
$reg = new carro();
$reg->EliminarVehiculo();
unset($_SESSION['eliminar']);
header('location:../principal.php#about');
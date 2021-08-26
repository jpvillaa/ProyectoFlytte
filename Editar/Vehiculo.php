<?php 
session_start();
include ('../includes/clases.php');
$reg = new carro();
$reg->ActualizarVehiculo($_GET['modelo'],$_GET['color']);
unset($_SESSION['editvehi']);
header('location:../principal.php#about');
<?php 
session_start();
include ('../includes/clases.php');
$reg = new carro();
$reg->ActualizarPrecio($_GET['precio']);
unset($_SESSION['editprecio']);
header('location:../principal.php#about');
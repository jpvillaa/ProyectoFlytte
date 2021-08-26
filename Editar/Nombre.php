<?php 
session_start();
include ('../includes/clases.php');
$reg = new registro();
$reg->ActualizarNombre($_GET['nombre']);
unset($_SESSION['editnom']);
header('location:../principal.php#about');

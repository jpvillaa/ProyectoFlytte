<?php 
session_start();
include ('../includes/clases.php');
$reg = new registro();
$reg->ActualizarCorreo($_GET['correo']);
$_SESSION['CORREO']=$_GET['correo'];
unset($_SESSION['editcorr']);
header('location:../principal.php#about');

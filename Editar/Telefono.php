<?php 
session_start();
include ('../includes/clases.php');
$reg = new registro();
$reg->ActualizarTelefono($_GET['telefono']);
unset($_SESSION['editTel']);
header('location:../principal.php#about');

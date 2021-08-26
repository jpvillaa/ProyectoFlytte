<?php 
session_start();
include ('../includes/clases.php');
$reg = new carro();
$reg->ActualizarHora($_GET['hora']);
unset($_SESSION['edithora']);
header('location:../principal.php#about');
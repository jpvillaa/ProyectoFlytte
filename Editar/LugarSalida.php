<?php 
session_start();
include ('../includes/clases.php');
$reg = new carro();
$reg->ActualizarLugarSalida($_GET['lugarSalida']);
unset($_SESSION['editlugSa']);
header('location:../principal.php#about');
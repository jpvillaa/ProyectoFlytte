<?php 
session_start();
include ('../includes/clases.php');
$reg = new carro();
$reg->ActualizarLugarLlegada($_GET['lugarLlegada']);
unset($_SESSION['editlugLle']);
header('location:../principal.php#about');
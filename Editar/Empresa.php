<?php 
session_start();
include ('../includes/clases.php');
$reg = new registro();
$sw=$reg->ActualizarEmpresa($_GET['empresa']);
unset($_SESSION['editemp']);
header('location:../principal.php#about');

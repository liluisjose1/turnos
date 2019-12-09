<?php 
ob_start();
include("../config/conexion.php");

$escritorio = $_POST["escritorio"];

	$consulta = "INSERT INTO tiempos VALUES (NULL,'$escritorio',CURDATE(),NOW(),NULL)";
	$ejecutar_consulta = $conexion->query($consulta);
	$num_regs = $ejecutar_consulta->num_rows;
 ?>
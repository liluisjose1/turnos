<?php 
ob_start();
include("../config/conexion.php");

$escritorio = $_POST["escritorio"];

$consulta = "UPDATE tiempos SET fin_atencion=NOW() WHERE escritorio='$escritorio' AND fecha=CURDATE() AND fin_atencion IS NULL";
//echo($consulta);
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
 ?>
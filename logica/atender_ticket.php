<?php
ob_start();
include("../config/conexion.php");

$ticket = $_POST["ticket"];
$fecha = $_POST["fecha"];
$escritorio = $_POST["escritorio"];

$sql2 = "UPDATE `tickets` SET escritorio='$escritorio',`estado`=2 WHERE ticket='$ticket' AND fh_llegada='$fecha'";
$ejecutar2 = $conexion->query($sql2);

print($sql2);
 if ($ejecutar2) {
     header("Location: ../escritorio.php?e=$escritorio");
 } else {
     header("Location: ../escritorio.php?e=$escritorio");
  }

?>
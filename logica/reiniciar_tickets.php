<?php
ob_start();
include("../config/conexion.php");



$sql2 = "TRUNCATE `tickets`";
$ejecutar2 = $conexion->query($sql2);

print($sql2);
 if ($ejecutar2) {
     header("Location: ../mantenimiento.php?error=no_tickets");
 } else {
     header("Location: ../mantenimiento.php?error=si_tickets");
  }
?>
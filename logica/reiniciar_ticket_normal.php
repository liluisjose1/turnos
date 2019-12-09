<?php
ob_start();
include("../config/conexion.php");



$sql2 = "UPDATE `contador` SET `cont` = '0' WHERE `contador`.`id` = 1";
$ejecutar2 = $conexion->query($sql2);

print($sql2);
 if ($ejecutar2) {
     header("Location: ../mantenimiento.php?error=no_tickets_n");
 } else {
     header("Location: ../mantenimiento.php?error=si_tickets_n");
  }
?>
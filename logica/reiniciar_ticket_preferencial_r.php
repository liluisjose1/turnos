<?php
ob_start();
include("../config/conexion.php");



$sql2 = "UPDATE `contador` SET `cont` = '0' WHERE `contador`.`id` = 2";
$ejecutar2 = $conexion->query($sql2);

print($sql2);
 if ($ejecutar2) {
     header("Location: ../ticket.php?error=no_tickets_p");
 } else {
     header("Location: ../ticket.php?error=si_tickets_p");
  }
?>
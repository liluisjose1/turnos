<?php
ob_start();
include("../config/conexion.php");

$numero = $_POST["ticket_preferencial"];
$sql='';
$sql2='';
if ($numero<10) {
    $sql = "INSERT INTO `tickets` VALUES (NULL, 'B00$numero', NULL, '2','1', current_timestamp(), NULL)";
} else if ($numero<100) {
    $sql = "INSERT INTO `tickets` VALUES (NULL, 'B0$numero', NULL, '2','1', current_timestamp(), NULL)";
} else {
    $sql = "INSERT INTO `tickets` VALUES (NULL, 'B$numero', NULL, '2','1', current_timestamp(), NULL)";
}
$sql2 = "UPDATE `contador` SET `cont`=$numero WHERE id='2'";
$ejecutar = $conexion->query($sql);
$ejecutar2 = $conexion->query($sql2);

if ($ejecutar && $ejecutar2) {
    header("Location: ../ticket.php"); 
} else {
    header("Location: ../ticket.php");
 }

?>
<?php
include_once("config/conexion.php");

$sql = "SELECT ticket,fh_llegada FROM `tickets` WHERE `tipo_ticket`=1 AND estado=1 ORDER BY id ASC LIMIT 1";
$ejecutar = $conexion->query($sql);
$data = $ejecutar->fetch_row();

$sql2 = "SELECT ticket,fh_llegada  FROM `tickets` WHERE `tipo_ticket`=2 AND estado=1 ORDER BY id ASC LIMIT 1";
$ejecutar2 = $conexion->query($sql2);
$data2 = $ejecutar2->fetch_row();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <title>ACO - Escritorio</title>
    <link rel="shortcut icon" href="./img/icon2.png" type="image/x-icon">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <form action="./logica/atender_ticket.php" method="post">
                    <input hidden="true" name="escritorio" type="text" value="<?php echo ($_GET["e"]) ?>">
                    <input hidden="true" name="ticket" type="text" value="<?php echo ($data[0]) ?>">
                    <input hidden="true" name="fecha" type="text" value="<?php echo ($data[1]) ?>">
                    <button type="submit" class="btn btn-success">Normal</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form action="./logica/atender_ticket.php" method="post">
                    <input hidden="true" name="escritorio" type="text" value="<?php echo ($_GET["e"]) ?>">
                    <input hidden="true" name="ticket" type="text" value="<?php echo ($data2[0]) ?>">
                    <input hidden="true" name="fecha" type="text" value="<?php echo ($data2[1]) ?>">
                    <button type="submit" class="btn btn-warning text-white">Preferencial</button>
                </form>
            </div>
        </div>
    </div>


</body>
<?php
if ($data[0] == null) { ?>
    <script>
        alert("No hay Tickets Normales");
    </script>
<?php } ?>
<?php
if ($data2[0] == null) { ?>
    <script>
        alert("No hay Tickets Preferenciales");
    </script>
<?php } ?>

</html>
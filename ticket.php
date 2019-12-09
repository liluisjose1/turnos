<?php
include_once("config/conexion.php");

$sql = "Select cont from contador WHERE id='1'";
$ejecutar = $conexion->query($sql);
$data = $ejecutar->fetch_row();
$sql2 = "Select cont from contador WHERE id='2'";
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
    <title>ACO - Recepcion</title>
    <link rel="shortcut icon" href="./img/icon2.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="text-center" style="padding-top: 20px;">
            <img src="./assets/assets/img/logoo.png" width="400px">
        </div>
            <center style="padding-top: 5px;">
                    <h1>RECEPCIÓN</h1>
                </center>
        <div class="row" style="padding-top: 10px;">
            <div class="col-md-6">
                <form action="./logica/nuevo_ticket_normal.php" method="post">
                    <input name="ticket_normal" id="ticket_n" hidden="true" type="text"
                        value="<?php echo($data[0]+1)?>">
                    <button onclick="mostrar()" class="btn btn-success btn-lg btn-block"
                        style="height: 100px; font-size: 60px;" type="submit">Normal</button>
                </form>

            </div>
            <div class="col-md-6">
                <form action="./logica/nuevo_ticket_preferencial.php" method="post">
                    <input name="ticket_preferencial" hidden="true" id="ticket_p" type="text"
                        value="<?php echo($data2[0]+1)?>">
                    <button onclick="mostrar2()" class="btn btn-warning btn-lg btn-block"
                        style="height: 100px; font-size: 60px; color: white;" type="submit">Preferencial</button>
                </form>
            </div>
        </div>
        <div class="row" style="padding-top: 60px;">
            <div class="col-md-6">
                <form action="logica/reiniciar_ticket_normal_r.php" method="post">
                    <button class="btn btn-success btn-lg btn-block"
                        style="height: 100px; font-size: 35px;" type="submit">Reiniciar Tickets Normales </button>
                </form>

            </div>
            <div class="col-md-6">
                <form action="logica/reiniciar_ticket_preferencial_r.php" method="post">
                    <button class="btn btn-warning btn-lg btn-block"
                        style="height: 100px; font-size: 35px; color: white;" type="submit">Reiniciar Tickets Preferenciales</button>
                </form>
            </div>
        </div>
        <br>
        <br>
        <center>
            <p><b>Copyrigh</b> © ACOGUADALUPANA DE RL <?php echo date("Y"); ?></p>
        </center>
    </div>
</body>

<script src="./assets/jquery/jquery-3.4.1.min.js"></script>
<script src="./assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="./assets/bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
<script language=javascript>
    function ventanaSecundaria(URL) {
        window.open(URL, "_blank", "width=400,height=350,scrollbars=NO")
    }

    function mostrar() {
        var ticket = document.getElementById("ticket_n").value;
        ventanaSecundaria("./ticket_generadon.php?t=" + ticket);
    }

    function mostrar2() {
        var ticket2 = document.getElementById("ticket_p").value;
        ventanaSecundaria("./ticket_generadop.php?t=" + ticket2);
    }
</script>

</html>
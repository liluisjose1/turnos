<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="./assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>

<body style="height: 100%; background-color:green;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-3 text-center text-light">ACOGUADALUPANA DE RL</h1>
            </div>
            <div class="col-md-4">
                <h1 class="text-center text-light">Atendiendo</h1>
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <h1 id="lblTicket1" class="display-4 text-center text-dark"><b></b></h1>
                            <h3 id="lblEscritorio1" class="text-center"></h3>
                        </blockquote>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <h1 id="lblTicket2" class="display-4 text-center text-dark"><b></b></h1>
                            <h3 id="lblEscritorio2" class="text-center"></h3>
                        </blockquote>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <h1 id="lblTicket3" class="display-4 text-center text-dark"><b></b></h1>
                            <h3 id="lblEscritorio3" class="text-center"></h3>
                        </blockquote>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <h1 id="lblTicket4" class="display-4 text-center text-dark"><b></b></h1>
                            <h3 id="lblEscritorio4" class="text-center"></h3>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h1 class="text-center text-light">Gracias por su visita</h1>
                <video controls id="video" preload="none" width="100%" height="92%" src="./videos/video2.mp4"
                    type="video/mp4">
            </div>
        </div>
    </div>
    <audio id="xyz" src="./audio/new-ticket.mp3" preload="auto"></audio>


</body>
<script src="./assets/jquery/jquery-3.4.1.min.js"></script>
<script src="./assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="socket.io/socket.io.js"></script>
<script src="js/socket.publico.js"></script>

<script>
$('#lblTicket1').bind("DOMSubtreeModified",function(){
  //alert('changed');
  document.getElementById('xyz').play();
});
</script>
</html>
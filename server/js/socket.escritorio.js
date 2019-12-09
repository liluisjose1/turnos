// ** YO SOY EL component en frontend para mostrar escritorio */

// var label = $('#lblNuevoTicket');

// Comando para establecer la conecicon
var socket = io();


var searchParams = new URLSearchParams(window.location.search);
if (!searchParams.has('escritorio')) {
    window.location = 'index.html';
    throw new Error('El escritorio es necesario');
}
var escritorio = searchParams.get('escritorio');
var label = $(`small`); // referencia para JQuery... busca todos los small

// console.log(escritorio);
$('h1').text('Escritorio: ' + escritorio);
$('button').on('click', function() {
    // var audio = new Audio('./audio/new-ticket.mp3');
    // audio.play();
    socket.emit('atenderTicket', { escritorio: escritorio }, function(resp) {

        if (resp === 'No hay tickets') {
            label.text(resp);
            alert(resp);
            return;
        }
        label.text('Ticket ' + resp.numero);

    });
});
    var socket = io();
    var lblTicket1 = $('#lblTicket1');
var lblTicket2 = $('#lblTicket2');
var lblTicket3 = $('#lblTicket3');
var lblTicket4 = $('#lblTicket4');

var lblEscritorio1 = $('#lblEscritorio1');
var lblEscritorio2 = $('#lblEscritorio2');
var lblEscritorio3 = $('#lblEscritorio3');
var lblEscritorio4 = $('#lblEscritorio4');

var lblTickets = [lblTicket1, lblTicket2, lblTicket3, lblTicket4];
var lblEscritorios = [lblEscritorio1, lblEscritorio2, lblEscritorio3, lblEscritorio4];

    socket.on('connect', function () {
      document.getElementById("socketio").innerHTML = "socket connected";
    });
    var html = '';
    socket.on('showrows', function (rows) {
      actualizarHTML(rows);
    });

    function actualizarHTML(ultimos4) {
        for (var i = 0; i <= ultimos4.length - 1; i++) {
            lblTickets[i].text(ultimos4[i].ticket);
            lblEscritorios[i].text(ultimos4[i].escritorio);
    
        }
    }
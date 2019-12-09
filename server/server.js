var mysql = require("mysql");
var express = require('express');
const app = express();
var http = require('http').Server(app);
var io = require('socket.io')(http);

const path = require('path');
app.get('/', function (req, res) {
  res.sendfile('index2.html');
});
http.listen(3000, function () {
  console.log('listening on *:3000');
});
const publicPath = path.resolve(__dirname, './');
app.use(express.static(publicPath));

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "turnoscop"
});


io.on('connection', function (socket) {
  setInterval(() => {
    con.query('SELECT ticket,escritorio FROM tickets WHERE estado="2" ORDER BY `fh_llegada` DESC LIMIT 4', function (err, rows) {
      if (err) throw err;
      socket.emit('showrows', rows);
    });
  }, 500);
      io.on('repetir_ticket',function(){
        console.log("Hola");
      });
});

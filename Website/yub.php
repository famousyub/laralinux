<?php


//https://github.com/UniTime/unitime



?>



<script>


socket= new WebSocket('wss://127.0.0.1:5000');
socket.onopen= function() {
    socket.send('famosMe_start');
};
socket.onmessage= function(s) {
    console.log('got reply '+s);
};

/*
var app = require('http').createServer();
var io = require('socket.io')(app);

app.listen(3080);

io.on('connection', function (socket) {
    socket.emit('init', { hello: 'world' });
    socket.on('ping', function (data) {
        console.log('socket ping', data);
        socket.emit('pong', data);
    });
    socket.on('action', function (data) {
        console.log('socket action', data);
        io.emit('action', data);
    });
});
*/
</script>


















<?php


$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, 'http://127.0.0.1:5000');
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 0);
$response = curl_exec($ch);

echo  "<script> console.log(".$response."); </script>";

curl_close($ch);
/*
function connect($id_user){
    $ty="https://github.com/juicycleff/ultimate-backend,https://www.freecodecamp.org/news/build-a-multi-step-registration-app-with-animated-transitions-using-mern-stack/";
    $kl="https://github.com/amrkhaledccd/One-to-One-WebSockets-Chat";
    $ch = curl_init();
    $headers = array(
    'Accept: application/json',
    'Content-Type: application/json',

    );
    curl_setopt($ch, CURLOPT_URL, $this->service_url.'user/'.$id_user);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $body = '{}';

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POSTFIELDS,$body);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);

    $authToken = curl_exec($ch);

    return $authToken;
}

*/
?>

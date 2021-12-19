
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUN TO POLITÈCNICS!</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chango&family=Roboto+Mono:wght@300&display=swap"
        rel="stylesheet">
</head>

<body>
<div class="game">
    <div class="contador">&#9203;
        <span id="mostrarContador"></span>
    </div>
    <div class="contenedor">
        <div class="metro"></div>
        <div class="suelo"></div>
        <div class="rotulo"></div>
        <div class="fondo"></div>
        <div class="player player-run"></div>
        <div class="score">0</div>
        <div class="blurred-box" id="box"></div>
        <div class="result" id="result"></div>
        <div id="confetti-wrapper"></div>
    </div>
    <div class="game-over">GAME OVER</div>
    <div class="vida" id="vida1"></div>
    <div class="vida" id="vida2"></div>
    <div class="vida" id="vida3"></div>
    <div class="contenedorLetras">
        <div class="letrita" id="letraF"></div>
        <div class="letrita" id="letraR"></div>
        <div class="letrita" id="letraA"></div>
        <div class="letrita" id="letraS"></div>
        <div class="letrita" id="letraE"></div>
    </div>
</div>

<audio src="../sound/coin.mp3" class="audio-moneda"></audio>
<audio src="../sound/jump.mp3" class="audio-salto"></audio>
<audio src="../sound/over.mp3" class="audio-over"></audio>
<audio src="../sound/hit.mp3" class="audio-hit"></audio>
<audio src="../sound/win.mp3" class="audio-win"></audio>
<audio src="../sound/metro.mp3" class="audio-metro"></audio>
<audio src="../sound/bocina.mp3" class="audio-bocina"></audio>
<audio src="../sound/run.mp3" class="game-theme"></audio>


    <script src="script.js"></script>
</body>

</html>

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./style/styles.css">ç
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body>

<div id="fondoJuego" class="container"> 

    <div id="jugador" class="jugador"></div>
    <div id="paso1" class="obstaculos"></div>
    <div id="paso2" class="obstaculos"></div>
    <div id="paso3" class="obstaculos"></div>
    <div id="paso4" class="obstaculos"></div>
    <div id="alumno1" class="alumnos alumno1"></div>
    <div id="alumno2" class="alumnos alumno2" ></div>
    <div id="salon"></div> 
    <div class="score" id= "salvados"></div>
    <div class="score" id= "eliminados"></div>
    <div class="score" id= "perdidos"></div>

   
<button type="button" id="empezar" class="border 1px">Inicio</button>

</div> 
<button type="button" id="siguiente" class="border 1px"></button>
<div id="contador" class= "contador"></div>
<script src="./content/juego.js"></script>
</body>


</html>
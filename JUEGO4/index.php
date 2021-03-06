<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- https://www.youtube.com/watch?v=xjcs0E4sy5I&ab_channel=SoyDalto -->
</head>
<body>
    <div id="pergaminosObtenidos">
        
    </div>

    <div id="principal">
        <div class="contenedor"></div>
        <div class="fondoVacio">
            <div id="jugador" ></div>
        </div>
        
        <div class="imagenFondo1"></div>
        <div class="imagenFondo2"></div>
        <div class="imagenFondo3"></div>
        <div class="imagenFondo4"></div>
        <div class="imagenFondo5"></div>

        <div class="imagenPiso1"></div>
        <div class="imagenPiso2"></div>
        <div class="imagenPiso3"></div>
        <div class="imagenPiso4"></div>
        <div class="imagenPiso5"></div>

        <div id="pergaminoActvitatsComercials"></div>
        <div id="pergaminoMarquetingPublicidad"></div>
        <div id="pergaminoGestioVendes"></div>
        <div id="pergaminoComercInternacional"></div>
        <div id="pergaminoAgenciaViatges"></div>
        <div id="pergaminoSistemesMicroinformatics"></div>
        <div id="pergaminoDam"></div>
        <div id="pergaminoDaw"></div>
        <div id="pergaminoGestioAdministrativa"></div>
        <div id="pergaminoAdministracioFinances"></div>
        <div id="pergaminoAsistenciaDireccio"></div>

        <div id="piso1Puente1"></div>
        <div id="piso1Puente2"></div>
        <div id="piso1Puente3"></div>

        <div id="piso2Puente1"></div>
        <div id="piso2Puente2"></div>

        <div id="piso3Puente1"></div>
        <div id="piso3Puente2"></div>
        <div id="piso3Puente3"></div>

        <div id="piso4Puente1"></div>
        <div id="piso4Puente2"></div>
        <div id="piso4Puente3"></div>
        
        <div id="piso5Puente1"></div>
        <div id="piso5Puente2"></div>
        <div id="piso5Puente3"></div>

        <div class="ordenPergaminos" id="pergamino0"></div>
        <div class="ordenPergaminos" id="pergamino1"></div>
        <div class="ordenPergaminos" id="pergamino2"></div>
        <div class="ordenPergaminos" id="pergamino3"></div>
        <div class="ordenPergaminos" id="pergamino4"></div>
        <div class="ordenPergaminos" id="pergamino5"></div>
        <div class="ordenPergaminos" id="pergamino6"></div>
        <div class="ordenPergaminos" id="pergamino7"></div>
        <div class="ordenPergaminos" id="pergamino8"></div>
        <div class="ordenPergaminos" id="pergamino9"></div>
        <div class="ordenPergaminos" id="pergamino10"></div>

        <div class="fondoVacio2">
            <div id="ladrillo0"></div>
            <div id="ladrillo1"></div>
            <div id="ladrillo2"></div>
            <div id="ladrillo3"></div>
            <div id="ladrillo4"></div>
            <div id="ladrillo5"></div>
            <div id="ladrillo6"></div>
            <div id="ladrillo7"></div>
            <div id="ladrillo8"></div>
            <div id="ladrillo9"></div>
            <div id="ladrillo10"></div>
            <div id="ladrillo11"></div>
            <div id="ladrillo12"></div>
            <div id="ladrillo13"></div>
            <div id="ladrillo14"></div>
            <div id="ladrillo15"></div>
        </div>
        

        <div id="taparGrua"></div>
        <div id="grua"></div>
        <div class="botonGrua"></div>

        <div id="flecha"></div>

        <div class="finPartida">
            <div id="opcionElegir" onclick = "window.location.href='index.php'"></div>
            <div id="opcionElegir2" onclick = "window.location.href='inicio.php'"></div>
        </div>

        <div class="finPartidaTiempo">
            <div id="opcionElegir" onclick = "window.location.href='index.php'"></div>
            <div id="opcionElegir2" onclick = "window.location.href='inicio.php'"></div>
        </div>
        
        <div class="partidaGanada">
            
        </div>

        <div class="contador">
            <p id="mostrarContador"></p>
        </div>

        <div id="salirJuego" onclick="window.location.href='inicio.php'"></div>

        <div id="fondoImagen"></div>

        <div id="seleccionarPuerta1"></div>
        <div id="seleccionarPuerta2"></div>
        <div id="seleccionarPuerta3"></div>
        <div id="seleccionarPuerta4"></div>
        <div id="seleccionarPuerta5"></div>

        <div id="ayudaSaltar"></div>

        <div id="puntuacionJugador">
            <p id="mostrarPuntuacion"></p>
            <p id="mostrarTiempoRestante"></p>
            <p id="mostrarMovimientos"></p>
            <p id="mostrarBonus"></p>
            <p id="mostrarTotal"></p>
        </div>

        <div id="opcionGanar1" onclick = "window.location.href='index.php'"></div>
        <div id="opcionGanar2" onclick = "window.location.href='inicio.php'"></div>

        <div id="pergaminosNoConseguidos">
            <p>No has conseguido todos los pergaminos!</p>
        </div>
    </div>

   
    <script src="js/scriptInicio.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
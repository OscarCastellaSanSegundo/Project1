<?php
    require_once('../php_librarys/bd.php');
    $sesionIniciada = obtenerSession();
    $juegosJugados = [false, false, false, false, false];
    setcookie("juego1", false, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("juego2", false, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("juego3", false, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("juego4", false, time() + (86400 * 30), "/"); // 86400 = 1 day
    $juegosJugados = comprobarPuntuacionJuegos($juegosJugados, $sesionIniciada);

    if ($juegosJugados[1] == true) {
        setcookie("juego1", true, time() + (86400 * 30), "/"); // 86400 = 1 day
        $juegosJugados[2] = true;
    }

    if ($juegosJugados[2] == true) {
        setcookie("juego2", true, time() + (86400 * 30), "/"); // 86400 = 1 day
        $juegosJugados[3] = true;
    }

    if ($juegosJugados[3] == true) {
        setcookie("juego3", true, time() + (86400 * 30), "/"); // 86400 = 1 day
        $juegosJugados[4] = true;
    }

    if ($juegosJugados[4] == true) {
        setcookie("juego4", true, time() + (86400 * 30), "/"); // 86400 = 1 day
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/juegosStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</head>

<body>
    <div class="container-fluid coll-sm-10">
        <div class="row coll-sm-10 contenedorJuegos">
            <div class="bg-info col-sm-5 juego1Giff" onclick="window.location.href='../JUEGO1/index.php'"><p class="texto juegoTexto">JUEGO 1</p></div>
            <div class="bg-danger col-sm-5 juego2Giff" onclick="comprobarSiPuedeJugarJuego2()"><p class="texto juegoTexto">JUEGO 2</p></div>
            <div class="bg-dark col-sm-5 juego3Giff" onclick="comprobarSiPuedeJugarJuego3()"><p class="texto juegoTexto" >JUEGO 3</p></div>
            <div class="bg-succes col-sm-5 juego4Giff" onclick="comprobarSiPuedeJugarJuego4()"><p class="texto juegoTexto">JUEGO 4</p></div>
        </div>
    </div>

    <div class="contenedorBoton">
        <button type="button" class="btn btn-primary btn-lg botonJuego" onclick="window.location.href='../index.php'">Volver</button>
    </div>
    <script src="../js/juegos.js"></script>
</body>

    <?php

    ?>
</html>
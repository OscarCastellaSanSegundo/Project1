
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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEP Politècnics - Juegos</title>
    <script src="https://kit.fontawesome.com/f17ab486c8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!--NAVBAR-->
    <header style="background-color: black; position: sticky;">
        <a href="#" class="brand"><img src="../img/logoCEP0.png" alt="" width="30%"></a>
        <div class="menu-btn"></div>
        <div class="navigation">
            <div class="navigation-items">
                <a href="../index.php" id="inicio">Inicio</a>
                <a id="centro" href="#">Centro</a>
                <a id="metodologia" href="#">Metodología</a>
                <a id="grados" href="#">Grados</a>
                <a id="equipo" href="#">Equipo</a>
                <a id="juegos" href="../paginasHtml/juegos.php"><span style="color: gold;">Juegos</span></a>
                <a id="contacto" href="./login.php">Admin</a>
            </div>
        </div>
    </header>

    <section class="grid-juegos">
        <div class="content">
            <br><br><br>
            <h2>AVENTURA POLITÈCNICS</h2>
            <p>¡Te damos la bienvenida a la AVENTURA POLITÈCNICS! </p><br>
            <p>Mediante una experiencia interactiva a base de juegos, queremos ofrecerte cómo es el proceso de
                estudiar
                en el Politècnics. Para ello, nuestros alumnos han diseñado y programado la siguiente aventura:
            </p><br>
            <div class="aventura">
<li>Run to Politècnics! - ¡Corre a matricularte! ¡Sortea los obstáculos del Metro mientras repasas los valores de la FRASE!</li>
<li> Salvacursos - Una vez matriculado, ¡haz que el espíritu del Politècnics recupere los módulos perdidos!</li>
<li> ¡Protege tus Prácticas! - Tras haber superado los cursos con éxito, es hora de conseguir unas prácticas laborales,<br> ¡protege las prácticas de alumnos de otros centros!</li>
<li> Consigue tu diploma - ¡Enhorabuena! Tras haber superado las prácticas es hora de recoger tu diploma. <br>
¡Recoge todos los diplomas y llega hasta la cima!</li>
            </div><br>
            <p>¡Completa cada juego para poder jugar al siguiente y descubre las sorpresas que aguardan!</p>

            <section class="grid-juegos-games">
                <div class="juego1Giff" onclick="window.location.href='../JUEGO1/index.php'">
                    <p class="juegoTexto">JUEGO 1</p>
                </div>
                <div class="juego2Giff">
                    <p class="juegoTexto">JUEGO 2</p>
                </div>
                <div class="juego3Giff">
                    <p class="juegoTexto">JUEGO 3</p>
                </div>
                <div class="juego4Giff" onclick="window.location.href='../JUEGO4/inicio.php'">
                    <p class="juegoTexto">JUEGO 4</p>
                </div>
            </section>
            <a href="../index.php">Volver</a>
        </div>
    </section>

    <script src="../script.js"></script>
    <script src="../js/juegos.js"></script>
</body>

</html>
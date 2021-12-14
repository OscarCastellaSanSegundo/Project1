

<?php
    require_once('./php_library/bd.php');
    session_start();
    insertarPuntuacion();
    $puntuacion = seleccionarUsuarios();
    $_SESSION['posicion']=0;
    
?>

<?php $_SESSION["dificultad"]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/stylesInicio.css">
</head>
<body>
    <div id="instrucciones">
        <div id="salirInstrucciones" onclick="volverInicio()"></div>
    </div>
    <div id="fondo"></div>
    <div id="menuInicio">
        <div id="botonJugar" onclick="window.location.href='index.php'"></div>
        <div id="botonInstrucciones" onclick="verInstrucciones()"></div>
        <div id="botonDificultad" onclick="cambiarDificultad()">
               
        </div>
        <div id="ranking">
            <table class="tablaPuntuacion">
                <tr>
                    <th>Posicion</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Puntuación</th>
                </tr>

                <?php foreach ($puntuacion as $puntuaciones) { 
                    ?>
                    <tr>
                        <td> <?php posicion() ?> </td>
                        <td> <?php echo $puntuaciones['Nombre'] ?> </td>
                        <td> <?php echo $puntuaciones['Apellido'] ?> </td>
                        <td> <?php echo $puntuaciones['Puntuacion'] ?> </td>
                    </tr>
                    
                <?php } ?>
                
            </table>
        </div>
    </div>
    
    <div id="menuDificultad">
        <div id="botonFacil" onclick="actualizarDificultad()"></div>
        <div id="botonNormal" onclick="actualizarDificultad2()"></div>
        <div id="botonDificil" onclick="actualizarDificultad3()"></div>
    </div>
    
    <div id="taparJugar"></div>

    <div id="giffInstrucciones"></div>

    <div id="salirJuego" onclick="window.location.href='../paginasHtml/juegos.php'"></div>
    
</body>
<script src="js/scriptInicio.js"></script>
</html>
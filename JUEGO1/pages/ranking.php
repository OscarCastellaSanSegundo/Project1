<?php

require_once('../php_librarys/bd.php');
$juegos = selectJuegos();
?>

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
    <link href="https://fonts.googleapis.com/css2?family=Chango&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="menuPrincipal">
        <div class="titulo"> - RANKING -</div>
        <div class="ranking">
            <table>
                <tr>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Apellido
                    </th>
                    <th>
                        Puntuación
                    </th>
                </tr>
                <?php foreach($juegos as $juego) { ?>
                    <tr>
                        <td>
                            <?php echo $juego['nombre']; ?>
                        </td>
                        <td>
                            <?php echo $juego['apellido']; ?>
                        </td>
                        <td>
                            <?php echo $juego['puntuacion']; ?>
                        </td>
                    </tr>
                <?php   }  ?>
            </table>
        </div>
        <footer>© Frank Santos - 2021</footer>
    </div>
</body>

</html>
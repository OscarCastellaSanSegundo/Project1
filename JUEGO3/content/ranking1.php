<?php
require_once('./php_llibrarys/bd.php');
$nuevaPuntuacion=$_COOKIE["puntuacion"];

insertarPuntuacion($nuevaPuntuacion);
$ranking = selectRanking();
$i = 1;
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Protege tus Prácticas!</title>
<link rel="stylesheet" href="./style/styles.css">
<script src="https://kit.fontawesome.com/f17ab486c8.js" crossorigin="anonymous"></script>
</head>

<body>

<div class="titulo"> - RANKING -</div>
        <div class="ranking">
            <table class="table table-dark table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Puntuación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        foreach ($ranking as  $player) {
                            echo "<tr>";
                            echo "<th scope=\"row\">$i</th>";
                            echo "<td>" . $player['Nombre'] . "</td>";
                            echo "<td>" . $player['Apellido'] . "</td>";
                            echo "<td>" . $player['Puntuacion'] . "</td>";
                            echo "</tr>";
                            $i++;
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div><br>
        <a href="../index.php">
            <button id="ranking-btn"><i class="fas fa-arrow-left"></i></button><br>
        </a>


<div id="salirJuego" onclick="window.location.href='../paginasHtml/juegos.php'"></div> 

</body>
<script src="../JUEGO3/content/juego.js"></script>
</html>
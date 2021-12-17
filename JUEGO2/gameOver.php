<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php require_once('./php_librarys/bd.php');
$ranking = selectRanking();
$i = 1;
?>

<div class="pantallaGameOver">
    <div class="principalStart">
        <div class="tituloJuego">
            <img src="./img/titulo.png" class="imgTituloDentroStart">
        </div>
    </div>
    <div class="explicacion">
<!--
        <div class="gameOver">
            <h1>GAME OVER</h1>
        </div>
-->
        <table class="table table-dark table-striped">
            <thead class="thead-dark">
                <tr>

                    <th scope="col"></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Puntuacion</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php
                    foreach ($ranking as  $player) {
                        echo "<tr>";
                        echo "<th scope=\"row\">$i</th>";
                        echo "<td>".$player['Nombre']."</td>";
                        echo "<td>".$player['Apellido']."</td>";
                        echo "<td>".$player['Puntuacion']."</td>";
                        echo "</tr>";
                        
                            $i++;
                         
                        }
                        ?>
                </tr>


            </tbody>
        </table>

        <p class="parrafoGameOver">
            No has conseguido salvar los ciclos, una verdadera pena, pero no te preocupes, todavia puedes volver a intentarlo haciendo click en el boton de abajo. Seguro que la proxima vez ira mejor </p>
    </div>

    <!--
    <div class="centrarPLayer">
        <img class="playerPantallaExplicacion" src="./img/player.png">
    </div>
-->
    <div class="botonPlay">
        <img src="./img/imgBotonJugar.png" class="btnJugar" id="btnVolverJugar">
    </div>

</div>
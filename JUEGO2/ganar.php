<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php require_once('./php_librarys/bd.php');
$nuevaPuntuacion=$_COOKIE["puntuacion"];

insertarPuntuacion($nuevaPuntuacion);

$ranking = selectRanking();
$i = 1;



?>

<div class="pantallaWin">
    <div class="principalStart">
        <div class="tituloJuego">
            <img src="./img/titulo.png"  class="imgTituloDentroStart">
        </div>
      
    </div> 
      <div class="puntuacion">
            <p class="puntuacionNumerica">FELICIDADES HAS OBTENIDO UNA PUNTUACION DE <?php echo $nuevaPuntuacion; ?> PUNTOS</p>
        </div>
    <div class="explicacion">

    <table class="table table-dark table-striped tabla-personalizada">
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
        
        <p>
        Has conseguido salvar los ciclos del centro de estudios politécnicos!!! Grácias por ayudarnos a recuperarlo ahora todo el mundo podra disfrutar de etos cursos!!! </p>
        </div>


    <div class="botonPlay">
        <img src="./img/imgBotonJugar.png" class="btnJugar" id="btnVolverJugar2">
    </div> 
    
</div>



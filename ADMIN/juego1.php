<?php require_once('./php_librarys/bd.php');
$juego1 = selectRanking1();

if (!isset($_SESSION["error"])) {
    $error = false;
  } else {
   $_SESSION["anyadido"]=false;
  }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleRanking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Saira+Condensed&display=swap" rel="stylesheet">

    <title>Ranking juego 1</title>
</head>

<body>
    <header>
        <!-- nav bar-->
        <?php include "php_partials/navbar.php"; ?>
    </header>


            <div class="container-fluid container-principal">
                <table id="example" class="display table table-striped " style="width:100%">
                    <thead>
                        <tr>
                            <th class="bg-warning text-dark idUsuario">ID Jugador</th>
                            <th class="bg-warning text-dark">Email</th>
                            <th class="bg-warning text-dark">Puntuacion</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($juego1 as  $usuario) {
                            echo "<tr>";
                            echo "<th class=\"idUsuario\" scope=\"row\">" . $usuario['IdUsuario'] . "</th>";
                            echo "<td>" . $usuario['Email'] . "</td>";
                            echo "<td>" . $usuario['Puntuacion'] . "</td>";
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="bg-warning text-dark">ID Jugador</th>
                            <th class="bg-warning text-dark">Email</th>
                            <th class="bg-warning text-dark">Puntuacion</th>

                        </tr>
                    </tfoot>
                </table>
            </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });

        });
    </script>



    <script>

    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php session_start();
require_once('./php_librarys/bd.php');
//$cursoEditar = selectCursoEditar($_SESSION['idEditarCurso']);


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Saira+Condensed&display=swap" rel="stylesheet">


    <title>Edicion de cursos</title>
</head>

<body>
    <header>
        <!-- nav bar-->
        <?php include "php_partials/navbar.php"; ?>
    </header>


    <div class="container container-form">
        <div class="titulo bg-warning">
            <h4><b>EDITAR CURSO</b></h4>
        </div>
        <form action="phpControllers/bdController.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b>ID</b></label>
                <input name="IdCursoCambio" class="form-control" aria-describedby="emailHelp" value="<?php echo $cursoEditar[0]['Id'] ?> " readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><b>Nombre</b></label>
                <input class="form-control" name="cambiarNombre" id="cambiarNombre" value="<?php echo $cursoEditar[0]['Nombre'] ?>" required>
            </div>
            <div class="botonesEditar">
                <a href="cursos.php"  class="btn btn-secondary">cANCELAR</a>
                <button type="submit" class="btn btn-primary" title="EditarCurso" value="editarCurso" name="metodo"> EDITAR <i class="fas fa-edit"></i></button>
            </div>

        </form>
    </div>

</body>

</html>
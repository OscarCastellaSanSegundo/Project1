<?php session_start();
require_once('./php_librarys/bd.php');

if (!isset($_SESSION["error"])) {
    $error = false;
  } else {
    $error = $_SESSION["error"];
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Saira+Condensed&display=swap" rel="stylesheet">


    <title>Alta usuario</title>
</head>

<body>
    <header>
        <!-- nav bar-->
        <?php include "php_partials/navbar.php"; ?>
    </header>

    <!--  echo $usuarioEditar[0]['Id']."</br>";
  echo $usuarioEditar[0]['Nombre']."</br>";
  echo $usuarioEditar[0]['Apellido']."</br>";
  echo $usuarioEditar[0]['Email']."</br>";
  echo $usuarioEditar[0]['Password']."</br>"; -->
    <?php
    if ($error === true) {

        echo   "<div class=\"msg\">
                <h2><i class=\"fas fa-times\"></i>LOS PASSWORDS NO COINCIDEN</h2>
                </div>";
    }

    ?>
    


    <div class="container container-form">
        <div class="titulo bg-warning">
            <h4><b>ALTA USUARIO</b></h4>
        </div>
        <form action="phpControllers/bdController.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><b>Nombre</b></label>
                <input class="form-control" name="Nombre" id="Nombre" placeholder="Esciba aqui el nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><b>Apellido</b></label>
                <input class="form-control" name="Apellido" id="Apellido" placeholder="Escriba aqui el apellido" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><b>Email</b></label>
                <input class="form-control" name="Email" id="Email" placeholder="Escriba aqui el em@il" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
                <input class="form-control" name="Password" id="Password" placeholder="Escriba aqui la contraseña" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><b>Repetir password</b></label>
                <input class="form-control" name="PasswordRepetir" id="PasswordRepetir" placeholder="Repita la contraseña" required>
            </div>
            <div class="botonesEditar">
            <a href="index.php" class="btn btn-secondary" >CANCELAR</a>
                <!-- <button type="submit" class="btn btn-secondary" title="cancelar" value="cancelar" name="metodo"> CANCELAR </button> -->
                <button type="submit" class="btn btn-success" title="altaUsuario" value="altaUsuario" name="metodo"> <i class="fas fa-user-plus"></i> DAR DE ALTA </button>
            </div>
        </form>
    </div>

</body>

</html>
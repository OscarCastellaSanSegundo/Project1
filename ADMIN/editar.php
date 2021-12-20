<?php session_start();
require_once('./php_librarys/bd.php');
$usuarioEditar = selectUsuarioEdit($_SESSION['idEditar']);
if (!isset($_SESSION["error"])) {
    $error = false;
} else {
    $error = $_SESSION["error"];
}

if (!isset($_SESSION["registroDuplicado"])) {
    $duplicado = false;
} else {
    $duplicado = $_SESSION["registroDuplicado"];
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


    <title>Edicion de usuario</title>
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

    if ($duplicado === true) {

        echo   "<div class=\"msg\">
                <h2>REGISTRO DUPLICADO PONGA OTRO EMAIL</h2>
                </div>";
    }

    ?>



    <div class="container container-form">
        <div class="titulo bg-warning">
            <h4><b>EDITAR USUARIO</b></h4>
        </div>
        <form action="phpControllers/bdController.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b>ID</b></label>
                <input type="email" name="IdUsuarioCambiar" class="form-control" aria-describedby="emailHelp" value="<?php echo $usuarioEditar[0]['Id'] ?> " readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><b>Nombre</b></label>
                <input class="form-control" name="cambiarNombre" id="cambiarNombre" value="<?php echo $usuarioEditar[0]['Nombre'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><b>Apellido</b></label>
                <input class="form-control" name="cambiarApellido" id="cambiarApellido" value="<?php echo $usuarioEditar[0]['Apellido'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><b>Email</b></label>
                <input class="form-control" name="cambiarEmail" id="cambiarEmail" value="<?php echo $usuarioEditar[0]['Email'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
                <input class="form-control" name="cambiarPassword" id="cambiarPassword" value="<?php echo $usuarioEditar[0]['Password'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><b>Repetir password</b></label>
                <input class="form-control" name="cambiarPasswordRepetir" id="cambiarPasswordRepetir" value="<?php echo $usuarioEditar[0]['Password'] ?>" required>
            </div>
            <div class="botonesEditar">
                <button type="submit" class="btn btn-secondary" title="cancelar" value="cancelar" name="metodo"> CANCELAR </button>
                <button type="submit" class="btn btn-primary" title="EditarUsuario" value="editarUsuario" name="metodo"> EDITAR <i class="fas fa-edit"></i></button>
            </div>

        </form>
    </div>

</body>

</html>
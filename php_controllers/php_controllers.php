<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            
            require_once('../php_librarys/bd.php');
            if (isset($_POST['insertarRegistro'])) {

                insertarUsuario($_POST['emailUsuario'], $_POST['nombreUsuario'], $_POST['apellidosUsuario'], $_POST['contraUsuario']);   
                header("Location: ../paginasHtml/login.php");
            }

            if (isset($_GET['loguearUsuario'])) {

                $sesionCorrecta = logInUser($_GET['inputEmail'], $_GET['inputPassword']);
                
                if ($sesionCorrecta == 1) {
                    header("Location: ../paginasHtml/login.php");
                }else if ($sesionCorrecta == 2) {
                    header("Location: ../paginasHtml/juegos.php");
                }else{
                    header("Location: ../ADMIN/index.php");
                }
            }

        ?>
    </body>
</html>

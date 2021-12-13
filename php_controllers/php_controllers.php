<?php
    
    require_once('../php_librarys/bd.php');
    if (isset($_POST['insertarRegistro'])) {

        insertarUsuario($_POST['emailUsuario'], $_POST['nombreUsuario'], $_POST['apellidosUsuario'], $_POST['contraUsuario']);   

    }

    if (isset($_GET['loguearUsuario'])) {

        logInUser($_GET['inputEmail'], $_GET['inputPassword']);
        

    }

?>
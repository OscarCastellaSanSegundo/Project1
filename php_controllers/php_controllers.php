<?php
    
    require_once('../php_librarys/bd.php');
    if (isset($_POST['insert'])) {
        insertarUsuario($_POST['emailUsuario'], $_POST['nombreUsuario'], $_POST['apellidosUsuario'], $_POST['contraUsuario']);

    }

?>
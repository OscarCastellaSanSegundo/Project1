<?php

    function abrirBd(){

        $servername = "localhost:3306";
        $username = "root";
        $password = "mysql";
           
        $conexion = new PDO("mysql:host=$servername;dbname=Juego", $username, $password); 
        // set the PDO error mode to exception
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("set names utf8");

        return $conexion;

    }

    function cerrarBd(){
        return null;
    }

    function cambiarSession($sesionActual){
        $conexion = abrirBd();
        $sentenciaTexto = "update session_iniciada set UsuarioActual = :session";

        $sentencia = $conexion->prepare($sentenciaTexto);
        $sentencia->bindParam(':session', $sesionActual);

        $sentencia->execute();

        $conexion = cerrarBd();
    }
   
    function insertarUsuario($email, $nombre, $apellidos, $password){
        $conexion = abrirBd();
        $paswordEncriptado=password_hash($password,PASSWORD_DEFAULT);
        $sentenciaTexto = "insert into usuario values (null, :email, :Nombre, :Apellido, :Password, false, 1)";
        $sentencia = $conexion->prepare($sentenciaTexto);

        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam(':Nombre', $nombre);
        $sentencia->bindParam(':Apellido', $apellidos);
        $sentencia->bindParam(':Password', $paswordEncriptado);

        $sentencia->execute();

        
    }
    
    function logInUser($email, $password){

        $i = 0;
        $conexion = abrirBd();
        $sentenciaTexto = "select Email, Password, Id from usuario";
        $sentencia = $conexion->prepare($sentenciaTexto);
        
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();      
        $longitudArray = (count($resultado));

        while ($i <= $longitudArray) {
            if ($resultado[$i]['Email'] == $email && password_verify($password,$resultado[$i]['Password'])) {
                $sesionIniciada = true;
                $sesionActual = $resultado[$i]['Id'];
                // setcookie("sessionActual", $resultado[$i]['Id'], strtotime( '+30 days' ), "../JUEGO4/php_library/bd.php");
                // $_COOKIE['sessionActual'] = $resultado[$i]['Id'];
                // $_SESSION['sessionActual'] = $resultado[$i]['Id'];
                cambiarSession($sesionActual);
                $i = $longitudArray + 1;
            } else {
                $sesionIniciada = false;
                $i++;
            }
            
        }
        // foreach ($resultado as $resultados) {
        //      $resultados['Email'];
        //      $resultados['Id'];
        //      $resultados['Password'];

        //      if ($email == $resultados['Email'] && $password == $resultados['Password']) {
        //         $sesionIniciada = true;
        //         $_SESSION['sessionActual'] = $resultados['Id'];
        //     } else {
        //         $sesionIniciada = false;
        //     }
        // }

        $conexion = cerrarBd();

        return $sesionIniciada;
    }

    

?>
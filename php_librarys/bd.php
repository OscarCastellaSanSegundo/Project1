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
   
    function insertarUsuario($email, $nombre, $apellidos, $password){
        $conexion = abrirBd();

        $sentenciaTexto = "insert into usuario values (null, :email, :Nombre, :Apellido, :Password, false, 1)";
        $sentencia = $conexion->prepare($sentenciaTexto);

        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam(':Nombre', $nombre);
        $sentencia->bindParam(':Apellido', $apellidos);
        $sentencia->bindParam(':Password', $password);

        $sentencia->execute();

        $conexion = cerrarBd();
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
            if ($resultado[$i]['Email'] == $email && $resultado[$i]['Password'] == $password) {
                $sesionIniciada = true;
                $_COOKIE['sessionActual'] = $resultado[$i]['Id'];
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
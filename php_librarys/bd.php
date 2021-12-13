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

    function posicion(){
        $_SESSION['posicion']++;
        echo $_SESSION['posicion'];
    }
?>
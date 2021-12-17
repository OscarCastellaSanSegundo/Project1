<?php

    function abrirBd(){

        $servername = "localhost:3306";
        $username = "root";
        $password = "mysql";
        
        $conexion = new PDO("mysql:host=$servername;dbname=juego", $username, $password); 
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
        $sentenciaTexto = "select Email, Password, Id, Admin from usuario";
        $sentencia = $conexion->prepare($sentenciaTexto);
        
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();      
        $longitudArray = (count($resultado));
        
        while ($i <= $longitudArray) {
            if ($resultado[$i]['Email'] == $email && password_verify($password,$resultado[$i]['Password'])) {
                if ($resultado[$i]['Admin'] == 1) {
                    $sesionIniciada = 3;
                    $sesionActual = $resultado[$i]['Id'];
                    $i = $longitudArray + 1;
                    cambiarSession($sesionActual);
                }else{
                    $sesionIniciada = 2;
                    $sesionActual = $resultado[$i]['Id'];
                    // setcookie("sessionActual", $resultado[$i]['Id'], strtotime( '+30 days' ), "../JUEGO4/php_library/bd.php");
                    // $_COOKIE['sessionActual'] = $resultado[$i]['Id'];
                    // $_SESSION['sessionActual'] = $resultado[$i]['Id'];
                    cambiarSession($sesionActual);
                    $i = $longitudArray + 1;
                }
            } else {
                $sesionIniciada = 1;
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

    function obtenerSession(){
        $conexion = abrirBd();
        $sentenciaTexto = "select UsuarioActual from session_iniciada";

        $sentencia = $conexion->prepare($sentenciaTexto);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll();

        $resultado2 = $resultado[0]['UsuarioActual'];

        $conexion = cerrarBd();


        return $resultado2;
    }

    function comprobarPuntuacionJuegos($juegosJugados, $sesionIniciada){

        $i = 0;
        $conexion = abrirBd();
        $sentenciaTexto = "select IdUsuario, IdJuego, Puntuacion from usuario_juego_curso";
        $sentencia = $conexion->prepare($sentenciaTexto);
        
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();      
        $longitudArray = (count($resultado));

        while ($i < $longitudArray) {
            
            if ($resultado[$i]['IdUsuario'] == $sesionIniciada && $resultado[$i]['IdJuego'] == 1 && $resultado[$i]['Puntuacion'] != 0 ) {
                $juegosJugados[1]= true;
                // $i = $longitudArray + 1;
            } else {
            }

            if ($resultado[$i]['IdUsuario'] == $sesionIniciada && $resultado[$i]['IdJuego'] == 2 && $resultado[$i]['Puntuacion'] != 0 ) {
                $juegosJugados[2]= true;
                // $i = $longitudArray + 1;
            } else {
            }

            if ($resultado[$i]['IdUsuario'] == $sesionIniciada && $resultado[$i]['IdJuego'] == 3 && $resultado[$i]['Puntuacion'] != 0 ) {
                $juegosJugados[3]= true;
                // $i = $longitudArray + 1;
            } else {
            }

            if ($resultado[$i]['IdUsuario'] == $sesionIniciada && $resultado[$i]['IdJuego'] == 4 && $resultado[$i]['Puntuacion'] != 0 ) {
                $juegosJugados[4]= true;
                // $i = $longitudArray + 1;
            } else {
            }

            $i++;
            
        }
        $conexion = cerrarBd();

        return $juegosJugados;
    }

    function insertarPuntuacionJuegos(){
        $conexion = abrirBd();
        $i = 0;
        $sentenciaTexto = "select Puntuacion, IdUsuario, IdJuego from usuario_juego_curso";
        $sentencia = $conexion->prepare($sentenciaTexto);

        $sentencia->execute();
        $resultado = $sentencia->fetchAll();

        $longitudArray = (count($resultado));
        $sessionActual = obtenerSession();
        $juego1Contador = 0;
        $juego2Contador = 0;
        $juego3Contador = 0;
        $juego4Contador = 0;

        $conexion = cerrarBd();

        $juego  = [false, false, false, false];

        while ($i < $longitudArray) {
            if ($resultado[$i]['IdUsuario'] == $sessionActual && $resultado[$i]['IdJuego'] == 1 ) { //variable juego no esta clara
                if ($resultado[$i]['Puntuacion'] > 0) {
                } 
            } else{
                $juego1Contador++;
            }

            if ($resultado[$i]['IdUsuario'] == $sessionActual && $resultado[$i]['IdJuego'] == 2 ) { //variable juego no esta clara
                if ($resultado[$i]['Puntuacion'] > 0) {
                    # code...
                }  
            }else{
                $juego2Contador++;
            }

            if ($resultado[$i]['IdUsuario'] == $sessionActual && $resultado[$i]['IdJuego'] == 3 ) { //variable juego no esta clara
                if ($resultado[$i]['Puntuacion'] > 0) {
                    # code...
                }  
            } else{
                $juego3Contador++;
            }

            if ($resultado[$i]['IdUsuario'] == $sessionActual && $resultado[$i]['IdJuego'] == 4 ) { //variable juego no esta clara
                if ($resultado[$i]['Puntuacion'] > 0) {
                    # code...
                }  
            } else{
                $juego4Contador++;
            }
            
            
            if ($juego1Contador == $longitudArray) {
                $juego[0] = true;
            }

            if ($juego2Contador == $longitudArray) {
                $juego[1] = true;
            }

            if ($juego3Contador == $longitudArray) {
                $juego[2] = true;
            }

            else if ($juego4Contador == $longitudArray) {
                $juego[3] = true;
            }

            if ($juego1Contador == $longitudArray || $juego2Contador == $longitudArray || $juego3Contador == $longitudArray || $juego4Contador == $longitudArray) {
                crearInsert($juego, $sessionActual);
            }

           $i++;
        }

        

    }

    function crearInsert($juego, $usuario){
        for ($i=0; $i < 4 ; $i++) { 
            if ($juego[$i] == true) {
                # code...
                $conexion = abrirBd();
    
                $sentenciaTexto = "insert into usuario_juego_curso values (null, :juego, :id_usuario, 3, 0 )";
                $sentencia = $conexion->prepare($sentenciaTexto);
        
        
                $sentencia->bindParam(':id_usuario', $usuario);
                $sentencia->bindParam(':juego', $juego[$i]);
        
                $sentencia->execute();
                
                $conexion = cerrarBd();
        
                return $juego;
            }
        }
        
            
    }

    

    // function comprobarJuegoJugado($puntuacion){

    //     $conexion = openBd();
    //     $i = 0;
    //     $sentenciaTexto = "select Puntuacion, IdUsuario, IdJuego from usuario_juego_curso";
    //     $sentencia = $conexion->prepare($sentenciaTexto);

    //     $sentencia->execute();
    //     $resultado = $sentencia->fetchAll();
    //     $longitudArray = (count($resultado));
        

    //     while ($i <= $longitudArray) {
    //         if ($resultado[$i]['IdUsuario'] == $sessionActual && $resultado[$i]['IdJuego'] == $i && $resultado[$i]['Puntuacion'] != null) {
    //             $cambiarPuntuacion = 2;
    //             $i = $longitudArray + 1;
                
    //         }
        
        
    // }


    






?>

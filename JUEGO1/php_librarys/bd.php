<?php

function openBd()
{
    $servername = "localhost:3306";
    $username = "root";
    $password = "mysql";


    $conexion = new PDO("mysql:host=$servername;dbname=juego", $username, $password);
    // set the PDO error mode to exception
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("set names utf8");

    return $conexion;
}


function closeBd()
{

    return null;
}

function selectCursos()
{
    $conexion = openBd();

    $sentenciaText = "SELECT * from curso";

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();


    $conexion = closeBd();

    return $resultado;
}

function selectRanking()
{
    $conexion = openBd();
    $sentenciaText = "select * from usuario_juego_curso INNER JOIN usuario ON usuario.Id = usuario_juego_curso.IdUsuario  where idJuego=1 ORDER BY Puntuacion DESC LIMIT 5;";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBd();

    return $resultado;
}



function obtenerSession()
{
    $conexion = openBd();
    $sentenciaTexto = "select UsuarioActual from session_iniciada";

    $sentencia = $conexion->prepare($sentenciaTexto);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    $resultado2 = $resultado[0]['UsuarioActual'];

    $conexion = closeBd();


    return $resultado2;
}

// function insertPuntuacion($puntuacion){
//     $idUsuario = obtenerSession();
//     $conexion=openBd();
//     $sentenciaText="INSERT INTO usuario_juego_curso (IdJuego,IdUsuario,IdCurso,Puntuacion)VALUES('2','".$idUsuario."','4','".$puntuacion."');";
//     $sentencia = $conexion->prepare($sentenciaText);
//     $sentencia->execute();
//     $resultado=$sentencia->fetchAll();
//     $conexion=closeBd();

//     return $resultado;
// }

function insertarPuntuacion($puntuacion)
{

    $sessionActual = obtenerSession();

    if ($puntuacion == null) {
    } else {
        $conexion = openBd();
        $i = 0;
        $sentenciaTexto = "select Puntuacion, IdUsuario, IdJuego from usuario_juego_curso";
        $sentencia = $conexion->prepare($sentenciaTexto);

        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        $longitudArray = (count($resultado));


        while ($i < $longitudArray) {
            if ($resultado[$i]['IdUsuario'] == $sessionActual && $resultado[$i]['IdJuego'] == 1 && $resultado[$i]['Puntuacion'] > $puntuacion) {
                $cambiarPuntuacion = 2;
                $i = $longitudArray + 1;
            } else if ($resultado[$i]['IdUsuario'] == $sessionActual && $resultado[$i]['IdJuego'] == 1 && $resultado[$i]['Puntuacion'] <= $puntuacion) {
                $cambiarPuntuacion = 1;
                $i = $longitudArray + 1;
            } else {
                if ($puntuacion == null) {
                    $cambiarPuntuacion = 2;
                    $i = $longitudArray + 1;
                } else {
                    $cambiarPuntuacion = 0;
                    $i++;
                }
            }
        }

        $conexion = closeBd();

        if ($cambiarPuntuacion == 0) {
            $conexion = openBd();

            $sentenciaTexto = "insert into usuario_juego_curso values (null, 1, :id_usuario, 3, :puntuacion )";
            $sentencia = $conexion->prepare($sentenciaTexto);


            $sentencia->bindParam(':id_usuario', $sessionActual);
            // $sentencia->bindParam(':id_curso', $cursoUsuario);
            $sentencia->bindParam(':puntuacion', $puntuacion);

            $sentencia->execute();

            $conexion = closeBd();
        } else if ($cambiarPuntuacion == 1) {

            $conexion = openBd();

            $sentenciaTexto = "update usuario_juego_curso set Puntuacion = :puntuacion where IdUsuario = :id_usuario and IdJuego = 1";
            $sentencia = $conexion->prepare($sentenciaTexto);


            $sentencia->bindParam(':id_usuario', $sessionActual);
            // $sentencia->bindParam(':id_curso', $cursoUsuario);
            $sentencia->bindParam(':puntuacion', $puntuacion);


            $sentencia->execute();

            $conexion = closeBd();
        } else {
        }
    }
}

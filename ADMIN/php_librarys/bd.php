<?php
 
function openBd(){
    $servername = "localhost";
    $username = "root";
    $password = "mysql";


  $conexion = new PDO("mysql:host=$servername;dbname=juego", $username, $password);
  // set the PDO error mode to exception
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion->exec("set names utf8");

  return $conexion;
}


function closeBd(){

    return null;
}

function selectCursos(){
    $conexion=openBd();

    $sentenciaText="SELECT * from curso";

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();


    $conexion=closeBd();

    return $resultado;
}

function selectUsuarios(){
    $conexion=openBd();

    $sentenciaText="SELECT * from usuario";

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();


    $conexion=closeBd();

    return $resultado;
}

function selectRanking1(){
    $conexion=openBd();
    $sentenciaText="select * from usuario_juego_curso INNER JOIN usuario ON usuario.Id = usuario_juego_curso.IdUsuario where idJuego=1 ORDER BY Puntuacion DESC;";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;
}

function selectRanking2(){
    $conexion=openBd();
    $sentenciaText="select * from usuario_juego_curso INNER JOIN usuario ON usuario.Id = usuario_juego_curso.IdUsuario where idJuego=2 ORDER BY Puntuacion DESC;";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;
}

function selectRanking3(){
    $conexion=openBd();
    $sentenciaText="select * from usuario_juego_curso INNER JOIN usuario ON usuario.Id = usuario_juego_curso.IdUsuario where idJuego=3 ORDER BY Puntuacion DESC;";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;
}

function selectRanking4(){
    $conexion=openBd();
    $sentenciaText="select * from usuario_juego_curso INNER JOIN usuario ON usuario.Id = usuario_juego_curso.IdUsuario where idJuego=4 ORDER BY Puntuacion DESC;";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;
}


function selectRanking(){
    $conexion=openBd();
    $sentenciaText="select * from usuario_juego_curso INNER JOIN usuario ON usuario.Id = usuario_juego_curso.IdUsuario where idJuego=2 ORDER BY Puntuacion DESC LIMIT 5;";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;
}

function insertPuntuacion($puntuacion){
    $conexion=openBd();
    $sentenciaText="INSERT INTO usuario_juego_curso (IdJuego,IdUsuario,IdCurso,Puntuacion)VALUES('2','2','4','".$puntuacion."');";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;
}





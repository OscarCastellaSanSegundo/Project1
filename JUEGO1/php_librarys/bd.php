<?php

function openBD()
{
    $servername = "localhost";
    $username = "root";
    $password = "mysql";


    $conn = new PDO("mysql:host=$servername;dbname=juego", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8");

    return $conn;
}

function closeBD(){
    return null;
}

function selectJuegos(){
    $conn = openBD();

    $sentenciaText = "SELECT nombre, apellido, puntuacion from usuario_juego_curso JOIN usuario ON usuario.id = usuario_juego_curso.idUsuario where IdJuego = 4 ORDER BY puntuacion DESC";

    $stmt = $conn->prepare($sentenciaText);
    $stmt->execute();

    $result = $stmt->fetchAll();

    $conn = closeBD();
    return $result;
}
?>
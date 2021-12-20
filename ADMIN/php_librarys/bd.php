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

function selectUsuarioEdit($id){
    $conexion=openBd();
    $sentenciaText="select * from usuario WHERE id = ".$id;
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;

}

function updateUsuario($id,$nombre,$apellido,$email,$password){

    $paswordEncriptado=password_hash($password,PASSWORD_DEFAULT);

    $conexion=openBd();
    $sentenciaText="UPDATE usuario SET Nombre='".$nombre."' , Apellido='".$apellido."', Email='".$email."', Password='".$paswordEncriptado."' WHERE Id=".$id;
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;

}

function insertUsuario($nombre,$apellido,$email,$password){

    $paswordEncriptado=password_hash($password,PASSWORD_DEFAULT);

    $conexion=openBd();
    $sentenciaText="INSERT INTO usuario values(null,'".$email."','".$nombre."','".$apellido."','".$paswordEncriptado."',1,1)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;

}

function deleteID($id){

    $conexion=openBd();
    $sentenciaText="DELETE FROM usuario WHERE id = ".$id;
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;

}
/* 
function deleteIDCurso($id){

    $conexion=openBd();
    $sentenciaText="DELETE FROM curso WHERE id = ".$id;
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;

}

function insertCurso($id,$nombre){


    $conexion=openBd();
    $sentenciaText="INSERT INTO curso values(".$id." , ".$nombre.")";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;

}

function selectCursoEditar($id){
    $conexion=openBd();
    $sentenciaText="select * from curso WHERE id = ".$id;
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;

}

function updateCurso($id,$nombre){


    $conexion=openBd();
    $sentenciaText="UPDATE curso SET Nombre='".$nombre."'WHERE Id=".$id;
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion=closeBd();

    return $resultado;

} */




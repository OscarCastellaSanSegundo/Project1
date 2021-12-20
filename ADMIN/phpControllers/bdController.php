<?php session_start();

require_once('../php_librarys/bd.php');

$metodo = isset($_POST['metodo']) ? $_POST['metodo'] : '';
$_SESSION['idEditar'] = isset($_POST['numeroEditarBorrar']) ? $_POST['numeroEditarBorrar'] : '';
$_SESSION['idEditarCurso'] = isset($_POST['numeroEditarBorrarCurso']) ? $_POST['numeroEditarBorrarCurso'] : '';

//PARTE DE UPDATE USUARIOS
$idUsuarioCambiar = isset($_POST['IdUsuarioCambiar']) ? $_POST['IdUsuarioCambiar'] : '';
$cambiarNombre = isset($_POST['cambiarNombre']) ? $_POST['cambiarNombre'] : '';
$cambiarApellido = isset($_POST['cambiarApellido']) ? $_POST['cambiarApellido'] : '';
$cambiarEmail = isset($_POST['cambiarEmail']) ? $_POST['cambiarEmail'] : '';
$cambiarPassword = isset($_POST['cambiarPassword']) ? $_POST['cambiarPassword'] : '';
$cambiarPasswordRepetido = isset($_POST['cambiarPasswordRepetir']) ? $_POST['cambiarPasswordRepetir'] : '';

//PARA USUARIOS NUEVOS
$Nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : '';
$Apellido = isset($_POST['Apellido']) ? $_POST['Apellido'] : '';
$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
$PasswordRepetido = isset($_POST['PasswordRepetir']) ? $_POST['PasswordRepetir'] : '';

//PARA UPDATE CURSOS

$cambiarNombreCurso=isset($_POST['cambiarNombreCurso']) ? $_POST['cambiarNombreCurso'] : '';



switch ($metodo) {
    case 'editar':
        header('Location: ../editar.php');
        break;
    case 'cancelar':
        $_SESSION['error'] = false;
        header('Location: ../index.php');
        break;
    case 'editarUsuario':
        if ($cambiarPassword === $cambiarPasswordRepetido) {
            $_SESSION['error'] = false;
            updateUsuario($idUsuarioCambiar, $cambiarNombre, $cambiarApellido, $cambiarEmail, $cambiarPassword);
            header('Location: ../index.php');
        } else {
            $_SESSION['idEditar'] = $idUsuarioCambiar;
            $_SESSION['error'] = true;
            header('Location: ../editar.php');
        }
        break;
    case 'altaUsuario':
        if ($Password === $PasswordRepetido) {
            $_SESSION['error'] = false;
            insertUsuario($Nombre, $Apellido, $Email, $Password, 1, 1);
            $_SESSION["anyadido"] = true;
            header('Location: ../index.php');
        } else {

            $_SESSION['error'] = true;
            $_SESSION['anyadido'] = false;
            header('Location: ../crear.php');
        }
        break;
    case 'borrar':
        deleteID($_SESSION['idEditar']);
        header('Location: ../index.php');
        break;
  /*   case 'borrarCurso':
        deleteIDCurso($_SESSION['idEditarCurso']);
        header('Location: ../cursos.php');
        break;

    case 'editarCurso':
        header('Location: ../editarCurso.php');
        break;
        break;
    case 'editarCursoUpdate':

updateCurso($_SESSION['idEditarCurso'],$cambiarNombreCurso);
            header('Location: ../curso.php');  
      
        break; */
    default:
        # code...
        break;
}

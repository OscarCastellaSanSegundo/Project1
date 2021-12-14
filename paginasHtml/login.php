<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/loginStyle.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>login</title>
</head>

<body>
 
   <div class="container-principal">
       <div class="contenido-form">
           <div class="titulo-form">
               <h3>Iniciar Sesion</h3>
           </div>
           <form action="../php_controllers/php_controllers.php" method="GET">
            <div class="mb-3 m-4">
              <label for="inputEmail" class="form-label">Email </label>
              <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" required>
              <div id="emailHelp" class="form-text">Nunca usaremos tu mail para terceros.</div>
            </div>
            <div class="mb-3 m-4">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
            </div>
           
            <div class="boton-login">
               
                <a href="../index.php"><input type="button" class="btn btn-dark miBtn" value="Cancelar"></input></a>
                <button type="submit" class="btn btn-primary miBtn" name="loguearUsuario">Login</button>
            </div>
            <div class="registrate">
                <a href="registrate.php">Registrate</a>
            </div>
            
          </form>
          <div class="Regístrate">

          </div>
          
       </div>

   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
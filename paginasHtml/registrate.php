<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/registerStyle.css" rel="stylesheet">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-principal">
       <div class="contenido-form">
           <div class="titulo-form">
               <h3>Registrarse</h3>
           </div>
           <div class="margenFormulario">
                <form action="../php_controllers/php_controllers.php" method="POST">

                    <div class="row" style="height: 50px;"> <!-- Nombre -->
                        <div class="col-3">
                            <label for="nombreUsuario">Nombre</label>
                        </div>
                        <div class="col-9">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" maxlength="20" placeholder="Introduce tu nombre..." aria-label="Amount (to the nearest dollar)" required>          
                            </div>
                        </div>
                    </div>
                        
                    <div class="row" style="height: 50px;"> <!-- Apellidos -->
                        <div class="col-3">
                            <label for="apellidosUsuario">Apellidos</label>
                        </div>
                        <div class="col-9">
                            <div class="input-group">
                                <input type="text" class="form-control" name="apellidosUsuario" id="apellidosUsuario"  maxlength="50" placeholder="Introduce tus apellidos..." aria-label="Amount (to the nearest dollar)" required>          
                            </div>
                        </div>
                    </div>

                    <div class="row" style="height: 50px;"> <!-- Email -->
                        <div class="col-3">
                            <label for="emailUsuario">Email</label>
                        </div>
                        <div class="col-9">
                            <div class="input-group">
                                <input type="email" class="form-control" name="emailUsuario" id="emailUsuario"  maxlength="50" placeholder="correo@hotm..." aria-label="Amount (to the nearest dollar)" required>          
                            </div>
                        </div>
                    </div>

                    <div class="row" style="height: 50px;"> <!-- Contrasenya -->
                        <div class="col-3">
                            <label for="contraUsuario">Password</label>
                        </div>
                        <div class="col-9">
                            <div class="input-group">
                                <input type="password" class="form-control" name="contraUsuario" id="contraUsuario"  maxlength="15" placeholder="********..." aria-label="Amount (to the nearest dollar)" required>          
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row" style="height: 50px;"> 
                        <div class="col-3">
                            <label for="contraUsuario2">Repetir password</label>
                        </div>
                        <div class="col-9">
                            <div class="input-group">
                                <input type="password" class="form-control" name="contraUsuario2" id="contraUsuario2"  maxlength="15" placeholder="********..." aria-label="Amount (to the nearest dollar)" required>          
                            </div>
                        </div>
                    </div> -->

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-dark miBtn" href="login.php" role="button">Volver</a>
                        <button type="submit" class="btn btn-primary" name="insertarRegistro">Registrarse</button> 
                    </div>
                </form>
            </div>
          <div class="Regístrate">

          </div>
          
       </div>

   </div>

   
</body>
</html>




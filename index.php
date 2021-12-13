<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEP Politècnics - Portes Obertes</title>
    <script src="https://kit.fontawesome.com/f17ab486c8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--NAVBAR-->
    <header>
        <a href="#" class="brand"><img src="img/logoCEP0.png" alt="" width="30%"></a>
        <div class="menu-btn"></div>
        <div class="navigation">
            <div class="navigation-items">
                <a href="#" id="inicio">Inicio</a>
                <a id="centro" href="#">Centro</a>
                <a id="metodologia" href="#">Metodología</a>
                <a id="grados" href="#">Grados</a>
                <a id="equipo" href="#">Equipo</a>
                <a id="juegos" href="#"><span style="color: gold;">Juegos</span></a>
                <a id="contacto" href="#">Idioma</a>
            </div>
        </div>
    </header>

    <!--VIDEOS-->
    <section class="home" id="home">
        <video class="video-slide active" src="img/juegos.mp4" id="video-home" autoplay muted loop></video>
        <video class="video-slide" src="img/videoEntrada.mp4" id="video-centro" autoplay muted loop></video>
        <video class="video-slide" src="img/03.mp4" id="video-metodologia" autoplay muted loop></video>
        <video class="video-slide" src="img/01.mp4" id="video-equipo" autoplay muted loop></video>
        <video class="video-slide" src="img/04.mp4" id="video-grados" autoplay muted loop></video>

        <!--CONTENIDO DE LOS VIDEOS-->
        <div class="content active" id="content-home">
            <h1>PORTES OBERTES<br><span>Politècnics</span></h1>
            <p>En el Politècnics apostamos fuerte por una educación con <span>enfoque práctico.</span><br>
                ¡Conoce más sobre nosotros <span>jugando</span> a una serie de juegos que nuestros própios
                <span>alumnos</span> han creado!
            </p>
            <a href="paginasHtml/login.php">¡Adéntrate en nuestra aventura!</a>
        </div>

        <div class="content" id="content-meto">
            <h1>Metodología<br><span>Politècnics</span></h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos veniam labore consequatur, ab perferendis
                vero aliquid provident temporibus eius, iste optio. Quia aliquam temporibus obcaecati perferendis,
                voluptatem necessitatibus accusamus ipsum.</p>
            <a href="#">Read More</a>
        </div>

        <div class="content" id="content-centro">
            <h1>Nuestro<br><span>Centro</span></h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos veniam labore consequatur, ab perferendis
                vero aliquid provident temporibus eius, iste optio. Quia aliquam temporibus obcaecati perferendis,
                voluptatem necessitatibus accusamus ipsum.</p>
            <a href="#">Read More</a>
        </div>

        <div class="content" id="content-grados">
            <h1>Grados<br><span>Educativos</span></h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos veniam labore consequatur, ab perferendis
                vero aliquid provident temporibus eius, iste optio. Quia aliquam temporibus obcaecati perferendis,
                voluptatem necessitatibus accusamus ipsum.</p>
            <a href="#">Read More</a>
        </div>

        <div class="content" id="content-equipo">
            <h1>Equipo<br><span>Creativo</span></h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos veniam labore consequatur, ab perferendis
                vero aliquid provident temporibus eius, iste optio. Quia aliquam temporibus obcaecati perferendis,
                voluptatem necessitatibus accusamus ipsum.</p>
            <a href="#">Read More</a>
        </div>

        <!--BOTÓN CONTACTO: ICONOS-->
        <div class="media-icons">
            <div class="contacto">
                <div class="toggle">
                    <i class="fas fa-envelope"></i>
                </div>
                <li style="--i:1;">
                    <a href="#"><i class="fas fa-phone-alt"></i></a>
                </li>
                <li style="--i:2;">
                    <a href="#"><i class="fas fa-at"></i></a>
                </li>
                <li style="--i:3;">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li style="--i:4;">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li style="--i:5;">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
            </div>
        </div>
    </section>

    <!--LOGIN JUEGOS-->
    <div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">LOGIN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Tu correo no será utilizado por terceros.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div>
                            <label for="registro" class="form-text">¿Aún no estás registrado? <br> <a h="#"> Click
                                    aquí.</a> <br><br></label>
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
        <!--FIN MODAL-->
    </div>

    <div class="separator"></div>

    <!--SECCIÓN DE CONTENIDO-->
    <section class="grid-frase">
        <div class="content">
            <h2>El Método <br>Politècnics</h2>
            <p>En el <span style="color: #1680AC;">Politècnics</span> abogamos por una educación con
                <span style="color: #1680AC;">metodologías activas</span> que ayuden al alumno a sacar todo su potencial
                de cara a su futura carrera profesional. <br><br>Descubre qué nos diferencia del resto de centros
                educativos.</p><br>
            <a href="#">+INFO</a>
        </div>
    </section>


    <div class="separator"></div>

    <!--SECCIÓN DE CONTENIDO-->
    <section class="grid-grados">
        <div class="content">

        </div>
        <div class="content">
            <h2>FORMACIÓN <br>PROFESIONAL</h2>
            <p>Nuestro centro cuenta con una amplia oferta de <span>ramas profesionales</span> para estudiar. Consulta
                aquí los
                itinerarios que ofrecemos y da un nuevo impulso a tu <span>carrera profesional.</span></p><br>
            <a href="#">+INFO</a>
        </div>
    </section>


    <div class="separatorOscuro"></div>

    <!--SECCIÓN DE CONTENIDO-->

    <div class="contenedor-grid">
        <div class="grid-logos">
            <div class="img-logo">
                <a href="https://web.gencat.cat/ca/inici"><img src="img/logo-departament-educacio.png" width="100%">
            </div></a>
            <div class="img-logo">
                <a href="http://xtec.gencat.cat/ca/projectes/plurilinguisme/programes/internacionals/erasmusplus/"><img
                        src="img/logo-erasmus.png" width="100%"></div></a>
            <div class="img-logo">
                <a href="https://www.fundaciobcnfp.cat/es/"><img src="img/logo-fundacioBCN.png" width="100%"></div></a>
            <div class="img-logo"><img src="img/logoAcplus.png" width="40%"></div>
            <div class="img-logo"><img src="img/logo-ceb.png" width="100%"></div>
        </div>
    </div>

    <div class="separator"></div>

    <!--FOOTER-->
    <section class="footer">
        <div class="content">
            Centre Urquinaona<br>
            Plaça Urquinaona, 10 – <br>
            08010 Barcelona<br>
            Tel.: 93 302 02 24
        </div>

        <div class="content">
            Centre Santa Anna<br>
            C/Santa Anna, 28 – <br>
            08002 Barcelona<br>
            Tel.: 93 302 41 06
        </div>
        <div class="footer-admin">
            <a href="#" class="footer-btn">
                <i class="fas fa-user"></i>
                &nbsp ADMIN
            </a>
        </div>
    </section>

    <div class="separator"></div>

    <!--SCRIPTS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="/script.js"></script>
</body>

</html>

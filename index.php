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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <a id="juegos" href="./paginasHtml/juegos.php"><span style="color: gold;">Juegos</span></a>
                <a id="contacto" href="./paginasHtml/login.php">Admin</a>
            </div>
        </div>
    </header>

    <!--VIDEOS-->
    <section class="home" id="home">
        <video class="video-slide active" src="img/videoFinal.mp4" id="video-home" autoplay muted loop></video>
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
    </section>

    <div class="separator"></div>

    <!--SCRIPTS-->
    <script src="script.js"></script>
</body>

</html>

<?php
session_start();
if (!isset($_SESSION["id"]) ) {

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Página web enfocada en la gestión de un club de Arte de una universidad.">
    <meta name="keywords" content="Arte, Club, Universidad, Gestión, Actividades, Foro, Comunidad, Pintura, Cine, Escultura,
    Música, Fotografía, Literatura">
    <meta name="author" content="Lian Salmerón López, Jolie Alain Vásquez and Jinghao Wang">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temas de interes + actividades</title>
    <link rel="stylesheet" href="css/temasInteres.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/temasInteres.js"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<header>
    <nav class="barra_navegacion">
        <!--<div class="contenedor_barra_navegacion">-->
        <div class="contenedor_logo">
            <a href="https://universidadeuropea.com" target="_blank"><img class="logo_index" src="imgs/clubArte_logo.png"
                                                                          alt="Logo del club de arte">Universidad Europea</a>
        </div>



        <div class="contenedor_menu_lista">
            <ul id="lista_menu_principal">
                <li><a href="index.php">Home</a></li>
                <li id="actividades-temas">
                    <a href="temasInteres.php">Actividades</a>
                    <div class="contenedor_actividades_menu">
                        <ul id="lista-submenu-index">
                            <li id="li-pintura"><span><img src="imgs/palette.png" width="20%"><a href="">Pintura</a></span></li>
                            <li id="li-musica"><span><img src="imgs/music.png" width="20%"><a href="">Música</a></span></li>
                            <li id="li-escultura"><span><img src="imgs/estatua.png" width="20%"><a href="">Escultura</a></span></li>
                            <li id="li-literatura"><span><img src="imgs/libro-magico.png" width="20%"><a href="">Literatura</a></span></li>
                            <li id="li-cine"><span><img src="imgs/pelicula.png" width="20%"><a href="">Cine</a></span></li>
                            <li id="li-fotografia"><span><img src="imgs/fotografia.png" width="20%"><a href="">Fotografía</a></span></li>

                        </ul>
                    </div>
                </li>
                <li id="li-foro"><a href="forum.php">Foro</a></li>
                <li id="li-about-us"><a href="aboutUs.html">About us</a></li>
                <li id="usuario-opciones">
                    <a href="user-profile.php"><img id="logo-usuario-barra-navegacion" src="imgs/user-avatar.png"
                                                    alt="Imagen del perfil del usuario"></a>
                    <div class="contenedor-opciones-usuario">
                        <ul id="lista-opciones-usuario">
                            <li id="li-mi-perfil"><span><img src="imgs/mi-perfil.png" width="25%"><a href="user-profile.php">Mi perfil</a></span></li>
                            <li id="li-log-out"><span><img src="imgs/logout.png" width="20%"><a href="#">Cerrar Sesión</a></span></li>

                        </ul>
                    </div>
                </li>

            </ul>
        </div>

        </div>
        <!--</div>-->
    </nav>
</header>


<div id="banner">
</div>

<div class="cajas">
    <div class="caja_foro"><h2>Foro</h2>
        <div class="forum-container">
            <div class="forum-content">
                <div class="forum-content-header">
                    <h2>¿Qué es el arte?</h2>
                    <p>Por: <span>Usuario 1</span></p>
                </div>
                <div class="forum-content-body">
                    <p>
                        El arte es una actividad humana que consiste en
                        la creación de obras de carácter estético,
                        que pueden ser expresadas mediante diferentes maneras.
                    </p>
                </div>
                <div class="forum-content-footer">
                    <p>Comentarios: <span>5</span></p>
                    <p>Fecha de publicación: <span>01/01/2020</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="caja_actividades"><h2>Actividades</h2>
        <div class="slide">
            <div class="slide-inner">
                <input class="slide-open" type="radio" id="slide-1"
                       name="slide" aria-hidden="true" hidden="" checked="checked">
                <div class="slide-item">
                    <img src="imgs/635dbec96075400eb6c18599a9be2ad0.jpg">
                </div>
                <input class="slide-open" type="radio" id="slide-2"
                       name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="imgs/Taller_Infantil.jpg">
                </div>
                <input class="slide-open" type="radio" id="slide-3"
                       name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="imgs/taller-pintura-06-1024x675.jpg">
                </div>
                <label for="slide-3" class="slide-control prev control-1">‹</label>
                <label for="slide-2" class="slide-control next control-1">›</label>
                <label for="slide-1" class="slide-control prev control-2">‹</label>
                <label for="slide-3" class="slide-control next control-2">›</label>
                <label for="slide-2" class="slide-control prev control-3">‹</label>
                <label for="slide-1" class="slide-control next control-3">›</label>
                <ol class="slide-indicador">
                    <li>
                        <label for="slide-1" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-2" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-3" class="slide-circulo">•</label>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>



<footer class="seccion-footer">
    <div class="contenedor-footer">
        <div class="fila-footer">
            <div class="contenedor-footer-columna">

                <h4>Información</h4>
                <ul>
                    <li><a href="#">Universidad Europea de Madrid</a></li>
                    <li><a href="#">Correo electrónico: clubArte@gmail.com</a></li>
                    <li><a href="#">Política de privacidad</a></li>
                </ul>
            </div>
            <div class="contenedor-footer-columna">
                <h4>Contáctanos</h4>
                <div class="relleno-informacion">
                    <form action="" method="post" enctype="text/plain" onsubmit="return validarEmail()">
                        Título:<br>
                        <input id="texto-titulo-email" type="text" name="titulo-email"><br>
                        E-mail:<br>
                        <input id="texto-nombre-email" type="text" name="email"><br>
                        Comment:<br>
                        <textarea id="contenido-mensaje" name="mensaje"></textarea>
                        <div class="contenedor-botones-email">
                            <input class="btn-email" type="submit" value="Enviar">
                            <input class="btn-email" type="reset" value="Eliminar">
                        </div>
                    </form>

                </div>
            </div>
            <div class="contenedor-footer-columna">
                <h4>Conócenos en persona</h4>
                <iframe class="goole-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6889.754931564399!2d-3.9162145900040786!3d40.3726724559064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd419031a94d45e5%3A0x375a8b6ca7a1dc4c!2sUniversidad%20Europea%20de%20Madrid!5e0!3m2!1ses!2ses!4v1672440888159!5m2!1ses!2ses"
                        width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
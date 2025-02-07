<?php
if (!isset($_SESSION["id"]) ) {
    $random = "";
    echo '<script type="text/javascript">';
    echo 'document.getElementById("logo-usuario-barra-navegacion").href = "login.php";';
    echo '</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Página web enfocada en la gestión de un club de Arte de una universidad.">
    <meta name="keywords" content="Arte, Club, Universidad, Gestión, Actividades, Foro, Comunidad, Pintura, Cine, Escultura,
    Música, Fotografía, Literatura">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lian Salmerón López, Jolie Alain Vásquez and Jinghao Wang">

    <title>Club de arte</title>
    <link rel="icon" type="imgs/png" href="imgs/clubArte_logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index.css">
    <!---->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/29c5b55c0c.js" crossorigin="anonymous"></script>

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
                    <a>Actividades</a>
                    <div class="contenedor_actividades_menu">
                        <ul id="lista-submenu-index">
                            <li id="li-pintura"><span><img src="imgs/palette.png" width="20%"><a href="temasInteresPintura.php">Pintura</a></span></li>
                            <li id="li-musica"><span><img src="imgs/music.png" width="20%"><a href="temasInteresMusica.php">Música</a></span></li>
                            <li id="li-escultura"><span><img src="imgs/estatua.png" width="20%"><a href="temasInteresEscultura.php">Escultura</a></span></li>
                            <li id="li-literatura"><span><img src="imgs/libro-magico.png" width="20%"><a href="temasInteresLiteratura.php">Literatura</a></span></li>
                            <li id="li-cine"><span><img src="imgs/pelicula.png" width="20%"><a href="temasInteresCine.php">Cine</a></span></li>
                            <li id="li-fotografia"><span><img src="imgs/fotografia.png" width="20%"><a href="temasInteresFotografia.php">Fotografía</a></span></li>
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
                            <li id="li-log-out"><span><img src="imgs/logout.png" width="20%"><a href="logOut.php">Cerrar Sesión</a></span></li>

                        </ul>
                    </div>
                </li>

            </ul>
        </div>

        </div>
        <!--</div>-->
    </nav>
</header>


<section id="seccion_carrusel_imgs">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/banner-index.png" class="d-block w-100" alt="Primera imagen del banner">
            </div>
            <div class="carousel-item">
                <img src="imgs/banner-index-2.png" class="d-block w-100" alt="Segunda imagen del banner">
            </div>
            <div class="carousel-item">
                <img src="imgs/banner-index-3.png" class="d-block w-100" alt="Tercer imagen del banner">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
            <span class="button-icon"><i class="fa-solid fa-angles-left"></i></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
            <span class="button-icon"><i class="fa-solid fa-angles-right"></i></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</section>



<section id="seccion_calendario">

    <div id="titulo_calendario">
        <h2>Calendario de actividades y eventos</h2>
    </div>
    <iframe src="https://embed.styledcalendar.com/#GcSDQPJO15GcPys8Me9g" title="Styled Calendar"
            class="styled-calendar-container" style="width: 100%; border: none;"
            data-cy="calendar-embed-iframe"></iframe>
    <script async type="module" src="https://embed.styledcalendar.com/assets/parent-window.js"></script>

</section>



<section id="seccion-cartas-interes">

    <div id="titulo-interes">
        <h2>Temas de interés</h2>
    </div>

    <div class="fila-footer row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="imgs/painting.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="tag tag-pintura">Pintura</span>
                    <h5 class="card-title">Pintura</h5>
                    <blockquote class="referencia-temas">
                        A veces hay que estropear un poquito el cuadro para poder terminarlo.
                        <cite> Eugène Delacroix </cite>
                    </blockquote>
                </div>
                <div class="card-footer">
                    <span><i class="fa-brands fa-wikipedia-w"></i></span>
                    <a href="https://es.wikipedia.org/wiki/Pintura" target="_blank">
                        <button class="btn-wiki"><span>Conoce más</span></button></a>


                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="imgs/music.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="tag tag-musica">Música</span>
                    <h5 class="card-title">Música</h5>
                    <blockquote class="referencia-temas">
                        En la música todos los sentimientos vuelven a su estado puro y el
                        mundo no es sino música hecha realidad.
                        <cite> Arthur Schopenhauer </cite>
                    </blockquote>
                </div>
                <div class="card-footer">
                    <span><i class="fa-brands fa-wikipedia-w"></i></span>
                    <a href="https://es.wikipedia.org/wiki/Música" target="_blank">
                        <button class="btn-wiki"><span>Conoce más</span></button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="imgs/sculture.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="tag tag-escultura">Escultura</span>
                    <h5 class="card-title">Escultura</h5>
                    <blockquote class="referencia-temas">
                        La escultura no consiste en el simple labrado de la forma de una cosa, sino el
                        labrado de su efecto.
                        <cite> John Ruskin </cite>
                    </blockquote>
                </div>
                <div class="card-footer">
                    <span><i class="fa-brands fa-wikipedia-w"></i></span>
                    <a href="https://es.wikipedia.org/wiki/Escultura" target="_blank">
                        <button class="btn-wiki"><span>Conoce más</span></button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="imgs/literature.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="tag tag-literatura">Literatura</span>
                    <h5 class="card-title">Literatura</h5>
                    <blockquote class="referencia-temas">
                        Una buena novela nos dice la verdad sobre su protagonista; pero una mala nos
                        dice la verdad sobre su autor.
                        <cite> Gilbert Keith Chesterton </cite>
                    </blockquote>
                </div>
                <div class="card-footer">
                    <span><i class="fa-brands fa-wikipedia-w"></i></span>
                    <a href="https://es.wikipedia.org/wiki/Literatura" target="_blank">
                        <button class="btn-wiki"><span>Conoce más</span></button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="imgs/cine.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="tag tag-cine">Cine</span>
                    <h5 class="card-title">Cine</h5>
                    <blockquote class="referencia-temas">
                        Un buen vino es como una buena película: dura un instante y te deja en la boca un sabor
                        a gloria; es nuevo en cada sorbo y , como ocurre con las películas, nace y
                        renace en cada saboreador.
                        <cite> Federico Fellini </cite>
                    </blockquote>
                </div>
                <div class="card-footer">
                    <span><i class="fa-brands fa-wikipedia-w"></i></span>
                    <a href="https://es.wikipedia.org/wiki/Cine" target="_blank">
                        <button class="btn-wiki"><span>Conoce más</span></button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="imgs/photography.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="tag tag-fotografia">Fotografía</span>
                    <h5 class="card-title">Fotografía</h5>
                    <blockquote class="referencia-temas">
                        La fotografia es un secreto de un secreto. Cuanto mas te dice, menos sabes.
                        <cite> Diane Arbus </cite>
                    </blockquote>
                </div>
                <div class="card-footer">
                    <span><i class="fa-brands fa-wikipedia-w"></i></span>
                    <a href="https://es.wikipedia.org/wiki/Fotografía" target="_blank">
                        <button class="btn-wiki"><span>Conoce más</span></button></a>
                </div>
            </div>
        </div>
    </div>

</section>





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
                        width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</footer>



<!--
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
-->
<!--
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
-->
<!--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->



</body>
<script type="text/javascript" src="js/index.js"></script>
</html>
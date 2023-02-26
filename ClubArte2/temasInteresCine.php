<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Página web enfocada en la gestión de un club de Arte de una universidad.">
    <meta name="keywords" content="Arte, Club, Universidad, Gestión, Actividades, Foro, Comunidad, Pintura, Cine, Escultura, Música, Fotografía, Literatura">
    <meta name="author" content="Lian Salmerón López, Jolie Alain Vásquez and Jinghao Wang">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temas de interes + actividades</title>
    <link rel="icon" type="imgs/png" href="imgs/clubArte_logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/temasInteres.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/29c5b55c0c.js" crossorigin="anonymous"></script>
    <!--script src="js/temasInteres.js"></script-->
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
                        <li><a href="index.html">Home</a></li>
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
                        <li id="li-foro"><a href="forum.html">Foro</a></li>
                        <li id="li-about-us"><a href="aboutUs.html">About us</a></li>
                    </ul>
                </div>
                <div class="contenedor-foto-usuario">
                    <a href="register.html"><img id="logo-usuario-barra-navegacion" src="imgs/user-avatar.png"
                                                alt="Imagen del perfil del usuario"></a>
                </div>
            <!--</div>-->
        </nav>
    </header>



    <div id="bannerCine">
    </div>  




    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="caja_actividades"><h2>Actividades y Talleres</h2>
                    <div class="slide">
                        <div class="slide-inner">
                            <input class="slide-open" type="radio" id="slide-1" 
                                    name="slide" aria-hidden="true" hidden="" checked="checked">
                            <div class="slide-item">
                                <div class="image-container">
                                    <img src="imgs/Actividades y taller/taller-de-cine-para-ninos.png" alt="">
                                    <div class="image-text">
                                        <p>El taller se divide en tres partes; una primera parte teórico-practica en la cual viajaremos por la historia del cine mudo y sonoro, una segunda parte práctica en la cual crearemos nuestro propio contenido audiovisual para terminar con una pequeña exhibición audiovisual con música y video manipulado en directo.</p>
                                    </div>
                                </div>
                            </div>
                            <input class="slide-open" type="radio" id="slide-2" 
                                    name="slide" aria-hidden="true" hidden="">
                            <div class="slide-item">
                                <div class="image-container">
                                    <img src="imgs/Actividades y taller/taller_niños_cine.jpg" alt="">
                                    <div class="image-text">
                                        <p>Descubriremos como se transforma la luz y el sonido en una película a través de ejercicios audiovisuales usando cámaras de video, teléfonos móviles, cámaras web HD, proyectores, retroproyectores, lupas, linternas… Experimentaremos con video y sonido… dirigiendo, grabando y editando nuestras propias creaciones audiovisuales. Crearemos un guión, un storyboard y reproduciremos un rodaje para conocer los nombres, tareas y responsabilidades de las personas que componen un equipo de rodaje.</p>
                                    </div>
                                </div>
                            </div>
                            <input class="slide-open" type="radio" id="slide-3" 
                                    name="slide" aria-hidden="true" hidden="">
                            <div class="slide-item">
                                <div class="image-container">
                                    <img src="imgs/Actividades y taller/Taller-Cine.jpg" alt="">
                                    <div class="image-text">
                                        <p>La parte final del taller será dedicada a la experimentación audiovisual a través del Live Cinema, juntando el material de creación grabado por los alumnos. Esta actividad tendrá una duración de 15 min y podrán asistir los familiares de los alumnos.</p>
                                    </div>
                                </div>
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
            <div class="col-md-12">
                <div class="caja_foro"><h2>Foro</h2>
                    <div class="forum-container">
                    <?php
                        include('linkBBDD.php');
                        $query = "SELECT * FROM publicaciontema 
                            INNER JOIN publicacion ON publicaciontema.idpubli = publicacion.idPubl
                            WHERE idTema = 3";

                        $result = mysqli_query($linkBBDD, $query);
                        $i = 0;
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                $id_pub = $row['idPubl'];
                                $titulo = $row['titulo'];
                                $contenido = $row['contenido'];
                                $fecha = $row['fechaPublicacion'];
                                $usuario = $row['ExpedienteUsuario'];
                                $likes = $row['contadorLike'];

                                $query2 = "SELECT * FROM usuario WHERE ExpUsuario = $usuario";
                                $result2 = mysqli_query($linkBBDD, $query2);
                                if ($result2) {
                                    while ($row2 = mysqli_fetch_array($result2)) {
                                        $nombre = $row2['NombreUsuario'];
                                        $apellidos = $row2['Apellido1Usuario'] . " " . $row2['Apellido2Usuario'];
                                    }
                                }





                        echo '<div class="forum-content">';
                            
                            echo '<div class="forum-content-header">';
                                echo '<h2>'.$titulo.'</h2>';

                            echo '</div>';

                            echo '<div class="forum-content-body">';
                                echo '<p>Contenido: '.$contenido.'</p>';
                            echo '</div>';

                            echo '<div class="forum-content-footer">';
                                echo '<p>Autor: '.$nombre.' '. $apellidos.'</p>';
                                echo '<p>Fecha de publicacion: '.$fecha.'</p>';
                                echo '<p>Número de likes '.$likes.'</p>';


                            echo '</div>';
                        echo '</div>';
                        



                }
                }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <hr>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Información</h4>
                    <ul>
                        <li><a href="#">Universidad Europea de Madrid</a></li>
                        <li><a href="#">Correo electrónico: clubArte@gmail.com</a></li>
                        <li><a href="#">Política de privacidad</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <div class="relleno-informacion">
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
                    </div>
                </div>
                <div class="footer-col">
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

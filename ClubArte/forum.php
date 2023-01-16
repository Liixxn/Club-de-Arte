<?php
session_start();
include 'server.php';
$error_subir = "";
$iniciado = 0;
$persona = 0;
if(isset($_SESSION['id'])){
    $persona= $_SESSION['id'];
    $iniciado = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foro del club de arte de la Universidad Europea de Madrid. Donde los integrantes
                                      del club pueden compartir sus ideas, opiniones de las actividades, experiencias
                                      o consejos con la comunidad del club.">
    <meta name="keywords" content="Arte, Club, Universidad, Foro, Comunidad, Pintura, Cine, Escultura,
    Música, Fotografía, Literatura">
    <meta name="author" content="Lian Salmerón López, Jolie Alain Vásquez and Jinghao Wang">
    <title>¡Foro, comparte tus ideas!</title>
    <link rel="icon" type="imgs/png" href="imgs/clubArte_logo.png">
    <link rel="stylesheet" href="css/forum.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/forum.js"></script>

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
<div class="banner">
</div>
<main>
    <div class="container-fluid apartadoForo">
        <div class="row" id="container-foro">
            <div class="col-sm-12" id="div-clasificadores">

                <div id='aniadirbtnDiv' class='col-lg-3 col-sm-4'>
                    <button id='aniadirPublicacion' class='btnAniadirPub' type='button' onclick='ShowDiv(<?php echo $iniciado; ?>)'
                            value='Añadir Publicacion'>+ Añadir Publicacion</button>
                </div>
                <script>
                    function ShowDiv(iniciado) {
                        if (iniciado == true){
                            document.getElementById("aniadidoPubli").style.display = "block";
                        }else{
                            alert("Debes iniciar sesión para añadir una publicación");
                        }
                    }

                </script>

                <select class="col-lg-2 col-sm-4 ">
                    <option value="0">Obtener por:</option>
                    <option value="1">Mostrar todo</option>
                    <option value="2">Pintura</option>
                    <option value="3">Música</option>
                    <option value="4">Cine</option>
                    <option value="5">Escultura</option>
                    <option value="6">Fotografía</option>
                    <option value="7">Literatura</option>
                </select>



            </div>

            <div class="container-fluid" style="display: none" id="aniadidoPubli">
                <div id="aniadirPubliDiv" class="col-sm-12  publi-editar">
                    <div id="cancelarPubliDiv" class='col-sm-12'>
                        <button id="cancelAniadirPub"   type='button' onclick='HideDiv()'
                                value='Añadir Publicacion'>X</button>
                    </div>
                    <script>
                        function HideDiv() {
                            document.getElementById("aniadidoPubli").style.display = "none";
                        }
                    </script>

                    <div id="errorCategoriasDiv" class="col-sm-12">
                        <?php
                        include('linkBBDD.php');

                        if (array_key_exists("subirPublicacion", $_POST)) {

                            $error_subir = "";
                            $titulo = $_POST['titulo'];
                            $contenido = $_POST['contenido'];
                            if(!empty($_POST['check_lista'])){
                                $titulo = $_POST['titulo'];
                                $contenido = $_POST['contenido'];
                                $usuario = $_SESSION['id'];
                                $fecha = date("Y-m-d H:i:s");

                                try {
                                    $query_publ = "INSERT INTO publicacion (ExpedienteUsuario,titulo, contenido,  fechaPublicacion) 
                                                VALUES ($usuario,'$titulo', '$contenido',  '$fecha');";
                                    $result = mysqli_query($linkBBDD, $query_publ);
                                    if ($result) {

                                        $idpubli = mysqli_insert_id($linkBBDD);

                                        foreach($_POST['check_lista'] as $check){
                                            $categoria = (int) $check;
                                            $query_cat = "INSERT INTO publicaciontema (idtema, idpubli) 
                                                    VALUES ($categoria, $idpubli);";
                                            $result_cat = mysqli_query($linkBBDD, $query_cat);
                                        }
                                        $_POST['titulo'] = "";
                                        $_POST['contenido'] = "";
                                        echo '<script>alert("¡Tu opinión se ha completado correctamente!")</script>';
                                        echo '<script>window.location.href = "forum.php";</script>';
                                    } else {
                                        $error_subir = "ALGO HA IDO MAL";
                                        echo "<p class='col-sm-12' id='errorSubir'>" .$error_subir."</p>";
                                        echo '<script type="text/javascript">';
                                        echo 'document.getElementById("aniadidoPubli").style.display = "block";';
                                        echo '</script>';



                                    }



                                }
                                catch (mysqli_sql_exception $e){
                                    var_dump($e);
                                    //exit();
                                }


                            }
                            else{
                                $error_subir = "No has seleccionado ninguna categoria";
                                echo "<p class='col-sm-12' id='errorSubir'>" .$error_subir."</p>";
                                echo '<script type="text/javascript">';
                                echo 'document.getElementById("aniadidoPubli").style.display = "block";';
                                echo '</script>';
                            }
                        }
                        ?>
                    </div>


                    <form class="col-sm-12" id="formSubirP" method="POST">
                        <div id="divAniadirA" class="col-lg-2 col-md-2 col-sm-12">
                            <label id="categorias-heading">Categorías de la publicación: </label>
                            <div id="cajaSelectTemas" >
                                <input type="checkbox" name="check_lista[]" id="pintura" value="1">
                                <label for="pintura"> Pintura</label><br>
                                <input type="checkbox" name="check_lista[]" id="musica"  value="2">
                                <label for="musica"> Música</label><br>
                                <input type="checkbox" name="check_lista[]" id="cine"  value="3">
                                <label for="cine"> Cine</label><br>
                                <input type="checkbox" name="check_lista[]" id="escultura" value="4">
                                <label for="escultura"> Escultura</label><br>
                                <input type="checkbox" name="check_lista[]" id="fotografia"  value="5">
                                <label for="fotografia"> Fotografia</label><br>
                                <input type="checkbox" name="check_lista[]" id="literatura" value="6">
                                <label for="literatura"> Literatura</label><br>
                            </div>
                        </div>
                        <div id="divAniadirB" class="col-lg-10 col-md-10 col-sm-12">
                            <div class="col-sm-12">
                                <label for="titulo">Título</label>
                                <input class="col-sm-12" type="text" id="titulo" name="titulo" placeholder="Título de la publicación" value="<?php echo isset($_POST['titulo'])? $_POST['titulo']:''; ?>" required>
                            </div>

                            <div class="col-sm-12">
                                <label class="col-sm-12" for="contenido">Contenido</label>
                                <textarea class="col-sm-12" id="contenido" name="contenido" rows="8" cols="50" required><?php echo isset($_POST['contenido'])? $_POST['contenido']:''; ?></textarea>
                            </div>
                            <div id="subirPubli" class="col-sm-12">
                                <input class="col-lg-3 col-sm-5 btnAniadirPub" id="subirPubbtn" name="subirPublicacion" type="submit" value="Añadir publicación">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div id="divTituloForo">
                <h2>Foro de la comunidad</h2>
            </div>



            <div class="col-sm-12" id="container-publicaciones">
                <?php
                include('linkBBDD.php');
                $query = "SELECT * FROM publicacion ORDER BY idPubl DESC";
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





                        echo '<div class="row publicacion">';
                            echo '<div class="col-md-2 col-xs-12 publi-icon-column">';

                                        $query3 = "SELECT * FROM publicaciontema 
                                                            INNER JOIN tema ON publicaciontema.idtema = tema.idTema
                                                            WHERE idpubli = $id_pub";
                                        $result3 = mysqli_query($linkBBDD, $query3);
                                        if ($result3) {
                                            while ($row3 = mysqli_fetch_array($result3)) {
                                                $tema = $row3['nombreTema'];
                                                echo '<div class="publi-icon col-sm-12">';
                                                    echo '<span class="tag col-md-12 col-sm-6 tema tag-'.$tema.'">'.$tema.'</span>';
                                                echo '</div>';
                                            }
                                        }
                            echo '</div>';
                            echo '<div class="col-md-6 col-xs-12 publi-title">';
                                echo '<h2 data-toggle="collapse" data-target="#demo'.$i.'" >'.$titulo.'</h2>';
                            echo '</div>';
                            echo '<div class="col-md-3 col-xs-8 publi-datos">';
                                echo '<p class="col-xs-12">Autor: '.$nombre.' '. $apellidos.'</p>';
                                echo '<p class="col-xs-12">Fecha de publicacion: '.$fecha.'</p>';
                            echo '</div>';

                            echo '<div class="col-md-1 col-xs-4 publi-likes">';
                                echo '<h3 id="numlikes'.$id_pub.'">'.$likes.'</h3>';
                                echo '<div id="wrapper'.$id_pub.'" class="icon-wrapper")">';
                                    echo '<i class="fas fa-heart"></i>';
                                    echo '<p style="display: none">'.$id_pub.'</p>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        if($iniciado) {
                            $yoLike = $_SESSION['id'];
                            $queryMegusta = 'SELECT * FROM megustas WHERE idpubli = ' . $id_pub . ' AND idusuario = ' . $yoLike;
                            $resultMegusta = mysqli_query($linkBBDD, $queryMegusta);


                            if (mysqli_num_rows($resultMegusta) > 0) {
                                echo '<script>document.getElementById("wrapper' . $id_pub . '").classList.add("liked")</script>';
                            }
                        }





                        echo '<div id="demo'.$i.'" class="col-md-11 col-xs-11 collapse row publi-contenido">';
                            echo '<h2>'.$titulo.'</h2>';
                            echo '<p>'.$contenido.'</p>';
                        echo'</div>';
                        $i++;


                }
                }
                ?>
            </div>

        </div>
    </div>



    <script>

        var heartContainer = document.getElementsByClassName('icon-wrapper');
        try {
            var iniciado = <?php echo $iniciado; ?>;
        }
        catch  {
            var iniciado = false;
        }

        Object.keys(heartContainer).forEach(singleElement => {
            if(iniciado){
                var idPersona = <?php echo $persona; ?>;
            heartContainer[singleElement].addEventListener('click',
                function () {
                    var xhttp;
                    if (heartContainer[singleElement].classList.contains('liked')) {
                        heartContainer[singleElement].classList.add('unliked');
                        heartContainer[singleElement].classList.remove('liked');
                        var idPublicacionLiked = heartContainer[singleElement].getElementsByTagName('p')[0].innerHTML;
                        document.getElementById('numlikes' + idPublicacionLiked).innerHTML = parseInt(document.getElementById('numlikes' + idPublicacionLiked).innerHTML) - 1;

                        xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200) {
                                alert(this.responseText);
                            }
                        };
                        xhttp.open('GET', 'likesActualization.php?q=' + idPublicacionLiked + '&op=2&id=' + idPersona, true); //2 = unlike
                        xhttp.send();

                        setTimeout(unlikeRemover, 250);


                    } else { // ME GUSTA LA PUBLICACION
                        heartContainer[singleElement].classList.add('liked');
                        heartContainer[singleElement].classList.remove('unliked');
                        var idPublicacionLiked = heartContainer[singleElement].getElementsByTagName('p')[0].innerHTML;

                        document.getElementById('numlikes' + idPublicacionLiked).innerHTML = parseInt(document.getElementById('numlikes' + idPublicacionLiked).innerHTML) + 1;

                        xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200) {
                                alert(this.responseText);
                            }
                        };
                        xhttp.open("GET", "likesActualization.php?q=" + idPublicacionLiked + "&op=1&id=" + idPersona, true); //1 = LIKE
                        xhttp.send();


                    }

                    function unlikeRemover() {
                        heartContainer[singleElement].classList.remove('unliked');
                    }
                });
            }
            else{
                heartContainer[singleElement].addEventListener('click',
                function () {
                    alert('Debes iniciar sesion para poder dar me gusta a las publicaciones');
                });
            }

        });

    </script>
</main>



<hr>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/29c5b55c0c.js" crossorigin="anonymous"></script>
<script src="js/forum.js"></script>
</html>
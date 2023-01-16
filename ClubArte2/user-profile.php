<?php
session_start();

if (!isset($_SESSION["id"]) ) {
    $random = "";
    echo '<script type="text/javascript">';
    echo 'alert("Para acceder a las publicaciones, antes debes inciciar sesión");';
    echo 'window.location.href = "login.php";';
    echo '</script>';

} else {
    include ('linkBBDD.php');
    $numExp = $_SESSION['id'];
    $queryInformacionUsuario = "SELECT * FROM usuario WHERE ExpUsuario = $numExp";

    $result = mysqli_query($linkBBDD, $queryInformacionUsuario);
    if ($result) {
        $tableUsuario = mysqli_fetch_array($result);
    }

}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Club de Arte</title>
    <link rel="icon" type="imgs/png" href="imgs/clubArte_logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="css/user-profile.css">
    <link rel="stylesheet" href="css/forum.css">
    <link rel="stylesheet" href="css/index.css">


</head>
<body>

<header>
    <nav class="menu-user">
        <div class="container-back">
            <a href="index.php"><img class="come-back-icon" src="imgs/back.png"
                                     alt="Icono para volver atrás"></a>
        </div>
        <a href="#" class="toggle-button">
            <span class="menu-user-bar"></span>
            <span class="menu-user-bar"></span>
            <span class="menu-user-bar"></span>
        </a>
        <div class="container-list-menu-user">
            <ul>
                <li><a href=#container-info-user>Datos</a></li>
                <li><a href="#container-publicaciones">Publicaciones</a></li>
            </ul>
        </div>
    </nav>


</header>



<section id="section_user_profile">
    <div id="background-image-user-profile">
        <div id="image-user-profile">
            <div id="username">
                <h3><?php echo $tableUsuario['NombreUsuario']?></h3>
            </div>
        </div>
    </div>
</section>




<div id="container-info-user">
    <div id="title-info-user">
        <h3>Mi Información</h3>
    </div>
    <div class="user-data">
        <div class="info-user">
            <div class="div-num-expediente">
                <h3>Número de expediente</h3>
                <p><?php echo $tableUsuario['ExpUsuario']?></p>
            </div>
            <div id="div-nombre">
                <h3>Nombre</h3>
                <p><?php echo $tableUsuario['NombreUsuario']?></p>
            </div>
            <div id="div-apellidos">
                <h3>Apellidos</h3>
                <p><?php echo $tableUsuario['Apellido1Usuario'], " ". $tableUsuario['Apellido2Usuario']?></p>
            </div>
            <div id="div-fecha">
                <h3>Fecha Nacimiento</h3>
                <p><?php echo $tableUsuario['FechaNacimiento']?></p>
            </div>
            <div id="div-email">
                <h3>Email</h3>
                <p><?php echo $tableUsuario['Email']?></p>
            </div>
            <div id="div-carrera">
                <h3>Carrera</h3>
                <p><?php echo $tableUsuario['Carrera']?></p>
            </div>
        </div>


        <div id="user-count">
            <div class="div-likes-count">
                <h3>Likes</h3>
                <img src="imgs/like.png">
                <div id="number-likes-count"></div>
                <p><?php
                    $queryPublicacionesLikes = "SELECT * FROM publicacion WHERE ExpedienteUsuario = $numExp";
                    $result = mysqli_query($linkBBDD, $queryPublicacionesLikes);
                    $publicacionesUsuario = mysqli_fetch_all($result);

                    $total_likes = 0;
                    foreach($publicacionesUsuario as $row) {
                        $total_likes += $row[5];
                    }
                    echo $total_likes;

                    ?></p>
            </div>
        </div>
    </div>
</div>


<div class="col-sm-12" id="container-publicaciones">
    <h3>MIS PUBLIACIONES</h3>
    <?php
    include('linkBBDD.php');
    $query = "SELECT * FROM publicacion WHERE ExpedienteUsuario = $numExp";
    $result = mysqli_query($linkBBDD, $query);
    $i = 0;
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $id_pub = $row['idPubl'];
            $titulo = $row['titulo'];
            $contenido = $row['contenido'];
            $fecha = $row['fechaPublicacion'];
            $usuario = $row['ExpedienteUsuario'];

            $query2 = "SELECT * FROM usuario WHERE ExpUsuario = $numExp";
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


            echo '</div>';
            echo '<div id="demo'.$i.'" class="col-md-11 col-xs-11 collapse row publi-contenido">';
            echo '<h2>'.$titulo.'</h2>';
            echo '<p>'.$contenido.'</p>';
            echo'</div>';
            $i++;


        }
    }
    ?>
</div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/29c5b55c0c.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/user-profile.js"></script>
<script src="js/forum.js"></script>
</html>
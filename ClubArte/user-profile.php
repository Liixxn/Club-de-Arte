<?php
session_start();
if (!isset($_SESSION["id"]) ) {
    $random = "";
    echo '<script type="text/javascript">';
echo 'alert("Para acceder a las publicaciones, antes debes inciciar sesión");';
echo 'window.location.href = "login.php";';
echo '</script>';

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Club de Arte</title>
    <link rel="icon" type="imgs/png" href="imgs/clubArte_logo.png">
    <link rel="stylesheet" href="css/user-profile.css">



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
          <li><a href="#">Configuración</a></li>
          <li><a href="#">Publicaciones</a></li>
        </ul>
      </div>
    </nav>


  </header>



  <section id="section_user_profile">
    <div id="background-image-user-profile">
      <div id="image-user-profile">
        <div id="username">
          <h3>Nombre</h3>
          <p>Estado</p>
        </div>
      </div>
    </div>
  </section>



  <div id="container-calendar">

  </div>



  <div id="container-info-user">
    <div id="title-info-user">
        <h3>Mi Información</h3>
    </div>
    <div class="user-data">
      <div class="info-user">
        <div class="div-num-expediente">
          <h3>Número de expediente</h3>
          <p>000000000</p>
        </div>
        <div id="div-nombre">
          <h3>Nombre</h3>
          <p>XXXXX</p>
        </div>
        <div id="div-apellidos">
          <h3>Apellidos</h3>
          <p>XXXXXXXX XXXXXXXXXX</p>
        </div>
        <div id="div-fecha">
          <h3>Fecha Nacimiento</h3>
          <p>30-9-2022</p>
        </div>
        <div id="div-email">
          <h3>Email</h3>
          <p>XXXXXXXX@gmail.com</p>
        </div>
        <div id="div-telefono">
          <h3>Teléfono</h3>
          <p>XXXXXXXXX</p>
        </div>
        <div id="div-carrera">
          <h3>Carrera</h3>
          <p>Ingeniería Informática</p>
        </div>
        <div id="div-curso">
          <h3>Curso</h3>
          <p>3</p>
        </div>
      </div>


      <div id="user-count">
        <div class="div-likes-count">
          <h3>Likes</h3>
          <img src="imgs/like.png">
          <div id="number-likes-count"></div>
        </div>
        <div class="div-saves">
          <h3>Guardados</h3>
          <img src="imgs/bookmark.png">
          <div id="number-saves-count"></div>
      </div>
    </div>
  </div>










</body>
  <script type="text/javascript" src="js/user-profile.js"></script>
</html>
<?php
    include('linkBBDD.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Registrate aquí!</title>
    <link rel="icon" type="imgs/png" href="imgs/clubArte_logo.png">
    <link rel="stylesheet" href="css/register_forum.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/29c5b55c0c.js" crossorigin="anonymous"></script>
</head>
<body>



<header id="container header-registro">
    <div class="div-header-registro">

        <a class="col-lg-1 col-sm-2" href="index.html"><img  id="img-logo-home" src="imgs/clubArte_logo.png" alt="logo que va a home">Home</a>
        <div class="col-lg-10 col-sm-10" id="div-inicio-sesion">
            <p class="col-lg-2 col-sm-3">¿Ya tienes cuenta?</p>
            <form class="col-lg-2 col-sm-4" action="login.html">
                <input class="btn-wiki" id="inicioSesion" type="submit" value="Inicia Sesion" alt="¿Ya tienes Cuenta? ¡Inicia sesión!">
            </form>
        </div>
    </div>
</header>



<main id="container main-registro">
    <div class="row div-main-registro" style="margin: auto">
        <div class="col-lg-6" id="div-informacion">
            <h4>¡Al registrarte podrás participar y enterarte de todas las actividades que se realizan en el club!</h4>
            <img src="imgs/clubArte_logo.png" alt="logo del club" id="img-informacion">
        </div>
        <div class="col-lg-6" id="div-form-registro">
            <div id="div-titulo-registro">
                <h1>¡Registrate aquí!</h1>
            </div>
            <form id="div-inputs-registro" class="col-sm-12" action="register.php" method="POST">

                <div class="div-inputs" id="div-input-nombre">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                </div>
                <div class="div-inputs" id="div-input-apellido">
                    <label for="apellidos">Apellido</label>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Apellido" required>
                </div>
                <div class="div-inputs" id="div-input-email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="div-inputs" id="div-input-numExpediente">
                    <label for="nexpediente">N° de expediente</label>
                    <input type="number" name="nexpediente" id="nexpediente" placeholder="Número de expediente" required>
                </div>
                <div class="div-inputs" id="div-input-fechaNac">
                    <label for="fechaNac">Fecha de nacimiento</label>
                    <input type="date" name="fechaNac" id="fechaNac" placeholder="Repetir Contraseña" required>
                </div>
                <div class="div-inputs " id="div-input-carrera">
                    <label for="carrera">Carrera</label>
                    <input type="text" name="carrera" id="carrera" placeholder="Carrera" required>
                </div>
                <div class="div-inputs" id="div-input-contrasena">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required>
                </div>
                <div class="div-inputs" id="div-input-contrasena2">
                    <label for="contrasena2">Repetir Contraseña</label>
                    <input type="password" name="contrasena2" id="contrasena2" placeholder="Repetir Contraseña" required>
                </div>
            </form>
            <div class="col-lg-12 col-sm-12" id="div-btn-registro">
                <input id="btn-registrar" class="btn-wiki" type="submit" value="Registrarse" alt="¡Registrate!">
            </div>
        </div>
    </div>
</main>
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
                <h4>Contáctanos</h4>
                <div class="relleno-informacion">

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
<script src="js/register_forum.js"></script>

</body>
</html>
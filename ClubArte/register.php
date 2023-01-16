<?php
    include('server.php');

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

        <a class="col-lg-1 col-sm-2" href="index.php"><img  id="img-logo-home" src="imgs/clubArte_logo.png" alt="logo que va a home">Home</a>
        <div class="col-lg-10 col-sm-10" id="div-inicio-sesion">
            <p class="col-lg-2 col-sm-3">¿Ya tienes cuenta?</p>
            <form class="col-lg-2 col-sm-4" action="login.php">
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
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo isset($_POST['nombre'])? $_POST['nombre']:''; ?>"  required>
                </div>
                <div class="div-inputs" id="div-input-apellido-1">
                    <label for="apellido 1">Apellido</label>
                    <input type="text" name="apellido_1" id="apellido1" placeholder="Apellido 1" value="<?php echo isset($_POST['apellido_1'])? $_POST['apellido_1']:''; ?>" required>
                </div>
                <div class="div-inputs" id="div-input-apellido-2">
                    <label for="apellido 2">Apellido</label>
                    <input type="text" name="apellido_2" id="apellido2" placeholder="Apellido 2" value="<?php echo isset($_POST['apellido_2'])? $_POST['apellido_2']:''; ?>" required>
                </div>
                <div class="div-inputs" id="div-input-email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" value="<?php echo isset($_POST['email'])? $_POST['email']:''; ?>" required>
                </div>
                <div class="div-inputs" id="div-input-numExpediente">
                    <label for="nexpediente">N° de expediente</label>
                    <input type="number" name="nexpediente" id="nexpediente" placeholder="Número de expediente" value="<?php echo isset($_POST['nexpediente'])? $_POST['nexpediente']:''; ?>" required>
                </div>
                <div class="div-inputs" id="div-input-fechaNac">
                    <label for="fechaNac">Fecha de nacimiento</label>
                    <input type="date" name="fechaNac" id="fechaNac" placeholder="Repetir Contraseña" value="<?php echo isset($_POST['fechaNac'])? $_POST['fechaNac']:''; ?>" required>
                </div>
                <div class="div-inputs " id="div-input-carrera">
                    <label for="carrera">Carrera</label>
                    <input type="text" name="carrera" id="carrera" placeholder="Carrera" value="<?php echo isset($_POST['carrera'])? $_POST['carrera']:''; ?>" required>
                </div>
                <div class="div-inputs" id="div-input-contrasena">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" value="<?php echo isset($_POST['contrasena'])? $_POST['contrasena']:''; ?>" required>
                </div>
                <div class="div-inputs" id="div-input-contrasena2">
                    <label for="contrasena2">Repetir Contraseña</label>
                    <input type="password" name="contrasena2" id="contrasena2" placeholder="Repetir Contraseña" value="<?php echo isset($_POST['contrasena2'])? $_POST['contrasena2']:''; ?>" required>
                </div>
                <div class="col-lg-12 col-sm-12" id="div-btn-registro">
                    <input id="btn-registrar" name="signUp" class="btn-wiki" type="submit" value="Registrarse" alt="¡Registrate!">
                </div>
            </form>

        </div>
    </div>
</main>
<script src="js/register_forum.js">
</script>
</body>
</html>
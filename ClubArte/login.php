<?php
include('server.php');
$error2='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Inicia sesión!</title>
    <link rel="icon" type="imgs/png" href="imgs/clubArte_logo.png">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/29c5b55c0c.js" crossorigin="anonymous"></script>
</head>
<body>


    <header id="container header-login">
        <div class="div-header-login">

            <a class="col-lg-1 col-sm-2" href="index.php"><img  id="img-logo-home" src="imgs/clubArte_logo.png" alt="logo que va a home">Home</a>
            <div class="col-lg-10 col-sm-10" id="div-inicio-sesion">
                <p class="col-lg-2 col-sm-3">¿No tienes cuenta?</p>
                <form class="col-lg-2 col-sm-4 " action="register.php">
                    <input class="col-lg-1 btn-wiki" id="btn-registrar-login" type="submit" value="Registrarse" alt="¿No tienes Cuenta? ¡Registrate!">
                </form></div>
        </div>
    </header>


    <div class="contenidoBodyRegistro">
    <main id="container main-login">
        <div class="row div-main-login" style="margin: auto">
            <div class="col-lg-5 col-sm-7" id="div-form-login">
                <div id="div-titulo-login">
                    <h1>¡Inicia sesión!</h1>
                </div>
                <form id="div-inputs-login" class="col-sm-12" method="POST" >
                    <div class="error"> <?php echo $error2 ?> </div>

                    <div class="div-inputs" id="div-input-email-login">
                        <label for="email">Email</label>
                        <input type="email" name="emailLogin" id="email" placeholder="Email" required>
                    </div>

                    <div class="div-inputs" id="div-input-contrasena-login">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" name="contrasenaLogin" id="contrasena" placeholder="Contraseña" required>
                    </div>
                    <div class="col-lg-12 col-sm-12" id="div-btn-login">
                        <input id="btn-login" name="logIn" class="btn-wiki" type="submit" value="Acceder" alt="Iniciar sesión">
                    </div>
                </form>
            </div>
        </div>
    </main>



</div>

</body>
</html>
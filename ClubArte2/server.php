<?php

if(!isset($_SESSION['id'])){
    session_start();
}



$error = "";

if (array_key_exists('signUp', $_POST)){
    include('linkBBDD.php');
    //tomando los datos del usuario

    $name = mysqli_real_escape_string($linkBBDD, $_POST['nombre']);
    $apellido_1 = mysqli_real_escape_string($linkBBDD, $_POST['apellido_1']);
    $apellido_2 = mysqli_real_escape_string($linkBBDD, $_POST['apellido_2']);
    $email = mysqli_real_escape_string($linkBBDD, $_POST['email']);
    $nexpediente = mysqli_real_escape_string($linkBBDD, $_POST['nexpediente']);
    $fechaNac = mysqli_real_escape_string($linkBBDD, $_POST['fechaNac']);
    $carrera = mysqli_real_escape_string($linkBBDD, $_POST['carrera']);
    $contrasena = mysqli_real_escape_string($linkBBDD, $_POST['contrasena']);
    $repetContra = mysqli_real_escape_string($linkBBDD, $_POST['contrasena2']);
    echo "  $name <br> $email";

    if($contrasena !== $repetContra){
        $error = "<br>Contraseñas no iguales<br>";
        $_POST['contrasena'] = '';
        $_POST['contrasena2'] = '';
    }
    if($error){
        $error = "Error en los campos<br>".$error;
    }else{
        $query ="SELECT ExpUsuario FROM usuario WHERE Email = '$email'";
        $result = mysqli_query($linkBBDD, $query);
        if(mysqli_num_rows($result) > 0){
            $error = "El email escogido ya existe";
        }
        else {
            $date=date("Y-m-d H:i:s",strtotime($fechaNac));
            $contraEncript = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
            $nexpediente = (int) $nexpediente;
            try {
                $query = "INSERT INTO usuario
             (ExpUsuario, NombreUsuario, Apellido1Usuario, Apellido2Usuario,
                            `FechaNacimiento`, Email, Contrasenia, Carrera) VALUES ('$nexpediente','$name','$apellido_1',
                            '$apellido_2','$date','$email','$contraEncript','$carrera');";
                $result = mysqli_query($linkBBDD, $query);


                if (!$result) {
                    $error = "You are not regitered in - Try again later";
                } else {
                    $_SESSION['id'] = mysqli_insert_id($linkBBDD); //PROBAR ESTO
                    $_SESSION['name'] = $name;
                    echo '<script>alert("¡Registro completado correctamente!")</script>';
                    header ("Location: login.php");
                }

            }
            catch (mysqli_sql_exception $e){
                var_dump($e);
                exit();
            }
        }
    }
}

//-------User Login PHP Code ------------

if (array_key_exists("logIn", $_POST)) {
    $error2='';
    // Database Link
    include('linkBBDD.php');

    //Taking form Data From User
    $email = mysqli_real_escape_string($linkBBDD, $_POST['emailLogin']);
    $password = mysqli_real_escape_string($linkBBDD,  $_POST['contrasenaLogin']);

    //Check if input Field are empty
    if (!$email) {
        $error2 .= "Porfavor introduce tu email.<br>";
    }
    if (!$password) {
        $error2 .= "Introduce tu contraseña. <br>";
    }
    if ($error2) {
        $error2 = "<b>There were error(s) in your form!</b><br>".$error2;
    }

    else {
        //matching email and password

        $query = "SELECT * FROM usuario WHERE Email='$email'";
        $result = mysqli_query($linkBBDD, $query);
        $row = mysqli_fetch_array($result);

        if (isset($row)) {
            $hash =  password_hash($password, PASSWORD_DEFAULT);
            if (password_verify($password, $row['Contrasenia'])) {

                //session variables to keep user logged in
                $_SESSION['id'] = $row['ExpUsuario'];

                header("Location: index.php");

            } else {
                $error2 = "AQUI Combination of email/password does not match!".$row['Contrasenia'];
            }

        }  else {
            $error2 = "Combination of email/password does not match!";
        }
    }
}





?>
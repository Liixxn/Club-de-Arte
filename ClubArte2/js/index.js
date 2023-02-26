

let tituloEmail = document.getElementById("texto-titulo-email");
let nombreEmail = document.getElementById("texto-nombre-email");
let mensaje = document.getElementById("contenido-mensaje");

let regexEmail = new RegExp(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)

function validarEmail() {

    let emailValido = false;

    if (nombreEmail.value == "" | tituloEmail.value == "" | mensaje.value == "") {
        alert("Por favor, rellene todos los campos necesaarios para poder enviar el email");
        emailValido = false;
    } else {
        console.log("Email lleno");
        console.log("Nombre: " + nombreEmail.value);
        if (regexEmail.test(nombreEmail.value)==true) {
            emailValido = true;


        }
        else {
            alert("Por favor, introduzca un email válido");
            emailValido = false;
        }
    }

    return emailValido

}


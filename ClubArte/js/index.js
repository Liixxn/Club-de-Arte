

let tituloEmail = document.getElementById("texto-titulo-email");
let nombreEmail = document.getElementById("texto-nombre-email");
let mensaje = document.getElementById("contenido-mensaje");

function validarEmail() {

    if (nombreEmail.value == "") {
        console.log("El campo nombre no puede estar vacío");
        return false;
    }

    return true

}


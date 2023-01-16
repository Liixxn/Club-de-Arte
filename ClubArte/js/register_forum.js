const IMAGENES = [
    'imgs/Carrusel/documentary-class.jpg',
    'imgs/Carrusel/exposicion.jpeg',
    'imgs/Carrusel/photoClass.jpg',
    'imgs/Carrusel/sculptureClass.jpg',
];
const TIEMPO_INTERVALO_MILESIMAS_SEG = 3000;
let posicionActual = 0;
let carrusel = document.getElementById('img-informacion');


function pasarImagenes() {

        if(posicionActual >= IMAGENES.length - 1) {
            posicionActual = 0;
        } else {
            posicionActual++;
        }
        carrusel.src = IMAGENES[posicionActual];


}

window.onload = setInterval(pasarImagenes, TIEMPO_INTERVALO_MILESIMAS_SEG);
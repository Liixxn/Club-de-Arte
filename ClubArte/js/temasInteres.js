let myImage = document.getElementById("mainImage");

let imageArray = ["imgs/portada_1.jpg", "imgs/1586283508_022049_1586284162_noticia_normal_recorte1.jpg", "imgs/16474297191037.jpg"];
let imageIndex = 0;

function changeImage() {
    myImage.setAttribute("src", imageArray[imageIndex]);
    imageIndex++;
    if (imageIndex >= imageArray.length){
        imageIndex = 0;
    }
}

var intervalHandle = setInterval(changeImage, 1000);

//myImage.onclick = function() {
//    clearInterval(intervalHandle);
//};

var imagen = new Array["imgs/635dbec96075400eb6c18599a9be2ad0.jpg", "imgs/Taller_Infantil.jpg", "imgs/taller-pintura-06-1024x675.jpg"];

function nextImage() {
    document.getElementById("actividades").src
}
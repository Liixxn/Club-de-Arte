let imageIndex = 0;

let imageArray = ["imgs/portada_1.jpg", "imgs/1586283508_022049_1586284162_noticia_normal_recorte1.jpg", "imgs/16474297191037.jpg"];

function changeImage() {

    $('#banner').css("background-image", 'url(' + imageArray[imageIndex] + ')');

    //myImage.setAttribute("src", imageArray[imageIndex]);
    imageIndex++;
    if (imageIndex >= imageArray.length){
        imageIndex = 0;
    }
}

$(function() {
    
    setInterval(changeImage, 2000);
    
});

//myImage.onclick = function() {
//    clearInterval(intervalHandle);
//};
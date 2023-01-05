let imageIndex = 0;

let imageArray = ["imgs/7.png", "imgs/8.png", "imgs/9.png", "imgs/10.png", "imgs/11.png", "imgs/12.png"];

function changeImage() {

    $('#banner').css("background-image", 'url(' + imageArray[imageIndex] + ')');

    //myImage.setAttribute("src", imageArray[imageIndex]);
    imageIndex++;
    if (imageIndex >= imageArray.length){
        imageIndex = 0;
    }
}

$(function() {
    
    setInterval(changeImage, 3000);
    
});


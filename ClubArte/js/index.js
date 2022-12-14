

let images_navbar = ["painting.jpg", "cine.jpg", "sculture.jpg", "literature.jpg"]

let img_1 = document.getElementById('img_1');
let img_2 = document.getElementById('img_2');
let img_3 = document.getElementById('img_3');

let cont_1 = 0;
let cont_2 = 1;
let cont_3 = 2;

function previous() {


    cont_1++;
    cont_2++;
    cont_3++;

    if (cont_1>=images_navbar.length) {
        cont_1 = 0;
    }
    if (cont_2>=images_navbar.length) {
        cont_2 = 0;
    }
    if (cont_3>=images_navbar.length) {
        cont_3 = 0;
    }

    img_1.src = "imgs/" + images_navbar[cont_1];
    img_2.src = "imgs/" + images_navbar[cont_2];
    img_3.src = "imgs/" + images_navbar[cont_3];

}


function next() {

    cont_1--;
    cont_2--;
    cont_3--;

    if (cont_1<0) {
        cont_1 = images_navbar.length-1;
    }
    if (cont_2<0) {
        cont_2 = images_navbar.length-1;
    }
    if (cont_3<0) {
        cont_3 = images_navbar.length-1;
    }

    img_1.src = "imgs/" + images_navbar[cont_1];
    img_2.src = "imgs/" + images_navbar[cont_2];
    img_3.src = "imgs/" + images_navbar[cont_3];

}




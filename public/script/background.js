jQuery(document).ready(function(){
    var image1, image2, image3, image4;
    var header = jQuery('header.main-header');
    var time = 7000;
    var start = false;

    image1 = "url('public/images/header/writting.jpg')";
    image2 = "url('public/images/header/server.jpg')";
    image3 = "url('public/images/header/paper.jpg')";
    image4 = "url('public/images/header/support.jpg')";

    animateBackground();

    function animateBackground() {
        if (start == false) {
            sliderShow();
            start = true;
            setInterval(sliderShow, time*4);
        } else {
            setInteval(sliderShow(time*4));
        }
    }

    function sliderShow(){
        setTimeout(function(){
            header.css({ backgroundImage: image2 });
        }, time);
        setTimeout(function(){
            header.css({ backgroundImage: image3 });
        }, time*2);
        setTimeout(function(){
            header.css({ backgroundImage: image4 });
        }, time*3);
        setTimeout(function(){
            header.css({ backgroundImage: image1 });
        }, time*4);
    }
});
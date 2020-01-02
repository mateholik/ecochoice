window.$ = window.jQuery = require('jquery');
import 'owl.carousel/dist/assets/owl.carousel.css';
let owl_carousel = require('owl.carousel');
window.fn = owl_carousel;
jQuery(function($){
    $("#slider1").owlCarousel({
        items: 1,
        autoplay: true,
        autoplayHoverPause: true,
        autoplaySpeed: 1000,
        autoplayTimeout: 4000,
        loop: true
    });
    $("#slider2").owlCarousel({
        items: 4,
        autoplay: true,
        autoplayHoverPause: true,
        autoplaySpeed: 1000,
        margin:10,
        autoplayTimeout: 1500,
        nav: true,
        loop: true
    });
});


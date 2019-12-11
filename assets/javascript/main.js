import $ from 'jquery';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';
// window.$ = window.jQuery = $;
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


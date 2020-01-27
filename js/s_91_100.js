(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".slider-area").owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            nav:false,
            dots:true
        });
        // logo-carousel start now
        $(".logo-carousel").owlCarousel({
            items:5,
            loop:true,
            autoplay:true,
            nav:false,
            dots:true
        });
        // s_100 team-carousel start now
        $(".team-carousel").owlCarousel({
            items:3,
            loop:true,
            autoplay:true,
            nav:true,
            dots:false,
            margin:30
        });

    });

    jQuery(window).load(function(){

    });

}(jQuery));
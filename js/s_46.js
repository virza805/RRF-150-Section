(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){

        $(".featured-trailors-carousel").owlCarousel({
            items:1,
            loop:true,
            autoplay:false,
            nav:false,
            dots:true
        });
        $(".testimonaial-carousel").owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            nav:false,
            dots:true
        });
        $(".listing-carousel").owlCarousel({
            items:3,
            loop:true,
            autoplay:false,
            nav:true,
            dots:true,
            navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            margin:30
        });
    });

    jQuery(window).load(function(){

    });

}(jQuery));
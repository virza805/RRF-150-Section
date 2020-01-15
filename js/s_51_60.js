(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".testimonial-author-name").perfectScrollbar();
        $(".owl-carousel").owlCarousel({
            items:1,
            loop:true,
            autoplay:false,
            nav:false,
            dots:true
        });

    });

    jQuery(window).load(function(){

    });

}(jQuery));
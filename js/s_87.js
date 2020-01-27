(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".homepage-slids").owlCarousel({
            items:1,
            loop:true,
            autoplay:false,
            nav:true,
            dots:true,
            dotsData:true
        });

    });

    jQuery(window).load(function(){

    });

}(jQuery));
(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".owl-carousel").owlCarousel({
            items:1,
            loop:true,
            autoplay:false,
            nav:false,
            dots:true
        });//end carousel
        $(".video-play-btn").modalVideo();
       

    });

    jQuery(window).load(function(){

    });

}(jQuery));
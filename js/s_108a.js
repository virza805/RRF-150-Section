(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
    
        var welCome = $('.welcome-area');
        welCome.owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            nav:true,
            dots:true,
            navText:["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"]
        });// end list owl item welcome-area section 108a

        welCome.on('translate.owl.carousel', function(event) {
            $(".welcome-area-text h4").removeClass("animated bounceIn");
            $(".welcome-area-text h1").removeClass("animated jackInTheBox");
            $(".welcome-area-text p").removeClass("animated fadeIn");
        });
        welCome.on('translated.owl.carousel', function(event) {
            $(".welcome-area-text h4").addClass("animated bounceIn");
            $(".welcome-area-text h1").addClass("animated jackInTheBox");
            $(".welcome-area-text p").addClass("animated fadeIn");
        });


    });

    jQuery(window).load(function(){

    });

}(jQuery));
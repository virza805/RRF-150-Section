(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){

        // Start Brand Logo Carousel
        $(".brand-images").owlCarousel({
            items:6,
            loop:true,
            autoplay:true,
            nav:false,
            dots:true,
            autoplayTimeout: 3000,
            responsive:{
                0:{
                    items: '2',
                },
                600:{
                    items: '4',
                },
                1000:{
                    items: '6',
                }
            }
        });
        // this is Pricing Plan Montyly on/off
        $(".monthly").on('click', function(){
            $(".monthly").addClass("active");
            $(".price").addClass("show");
        });
        $(".monthly").on('click', function(){
            $(".p-year").removeClass("show");
            $(".yearly").removeClass("active");
        });
        // this is Pricing Plan Yearly on/off
        $(".yearly").on('click', function(){
            $(".yearly").addClass("active");
            $(".p-year").addClass("show");
        });
        $(".yearly").on('click', function(){
            $(".price").removeClass("show");
            $(".monthly").removeClass("active");
        });

    });

    jQuery(window).load(function(){

    });

}(jQuery));
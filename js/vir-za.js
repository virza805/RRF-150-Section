(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".slider-area").owlCarousel({
            items:1,
            loop:true,
            autoplay:false,
            nav:false,
            dots:true
        });// carousel start now


         // Section 7 carousel End
         $(".client-testimonial-carousel").owlCarousel({
            items:3,
            loop:true,
            autoplay:true,
            nav:false,
            dots:true,
            margin:30
        });
        // Section 9 carousel End
        $(".owl-carousel").owlCarousel({
            items:1,
            loop:true,
            autoplay:false,
            nav:false,
            dots:true
        });
        // Section carousel End


        
        // this is off canvs menu on
        $(".menu-btn").on('click', function(){
            $(".offcanvs-menu").addClass("active");
            $(".offcanvs-menu-overlay").addClass("active");
        });
        $(".menu-close i.fa, .offcanvs-menu-overlay").on('click', function(){
            $(".offcanvs-menu").removeClass("active");
            $(".offcanvs-menu-overlay").removeClass("active");
        });
        // smart header use jquery
        $(".header-area").headroom();

    });

    jQuery(window).load(function(){

    });

}(jQuery));
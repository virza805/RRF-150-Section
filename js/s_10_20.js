(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".homepage-slides").owlCarousel({
            items:1,
            nav:true,
            dots: false,
            autoplay: true,
            loop: true,
            navText:["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"]
        });
        // End Home/Maine Slider Carousel
        $(".product-promotions").owlCarousel({
            items:1,
            nav:false,
            dots: true,
            autoplay: true,
            loop: true
        });
        // End product-promotions Slider Carousel
        $(".brand-images").owlCarousel({
            items:4,
            loop:true,
            autoplay:true,
            nav:false,
            dots:true
        });
        // End Brand Logo Carousel
        $(".product-list").masonry();
        $(".menu-trigger").on("click", function(){
            $("#off-canvar-menu, .off-canvar-overlay").addClass("active");
            return false;
        });
        $(".menu-close, .off-canvar-overlay").on("click", function(){
            $("#off-canvar-menu, .off-canvar-overlay").removeClass("active");
           
        });

    });

    jQuery(window).load(function(){

    });

}(jQuery));
(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        // $(".client-testimonial").owlCarousel({
        //     items:3,
        //     margin:30,
        //     nav:false,
        //     dots: true,
        //     loop: true
        // });
      
        $(".product-list").masonry();

        // $(".homepage-slides").owlCarousel({
        //     items:1,
        //     nav:true,
        //     dots: false,
        //     autoplay: false,
        //     loop: true,
        //     navText:["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"]
        // });
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
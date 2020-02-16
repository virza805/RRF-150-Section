(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".product-carousel").owlCarousel({
            items:4,
            loop:true,
            autoplay:true,
            nav:false,
            dots:true
        }); // end product-carousel
        $(".zoom-in-btn").on('click', function(){
            $(".con-full").removeClass("container");
            $(".con-full").addClass("container-fluid");
            
            $(".s-magazin").addClass("zoom");
            $(".zoom-in-btn").addClass("tr");
            $(".zoom-out-btn").addClass("active");
        });
        $(".zoom-out-btn").on('click', function(){
            $(".con-full").removeClass("container-fluid");
            $(".con-full").addClass("container");
            
            $(".s-magazin").removeClass("zoom");
            $(".zoom-in-btn").removeClass("tr");
            $(".zoom-out-btn").removeClass("active");
        });// end 1 magazin
        
        $(".item-1").on('click', function(){
            $(".defol").addClass("tr");
            $(".m2").removeClass("s-magazin");
            $(".img-disign").addClass("tr");
            $(".m1").addClass("active");
            $(".m1").addClass("s-magazin");
        });
        $(".close-btn").on('click', function(){
            $(".img-disign").removeClass("tr");
            $(".tregar").removeClass("active");
        });// end 1 magazin
        $(".item-2").on('click', function(){
            $(".defol").addClass("tr");
            $(".m1").removeClass("s-magazin");
            $(".img-disign").addClass("tr");
            $(".m2").addClass("active");
            $(".m2").addClass("s-magazin");
        });
        $(".close-btn").on('click', function(){
            $(".img-disign").removeClass("tr");
            $(".tregar").removeClass("active");
        });// end 2 magazin

        // $('#maga-zine').turn({
        //     gradients: true,
        //     acceleration: true
        // });

    });

    jQuery(window).load(function(){

    });

}(jQuery));
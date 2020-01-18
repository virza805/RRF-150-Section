(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        $('[data-toggle="tooltip"]').tooltip();


        // $(".video-play-btn").magnificPopup({
        //     type: 'video',
        // });

        $(".staff-list").owlCarousel({
            items:4,
            dots: false,
            autoplay: true,
            loop: true,
            nav:true,
            navText:["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"]
        });
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

    });

    jQuery(window).load(function(){

    });

}(jQuery));
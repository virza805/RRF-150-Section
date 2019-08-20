(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){

        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        $('[data-toggle="tooltip"]').tooltip();


        // $(".video-play-btn").magnificPopup({
        //     type: 'video',
        // });

        $(".staff-list").owl-carousel({
            items:4,
            autoplay:false
        });

    });

    jQuery(window).load(function(){

    });

}(jQuery));
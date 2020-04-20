(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".homepage-slid").owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            nav:false,
            dots:true
        });
// End 21 carousel
        $(".projects-list").isotope();

        $('.projects-titles li').on('click', function(){

            $('.projects-titles li').removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr('data-filter');
            $(".projects-list").isotope({
                filter: selector
            });
        });// End Isotop # Video_29

    });

    jQuery(window).load(function(){

    });

}(jQuery));
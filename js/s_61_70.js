(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".owl-carousel").owlCarousel({
            items:1,
            loop:true,
            autoplay:false,
            nav:false,
            dots:true
        });
        // end Carousel
        $(".projects-list").isotope();

        $('.project-filter li').on('click', function(){

            $('.project-filter li').removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr('data-filter');
            $(".projects-list").isotope({
                filter: selector,
                stagger:30
            });
        });
        // end isotope

        $(window).scroll(function(){
            var scroll = $(window).scrollTop();

            if(scroll>=100px){
                $(".top-bg").addClass("is-stick");
            }
        });

    });

    jQuery(window).load(function(){

    });

}(jQuery));
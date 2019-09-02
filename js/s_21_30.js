(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){

        $(".projects-list").isotope();

        $('.projects-titles li').on('click', function(){

            $('.projects-titles li').removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr('data-filter');
            $(".projects-list").isotope({
                filter: selector
            });
        });

    });

    jQuery(window).load(function(){

    });

}(jQuery));
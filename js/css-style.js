(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
    
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
(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".portfoli-list").masonry({
            
        });
        $(".single-portfolio-item").hover(function(){
            $(".single-portfolio-item .portfolio-hover h2").removeClass("animated slideInDown");
            $(this).find(".portfolio-hover h2").addClass("animated slideInDown");
            $(".single-portfolio-item .portfolio-hover p").removeClass("animated bounce");
            $(this).find(".portfolio-hover p").addClass("animated bounce");
        });
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
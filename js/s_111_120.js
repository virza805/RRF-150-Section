(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".portfolio-item-carosul").owlCarousel({
            items:5,
            loop:true,
            autoplay:true,
            nav:true,
            dots:true
        });//table-filter start
        $('#table-filter').DataTable();

    });

    jQuery(window).load(function(){

    });

}(jQuery));
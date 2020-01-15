(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        
        $(".theme-1-select").on('click', function(){
            $("body").addClass("theme1").removeClass("theme2");
            return false;
        });
        $(".theme-2-select").on('click', function(){
            $("body").addClass("theme2").removeClass("theme1");
            return false;
        });

    });

    jQuery(window).load(function(){

    });

}(jQuery));
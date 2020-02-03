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
        $(".homepage-slides").owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            nav:true,
            dots:false,
            navText:["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"]
        }); // end homepage-slides
        $(".welcome-area").YTPlayer({
            fitToBackground: true,
            videoId: 'LSmgKRx5pBo'
        }); // end background video section 108
        $(".protfolio-list").masonry({
            horizontalOrder:true
        }); // end isotop / masonari
        

    });

    jQuery(window).load(function(){

    });

}(jQuery));
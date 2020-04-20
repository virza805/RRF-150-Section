(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".slider-area").owlCarousel({
            items:1,
            loop:true,
            autoplay:false,
            nav:false,
            dots:true
        });// carousel start now
         // Bar fillar ...
         $('#bar1').barfiller({
            barColor: 'red'
        });
        $('#bar2').barfiller({
            barColor: 'green'
        });
        $('#bar3').barfiller({
            barColor: 'yellow'
        });
        $('#bar4').barfiller({
            barColor: '#999'
        }); // Bar fillar end

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
        $(".staff-list").owlCarousel({
            items:3,
            loop:true,
            autoplay:false,
            nav:false,
            dots:true
        });
        // Section carousel End
        
        $(".projects-list").isotope();

        $('.projects-titles li').on('click', function(){

            $('.projects-titles li').removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr('data-filter');
            $(".projects-list").isotope({
                filter: selector
            });
        });// End Isotop # Video_29
        // flip box section 84
        $('.hover').hover(function(){
            $(this).addClass('flip');
              },function(){
                $(this).removeClass('flip');
            }); // flip box section 84 End
        
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
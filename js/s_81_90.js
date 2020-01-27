(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        $(".featured-prijects").owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            nav:false,
            dots:true
        });
        // 2nd slid section 85 
        $(".testimonial-carousel").owlCarousel({
            items:1,
            loop:true,
            autoplay:false,
            nav:true,
            dots:false,
            navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
        });
        // circel prograss bar 1
        $('#web-design-progressbar').circleProgress({
            value: 0.85,
            size: 200,
            fill: {
              gradient: ["red", "orange"]
            },
            thickness:2,
            emptyFill:'#fff'
          }).on('circle-animation-progress', function(event, progress) {
            $(this).find('.progressbar-percentage').html(Math.round(85 * progress) + '<i>%</i>');
          });
        // circel prograss bar 2
        $('#graphic-design-progressbar').circleProgress({
            value: 0.75,
            size: 200,
            fill: "green",
            thickness:7,
            emptyFill:'#fff'
          }).on('circle-animation-progress', function(event, progress) {
            $(this).find('.progressbar-percentage').html(Math.round(75 * progress) + '<i>%</i>');
          });
        // circel prograss bar 3
        $('#digital-marketing-progressbar').circleProgress({
            value: 0.50,
            size: 150,
            fill: "orange",
            thickness:4,
            emptyFill:'#fff'
          }).on('circle-animation-progress', function(event, progress) {
            $(this).find('.progressbar-percentage').html(Math.round(50 * progress) + '<i>%</i>');
          });
          // flip box section 84
        $('.hover').hover(function(){
			$(this).addClass('flip');
		},function(){
			$(this).removeClass('flip');
		});

    });

    jQuery(window).load(function(){

    });

}(jQuery));
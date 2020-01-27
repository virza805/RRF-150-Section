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
        //tooltip use...
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
        // count-down ...
        $('#clock').countdown('2020/12/6', function(event) {
            $(this).html(event.strftime('<span class="countdown-wrap"><span class="single-countdown-item">%w<br><span>Weeks</span></span><span class="single-countdown-item">%d<br><span>Days</span></span><span class="single-countdown-item">%H<br><span>Hours</span></span><span class="single-countdown-item">%M<br><span>Minutes</span></span><span class="single-countdown-item">%S<br><span>Seconds</span></span></span>'));
          });
        // Bar fillar ...
        $('#bar1').barfiller({
            barColor: '#fff'
        });
        $('#bar2').barfiller({
            barColor: '#fff'
        });
        $('#bar3').barfiller({
            barColor: '#fff'
        });
        $('#bar4').barfiller({
            barColor: '#fff'
        });

    });

    jQuery(window).load(function(){

    });

}(jQuery));
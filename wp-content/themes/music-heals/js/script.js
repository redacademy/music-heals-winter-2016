'use strict';

jQuery(function(){

jQuery('a[href^="#"]').on('click',function (event) {
     event.preventDefault();

     var target = this.hash;
     var $target = jQuery(target);

     jQuery('html, body').stop().animate({
         'scrollTop': $target.offset().top -93
     }, 900, 'swing', function () {
         window.location.hash = target;
     });
 });
});

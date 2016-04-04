'use strict';

jQuery(function(){

  jQuery('a[href^="#"]').on('click',function (e) {
         e.preventDefault();

         var target = this.hash;


  jQuery('html, body').animate({
    scrollTop: target.offset.top-90});
});
});

'use strict';

$(function(){

  $('a[href^="#"]').on('click',function (e) {
         e.preventDefault();

         var target = this.hash;


  $('html, body').animate({
    scrollTop: target.offset().top-90});
});
});

$(document).on('click',".info-click-js",function(){
  $('.info-dealer').toggle(300);
  setTimeout(function(){
      $('.info-dealer').hide(300);
  },3500);
} )

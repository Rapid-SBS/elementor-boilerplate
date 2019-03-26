$(function() {
 
  var header_height = $('.header').outerHeight();
  
  $('.smoothScroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var offset = 0;
      var target = $(this.hash);
      if ($(this).data('offset') != undefined) offset = $(this).data('offset');
      
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({scrollTop: target.offset().top - offset }, 1000); // The number here represents the speed of the scroll in milliseconds
        return false;
      }
    }
  });
});

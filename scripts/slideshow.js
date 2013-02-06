  $(function() {
      var ssSelector = '.slideshow';
      var ssHeight   = 300;
      var ssWidth    = 400;

      var nextSlide = function() {
          var $current = $(ssSelector+' img.active');
          if ( $current.length == 0 ) $current = $(ssSelector+' img:last');
          var $next =  $current.next().length ? $current.next() : $(ssSelector+' img:first');
          $current.addClass('prev-active');
          $next.css({opacity: 0.0}).addClass('active').animate({opacity: 1.0}, 1000, function() { $current.removeClass('active prev-active'); });
      }
      var slideInt = setInterval(function(){
          nextSlide();
      }, 4000 );

      // setup dimentions
      $(ssSelector).css({
        'min-height': ssHeight,
        'max-height': ssHeight,
        'min-width':  ssWidth,
        'max-width':  ssWidth,
        'overflow':  'hidden'
      });
      //$(ssSelector+' img').css({ });
      $(ssSelector+' img').attr('width', ssWidth);
      $(ssSelector+' img').removeAttr('height');
      $(ssSelector+' img:first').addClass('active');
  });

  $(function() {
      var ssSelector = '.slideshow';
      var ssHeight   = $(ssSelector).css('height');
      var ssWidth    = $(ssSelector).css('width');

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


$(function(){
  pinterest_layout();
});


function pinterest_layout(){
    var $pin_container = $('#pin-view');
    var cols = [0, 0, 0];
    var smallest = function( cols ) {
        var lowest = Number.MAX_VALUE;
        var index = 0;
        var i = cols.length;
        while (i--) {
            if (cols[i] <= lowest) {
                index = i;
                lowest = cols[i];
            }
        }
        return index;
    }
    for(i in cols){
        $pin_container.prepend('<div class="pin-col"></div>');
    }
    $('.pin-item').each(function() {
        var $this = $(this);
        $this.find('.pin-img img').removeAttr('height').attr('width', '250px');
        $this.append('<div class="clear"></div>');
        $('.pin-col').eq(smallest(cols)).append($this);
        cols[smallest(cols)] += $this.height();
    });
}

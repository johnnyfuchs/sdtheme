/**
 * Kick off pinterest layout and slideshow
 */
$(function(){
  var p1 = new PinLayout( '.pin', 4, 20 ); p1.run();

  // adjust pin title to fix the rounded corner effect
  var $pt = $('.pin .title');
  $pt.width( $pt.width() - 10 );


  start_slideshow( 200, 494 );
});


/**
 * start_slideshow 
 * 
 * @access public
 * @return void
 */
function start_slideshow( height, width ){
  var ssSelector = '.slideshow';
  var ssHeight   = height || ~~$(ssSelector).css('height');
  var ssWidth    = width  || ~~$(ssSelector).css('width');

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
}


/**
 * PinLayout 
 * 
 * @param pinSelector 
 * @param columns
 * @access public
 * @return void
 */
var PinLayout = function( pinSelector, columns, margin ){
  this.columns     = columns     || 3;
  this.pinSelector = pinSelector || '.pin';
  this.$container = $(pinSelector).first().parent();
  this.uniq       = "pin-"+~~(Math.random()*99999);
  this.cols       = [];
  this.clear      = '<div class="clear"></div>';
  this.$columns;
  this.totalWidth = this.$container.width();
  this.colWidth   = Math.floor( this.totalWidth / columns );
  this.margin     = margin;
  this.pinWidth   = (this.totalWidth + this.margin) / columns - this.margin;

  while( columns-- ){
    this.cols[ columns ] = 0;
  }
}

PinLayout.prototype.run = function(){
  this.prepareColumns();
  this.movePins();
}

PinLayout.prototype.getSmallestColumn = function(){
  var lowest = Number.MAX_VALUE;
  var index = 0;
  var i = this.cols.length;
  while (i--) {
    if (this.cols[i] <= lowest) {
      index = i;
      lowest = this.cols[i];
    }
  }
  return index;
}

PinLayout.prototype.appendToSmallestCol = function( $pin ){
  // setting the width of an image and removing the height auto-aspects
  $pin.find('img').attr('width', this.pinWidth+'px').removeAttr('height');
  $pin.find('.title').css({ 'width' : this.pinWidth+'px' });
  $pin.append( this.clear );
  var smallest = this.getSmallestColumn();
  var height   = $pin.height();
  this.$columns.eq( smallest ).append( $pin );
  this.cols[ smallest ] += $pin.height();
}

PinLayout.prototype.prepareColumns = function(){
  for(var i in this.cols){
    this.$container.prepend( '<div class="'+this.uniq+'"></div>' );
  }
  this.$columns = $('.'+this.uniq);
  this.$columns.css({
    'width': this.pinWidth + 'px',
    'margin-right' : this.margin +'px',
    'float': 'left',
  }).last().css({'margin-right' : '0px' });
}

PinLayout.prototype.movePins = function(){
  var that = this;
  this.$container.find( this.pinSelector ).each(function() {
    that.appendToSmallestCol( $(this) );
  });
}

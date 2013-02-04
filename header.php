<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title(' | ', true, 'right'); ?></title>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

  <script type="text/javascript">
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
  </script>


  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
  <!--[if gte IE 9]> <style type="text/css"> .radial-shadow { filter: none; } </style> <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
  <header>
    <div id="branding">
      <div id="site-title">
        <?php if ( is_singular() ) {} else {echo '<h1>';} ?>
        <a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a>
        <?php if ( is_singular() ) {} else {echo '</h1>';} ?>
      </div>
      <p id="site-description"><?php bloginfo( 'description' ) ?></p>
      <nav>
        <div id="search">
        <?php get_search_form(); ?>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </nav>
    </div>
    <div id="quick-contact-shadow" class="radial-shadow">
      <div id="quick-contact">
        <span class="corp"> SD Consulting Group, LLC </span>
        <span class="addr"> 769 Cherokee Avenue, Saint Paul, MN 55107 </span>
        <span class="phone"> 612.203.7366 </span>
        <span class="email"> Shane.sparks@sd-consultinggroup.com </span>
      </div>
    </div>
  </header>
  <div id="container">

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title(' | ', true, 'right'); ?></title>

  <!--
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  -->

  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

  <script type="text/javascript" src="wp-content/themes/blankslate/scripts/jquery-1.7.min.js"></script>
  <script type="text/javascript" src="wp-content/themes/blankslate/scripts/slideshow.js"></script>

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
    <div id="debuggggg"><?
        $cat = get_categories();
        var_dump( $cat );
    ?>
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

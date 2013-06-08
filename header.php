<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title(' | ', true, 'right'); ?></title>

  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
  <link href='wp-content/themes/blankslate/font/OpenSans.css' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,300,700' rel='stylesheet' type='text/css'>


  <script type="text/javascript" src="wp-content/themes/blankslate/scripts/jquery-1.7.min.js"></script>
  <script type="text/javascript" src="wp-content/themes/blankslate/scripts/slideshow.js"></script>

  <!--[if gte IE 9]> <style type="text/css"> .radial-shadow { filter: none; } </style> <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
  <header>
    <div id="branding">
      <div id="gohome"></div>
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
  </header>
  <div id="container">

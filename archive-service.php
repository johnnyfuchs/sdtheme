<?php
/*
Template Name: Service List
*/

/* if you are not using this in a child of Twenty Eleven, 
*  you need to replicate the html structure of your own theme.
*/

get_header(); 
//get_sidebar();
?>

<div id="primary">
  <div id="content" role="main">
    <div id="pin-view">
  <?php
  /* the_post will retrieve the content of the new page you 
  *  create to list the posts, e.g. as an intro to describe 
  *  which posts are shown.
  *
  * the_post(); 
  * 
  * // Display content of page
  * get_template_part( 'content', get_post_format() ); 
  * wp_reset_postdata();
  */

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args=array(
    'post_type' => 'projects',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'caller_get_posts'=> 1
  );

  $list_of_posts = new WP_Query( $args ); 
  //print_r($list_of_posts->posts);

  //blankslate_content_nav( 'nav-above' );
  while ( $list_of_posts->have_posts() ): $list_of_posts->the_post(); ?>

  <!-- mini template -->

    <div class="pin-item">
        <div class="pin-title"><?php echo the_title() ?></div>
        <div class="pin-img rounded-img"><?php echo get_the_post_thumbnail(); ?></div>
        <div class="pin-content"><?php echo the_content() ?></div>
    </div>

  <!-- end mini template -->

  <?php
  endwhile; 
  //blankslate_content_nav( 'nav-below' ); 
  ?>

    <div class="clear"></div>
    </div><!-- /#pinterest-view -->
  </div><!-- /#content -->
</div><!-- /#primary -->
<?php get_footer(); ?>

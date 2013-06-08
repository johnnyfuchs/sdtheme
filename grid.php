<?php get_header(); ?>

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

  /**
   * Create a default pinQuery in case it isn't included. 
   */
  if(!isset($gridQuery)){
    $gridQuery=array(
      'post_type' => 'projects',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'caller_get_posts'=> 1
    );
  }

  $list_of_posts = new WP_Query( $gridQuery ); 
  $i = 0;

  while ( $list_of_posts->have_posts() ):
    $list_of_posts->the_post();
    $custom_fields = get_post_custom();
    $brief = isset($custom_fields['brief'][0]) ? $custom_fields['brief'][0] : '';
  ?>

  <!-- mini template -->

    <div class="pin-big">
        <div class="title"><?php echo the_title() ?></div>
        <a href="<?php echo the_permalink(); ?>">
            <div class="img rounded-img"><?php echo get_the_post_thumbnail(); ?></div>
        </a>
        <div class="content"><?php echo $brief; ?></div>
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

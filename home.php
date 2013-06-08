<?php
/*
Template Name: Home
*/

/* if you are not using this in a child of Twenty Eleven, 
*  you need to replicate the html structure of your own theme.
*/

get_header(); 
?>

<div id="primary">
  <div id="content" role="main">

    <div class="home-slideshow">
      <div class="rounded-img ">
        <div class="slideshow">
          <img class="alignnone size-medium wp-image-15" alt="brown_grass_daisy_bg" src="http://localhost/wordpress/wp-content/uploads/2012/12/brown_grass_daisy_bg-300x223.png" width="400" />
          <img class="alignnone size-medium wp-image-16" alt="daisies_with_bug" src="http://localhost/wordpress/wp-content/uploads/2012/12/daisies_with_bug-300x198.png" width="400" />
          <img class="alignnone size-medium wp-image-17" alt="houses_in_mtns" src="http://localhost/wordpress/wp-content/uploads/2012/12/houses_in_mtns-300x224.png" width="400" />
          <img class="alignnone size-medium wp-image-18" alt="irrigation" src="http://localhost/wordpress/wp-content/uploads/2012/12/irrigation-300x223.png" width="400" />
          <img class="alignnone size-medium wp-image-19" alt="large_resevior" src="http://localhost/wordpress/wp-content/uploads/2012/12/large_resevior-300x223.png" width="400" />
          <img class="alignnone size-medium wp-image-20" alt="spraying_plant_drugs" src="http://localhost/wordpress/wp-content/uploads/2012/12/spraying_plant_drugs1-225x300.png" width="400" />
          <img class="alignnone size-medium wp-image-21" alt="whiteprint" src="http://localhost/wordpress/wp-content/uploads/2012/12/whiteprint-300x235.png" width="400" />
        </div><!-- /.slideshow -->
      </div><!-- /.rounded-image -->
    </div><!-- /.home-slideshow -->

    <div class="home-body">
      Engineers and Hydrogeologists focused on environmentally sustainable solutions for all types of water, wastewater and restoration projects.
      Read about wastewater disposal in Alberta in our new article in "Water Canada", <a title="Back to the Source" href="http://sd-consultinggroup.com/ProjectDescription/Water_Canada_SDWastewater_Disposal_March2011.pdf" target="_blank">Back to the Source</a>
    </div><!-- /#home-body -->

    <div class="clear"></div>

    <div id="pin-mini-view">
      <?php
      wp_reset_postdata();

      $args=array(
        'post_type' => 'services',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1
      );

      $list_of_posts = new WP_Query( $args ); 

      while ( $list_of_posts->have_posts() ): $list_of_posts->the_post(); ?>

      <div class="pin"><!-- mini template -->
          <div class="title"><?php echo the_title() ?></div>
        <a href="<?php echo the_permalink(); ?>">
          <div class="rounded-img"><?php echo get_the_post_thumbnail(); ?></div>
        </a>
      </div><!-- end mini template -->
      
      <?php endwhile; ?>
      <div class="clear"></div>

    </div><!-- /#pinterest-view -->
  </div><!-- /#content -->
</div><!-- /#primary -->
<?php get_footer(); ?>





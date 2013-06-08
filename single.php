<?php get_header(); ?>

<h1><?php echo get_the_title(); ?></h1>

<article class="content">
  <?php
  //get_template_part( 'nav', 'above-single' );
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      get_template_part( 'entry' );
      //comments_template('', true);
    endwhile;
  endif;

  get_template_part( 'nav', 'below-single' );
  get_footer();
  ?>
</article>

<?php get_footer(); ?>

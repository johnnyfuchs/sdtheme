<?php get_header(); ?>
<h1><?php echo get_the_title(); ?></h1>
<article id="content">
<?php get_template_part( 'nav', 'above-single' ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template('', true); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below-single' ); ?>
<?php var_dump($wp); ?>
<?php get_footer(); ?>
</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

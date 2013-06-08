<div class="entry-content">

  <?php if ( has_post_thumbnail() ): ?>
  <div class="entry-thumbnail">
    <div class="img rounded-img">
      <?php
      set_post_thumbnail_size( 300 );
      the_post_thumbnail();
      ?>
    </div>
  </div>
  <?php endif; ?>

  <div class="entry-body">
    <?php the_content(); ?>
  </div>
</div>
<div class="clear"></div>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>

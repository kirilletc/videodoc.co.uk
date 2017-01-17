<?php

?>

<div class="container">
  <section class="post-header">
    <div class="section-header">
      <?php if(is_single()) { ?>
        <h3 class="green-text"><?php the_title(); ?></h3>
      <?php } else { ?>
        <h1 class="green-text lg-size"><?php echo get_post_meta(get_the_ID(), '_page_heading_lg', true); ?></h1>
        <h3 class="green-text demo-move"><?php echo get_post_meta(get_the_ID(), '_page_heading_sm', true); ?></h3>
      <?php } ?>
    </div>
  </section>

  <section class="post-content row">
    <div class="col-lg-8 col-sm-8 col-md-offset-2 text-left">
      <?php the_content(); ?>
    </div>
  </section>
</div>
<?php
/*
Template Name: Pharmacies Template
*/
?>

<?php get_header(); ?>

  <section class="post-header">
    <div class="container">
      <img src="<?php echo vd_get_post_meta('intro_icon'); ?>" alt="..." />
      <h1 class="green-text lg-size"><?php echo vd_get_post_meta('intro_heading_lg'); ?></h1>
      <h3 class="green-text" ><?php echo vd_get_post_meta('intro_heading_sm'); ?></h3>
      <?php echo do_shortcode(vd_get_post_meta('intro_content')); ?>
    </div>
  </section>

<?php get_footer(); ?>
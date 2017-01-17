<?php get_header(); ?>

  <div class="row section-header post-header">
    <div class="column small-12">

      <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
          <?php _e('Sorry, no results were found.', 'ix'); ?>
          <?php get_search_form(); ?>
        </div>
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('templates/content', get_post_format()); ?>
      <?php endwhile; ?>
      
      <?php if ($wp_query->max_num_pages > 1) : ?>
        <?php echo vd__pagination(); ?>
      <?php endif; ?>
      
    </div>
  </div>


<?php get_footer(); ?>
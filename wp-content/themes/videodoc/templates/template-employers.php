<?php
/*
Template Name: Employers Template
*/
?>

<?php get_header(); ?>

  <section class="post-header">
    <div class="container">
      <!-- SECTION TITLE -->
      <h1 class="green-text lg-size"><?php echo vd_get_post_meta('intro_heading_lg'); ?></h1>
      <h3 class="green-text" ><?php echo vd_get_post_meta('intro_heading_sm'); ?></h3>
      <?php echo do_shortcode(vd_get_post_meta('intro_content')); ?>

      <div class="row">
        <div class="col-lg-6 col-sm-6 focus-box red wow fadeInLeft animated text-left col-md-offset-3" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
          <?php echo do_shortcode(vd_get_post_meta('intro_benefits')); ?>
        </div>
      </div>
    </div>
  </section> <!-- / END CONTAINER -->

  <section class="about-us">
    <div class="container">
      <!-- SECTION HEADER -->
      <div class="section-header">
        <h3 class="orange-text meet-move"><?php echo vd_get_post_meta('services_heading_sm'); ?></h3>
        <h1 class="orange-text lg-size"><?php echo vd_get_post_meta('services_heading_lg'); ?></h1>
      </div>
      <div class="row">
        <?php for($_i=1; $_i<=5; $_i++) { ?>
          <div class="col-lg-4 col-sm-4 focus-box red wow fadeInLeft animated<?php if($_i==4) echo ' col-md-offset-2'; ?>" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <img src="<?php echo vd_get_post_meta('services_service'.$_i.'_icon'); ?>" alt="...">
            <span class="faq-head"><?php echo vd_get_post_meta('services_service'.$_i.'_title'); ?></span>
            <p class="white-text" style="padding-top:20px;text-align:center;">
              <?php echo vd_get_post_meta('services_service'.$_i.'_desc'); ?>
            </p>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <section class="separator-four"></section>

  <section class="docs">
    <div class="container">
      <div class="section-header">
        <h3 class="green-text started-move"><?php echo vd_get_post_meta('join_team_heading_sm'); ?></h3>
        <h1 class="green-text lg-size"><?php echo vd_get_post_meta('join_team_heading_lg'); ?></h1>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <?php echo do_shortcode(vd_get_post_meta('join_team_content')); ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
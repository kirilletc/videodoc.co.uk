<?php
/*
Template Name: Doctors Template
*/
?>

<?php get_header(); ?>

  <section class="post-header">
    <div class="container">
      <h1 class="orange-text lg-size mdoc" style="padding-left:100px;"><?php echo vd_get_post_meta('intro_heading_lg'); ?></h1>
      <h3 class="orange-text mdoc" style="padding-left:220px;"><?php echo vd_get_post_meta('intro_heading_sm'); ?></h3>
      <div class="white-text swaptc" style="padding: 22px 22% 0;">
        <?php echo do_shortcode(vd_get_post_meta('intro_content')); ?>
      </div>
    </div>
  </section> <!-- / END CONTAINER -->

  <section class="separator-two"></section>

  <section class="focus">
    <div class="container">
      <?php echo do_shortcode(vd_get_post_meta('benefits_intro')); ?>
      <div class="row">
        <div class="col-lg-6 col-sm-6 focus-box red wow fadeInLeft animated  col-md-offset-3 text-left" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
          <?php echo do_shortcode(vd_get_post_meta('benefits_points')); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-sm-8 focus-box red wow fadeInLeft animated col-md-offset-2" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
		 <?php echo do_shortcode('[wonderplugin_carousel id="2"]'); ?>
		 <br>
         <div class="btn btn-primary custom-button blue-btn" style="white-space:normal;">
          <h6 class="white-text text-left">
            <?php echo do_shortcode(vd_get_post_meta('benefits_box')); ?>
          </h6>
        </div>
        </div>
      </div>
    </div>
  </section>

  <section class="separator-two"></section>

  <section class="docs">
    <div class="container">
      <div class="section-header">
        <h3 class="green-text meet-move" ><?php echo vd_get_post_meta('join_team_heading_sm'); ?></h3>
        <h1 class="green-text lg-size"><?php echo vd_get_post_meta('join_team_heading_lg'); ?></h1>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <?php echo do_shortcode(vd_get_post_meta('join_team_content')); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="separator-two"></section>

  <section class="faq-section">
    <div class="container">
      <div class="section-header">
        <h3 class="orange-text"><?php echo vd_get_post_meta('faqs_heading_sm'); ?></h3>
        <h1 class="orange-text lg-size"><?php echo vd_get_post_meta('faqs_heading_lg'); ?></h1>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div><a href="#faq2" data-toggle="collapse"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/expand.png" /></a></div>
        </div>
      </div>
      <div class="row collapse" id="faq2">
        <div class="col-md-8 col-md-offset-2 text-left">
          <?php echo do_shortcode(vd_get_post_meta('faqs_content')); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="separator-four"></section>

<?php get_footer(); ?>
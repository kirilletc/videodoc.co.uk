<?php
/*
Template Name: FAQ Template
*/
?>

<?php get_header(); ?>

<section class="post-header faqmob">
  <div class="container">
    <div class="section-header">
      <h3 class="green-text demo-move "><?php echo vd_get_post_meta('intro_heading_sm'); ?></h3>
      <h1 class="green-text lg-size" ><?php echo vd_get_post_meta('intro_heading_lg'); ?></h1>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3 col-xs-8 col-xs-offset-2">
        <h6 class="dblue-text" style="padding-top:20px;padding-bottom:20px;">
          <?php echo do_shortcode(vd_get_post_meta('intro_intro_text')); ?>
        </h6>
      </div>
    </div>
  </div>
</section>

<section class="separator-two"></section>

<section class="about-us">
    <div class="container">
        <!-- SECTION HEADER -->
        <div class="section-header">
            <h3 class="orange-text"><?php echo vd_get_post_meta('patients_heading_sm'); ?></h3>
            <!-- SECTION TITLE -->
            <h1 class="orange-text lg-size"><?php echo vd_get_post_meta('patients_heading_lg'); ?></h1>
            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-bottom:-70px;">
                <div><a href="#faq1" data-toggle="collapse"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/expand.png" /></a></div>
            </div>
        </div>
        <div class="row collapse" id="faq1" style="margin-top:70px;">
          <div class="col-md-8 col-md-offset-2" style="text-align:left;color:white;">
            <?php echo do_shortcode(vd_get_post_meta('patients_content')); ?>
          </div>
        </div>
        <!-- / END SECTION HEADER -->
        <!-- 3 COLUMNS OF ABOUT US-->
    </div>
    <!-- / END CONTAINER -->
</section>

<section class="separator-four"></section>

<section class="contact-us">
  <div class="container">
    <div class="section-header">
      <h3 class="green-text"><?php echo vd_get_post_meta('doctors_heading_sm'); ?></h3>
      <h1 class="green-text lg-size"><?php echo vd_get_post_meta('doctors_heading_lg'); ?></h1>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div><a href="#faq2" data-toggle="collapse"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/expand.png" /></a></div>
      </div>
    </div>
    <div class="row collapse" id="faq2">
      <div class="col-md-8 col-md-offset-2" style="text-align:left">
        <?php echo do_shortcode(vd_get_post_meta('doctors_content')); ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
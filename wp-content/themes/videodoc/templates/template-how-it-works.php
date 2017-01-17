<?php
/*
Template Name: How It Works Template
*/
?>

<?php get_header(); ?>

<section class="post-header">
  <div class="container">
    <div class="section-header">
      <h3 class="green-text demo-move"><?php echo vd_get_post_meta('intro_heading_sm'); ?></h3>
      <h1 class="green-text lg-size" ><?php echo vd_get_post_meta('intro_heading_lg'); ?></h1>
    </div>
    <div class="row">
      <h5 class="h5bold dblue-text" style="padding-top:20px;">
        <?php echo vd_get_post_meta('intro_intro_title'); ?>
      </h5>
      <h6 class="dblue-text" style="padding-top:20px;padding-bottom:20px;">
        <?php echo do_shortcode(vd_get_post_meta('intro_intro_text')); ?>
      </h6>
    </div>
    <div class="row">
      <?php for($_i=1; $_i<=3; $_i++) { ?>
        <div class="col-lg-4 col-sm-4 focus-box how-it-work-steps red wow fadeInLeft animated " data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
          <div class="trans-button trans-blue" style="height: 500px;">
            <div style="max-width:290px;padding:15px;">
              <h4 class="green-text"><?php echo vd_get_post_meta('steps_step'.$_i.'_title'); ?></h4>
              <div class="content">
                <?php echo do_shortcode(vd_get_post_meta('steps_step'.$_i.'_desc')); ?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
	<!--
    <div class="row">
      <br />
      <hr style="width:90%;margin-top:10px;"/>
      <?php for($_i=1; $_i<=3; $_i++) { ?>
        <div class="col-lg-4 col-sm-4 focus-box red wow fadeInLeft animated " data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
          <div class="trans-button trans-blue" style="text-align:center;max-width:290px;width:100%;min-height:170px;">
            <h5><?php echo vd_get_post_meta('boxes_box'.$_i.'_title'); ?></h5>
            <div class="green-text price-text"><?php echo do_shortcode(vd_get_post_meta('boxes_box'.$_i.'_desc')); ?></div>
          </div>
        </div>
      <?php } ?>
    </div>
	-->
    <div class="row">
      <div class="col-lg-4 col-sm-4 col-md-offset-4 focus-box green wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
        <div class="buttons">
          <a href="<?php echo vd_get_post_meta('boxes_cta_link'); ?>" class="btn btn-primary custom-button green-btn" style="padding-right:55px;"><?php echo vd_get_post_meta('boxes_cta_text'); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
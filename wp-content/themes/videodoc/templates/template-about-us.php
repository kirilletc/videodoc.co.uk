<?php
/*
Template Name: About Us Template
*/
?>

<?php get_header(); ?>

  <section class="section-header post-header">
    <div class="container">
      <!-- SECTION TITLE -->
      <h1 class="orange-text lg-size"><?php echo vd_get_post_meta('intro_heading_lg'); ?></h1>
      <h3 class="orange-text" ><?php echo vd_get_post_meta('intro_heading_sm'); ?></h3>
      <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
      <h5 class="h5bold white-text"  style="padding-top:20px;"><?php echo vd_get_post_meta('intro_intro_text'); ?></h5>
      <h6 class="white-text"  style="padding-top:20px;"><?php echo vd_get_post_meta('intro_steps_title'); ?></h6>
      <!-- / END SECTION HEADER -->
      <br>
      <div class="row">
        <?php for($_i=1; $_i<=4; $_i++) { ?>
          <div class="col-lg-3 col-sm-3  focus-box red wow fadeInLeft animated " data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <div class="trans-button trans-white" style="height: 440px;">
              <div class="stepaboutleft" style="min-height:235px;vertical-align:middle;">
                <p class="white-text" style="padding-top:20px;">
                  <!-- FOCUS DESCRIPTION -->
                  <span class="orange-text" style="font-weight:bold;"><?php echo vd_get_post_meta('intro_step'.$_i.'_title'); ?></span><br /><br />
                  <?php echo vd_get_post_meta('intro_step'.$_i.'_desc'); ?>
                </p>
              </div>
              <div class="stepaboutright" style="padding-top:10px;">
                <img src="<?php echo vd_get_post_meta('intro_step'.$_i.'_icon'); ?>" alt="...">
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <section class="separator-four"></section>

  <section class="focus">
    <div class="container">
      
      <!-- SECTION HEADER -->
      <div class="section-header mobile-aboutus"></div>
      <!-- / END SECTION HEADER -->
      
    </div> <!-- / END CONTAINER -->
  </section>

  <section class="separator-two"></section>

  <section class="about-us">
    <div class="container">
      <!-- SECTION HEADER -->
      <div class="section-header">
        <h1 class="orange-text lg-size"><?php echo vd_get_post_meta('our_mission_heading_lg'); ?></h1>
        <h3 class="orange-text move-mission"><?php echo vd_get_post_meta('our_mission_heading_sm'); ?></h3>
        <h5 class="h5bold white-text" style="padding-top:20px;padding-left:20%;padding-right:20%;">
          <?php echo do_shortcode(vd_get_post_meta('our_mission_intro_text')); ?>
        </h5>
        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6 class="white-text" style="padding-top:20px;padding-left:20%;padding-right:20%;">
          <?php echo do_shortcode(vd_get_post_meta('our_mission_content')); ?>
        </h6>
      </div>
      <!-- / END SECTION HEADER -->
    </div> <!-- / END CONTAINER -->
  </section>

  <section class="separator-two"></section>

  <section class="testimonial">
    <div class="container">
      <!-- SECTION HEADER -->
      <div class="section-header">
        <!-- SECTION TITLE -->
        <h3 class="green-text"><?php echo vd_get_post_meta('clinical_team_heading_sm'); ?></h3>
        <!-- SECTION TITLE -->
        <h1 class="green-text lg-size"><?php echo vd_get_post_meta('clinical_team_heading_lg'); ?></h1>
      </div>
      <!-- / END SECTION HEADER -->
      <!-- CLIENT FEEDBACKS -->
      <div class="row wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
        <div class="col-md-12">
          <div id="about1" class="owl-carousel owl-theme">

            <!-- SINGLE FEEDBACK BOX-->
            <?php 
              $team_members = vd_get_post_meta('clinical_team_members');
              foreach($team_members as $team_member) { 
            ?>
              <div class="feedback-box text-center">
                <div class="dblue-text text-center">
                  <b><?php echo $team_member['name']; ?></b>
                  <?php if(!empty($team_member['post'])) echo ' | '.$team_member['post']; ?>
                </div>
                <!-- MESSAGE OF THE CLIENT -->
                <div class="dblue-text text-center" style="padding-top:10px">
                  <img src="<?php echo $team_member['photo']; ?>" alt="<?php echo $team_member['name']; ?> Photo" />
                </div>
                <div class="dblue-text text-center" style="padding-top:10px;padding-left:15px;padding-right:15px;">
                  <?php echo do_shortcode($team_member['desc']); ?>
                </div>
              </div>
            <?php } ?> 
          </div>
        </div> <!-- / END COLUMN -->
      </div> <!-- / END ROW -->
    </div> <!-- / END CONTAINER -->
  </section>

  <section class="separator-two"></section>
  <!-- =========================
     TESTIMONIAL
  ============================== -->
  <section class="testimonial">
    <div class="container">
      <!-- SECTION HEADER -->
      <div class="section-header">
        <!-- SECTION TITLE -->
        <h3 class="green-text"><?php echo vd_get_post_meta('advisors_heading_sm'); ?></h3>
        <!-- SECTION TITLE -->
        <h1 class="green-text lg-size"><?php echo vd_get_post_meta('advisors_heading_lg'); ?></h1>
      </div>
      <!-- / END SECTION HEADER -->
      <!-- CLIENT FEEDBACKS -->
      <div class="row wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
        <div class="col-md-12">
          <div id="about1" class="owl-carousel owl-theme">

            <!-- SINGLE FEEDBACK BOX-->
            <?php 
              $advisors = vd_get_post_meta('advisors_advisors');
              foreach($advisors as $advisor) { 
            ?>
              <div class="feedback-box text-center">
                <div class="dblue-text text-center">
                  <b><?php echo $advisor['name']; ?></b>
                  <?php if(!empty($advisor['post'])) echo ' | '.$advisor['post']; ?>
                </div>
                <!-- MESSAGE OF THE CLIENT -->
                <div class="dblue-text text-center" style="padding-top:10px">
                  <img src="<?php echo $advisor['photo']; ?>" alt="<?php echo $advisor['name']; ?> Photo" />
                </div>
                <div class="dblue-text text-center" style="padding-top:10px;padding-left:15px;padding-right:15px;">
                  <?php echo do_shortcode($advisor['desc']); ?>
                </div>
              </div>
            <?php } ?> 
          </div>
        </div> <!-- / END COLUMN -->
      </div> <!-- / END ROW -->
    </div> <!-- / END CONTAINER -->
  </section>

<?php get_footer(); ?>
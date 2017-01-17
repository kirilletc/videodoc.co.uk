<?php
/*
Template Name: Home Template
*/
?>

<?php get_header(); ?>
  <div class="hero-wrapper">
    <div class="container">
      <h1 class="intro introhome"><?php echo vd_get_post_meta('hero_heading'); ?></h1>
        <div class="row">
          <h5 class="intro2 col-lg-8 col-sm-8 col-lg-offset-2 col-sm-offset-2"><?php echo do_shortcode(vd_get_post_meta("hero_desc")); ?></h5>
        </div>
        <div class="buttons">
          <a href="<?php echo vd_get_post_meta('hero_cta_link'); ?>" class="btn btn-primary custom-button green-btn" style="padding-right:55px;"><?php echo vd_get_post_meta('hero_cta_text'); ?></a>
        </div>
		<div class="hero2__logos">
		 <img src="http://videodoc.co.uk/wp-content/themes/videodoc/dist/img/1.svg"/> 
		 <br> <br>
		 <img src="http://videodoc.co.uk/wp-content/themes/videodoc/dist/img/2.svg" alt="2" /> 
		
		</div>
		
		
    </div>
  </div>
<div class="container appicon">
<h3>Download our mobile application <span itemprop="name">VideoDoc</span></h3>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
<a href="https://itunes.apple.com/ie/app/videodoc-uk/id1025127392?mt=8">
  <img style="float:right" src="http://videodoc.ie/wp-content/themes/videodoc/dist/img/appstore.png" alt="Download on the App Store" />  
</a> 
</div>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
<a href="https://play.google.com/store/apps/details?id=com.virtumedix.videodoc.gbr">
  <img style="float:left" src="http://videodoc.ie/wp-content/themes/videodoc/dist/img/android.png" alt="Android app on Google Play" />
</a>
</div>
</div>
  <section class="focus focushome">
    <div class="container">
      <!-- SECTION HEADER -->
      <div class="section-header">
        <!-- SECTION TITLE -->
        <h3><?php echo vd_get_post_meta('how_it_works_heading'); ?></h3>
        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
      </div>
      <!-- / END SECTION HEADER -->
      <div class="row">
        <!-- FIRST FOCUS BOXES -->
        <?php for($_i=1; $_i<=3; $_i++) { ?>
          <div class="col-lg-4 col-sm-4 focus-box red wow fadeInLeft animated " data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <div class="trans-button trans-blue">
                <div class="stepleft">
                  <h4><?php echo vd_get_post_meta('how_it_works_step'.$_i.'_title'); ?></h4> <!-- FOCUS HEADING -->
                  <p style="padding-top:10px;">
                    <?php echo nl2br(vd_get_post_meta('how_it_works_step'.$_i.'_desc')); ?>
                  </p>
                </div>
                <div class="stepright">
                  <img src="<?php echo vd_get_post_meta('how_it_works_step'.$_i.'_icon'); ?>" alt="...">
                </div>
            </div>
          </div>
        <?php } ?>
      </div>
      
      <div class="other-focuses">
        <a href="<?php echo vd_get_post_meta('how_it_works_cta_link'); ?>" class="btn custom-link green-btn2">
          <?php echo vd_get_post_meta('how_it_works_cta_text'); ?>
        </a>
      </div>
    </div> <!-- / END CONTAINER -->
  </section>

  <section class="about-us">
    <div class="container">
      <!-- SECTION HEADER -->
      <div class="section-header">
          <h3 class="orange-text"><?php echo vd_get_post_meta('reasons_heading_sm'); ?></h3>
          <!-- SECTION TITLE -->
          <h1 class="orange-text lg-size"><?php echo vd_get_post_meta('reasons_heading_lg'); ?></h1>
          <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
          <h6 class="white-text" style="padding-top:20px;">
            <?php echo do_shortcode(vd_get_post_meta('reasons_desc')); ?>
          </h6>
          <h5 class="h5bold white-text" style="padding-top:20px;">
            <?php echo vd_get_post_meta('reasons_reasons_title'); ?>
          </h5>
      </div>
      <!-- / END SECTION HEADER -->
      <div class="row">
        <?php for($_i=1; $_i<=4; $_i++) { ?>
          <div class="col-sm-4 focus-box red wow fadeInLeft animated <?php echo $_i % 2 === 0 ? '' : ' cl col-sm-offset-2' ?>" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <div class="trans-button trans-white">
              <div class="stepleft" style="min-height:130px;vertical-align:middle;">
                <p class="white-text" style="padding-top:20px;">
                  <?php echo vd_get_post_meta('reasons_step'.$_i.'_title'); ?>
                </p>
              </div>
              <div class="stepright" style="padding-top:10px;">
                <img src="<?php echo vd_get_post_meta('reasons_step'.$_i.'_icon'); ?>" alt="...">
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div> <!-- / END CONTAINER -->
  </section>
  
<?php get_footer(); ?>
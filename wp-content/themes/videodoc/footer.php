        </main>
        <?php if(vd_display_sidebar()) : ?>
          <?php get_sidebar(); ?>
        <?php endif; ?>

        <section class="separator-two"></section>

        <section class="lnews">
          <div class="container">
            <a id="anewsletter" name="anewsletter"></a>
            <!-- SECTION HEADER -->
            <div class="section-header">
              <!-- SECTION TITLE -->
              <h3 class="green-text latest-move"><?php echo get_theme_mod('latest_news_title_small'); ?></h3>
              <!-- SECTION TITLE -->
              <h1 class="green-text lg-size" ><?php echo get_theme_mod('latest_news_title_big'); ?></h1>
            </div>
            <!-- / END SECTION HEADER -->
            <!-- CLIENT FEEDBACKS -->
            <div class="row wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
              <div class="col-md-4 col-md-offset-4">
                <div id="latest-news" class="owl-carousel owl-theme">
                    <?php 
                      $query = new WP_Query(array(
                        'posts_per_page' => get_theme_mod('latest_news_total_posts')
                      ));
                    ?>
                    <?php 
                      if($query->have_posts()) { 
                        while($query->have_posts()) { $query->the_post(); ?>
                          <div class="feedback-box text-center">
                            <div class="dblue-text text-center">
                              <a href="<?php the_permalink(); ?>"><b><?php the_title(); ?></b></a>
                            </div>
                            <div class="dblue-text text-center" style="padding-top:10px"><?php the_excerpt(); ?></div>
                          </div>
                    <?php
                        } 
                      }
                      else {
                        _e('No posts to display', 'ix');
                      }
                      wp_reset_postdata();
                    ?>
                </div> <!-- / END FEEDBACKS-->
              </div> <!-- / END COLUMN -->
            </div> <!-- / END ROW -->
            <div class="row">
              <h3 class="orange-text" style="margin-top:100px;">Sign up to our newsletter</h3>
              <div class="col-md-6 col-md-offset-3 newsletter-form-wrap wow fadeInLeft animated animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form(11); } ?>
              </div>
            </div>
          </div> <!-- / END CONTAINER -->
        </section>

        <section class="about-us get-in-touch">
          <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
              <h3 class="orange-text latest-move"><?php echo get_theme_mod('contact_title_small'); ?></h3>
              <!-- SECTION TITLE -->
              <h1 class="orange-text lg-size"><?php echo get_theme_mod('contact_title_big'); ?></h1>
              <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            </div>
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <h6 class="white-text" style="padding-top:20px;">
                  <?php echo get_theme_mod('contact_text'); ?>
                </h6>
                <br />
                <hr style="width:50%;margin-top:10px;"/>
                <div class="social">
                  <a class="fa fa-linkedin-square" href="<?php echo get_theme_mod('ln_link'); ?>"   target="blank"></a>
                  <a class="fa fa-twitter-square" href="<?php echo get_theme_mod('twitter_link'); ?>"   target="blank"></a>
                  <a class="fa fa-facebook-square" href="<?php echo get_theme_mod('fb_link'); ?>"   target="blank"></a>
                </div>
				 <br>
				
				
				<script type="text/javascript" src="//www.cqc.org.uk/sites/all/modules/custom/cqc_widget/widget.js?data-id=1-2555600072&data-host=www.cqc.org.uk&type=location">
				</script>
				
              </div>
            </div>
            <!-- / END SECTION HEADER -->
            <!-- 3 COLUMNS OF ABOUT US-->
          </div> <!-- / END CONTAINER -->
        </section>

        <section class="separator-four"></section>

        <section class="contact-us">
          <div class="container">
            <h3 class="green-text" style="margin-top:50px;"><?php echo get_theme_mod('certification_title'); ?></h3> <!-- NEWSLETTER SECTION HEADING -->
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h6 style="font-size:14px;margin-top:20px;"><?php echo get_theme_mod('certification_desc'); ?></h6>
              </div>
            </div>
            <div class="row">
              <?php for($_i = 1; $_i <= 3; $_i++) { ?>
                <div class="col-lg-4 col-sm-4 focus-box red wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                  <a href="<?php echo get_theme_mod('certification_box'.$_i.'_link'); ?>">
                    <div class="trans-button trans-orange">
                      <div class="stepleft2">
                        <h4 class="h5bold" style="padding-top: 15px;text-align: center;"><?php echo get_theme_mod('certification_box'.$_i.'_title'); ?></h4> <!-- FOCUS HEADING -->
                      </div>
                      <div class="stepright2"><img src="<?php echo get_theme_mod('certification_box'.$_i.'_icon'); ?>" alt="..."></div>
                    </div>
                  </a>
                </div>
              <?php } ?>
			 
            </div>
			
			 
			
            <!-- / END CONTACT FORM-->
          </div> <!-- / END CONTAINER -->
        </section>


      </div><!-- /#content -->

      <footer id="footer" class="content-info" role="contentinfo">
        <div class="container">
          <?php if(dynamic_sidebar('Footer Area')) {} else { ?>
             <section class="widget" title="nothing">
                <h3><?php echo 'Footer Widget Area'; ?></h3>
                <a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget</a>
             </section>
          <?php } ?>
        </div>
      </footer>
    </div>
	
    </span>
	<!-- #wrapper -->
  <?php wp_footer(); ?>
  
  
  <!--google analytics begin-->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75370836-3', 'auto');
  ga('send', 'pageview');

</script>
<!--google analytics end-->



<!--<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=13752951"></script>-->

</body>
</html>
<?php

  if(!function_exists('vd_theme_customizer')) {
    function vd_theme_customizer($wp_customize) {
      
      /*-----------------------
          Social Sites 
      -----------------------*/
      
      $wp_customize->add_section('social_sites', array(
        'title' => 'Social Sites',
        'priority' => 10,
      ));
      
      $wp_customize->add_setting('ln_link');
      $wp_customize->add_control('ln_link_ctrl', array(
        'label'      => 'LinkedIn Link',
        'section'    => 'social_sites',
        'settings'   => 'ln_link',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('twitter_link');
      $wp_customize->add_control('twitter_link_ctrl', array(
        'label'      => 'Twitter Link',
        'section'    => 'social_sites',
        'settings'   => 'twitter_link',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('fb_link');
      $wp_customize->add_control('fb_link_ctrl', array(
        'label'      => 'Facebook Link',
        'section'    => 'social_sites',
        'settings'   => 'fb_link',
        'type'       => 'text',
      ));


      /*-----------------------
          Latest News 
      -----------------------*/

      $wp_customize->add_section('latest_news', array(
        'title' => 'Latest News',
        'priority' => 11,
      ));
      
      $wp_customize->add_setting('latest_news_title_small');
      $wp_customize->add_control('latest_news_title_small_ctrl', array(
        'label'      => 'Title Small',
        'section'    => 'latest_news',
        'settings'   => 'latest_news_title_small',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('latest_news_title_big');
      $wp_customize->add_control('latest_news_title_big_ctrl', array(
        'label'      => 'Title Big',
        'section'    => 'latest_news',
        'settings'   => 'latest_news_title_big',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('latest_news_total_posts');
      $wp_customize->add_control('latest_news_total_posts_ctrl', array(
        'label'      => 'Total no of posts to fetch',
        'section'    => 'latest_news',
        'settings'   => 'latest_news_total_posts',
        'type'       => 'text',
      ));


      /*-----------------------
          Contact Info
      -----------------------*/

      $wp_customize->add_section('contact', array(
        'title' => 'Contact Info',
        'priority' => 11,
      ));
      
      $wp_customize->add_setting('contact_title_small');
      $wp_customize->add_control('contact_title_small_ctrl', array(
        'label'      => 'Title Small',
        'section'    => 'contact',
        'settings'   => 'contact_title_small',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('contact_title_big');
      $wp_customize->add_control('contact_title_big_ctrl', array(
        'label'      => 'Title Big',
        'section'    => 'contact',
        'settings'   => 'contact_title_big',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('contact_text');
      $wp_customize->add_control('contact_text_ctrl', array(
        'label'      => 'Contact Text',
        'section'    => 'contact',
        'settings'   => 'contact_text',
        'type'       => 'textarea',
      ));


       /*-----------------------
          Certification
      -----------------------*/

      $wp_customize->add_section('certification', array(
        'title' => 'Certification',
        'priority' => 12,
      ));
      
      $wp_customize->add_setting('certification_title');
      $wp_customize->add_control('certification_title_ctrl', array(
        'label'      => 'Title',
        'section'    => 'certification',
        'settings'   => 'certification_title',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('certification_desc');
      $wp_customize->add_control('certification_desc_ctrl', array(
        'label'      => 'Description',
        'section'    => 'certification',
        'settings'   => 'certification_desc',
        'type'       => 'textarea',
      ));

      $wp_customize->add_setting('certification_box1_title');
      $wp_customize->add_control('certification_box1_title_ctrl', array(
        'label'      => 'Box 1 Title',
        'section'    => 'certification',
        'settings'   => 'certification_box1_title',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('certification_box1_link');
      $wp_customize->add_control('certification_box1_link_ctrl', array(
        'label'      => 'Box 1 Link',
        'section'    => 'certification',
        'settings'   => 'certification_box1_link',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('certification_box1_link');
      $wp_customize->add_control('certification_box1_link_ctrl', array(
        'label'      => 'Box 1 Link',
        'section'    => 'certification',
        'settings'   => 'certification_box1_link',
        'type'       => 'url',
      ));

      $wp_customize->add_setting('certification_box1_icon');
      $wp_customize->add_control(
        new WP_Customize_Image_Control(
          $wp_customize,
          'certification_box1_icon_ctrl',
          array(
            'label'      => 'Box 1 Icon',
            'section'    => 'certification',
            'settings'   => 'certification_box1_icon',
          )
        )
      );

      $wp_customize->add_setting('certification_box2_title');
      $wp_customize->add_control('certification_box2_title_ctrl', array(
        'label'      => 'Box 2 Title',
        'section'    => 'certification',
        'settings'   => 'certification_box2_title',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('certification_box2_link');
      $wp_customize->add_control('certification_box2_link_ctrl', array(
        'label'      => 'Box 2 Link',
        'section'    => 'certification',
        'settings'   => 'certification_box2_link',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('certification_box2_link');
      $wp_customize->add_control('certification_box2_link_ctrl', array(
        'label'      => 'Box 2 Link',
        'section'    => 'certification',
        'settings'   => 'certification_box2_link',
        'type'       => 'url',
      ));

      $wp_customize->add_setting('certification_box2_icon');
      $wp_customize->add_control(
        new WP_Customize_Image_Control(
          $wp_customize,
          'certification_box2_icon_ctrl',
          array(
            'label'      => 'Box 2 Icon',
            'section'    => 'certification',
            'settings'   => 'certification_box2_icon',
          )
        )
      );

      $wp_customize->add_setting('certification_box3_title');
      $wp_customize->add_control('certification_box3_title_ctrl', array(
        'label'      => 'Box 3 Title',
        'section'    => 'certification',
        'settings'   => 'certification_box3_title',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('certification_box3_link');
      $wp_customize->add_control('certification_box3_link_ctrl', array(
        'label'      => 'Box 3 Link',
        'section'    => 'certification',
        'settings'   => 'certification_box3_link',
        'type'       => 'text',
      ));

      $wp_customize->add_setting('certification_box3_link');
      $wp_customize->add_control('certification_box3_link_ctrl', array(
        'label'      => 'Box 3 Link',
        'section'    => 'certification',
        'settings'   => 'certification_box3_link',
        'type'       => 'url',
      ));

      $wp_customize->add_setting('certification_box3_icon');
      $wp_customize->add_control(
        new WP_Customize_Image_Control(
          $wp_customize,
          'certification_box3_icon_ctrl',
          array(
            'label'      => 'Box 3 Icon',
            'section'    => 'certification',
            'settings'   => 'certification_box3_icon',
          )
        )
      );

    }
  }
  add_action('customize_register', 'vd_theme_customizer');
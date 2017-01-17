<?php
  function vd_setup_theme() {
    // load_theme_textdomain( 'twentyfourteen', get_template_directory() . '/languages' );


    // This theme styles the visual editor to resemble the theme style.
    //add_editor_style( array( 'css/editor-style.css', twentyfourteen_font_url() ) );

    // Add RSS feed links to <head> for posts and comments.
    add_theme_support('automatic-feed-links');

    // Enable support for Post Thumbnails, and declare two sizes.
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size( 672, 372, true );
    //add_image_size( 'twentyfourteen-full-width', 1038, 576, true );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
      'primary'   => __('Primary Navigation', 'vd'),
    ));

    // To add woocommerce support
    add_theme_support('woocommerce');

    // HTML5.markup for modules
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
  
    // Enable support for Post Formats.
    add_theme_support( 'post-formats', array(
      'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery'
    ));

    // This theme uses its own gallery styles.
    add_filter('use_default_gallery_style', '__return_false');

  }
  add_action( 'after_setup_theme', 'vd_setup_theme');
  
  // Allow shortcodes in widget text
  add_filter('widget_text', 'do_shortcode');

  function vd_add_extra_links_to_head() {
    echo '<link rel="profile" href="http://gmpg.org/xfn/11">';
    echo '<link rel="pingback" href="'.get_bloginfo( 'pingback_url' ).'">';
  }
  add_action('wp_head','vd_add_extra_links_to_head');

  // Not sure about $content_width and hence leavig for now
  //if (!isset( $content_width )) $content_width = '2000px';


?>
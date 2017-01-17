<?php

  add_filter('automatic_updater_disabled', '__return_true');
  function vd_get_post_meta($key) {
    global $post;
    $template_slug = get_page_template_slug($post->ID);
    $prefix = '_'.str_replace(array('templates/template-', '.php', '-'), array('', '', '_'), $template_slug).'_';
    return get_post_meta($post->ID, $prefix.$key, true);
  }


  function vd_minify_css($str) {
    # remove comments first (simplifies the other regex)
    $re1 = <<<'EOS'
(?sx)
  # quotes
  (
    "(?:[^"\\]++|\\.)*+"
  | '(?:[^'\\]++|\\.)*+'
  )
|
  # comments
  /\* (?> .*? \*/ )
EOS;

    $re2 = <<<'EOS'
(?six)
  # quotes
  (
    "(?:[^"\\]++|\\.)*+"
  | '(?:[^'\\]++|\\.)*+'
  )
|
  # ; before } (and the spaces after it while we're here)
  \s*+ ; \s*+ ( } ) \s*+
|
  # all spaces around meta chars/operators
  \s*+ ( [*$~^|]?+= | [{};,>~+-] | !important\b ) \s*+
|
  # spaces right of ( [ :
  ( [[(:] ) \s++
|
  # spaces left of ) ]
  \s++ ( [])] )
|
  # spaces left (and right) of :
  \s++ ( : ) \s*+
  # but not in selectors: not followed by a {
  (?!
    (?>
      [^{}"']++
    | "(?:[^"\\]++|\\.)*+"
    | '(?:[^'\\]++|\\.)*+'
    )*+
    {
  )
|
  # spaces at beginning/end of string
  ^ \s++ | \s++ \z
|
  # double spaces to single
  (\s)\s+
EOS;

    $str = preg_replace("%$re1%", '$1', $str);
    return preg_replace("%$re2%", '$1$2$3$4$5$6$7', $str);
}

  function vd_template_style() {
    function css_output($rule, $value, $unit='') {
      if($value === '') {
        echo '';
      }
      else {
        if($rule === 'background-image') {
          $value = 'url("'.$value.'")';
        }
        echo $rule, ': ', $value, $unit, ';';
      }
    }

    global $post;
    $post_meta = get_post_meta($post->ID,'', true);
    ob_start();

    if($post_meta['_wp_page_template'][0] === 'templates/template-home.php') {
      $hero_bg = wp_get_attachment_image_src($post_meta['_home_hero_bg_id'][0], 'full');
      $hero_bg_md = wp_get_attachment_image_src($post_meta['_home_hero_bg_md_id'][0], 'full');
      $fixed_nav_offset = 0;
      ?>
      .hero-wrapper {
        <?php css_output('background-image', $hero_bg[0]); ?>
        <?php css_output('min-height', $hero_bg[2] + $fixed_nav_offset, 'px'); ?>
      }
      @media (min-width: 768px) {
        .hero-wrapper {
          <?php css_output('background-image', $hero_bg_md[0]); ?>
          <?php css_output('min-height', $hero_bg_md[2] + $fixed_nav_offset, 'px'); ?>
        }
      }
      <?php
    }

    if($post_meta['_wp_page_template'][0] === 'templates/template-about-us.php') {
      $intro_bg = wp_get_attachment_image_src($post_meta['_about_us_intro_bg_id'][0], 'full');
      ?>
      .focus {
        background-size: cover;
        -webkit-background-size: cover;
        background-repeat:no-repeat;
        <?php css_output('background-image', $intro_bg[0]); ?>
      }
    <?php 
    }

    if($post_meta['_wp_page_template'][0] === 'templates/template-faq.php') {
      $intro_bg = wp_get_attachment_image_src($post_meta['_faq_intro_bg_id'][0], 'full');
      ?>
      .post-header {
        background-repeat: no-repeat;
        background-size: contain;
        -webkit-background-size: contain;
        <?php css_output('min-height', $intro_bg[2], 'px'); ?>
        <?php css_output('background-image', $intro_bg[0]); ?>
      }
    <?php 
    }

    if($post_meta['_wp_page_template'][0] === 'templates/template-doctors.php') {
      $intro_bg = wp_get_attachment_image_src($post_meta['_doctors_intro_bg_id'][0], 'full');
      ?>
      .post-header {
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: -285px 0;
        -webkit-background-size: cover;
        <?php css_output('background-image', $intro_bg[0]); ?>
      }
    <?php 
    }
    
    $template_css = ob_get_contents();
    ob_end_clean();

    if($template_css !== '') {
      $template_css = vd_minify_css($template_css);
      echo '<style type="text/css">'.$template_css.'</style>';
    }
  }
  add_filter('wp_head', 'vd_template_style');

  // Remove editor from template pages
  if(!function_exists('vd_remove_editor_in_templates')) {
    function vd_remove_editor_in_templates() {
      if(!is_admin()) {
        return;
      }

      // Get the post ID on edit post with filter_input super global inspection.
      $current_post_id = filter_input( INPUT_GET, 'post', FILTER_SANITIZE_NUMBER_INT );
      // Get the post ID on update post with filter_input super global inspection.
      $update_post_id = filter_input( INPUT_POST, 'post_ID', FILTER_SANITIZE_NUMBER_INT );

      // Check to see if the post ID is set, else return.
      if (isset($current_post_id)) {
        $post_id = absint( $current_post_id );
      } else if ( isset( $update_post_id ) ) {
        $post_id = absint( $update_post_id );
      } else {
        return;
      }

      if (isset($post_id)) {
        if (get_page_template_slug($post_id)) {
          remove_post_type_support('page', 'editor');
          // https://codex.wordpress.org/Function_Reference/remove_post_type_support.
        }
      }
    }
    add_action('init', 'vd_remove_editor_in_templates');
  }

  // Send archive pages to 404
  if(!function_exists('vd_redirect_blog_pages_to_subdomain')) {
    function vd_redirect_blog_pages_to_subdomain() {
      if(is_archive() && !is_search()) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        get_template_part(404); 
        exit();
      }
    }
    add_action('template_redirect', 'vd_redirect_blog_pages_to_subdomain');
  }
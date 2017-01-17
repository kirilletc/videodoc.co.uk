<?php

function vd_main_scripts() {
  $assets = array(
    'css'       => '/dist/css/main.css',
    'js'        => '/dist/js/main.js',
  );

  wp_enqueue_style('vd_css', get_template_directory_uri() . $assets['css'], false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('jquery');
  wp_enqueue_script('vd_js', get_template_directory_uri().$assets['js'], array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'vd_main_scripts', 100);
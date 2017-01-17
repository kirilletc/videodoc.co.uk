<?php

function vd_widgets_init() {
    // Sidebars
    register_sidebar(array(
      'name' => __('Primary', 'ix'),
      'id' => 'sidebar-primary',
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ));


    register_sidebar(array(
      'name' => __('Footer Area', 'ix'),
      'id' => 'footer-widget-area',
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ));
    
}
add_action('widgets_init', 'vd_widgets_init');

?>
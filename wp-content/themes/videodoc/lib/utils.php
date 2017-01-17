<?php
/**
 * Utility functions
 */
function add_filters($tags, $function) {
  foreach($tags as $tag) {
    add_filter($tag, $function);
  }
}

function is_element_empty($element) {
  $element = trim($element);
  return !empty($element);
}

class VD_Sidebar {
  private $conditionals;
  private $templates;

  public $display = true;

  function __construct($conditionals = array(), $templates = array()) {
    $this->conditionals = $conditionals;
    $this->templates    = $templates;

    $conditionals = array_map(array($this, 'check_conditional_tag'), $this->conditionals);
    $templates    = array_map(array($this, 'check_page_template'), $this->templates);

    if (in_array(true, $conditionals) || in_array(true, $templates)) {
      $this->display = false;
    }
  }

  private function check_conditional_tag($conditional_tag) {
    if (is_array($conditional_tag)) {
      return $conditional_tag[0]($conditional_tag[1]);
    } else {
      return $conditional_tag();
    }
  }

  private function check_page_template($page_template) {
    return is_page_template($page_template);
  }
}

function vd_main_class() {
  if (vd_display_sidebar()) {
    // Classes on pages with the sidebar
    $class = '';
  } else {
    // Classes on full width pages
    $class = '';
  }

  return $class;
}

function vd_sidebar_class() {
  return 'col-sm-4';
}

function vd_display_sidebar() {
  $sidebar_config = new VD_Sidebar(
    array(
      'is_front_page',
    ),
    array(
      'template-full-width.php'
    )
  );
  return apply_filters('vd_display_sidebar', $sidebar_config->display);
}

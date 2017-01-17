<?php

if (file_exists(dirname(__FILE__). '/cmb2/init.php')) {
  require_once dirname( __FILE__ ) . '/cmb2/init.php';
}

function vd_register_page_mb() {
  $mb_id = '_page_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Page Options', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => 'default'),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
}
add_action('cmb2_init', 'vd_register_page_mb');

function vd_register_template_mb() {
  $template_tinymce_setting = array(
    'content_css' => get_stylesheet_directory_uri() . '/dist/css/main.css',
    'toolbar2' => 'ix_button, fontsizeselect, styleselect,formatselect, underline, alignjustify, forecolor, backcolor, pastetext, removeformat, charmap, outdent, indent, undo, redo',
    'fontsize_formats' => "10px 11px 12px 13px 14px 15px 16px 17px 18px 19px 20px 21px 22px 23px 24px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px 52px 54px 56px 58px 60px 62px 64px 66px 68px 70px 72px 74px 76px 78px 80px 82px 84px 86px 88px 90px 92px 94px 96px 98px 100px",
    'style_formats' => json_encode(array(
      array(  
        'title' => 'Bullet Icon List',
        'selector' => 'ul',
        'classes' => 'bullets',
      ),
      array(  
        'title' => 'Plus Icon List',
        'selector' => 'ul',
        'classes' => 'cross',
      ),
    ))
  );
  

  /* ---------------------------
    HOME TEMPLATE METABOXES
  ------------------------------*/

  $template_name = 'templates/template-home.php';
  $page_prefix = '_home_';

  $mb_id = $page_prefix.'hero_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Hero', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Hero Background Image - Mobile', 'cmb2'),
    'id'         => $mb_id.'bg',
    'type'       => 'file'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Hero Background Image - Desktop', 'cmb2'),
    'id'         => $mb_id.'bg_md',
    'type'       => 'file'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading', 'cmb2'),
    'id'         => $mb_id . 'heading',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Description', 'cmb2'),
    'id'         => $mb_id . 'desc',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
     'tinymce' => $template_tinymce_setting
    )
  ));
  $cmb_mb->add_field(array(
    'name'       => __('CTA Button Text', 'cmb2'),
    'id'         => $mb_id . 'cta_text',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('CTA Button Link', 'cmb2'),
    'id'         => $mb_id . 'cta_link',
    'type'       => 'text'
  ));


  $mb_id = $page_prefix.'how_it_works_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('How it works', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading', 'cmb2'),
    'id'         => $mb_id . 'heading',
    'type'       => 'text'
  ));
  for($_i=1; $_i<=3; $_i++) {
    $cmb_mb->add_field(array(
      'name'       => __('Step '.$_i.' Title', 'cmb2'),
      'id'         => $mb_id . 'step'.$_i.'_title',
      'type'       => 'text'
    ));
    $cmb_mb->add_field(array(
      'name'       => __('Step '.$_i.' Description', 'cmb2'),
      'id'         => $mb_id . 'step'.$_i.'_desc',
      'type'       => 'textarea'
    ));
    $cmb_mb->add_field(array(
      'name'       => __('Step '.$_i.' Icon', 'cmb2'),
      'id'         => $mb_id.'step'.$_i.'_icon',
      'type'       => 'file'
    ));
  }
  $cmb_mb->add_field(array(
    'name'       => __('CTA Button Text', 'cmb2'),
    'id'         => $mb_id . 'cta_text',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('CTA Button Link', 'cmb2'),
    'id'         => $mb_id . 'cta_link',
    'type'       => 'text'
  ));

  $mb_id = $page_prefix.'reasons_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Reasons To Choose Us', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Description', 'cmb2'),
    'id'         => $mb_id . 'desc',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
     'tinymce' => $template_tinymce_setting
    )
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Reasons Title', 'cmb2'),
    'id'         => $mb_id . 'reasons_title',
    'type'       => 'text'
  ));
  for($_i=1; $_i<=4; $_i++) {
    $cmb_mb->add_field(array(
      'name'       => __('Reason '.$_i.' Text', 'cmb2'),
      'id'         => $mb_id . 'step'.$_i.'_title',
      'type'       => 'text'
    ));
    $cmb_mb->add_field(array(
      'name'       => __('Reason '.$_i.' Icon', 'cmb2'),
      'id'         => $mb_id.'step'.$_i.'_icon',
      'type'       => 'file'
    ));
  }


  /* ---------------------------
    ABOUT US TEMPLATE METABOXES
  ------------------------------*/
  $template_name = 'templates/template-about-us.php';
  $page_prefix = '_about_us_';

  $mb_id = $page_prefix.'intro_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Intro', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Intro Text', 'cmb2'),
    'id'         => $mb_id . 'intro_text',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
     'tinymce' => $template_tinymce_setting
    )
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Steps Title', 'cmb2'),
    'id'         => $mb_id.'steps_title',
    'type'       => 'text'
  ));
  for($_i=1; $_i<=4; $_i++) {
    $cmb_mb->add_field(array(
      'name'       => __('Step '.$_i.' Title', 'cmb2'),
      'id'         => $mb_id . 'step'.$_i.'_title',
      'type'       => 'text'
    ));
    $cmb_mb->add_field(array(
      'name'       => __('Step '.$_i.' Description', 'cmb2'),
      'id'         => $mb_id . 'step'.$_i.'_desc',
      'type'       => 'textarea'
    ));
    $cmb_mb->add_field(array(
      'name'       => __('Step '.$_i.' Icon', 'cmb2'),
      'id'         => $mb_id . 'step'.$_i.'_icon',
      'type'       => 'file'
    ));
  }
  $cmb_mb->add_field(array(
    'name'       => __('Background Image', 'cmb2'),
    'id'         => $mb_id.'bg',
    'type'       => 'file'
  ));


  $mb_id = $page_prefix.'our_mission_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Our Mission', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Intro Text', 'cmb2'),
    'id'         => $mb_id . 'intro_text',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
     'tinymce' => $template_tinymce_setting
    )
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Content', 'cmb2'),
    'id'         => $mb_id . 'content',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
     'tinymce' => $template_tinymce_setting
    )
  ));

  $mb_id = $page_prefix.'clinical_team_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Clinical Team', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_group = $cmb_mb->add_field(array(
    'name'       => __('Team Members', 'cmb2'),
    'id'         => $mb_id . 'members',
    'type'       => 'group',
    'options'     => array(
      'group_title'   => __( 'Member {#}', 'cmb2' ),
      'add_button'    => __( 'Add another member', 'cmb2' ),
      'remove_button' => __( 'Remove member', 'cmb2' ),
      'sortable'      => true,
      'closed'     => true
    ),
  ));
  $cmb_mb->add_group_field($cmb_group, array(
    'name'       => __('Name', 'cmb2'),
    'id'         => 'name',
    'type'       => 'text'
  ));
  $cmb_mb->add_group_field($cmb_group, array(
    'name'       => __('Designation', 'cmb2'),
    'id'         => 'post',
    'type'       => 'text',
    'desc' =>  __('Leave empty, if not needed', 'cmb2')
  ));
  $cmb_mb->add_group_field($cmb_group, array(
    'name'       => __('Photo', 'cmb2'),
    'id'         => 'photo',
    'preview_size' => array(250, 250),
    'type'       => 'file'
  ));
  $cmb_mb->add_group_field($cmb_group, array(
    'name'       => __('Description', 'cmb2'),
    'id'         => 'desc',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
     'tinymce' => $template_tinymce_setting
    )
  ));

  $mb_id = $page_prefix.'advisors_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Advisors', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_group = $cmb_mb->add_field(array(
    'name'       => __('Advisors', 'cmb2'),
    'id'         => $mb_id . 'advisors',
    'type'       => 'group',
    'options'     => array(
      'group_title'   => __( 'Advisor {#}', 'cmb2' ),
      'add_button'    => __( 'Add another advisor', 'cmb2' ),
      'remove_button' => __( 'Remove advisor', 'cmb2' ),
      'sortable'      => true,
      'closed'     => true
    ),
  ));
  $cmb_mb->add_group_field($cmb_group, array(
    'name'       => __('Name', 'cmb2'),
    'id'         => 'name',
    'type'       => 'text'
  ));
  $cmb_mb->add_group_field($cmb_group, array(
    'name'       => __('Designation', 'cmb2'),
    'id'         => 'post',
    'type'       => 'text',
    'desc' =>  __('Leave empty, if not needed', 'cmb2')
  ));
  $cmb_mb->add_group_field($cmb_group, array(
    'name'       => __('Photo', 'cmb2'),
    'id'         => 'photo',
    'preview_size' => array(250, 250),
    'type'       => 'file'
  ));
  $cmb_mb->add_group_field($cmb_group, array(
    'name'       => __('Description', 'cmb2'),
    'id'         => 'desc',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));


  /* ---------------------------
    FAQs TEMPLATE METABOXES
  ------------------------------*/
  $template_name = 'templates/template-faq.php';
  $page_prefix = '_faq_';

  $mb_id = $page_prefix.'intro_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Intro', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Background Image', 'cmb2'),
    'id'         => $mb_id . 'bg',
    'type'       => 'file',
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Intro Text', 'cmb2'),
    'id'         => $mb_id . 'intro_text',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));
  
  $mb_id = $page_prefix.'patients_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Faqs Patients', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Content', 'cmb2'),
    'id'         => $mb_id . 'content',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));

  $mb_id = $page_prefix.'doctors_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Faqs Doctors', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Content', 'cmb2'),
    'id'         => $mb_id . 'content',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));

  /* -------------------------------
    HOW IT WORKS TEMPLATE METABOXES
  -----------------------------------*/

  $template_name = 'templates/template-how-it-works.php';
  $page_prefix = '_how_it_works_';

  $mb_id = $page_prefix.'intro_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Intro', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Intro Title', 'cmb2'),
    'id'         => $mb_id . 'intro_title',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Intro Content', 'cmb2'),
    'id'         => $mb_id . 'intro_text',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));

  $mb_id = $page_prefix.'steps_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('How it works: Steps', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  for($_i=1; $_i<=3; $_i++) {
    $cmb_mb->add_field(array(
      'name'       => __('Step '.$_i.' Title', 'cmb2'),
      'id'         => $mb_id . 'step'.$_i.'_title',
      'type'       => 'text'
    ));
    $cmb_mb->add_field(array(
      'name'       => __('Step '.$_i.' Description', 'cmb2'),
      'id'         => $mb_id . 'step'.$_i.'_desc',
      'type'       => 'wysiwyg',
      'options' => array(
        'wpautop' => false,
        'tinymce' => $template_tinymce_setting
      )
    ));
  }

  $mb_id = $page_prefix.'boxes_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('How it works: Boxes', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  for($_i=1; $_i<=3; $_i++) {
    $cmb_mb->add_field(array(
      'name'       => __('Box '.$_i.' Title', 'cmb2'),
      'id'         => $mb_id . 'box'.$_i.'_title',
      'type'       => 'text'
    ));
    $cmb_mb->add_field(array(
      'name'       => __('Box '.$_i.' Description', 'cmb2'),
      'id'         => $mb_id . 'box'.$_i.'_desc',
      'type'       => 'wysiwyg',
      'options' => array(
        'wpautop' => false,
        'tinymce' => $template_tinymce_setting
      )
    ));
  }
  $cmb_mb->add_field(array(
    'name'       => __('CTA Button Text', 'cmb2'),
    'id'         => $mb_id.'cta_text',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('CTA Button Link', 'cmb2'),
    'id'         => $mb_id.'cta_link',
    'type'       => 'text'
  ));

  /* -------------------------------
   EMPLOYERS TEMPLATE METABOXES
  -----------------------------------*/

  $template_name = 'templates/template-employers.php';
  $page_prefix = '_employers_';

  $mb_id = $page_prefix.'intro_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Intro', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Content', 'cmb2'),
    'id'         => $mb_id.'content',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Benefits', 'cmb2'),
    'id'         => $mb_id.'benefits',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));

  $mb_id = $page_prefix.'services_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Services', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  for($_i=1; $_i<=5; $_i++) {
    $cmb_mb->add_field(array(
      'name'       => __('Service '.$_i.' Icon', 'cmb2'),
      'id'         => $mb_id . 'service'.$_i.'_icon',
      'type'       => 'file'
    ));
    $cmb_mb->add_field(array(
      'name'       => __('Service '.$_i.' Title', 'cmb2'),
      'id'         => $mb_id . 'service'.$_i.'_title',
      'type'       => 'text'
    ));
    $cmb_mb->add_field(array(
      'name'       => __('Service '.$_i.' Description', 'cmb2'),
      'id'         => $mb_id . 'service'.$_i.'_desc',
      'type'       => 'wysiwyg',
      'options' => array(
        'wpautop' => false,
        'tinymce' => $template_tinymce_setting
      )
    ));
  }

  $mb_id = $page_prefix.'join_team_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Join Our Team', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Content', 'cmb2'),
    'id'         => $mb_id.'content',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));

  /* -------------------------------
   DOCTORS TEMPLATE METABOXES
  -----------------------------------*/

  $template_name = 'templates/template-doctors.php';
  $page_prefix = '_doctors_';

  $mb_id = $page_prefix.'intro_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Intro', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Background Image', 'cmb2'),
    'id'         => $mb_id . 'bg',
    'type'       => 'file'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Content', 'cmb2'),
    'id'         => $mb_id.'content',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));


  $mb_id = $page_prefix.'benefits_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Benefits', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Intro', 'cmb2'),
    'id'         => $mb_id . 'intro',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Points', 'cmb2'),
    'id'         => $mb_id . 'points',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Box', 'cmb2'),
    'id'         => $mb_id . 'box',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));

  $mb_id = $page_prefix.'join_team_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Join Our Team', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Content', 'cmb2'),
    'id'         => $mb_id.'content',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));


  $mb_id = $page_prefix.'faqs_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Faqs Doctors', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Content', 'cmb2'),
    'id'         => $mb_id . 'content',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));


  /* -------------------------------
   PHARMACIES TEMPLATE METABOXES
  -----------------------------------*/

  $template_name = 'templates/template-pharmacies.php';
  $page_prefix = '_pharmacies_';

  $mb_id = $page_prefix.'intro_';
  $cmb_mb = new_cmb2_box(array(
    'id'            => $mb_id,
    'title'         => __('Intro', 'cmb2'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => $template_name),
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Icon', 'cmb2'),
    'id'         => $mb_id . 'icon',
    'type'       => 'file'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Big', 'cmb2'),
    'id'         => $mb_id . 'heading_lg',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Heading Small', 'cmb2'),
    'id'         => $mb_id . 'heading_sm',
    'type'       => 'text'
  ));
  $cmb_mb->add_field(array(
    'name'       => __('Content', 'cmb2'),
    'id'         => $mb_id.'content',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false,
      'tinymce' => $template_tinymce_setting
    )
  ));



}
add_action('cmb2_init', 'vd_register_template_mb');

function vd_js_add_custom_css_for_metabox() {
  ?>
  <style type="text/css" media="screen">
    .cmb2-wrap textarea {
      width: 99%;
    }
  </style>
  <?php
}
add_action('admin_head', 'vd_js_add_custom_css_for_metabox', 10, 2 );
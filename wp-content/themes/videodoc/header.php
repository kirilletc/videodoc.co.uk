<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

  <?php wp_head(); ?>
  
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
  
  
  	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/favicons/manifest.json">
	<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
  
	<meta name="apple-itunes-app" content="app-id=1025127392">
	
	<script type="application/ld+json">
    { "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "VideoDoc Ltd.",
    "url" : "http://www.videodoc.co.uk/",
    "sameAs" : [ "https://www.facebook.com/VideoDoc-1431424233777343/timeline/", "https://twitter.com/VideoDocEU", "https://www.linkedin.com/company/videodoc"] 
    }
    </script>
  
</head>

<body <?php body_class(); ?>>
  
  <!--[if lt IE 9]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'ix'); ?>
    </div>
  <![endif]-->


  <span itemscope itemtype="http://schema.org/LocalBusiness">
  <header id="home" class="header homemove">
    
    <!-- TOP BAR -->
    <div id="main-nav" class="navbar navbar-inverse bs-docs-nav fixed" role="banner">
      <div class="container">
        <div class="navbar-header responsive-logo">
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
          <a href="<?php echo esc_url(home_url( '/')); ?>" rel="home" class="navbar-brand">
            <img  itemprop="image" src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" title="<?php get_bloginfo('name'); ?>" alt="<?php get_bloginfo('name'); ?>" />
          </a>
		<div itemprop="telephone" class="phone"><a href="tel: 0203 744 4226" style="color: white"><!--<i class="fa fa-mobile fa-lg">&nbsp;</i>-->0203 744 4226</a></div>
		
		
		
        </div>
	
		<!--<div class="menu_top"><?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?></div>-->
		
        <?php $theme_mods = get_theme_mods(); ?>
	
        <div class="social hidden-xs">
          <a class="fa fa-linkedin-square" href="<?php echo $theme_mods['ln_link']; ?>" target="blank"></a>
          <a class="fa fa-twitter-square" href="<?php echo $theme_mods['twitter_link']; ?>"  target="blank"></a>
          <a class="fa fa-facebook-square" href="<?php echo $theme_mods['fb_link']; ?>"  target="blank"></a>
          <br>
          <a href="https://evideodoc.co.uk " onclick="ga('send', 'event', 'Link-click', 'see-a-doctor-clicked');">
            <span class="social-text orange-text">See a doctor</span>
          </a>
        </div>
      </div>
      <div class="container extra-margin">
	 
        <nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation">
		<!--<?php
       echo do_shortcode( '[breadcrumb]' ); 
        ?>-->
          <?php 
            if(has_nav_menu('primary')) {
              wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list', 'container' => false));
            }
            else {
              echo '<ul class="nav navbar-nav navbar-right responsive-nav main-nav-list"><li class="menu-item"><a href="' . home_url( '/' ) . 'wp-admin/nav-menus.php">Assign a menu</a></li></ul>';
            }
          ?>
        </nav>
      </div>
    </div>
    <!-- / END TOP BAR -->
  </header>

  <div id="wrapper" role="document">
      <div id="content" class="">
        <?php if(!is_front_page()): ?>
          <?php get_template_part('templates/page', 'header'); ?>
        <?php endif; ?>
        <main id="main" class="<?php echo vd_main_class();?>" role="main">
<?php
  // Add support for built-in WordPress functions for this theme
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  // Select post formats for this site -- this is all, but can pick just a few
  add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
  // enable HTML 5 features
  add_theme_support( 'html5' );
  // Generate RSS links automatically
  add_theme_support( 'automatic-feed-links ');
  // Ability for user to customize parts of the theme
  add_theme_support( 'custom-background' );
  add_theme_support( 'custom-header' );
  add_theme_support( 'custom-logo' );
  // Auto-refresh upon customization
  add_theme_support( 'customize-selective-refresh-widgets' );
  // Starter content to view site theme without actual content added
  add_theme_support( 'starter-content' );

  // Load in CSS
  // Preface all of our functions with namespace of theme to make sure we don't
  // overwrite somebody else's generically-named functions
  function askmslord_enqueue_styles() {
    // To load stylesheet:
    // wp_enqueu_style( 'stylesheet name', 'stylesheet url' (build with php!),
    // ['dependencies'], 'version', 'media for which to use sheet' );
    // time() trick for version num tricks WP into reloading stylesheet on every
    // refresh -- good for development, bad for production -- set to a version
    // before publishing!
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
  }
  // Now we tell wordpress to use our funciton to load the styles!
  add_action( 'wp_enqueue_scripts', 'askmslord_enqueue_styles' );
?>

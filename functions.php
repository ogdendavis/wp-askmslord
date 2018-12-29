<?php
  // Add support for built-in WordPress functions for this theme
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  // Select post formats for this site -- this is all, but can pick just a few
  add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
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

  // Set up menus
  register_nav_menus([
    'main-menu' => esc_html__( 'Main Menu', 'askmslord' ),
    ]);

  // Set up sidebar
  function askmslord_widgets_init() {
    // Use this function to set up any type of widget area! The main one will
    // be the main sidebar, but it's easy to add others by registering another
    // sidebar here.
    register_sidebar([
      'name'            => esc_html__( 'Main Sidebar', 'askmslord' ),
      'id'              => 'main-sidebar',
      'description'     => esc_html__( 'Add widgets for main sidebar here', 'askmslord' ),
      'before_widget'   => '<section class = "widget">',
      'after_widget'    => '</section>',
      'before_title'    => '<h2 class = "widget-title">',
      'after_title'     => '</h2>'
    ]);
    register_sidebar([
      'name'            => esc_html__( 'Page Sidebar', 'askmslord' ),
      'id'              => 'page-sidebar',
      'description'     => esc_html__( 'Add widgets for page sidebar here', 'askmslord' ),
      'before_widget'   => '<section class = "widget %2$s">',
      'after_widget'    => '</section>',
      'before_title'    => '<h2 class = "widget-title">',
      'after_title'     => '</h2>'
    ]);
  }
  // Now hook into WP's process so it will display the sidebar
  add_action( 'widgets_init', 'askmslord_widgets_init' );
?>

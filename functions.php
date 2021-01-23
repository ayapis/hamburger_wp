<?php
    //テーマサポート
    add_theme_support( 'title-tag' );
    function hamburger_title( $title ) {
      $title = get_bloginfo( 'name', 'display' );
      return $title;
    }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    function hamburger_script() {
      wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
      wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
      wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
      wp_enqueue_script( 'smart-script', get_template_directory_uri() . '/hamburger.js', array( 'jquery' ), '1.0.0');
      wp_enqueue_style( 'google-webfont-style', '//fonts.googleapis.com/css?family=Lato:wght@400;700&' );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );
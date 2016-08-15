<?php

namespace MDL;

class Public_Hooks {

  public function wp_head() {
    $wp_head = "\n";
    $wp_head .= "<meta http-equiv='X-UA-Compatible' content='IE=edge'>\n";
    $wp_head .= "<meta charset='" . get_bloginfo( 'charset' ) . "'>\n";
    $wp_head .= "<meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0'>\n";
    $wp_head .= "\n";
    echo $wp_head;
  }

  public function wp_enqueue_scripts() {
    wp_enqueue_style( 'google-font-roboto', '//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i' );
    wp_enqueue_script( 'mdl', get_template_directory_uri() . '/public/js/material.min.js', array(), '1.2.0', true );
    //wp_enqueue_script( 'mdl', '//code.getmdl.io/1.2.0/material.min.js', array(), '1.2.0', true );
  }

  public function after_setup_theme() {
    // Add theme support for Post Formats
    add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

    // Add theme support for Featured Images
    add_theme_support( 'post-thumbnails' );

    // Add theme support for HTML5 Semantic Markup
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // Add theme support for document Title tag
    add_theme_support( 'title-tag' );

    // Add theme support for Translation
    load_theme_textdomain( 'mdl', get_template_directory() . '/language' );
  }

}

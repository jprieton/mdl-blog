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
    wp_register_script( 'mdl', '//code.getmdl.io/1.2.0/material.min.js', array(), '1.2.0', true );
    wp_enqueue_script( 'mdl' );
  }

}

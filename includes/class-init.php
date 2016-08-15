<?php

namespace MDL;

class Init {

  public function __construct() {
    $this->load_dependencies();
  }

  private function load_dependencies() {
    require_once MDL_PATH . '/public/class-public-hooks.php';
  }

  public function public_hooks() {
    $public = new Public_Hooks();
    add_action( 'wp_head', array( $public, 'wp_head' ), 0 );
    add_action( 'wp_enqueue_scripts', array( $public, 'wp_enqueue_scripts' ) );
    add_action( 'after_setup_theme', array( $public, 'after_setup_theme' ) );
  }

  public function run() {
    $this->public_hooks();
  }

}

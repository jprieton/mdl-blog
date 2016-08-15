<?php

if ( !defined( 'MDL_PATH' ) ) {
  define( 'MDL_PATH', get_stylesheet_directory() );
}

require_once MDL_PATH . '/includes/class-init.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mdl() {
  $plugin = new MDL\Init();
  $plugin->run();
}

run_mdl();

<?php

/** Copy local-config-sample.php, update and save as local-config.php */
include('local-config.php');


/** Custom Content Directory */
define('WP_CONTENT_DIR', dirname(__FILE__) . "/wp-content/");
define( 'WP_CONTENT_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . '/wp-content/' );

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

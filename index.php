<?php

/** 
 * HTTP USERNAME AND  PASSWORD AUTHENTICATION
 *
 * Uncomment lines 12-21 to  use
 * 
 * Make sure to pick a real USERNAME and PASSWORD!
 *
 */

// if ( !isset($_SERVER['PHP_AUTH_USER']) ) {
//	header('WWW-Authenticate: Basic realm="You Shall Not Pass"');
//	header('HTTP/1.0 401 Unauthorized');
//	exit;
//}
//else {
//	if ( $_SERVER['PHP_AUTH_USER'] != 'USERNAME' || $_SERVER['PHP_AUTH_PW'] != 'PASSWORD' ) {
//		echo "Wrong password!";
//	}	
//}

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */

/** CHANGE 'wp-directory' to your directory name! **/
require('./wp-directory/wp-blog-header.php');

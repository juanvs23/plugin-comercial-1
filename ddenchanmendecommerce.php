<?php 
/*
Plugin Name: ddenchanmendecommerce
Plugin URI: https://github.com/juanvs23/plugin-comercial-1
Description: Plugin de ratreo ecommerce con google tamanager
Version: 1.0.0.1
Author: Juan Carlos Avila
Author URI: http://disenaydesarrollame.com
Text Domain: dde
Generated By: http://ensuredomains.com
*/

// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if

// Let's Initialize Everything
if ( file_exists( plugin_dir_path( __FILE__ ) . 'core-init.php' ) ) {
require_once( plugin_dir_path( __FILE__ ) . 'core-init.php' );
}
<?php 
/*
*
*	***** ddenchanmendecommerce *****
*
*	This file initializes all DDE Core components
*	
*/
// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if
// Define Our Constants
define('DDE_CORE_INC',dirname( __FILE__ ).'/assets/inc/');
define('DDE_CORE_IMG',plugins_url( 'assets/img/', __FILE__ ));
define('DDE_CORE_CSS',plugins_url( 'assets/css/', __FILE__ ));
define('DDE_CORE_JS',plugins_url( 'assets/js/', __FILE__ ));
/*
*
*  Register CSS
*
*/
function dde_register_core_css(){
wp_enqueue_style('dde-core', DDE_CORE_CSS . 'dde-core.css',null,time('s'),'all');
};
add_action( 'wp_enqueue_scripts', 'dde_register_core_css' );    
/*
*
*  Register JS/Jquery Ready
*
*/
function dde_register_core_js(){
// Register Core Plugin JS	
wp_enqueue_script('dde-core', DDE_CORE_JS . 'dde-core.js','jquery',time(),true);
};
add_action( 'wp_enqueue_scripts', 'dde_register_core_js' );    
/*
*
*  Includes
*
*/ 
// Load the Functions
if ( file_exists( DDE_CORE_INC . 'dde-core-functions.php' ) ) {
	require_once DDE_CORE_INC . 'dde-core-functions.php';
}     
// Load the ajax Request
if ( file_exists( DDE_CORE_INC . 'dde-ajax-request.php' ) ) {
	require_once DDE_CORE_INC . 'dde-ajax-request.php';
} 
// Load the Shortcodes
if ( file_exists( DDE_CORE_INC . 'dde-shortcodes.php' ) ) {
	require_once DDE_CORE_INC . 'dde-shortcodes.php';
}
<?php 

	/**
	 * @link         https://metinsarac.net/
	 * @since        1.0
	 * @package     CF7_Sweet_Alert_Popup
	 *
	 * @wordpress-plugin
	 *
	 * Plugin Name:  CF7 Sweet Alert Popup
	 * Plugin URI:   https://metinsarac.net/
	 * Description:  Wordpress Contact Form 7 Sweet Alert Popup
	 * Version:      1.0
	 * Author:       Metin Saraç
	 * License:      GPL-3.0+
	 * License URI:  http://www.gnu.org/licenses/gpl-3.0.txt
	 * Text Domain:  cf7simplepopup
	*/

// If this file is called directly, abort.

if ( ! defined( 'WPINC' ) ) {
	die;
}

// Define Our Constants

define('cf7simplepopup_CORE_CSS',plugins_url( 'assets/css/', __FILE__ ));
define('cf7simplepopup_CORE_JS',plugins_url( 'assets/js/', __FILE__ ));

// Register Css

function cf7simplepopup_register(){

	wp_enqueue_style('cf7simplepopup-css', cf7simplepopup_CORE_CSS . 'cf7simplepopup-core.css',null,time(),'all');
	wp_enqueue_script('cf7simplepopup-js',  cf7simplepopup_CORE_JS . 'cf7simplepopup-core.js',null,time(),'all');
	wp_enqueue_script('sweetalert',  cf7simplepopup_CORE_JS . 'sweetalert2.all.min.js',null,time(),'all');
}

add_action( 'wp_enqueue_scripts', 'cf7simplepopup_register' );
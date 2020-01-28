<?php
/**
 * Plugin Name: WAX Deactivate Admin email check interval
 * Plugin URI: https://www.webaxones.com
 * Description: Disables the administrator's email control, which is done every 6 months after logging in
 * Author: Webaxones
 * Author URI: https://www.webaxones.com
 * Version: 1.0
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // don't access directly.
endif;


// Return false everytime.
add_filter( 'admin_email_check_interval', '__return_false' );

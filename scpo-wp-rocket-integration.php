<?php
/**
 * Plugin Name: Integration of Simple Custom Post Order and WP Rocket 
 * Plugin URI: https://github.com/gianlucagaspari/scpo-wp-rocket-integration
 * Description: Automatically cleans the WP Rocket cache when the posts order is changed
 * Version: 1.0.2
 * Author: Five Studio
 * Author URI: https://www.fivestudio.it
 * Tested up to: 5.8
 * Requires: Simple Custom Post Order and WP Rocket plugins
 * License: GPLv3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Requires PHP: 5.6
 */
add_action( 'scp_update_menu_order', 'scpowpri_update_menu_order' );
function scpowpri_update_menu_order() {
	if ( is_plugin_active( 'wp-rocket/wp-rocket.php' ) ) {
		rocket_clean_domain();
	}
}
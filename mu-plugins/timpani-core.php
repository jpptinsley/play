<?php
/*
Plugin Name: Timpani Functions
Plugin URI: http://timpani.co.uk/
Description: Applies various overrides for Timpani functionality.
Version: 1
*/

function timpani_hide_core_update_notice() {
	remove_action( 'admin_notices', 'update_nag', 3);
}

add_action ( 'admin_head', 'timpani_hide_core_update_notice', 1 );

?>

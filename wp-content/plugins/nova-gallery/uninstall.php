<?php
// Uninstall script for Nova Gallery

// If uninstall not called from WordPress exit
if( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit ();
}
        
// Delete option from options table
delete_option( 'novagallery_options' );
delete_option( 'novagallery_ids' );
delete_option( 'novagallery_default' );
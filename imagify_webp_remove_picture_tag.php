<?php
/**
Plugin Name: Imagify webp remove picture tag
Plugin URI:  http://link to your plugin homepage
Description: Describe what your plugin is all about in a few short sentences
Version:     1.0
Author:      Avnish Negi
Author URI:  http://link to your website
License:     GPL2 etc
License URI: http://link to your plugin license
*/   

// Get active plugins
$active_plugins = get_option('active_plugins');

//find imagify plugin if active
if(in_array("imagify/imagify.php", $active_plugins)){
				
				// Add filter to disable picture tag if webp allow picture tag
				add_filter( 'imagify_allow_picture_tags_for_webp', $plugin_admin, 'imagify_picture_tag_desable' );
				
				function imagify_picture_tag_desable(  ) {		return false;	}



}
?>

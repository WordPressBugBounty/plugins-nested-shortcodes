<?php  
/* 
Plugin Name: Nested Shortcodes by Outerbridge
Plugin URI: https://outerbridge.co.uk/
Description: A small plugin which allows you to use nested shortcodes (i.e. a shortcode within an enclosing shortcode) by implementing a simple "do_shortcode" filter as per the WordPress Codex to content and widgets - see <a href="https://codex.wordpress.org/Shortcode_API#Nested_Shortcodes" target="_blank">Shortcode_API</a> and <a href="https://developer.wordpress.org/reference/functions/do_shortcode/" target="_blank">do_shortcode</a>
Author: Outerbridge
Version: 1.4
Author URI: https://outerbridge.co.uk/
License: GPL v2
*/

/**
 *
 * v1.4 220901 Tested and stable up to WP6.0
 *
 * v1.3 140829 Tested and stable up to WP4.0
 * v1.2 140430 Tested and stable up to WP3.9
 * v1.1 131212 Tested and stable up to WP3.8 and updated author name
 * v1.0 120103 Tested and stable up to WP3.3
 * v0.1 110830 Initial release
 *
 */

/** use FILTERPRIORITY to change where this operates.
 *  BE CAREFUL though as you may break WordPress by setting this
 *  to run too soon
 *
 *  10 is the default
 *  lower than 10 runs earlier and greater than 10 is later
 */
    
define( 'FILTERPRIORITY', 10 );
add_filter( 'the_content', 'do_shortcode', FILTERPRIORITY );
add_filter( 'widget_text', 'do_shortcode', FILTERPRIORITY );

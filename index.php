<?php
/**
 * Plugin Name: Hide/Unhide Menu for Guest/Member
 * Plugin URI: http://www.kakinetwork.com
 * Description: Hide/Unhide Menu for Guest/Member is a simple plugin that you can easily manage to hide or unhide menu for guest and member via css.
 * Version: 1.0.2
 * Author: Freddie Aziz Jasbindar
 * Author URI: http://www.facebook.com/FreddieAziz
 */
add_action( 'wp_enqueue_scripts', 'menu_style' );
function menu_style() {
	wp_register_style( 'hide_unhide', plugins_url( 'style.css', __FILE__ ));
	wp_enqueue_style( 'hide_unhide' );
}
add_filter('body_class','not_logged_in_class');
function not_logged_in_class($classes = '')
{
    if ( !is_user_logged_in() ) {
        $classes[] = 'not-logged-in';
    }
    return $classes;
}
?>
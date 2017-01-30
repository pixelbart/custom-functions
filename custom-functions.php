<?php
/*
Plugin Name: Custom Functions Plugin
Plugin URI: #
Description: Ein Plugin mit benutzerdefinierten Funktionen.
Version: 1.0
Author: Dein Name
Author URI: #
*/

// ==================================== //
//      Benutzerdefinierte Scripte      //
// ==================================== //

function load_my_custom_scripts_31012017()
{
    wp_enqueue_script( 'my_custom_js', plugins_url( 'custom.js', __FILE__ ), array('jquery') );
    wp_enqueue_style ( 'my_custom_css',    plugins_url( 'custom.css',    __FILE__ ), false );
}
add_action('wp_enqueue_scripts', 'load_my_custom_scripts_31012017');

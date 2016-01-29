<?php
/**
 * Plugin Name: Social Links
 * Description: Adds a social icons with links to profiles
 * Version: 1.0
 * Author: Zoran Mihelcic
 * 
 **/
 //Exit if Accessed Diretctliy
 if(!defined('ABSPATH')){
     exit;
 }
 
 //Load Scripts
 require_once(plugin_dir_path(__FILE__). '/includes/social-links-scripts.php');
 //Load class
 require_once(plugin_dir_path(__FILE__). '/includes/social-links-class.php');
 
 //Register widget
 
function register_social_links(){
    register_widget('Social_Links_Widget');
}
add_action('widgets_init', 'register_social_links');

 
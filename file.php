<?php
/**
 * Plugin Name: Sample file
 * Plugin URI: https://me.com
 * Description: Truly omni-channel.
 * Author: Solutions
 * Author URI: http://me.co
 * Version: 2.0.0
 * Requires at least: 4.9.0
 * Tested up to: 5.2.0
 *
 */
 if(!defined('ABSPATH'))
  exit();
 function example_enqueue_style() {
    wp_enqueue_style( 'yourcssfile', 'yourcssfile.css', false );
}
add_action( 'wp_enqueue_scripts', 'example_enqueue_style' );

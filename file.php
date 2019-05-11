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
 /** on activation */
 function activate_language(){
     update_option('wplang','en_GB');
 }
 register_activation_hook(__FILE__,'activate_language');
 /** on deactivation */
 function deactivate_language(){
     update_option('wplang','it_IT');
 }hemai
 register_deactivation_hook(__FILE__,'deactivate_language');
 register_uninstall_hook(__FILE__,'deactivate_language');

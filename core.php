<?php
/*
Plugin Name: scroll to top
Plugin URI: wferwe
Description: structure of plugin
Version: 1.0.0
Author: moham madhossein aalipor
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later

*/
defined('ABSPATH') || exit;
define('stt_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('stt_PLUGIN_URL', plugin_dir_url(__FILE__));
function stt_register_assets()
{
    //css
    wp_enqueue_style('stt-style', stt_PLUGIN_URL . 'assets/css/style.css');
    //js
    wp_enqueue_script('stt-main', stt_PLUGIN_URL . 'assets/js/main.js', ['jquery'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'stt_register_assets');
include_once stt_PLUGIN_DIR . 'view/front/scroll-to-top.php';

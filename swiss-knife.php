<?php

/*
Plugin Name: Swiss Knife
Description: Provides Paste functionality from Swiss Knife Pro clipboard
Author: DPlugins
Author URI: https://dplugins.com/
Text Domain: swk
Version: 1.3.6
License: GNU General Public License v2.0 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

defined('ABSPATH') or die('Move Along, Nothing to See Here');

function swk_free___before_builder_buttons(){
    require_once(plugin_dir_path(__FILE__) . 'features/clipboard.php');
}

add_action('ct_before_builder', 'swk_free___before_builder_buttons');

function swk_free__builder_scripts_and_styles(){
    wp_enqueue_script('swk_paste_js', plugin_dir_url(__FILE__) . 'features/clipboard.min.js', '', '4.0.0', true);
    wp_enqueue_script('swk_paste_panel_js', plugin_dir_url(__FILE__) . 'features/clipboard-panel.min.js', '', '4.0.0', true);
}

function swk_load_free(){
    // Load only if Oxygen Builder is running
    if (isset ($_GET['ct_builder']) && 'true' === $_GET['ct_builder']) {
        add_action('ct_before_builder', 'swk_free__builder_scripts_and_styles');
    }
}
add_action( 'init', 'swk_load_free' );

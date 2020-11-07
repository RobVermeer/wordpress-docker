<?php

add_filter('show_admin_bar', '__return_false');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'rest_output_link_wp_head', 10);

remove_action('wp_head', 'wp_resource_hints', 2);

function remove_unwanted_styles(){
  wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'remove_unwanted_styles', 100);

function remove_unwanted_scripts(){
  wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'remove_unwanted_scripts');

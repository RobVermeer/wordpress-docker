<?php

function theme_styles() {
  wp_enqueue_style('theme-style', get_bloginfo('stylesheet_directory') . '/style.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');

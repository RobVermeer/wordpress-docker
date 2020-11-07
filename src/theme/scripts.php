<?php

function theme_scrips() {
  wp_enqueue_script('theme-script', get_bloginfo('stylesheet_directory') . '/app.js', false, null, true);
}

add_action('wp_enqueue_scripts', 'theme_scrips');

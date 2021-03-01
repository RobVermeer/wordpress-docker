<?php

function theme_scrips() {
  wp_enqueue_script('theme-script', get_bloginfo('stylesheet_directory') . '/app.js', false, null, true);
  wp_localize_script('theme-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'theme_scrips');
